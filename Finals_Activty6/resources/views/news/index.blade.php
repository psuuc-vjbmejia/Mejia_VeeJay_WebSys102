<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Headlines</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #d4d4d4;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .category-header {
            color: #569cd6;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .columns {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .column {
            flex: 1;
            min-width: 0;
        }
        .article {
            margin-bottom: 20px;
            padding: 10px;
            border-left: 3px solid #569cd6;
        }
        .article-title a {
            color: #569cd6;
            font-size: 1.3rem;
            text-decoration: none;
        }
        .article-title a:hover {
            text-decoration: underline;
        }
        .article-info {
            color: #d4d4d4;
            font-size: 1rem;
            line-height: 1.5;
        }
        .article-info span {
            color: #ce9178;
        }
        .error-message {
            color: #ff5555;
            text-align: center;
            font-size: 1.2rem;
        }
        @media (max-width: 768px) {
            .columns {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @if (isset($error))
            <p class="error-message">{{ $error }}</p>
        @else
            <h1 class="category-header">{{ ucfirst($category) }} News</h1>
            <div class="columns">
                <div class="column">
                    @foreach($articles as $index => $article)
                        @if ($index % 2 == 0)
                            <div class="article">
                                <div class="article-title">
                                    <a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }}</a>
                                </div>
                                <div class="article-info">
                                    description: <span>{{ $article['description'] ?? 'No description available' }}</span><br>
                                    publishedAt: <span>{{ $article['publishedAt'] }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="column">
                    @foreach($articles as $index => $article)
                        @if ($index % 2 == 1)
                            <div class="article">
                                <div class="article-title">
                                    <a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }}</a>
                                </div>
                                <div class="article-info">
                                    description: <span>{{ $article['description'] ?? 'No description available' }}</span><br>
                                    publishedAt: <span>{{ $article['publishedAt'] }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</body>
</html>
