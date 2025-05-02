<!DOCTYPE html>
<html>
<head>
    <title>Laravel Photo Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Photo Gallery</h1>

        <!-- Single Image Upload -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Upload Single Photo</h2>
            <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <input type="file" name="image" accept="image/*" class="border rounded p-2 w-full" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Upload</button>
            </form>
        </div>

        <!-- Multiple Images Upload -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold mb-4">Upload Multiple Photos</h2>
            <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <input type="file" name="images[]" accept="image/*" multiple class="border rounded p-2 w-full" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Upload</button>
            </form>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Gallery -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Photo Gallery</h2>
            @if($photos->isEmpty())
                <p class="text-gray-500">No photos uploaded yet.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($photos as $photo)
                        <div class="relative">
                            <img src="{{ asset('images/' . $photo->image) }}" alt="Uploaded photo" class="w-full h-48 object-cover rounded">
                            <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" class="absolute top-2 right-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this photo?')">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    {{ $photos->links() }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>