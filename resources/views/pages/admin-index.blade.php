<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-gray-800 p-4 text-white">
        <div class="max-w-7xl mx-auto flex justify-between">
            <a href="#" class="font-bold">Admin Dashboard</a>
            <div>
                <a href="#" class="ml-4">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow p-6">
        <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
            <h2 class="text-2xl font-bold mb-4">Unseen Abstracts</h2>

            @if(session('success_message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success_message') }}</span>
                </div>
            @endif

            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm mb-6">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border-b p-4 text-left">Title</th>
                        <th class="border-b p-4 text-left">Submitted By</th>
                        <th class="border-b p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unseenAbstracts as $abstract)
                        <tr class="hover:bg-gray-100">
                            <td class="border-b p-4">{{ $abstract->title }}</td>
                            <td class="border-b p-4">{{ $abstract->name }}</td>
                            <td class="border-b p-4">
                                <a href="{{ route('admin.show', $abstract->id) }}" class="text-blue-500 hover:underline">View More Info</a>
                                <a href="{{ Storage::url($abstract->file_path) }}" download="{{ $abstract->title }}" class="ml-4 text-blue-500 hover:underline">Download</a>
                                <form action="{{ route('admin.markAsSeen', $abstract->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="ml-4 text-green-500 hover:underline">Mark as Seen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2 class="text-2xl font-bold mb-4">Seen Abstracts</h2>

            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border-b p-4 text-left">Title</th>
                        <th class="border-b p-4 text-left">Submitted By</th>
                        <th class="border-b p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seenAbstracts as $abstract)
                        <tr class="hover:bg-gray-100">
                            <td class="border-b p-4">{{ $abstract->title }}</td>
                            <td class="border-b p-4">{{ $abstract->name }}</td>
                           
                            <td class="border-b p-4">
                                <a href="{{ route('admin.show', $abstract->id) }}" class="text-blue-500 hover:underline">View More Info</a>
                                <a href="{{ Storage::url($abstract->file_path) }}" download="{{ $abstract->title }}" class="ml-4 text-blue-500 hover:underline">Download</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 p-4 text-white text-center">
        &copy; {{ date('Y') }} Your Company. All rights reserved.
    </footer>
</div>

</body>
</html>
