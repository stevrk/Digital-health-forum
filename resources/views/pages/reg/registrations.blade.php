<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles to handle the side menu toggle */
        .side-menu { transition: transform 0.3s ease; }
        .side-menu.closed { transform: translateX(-100%); }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex h-screen overflow-hidden">
    <!-- Side Menu -->
    <div id="side-menu" class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 side-menu">
        <!-- Branding -->
        <div class="text-3xl font-extrabold text-center">
            <a href="#" class="text-white">Admin Dashboard</a>
        </div>
        
        <!-- Nav -->
        <nav>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Subscriptions</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Registrations</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Abstracts</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Toggle Button -->
        <header class="bg-gray-800 p-4 text-white md:hidden flex justify-between items-center">
            <div class="font-bold">Admin Dashboard</div>
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </header>

        <main class="flex-grow p-6">
            <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
                <h2 class="text-2xl font-bold mb-4">Pending Registrations</h2>
                @if(session('success_message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success_message') }}</span>
                    </div>
                @endif
                <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border-b p-4 text-left">Name</th>
                            <th class="border-b p-4 text-left">Email</th>
                            <th class="border-b p-4 text-left">Phone</th>
                            <th class="border-b p-4 text-left">Organization</th>
                            <th class="border-b p-4 text-left">Status</th>
                            <th class="border-b p-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendingRegistrations as $registration)
                            <tr class="hover:bg-gray-100">
                                <td class="border-b p-4">{{ $registration->name }}</td>
                                <td class="border-b p-4">{{ $registration->email }}</td>
                                <td class="border-b p-4">{{ $registration->phone }}</td>
                                <td class="border-b p-4">{{ $registration->organization }}</td>
                                <td class="border-b p-4">{{ $registration->status }}</td>
                                <td class="border-b p-4">
                                    @if($registration->status == 'pending')
                                        <form action="{{ route('registrations.approve', $registration->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-green-500 hover:underline">Approve</button>
                                        </form>
                                    @else
                                        <span class="text-gray-500">Approved</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
                <h2 class="text-2xl font-bold mb-4">Approved Registrations</h2>
                <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border-b p-4 text-left">Name</th>
                            <th class="border-b p-4 text-left">Email</th>
                            <th class="border-b p-4 text-left">Phone</th>
                            <th class="border-b p-4 text-left">Organization</th>
                            <th class="border-b p-4 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($approvedRegistrations as $registration)
                            <tr class="hover:bg-gray-100">
                                <td class="border-b p-4">{{ $registration->name }}</td>
                                <td class="border-b p-4">{{ $registration->email }}</td>
                                <td class="border-b p-4">{{ $registration->phone }}</td>
                                <td class="border-b p-4">{{ $registration->organization }}</td>
                                <td class="border-b p-4">{{ $registration->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <footer class="bg-gray-800 p-4 text-white text-center">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </footer>
    </div>
</div>

<script>
    function toggleMenu() {
        const menu = document.getElementById('side-menu'); 
        menu.classList.toggle('closed');
    }

    document.getElementById('menu-toggle').addEventListener('click', toggleMenu);
</script>

</body>
</html>
