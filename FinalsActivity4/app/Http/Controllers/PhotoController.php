<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        $photos = Photo::latest()->paginate(12); // Paginate with 12 photos per page
        return view('upload', compact('photos'));
    }

    public function storeSingle(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $image = $request->file('image');
        $name = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images'), $name);

        Photo::create(['image' => $name]);

        return back()->with('success', 'Single image uploaded successfully!');
    }

    public function storeMultiple(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        foreach ($request->file('images') as $image) {
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $name);

            Photo::create(['image' => $name]);
        }

        return back()->with('success', 'Multiple images uploaded successfully!');
    }

    public function destroy(Photo $photo)
    {
        // Delete the image file from storage
        $imagePath = public_path('images/' . $photo->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the photo record from database
        $photo->delete();

        return back()->with('success', 'Photo deleted successfully!');
    }
}