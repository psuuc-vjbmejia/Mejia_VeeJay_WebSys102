<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    public function getNews(Request $request)
    {
        $category = $request->query('category', 'general');
        $apiKey = env('NEWS_API_KEY');

        if (!$apiKey) {
            Log::error('News API key not configured');
            return response()->json(['error' => 'News API key not configured'], 500);
        }

        $client = new Client();
        $url = "https://newsapi.org/v2/top-headlines?country=us&category={$category}&apiKey={$apiKey}";

        try {
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);

            if ($data['status'] !== 'ok') {
                throw new \Exception('Failed to retrieve news data');
            }

            $articles = array_map(function ($article) {
                return [
                    'title' => $article['title'],
                    'description' => $article['description'],
                    'url' => $article['url'],
                    'publishedAt' => $article['publishedAt']
                ];
            }, $data['articles']);

            return response()->json([
                'category' => $category,
                'articles' => $articles
            ]);
        } catch (RequestException $e) {
            $errorMessage = $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            Log::error("Failed to fetch news data for category {$category}: {$errorMessage}");
            return response()->json(['error' => 'Could not fetch news data'], 500);
        }
    }

    public function showNews(Request $request)
    {
        $category = $request->query('category', 'general');
        $apiKey = env('NEWS_API_KEY');

        if (!$apiKey) {
            Log::error('News API key not configured');
            return view('news.index', ['error' => 'News API key not configured']);
        }

        $client = new Client();
        $url = "https://newsapi.org/v2/top-headlines?country=us&category={$category}&apiKey={$apiKey}";

        try {
            $response = $client->get($url);
            $data = json_decode($response->getBody(), true);

            if ($data['status'] !== 'ok') {
                throw new \Exception('Failed to retrieve news data');
            }

            $articles = array_map(function ($article) {
                return [
                    'title' => $article['title'],
                    'description' => $article['description'],
                    'url' => $article['url'],
                    'publishedAt' => $article['publishedAt']
                ];
            }, $data['articles']);

            return view('news.index', [
                'category' => $category,
                'articles' => $articles
            ]);
        } catch (RequestException $e) {
            Log::error("Failed to fetch news data for category {$category}: " . $e->getMessage());
            return view('news.index', ['error' => 'Could not fetch news data']);
        }
    }
}