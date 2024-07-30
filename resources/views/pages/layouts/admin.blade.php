<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Abstract Details</h2>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Title:</h3>
            <p>{{ $abstract->title }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Submitted By:</h3>
            <p>{{ $abstract->name }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Email:</h3>
            <p>{{ $abstract->email }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Organization:</h3>
            <p>{{ $abstract->organization }}</p>
        </div>
        <div class="mb-4">
            <h3 class="text-xl font-semibold">path</h3>
            <p>{{ $abstract->file_path }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-semibold">Abstract File:</h3>
            <a href="{{ Storage::url('public/abstracts/'.$abstract->file_path) }}" download="{{ $abstract->title }}" class="text-blue-500 hover:underline">Download Abstract</a>
        </div>

        <a href="{{ route('admin.index') }}" class="text-blue-500 hover:underline">Back to List</a>
    </div>
</body>
</html>
