<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/react-icons@4.6.0/dist/react-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/heroicons@1.0.6/dist/heroicons.min.css" rel="stylesheet">






    <style>
     
    </style>
</head>
<body class="flex bg-gray-500">

    <!-- Sidebar -->
    <div id="sidebar" class="w-64 bg-gray-900 h-screen flex-shrink-0 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
        <div class="p-4">
            <!-- Logo -->
            <div class="mb-6 flex justify-center">
                <img src="{{asset('images/sponsor1.png')}} " alt="Logo" class="h-16"> <!-- Adjust 'path/to/your/logo.png' and 'h-16' as needed -->
            </div>
            
            <!-- Profile Icon and User Info -->
            <div class="flex items-center text-gray-300 mb-6">
                <i class="fas fa-user-circle text-3xl mr-2"></i> <!-- Font Awesome user-circle icon -->
                <span class="text-sm text-white">John Doe</span>
            </div>
            <div class="mt-auto">
                <a href="#" class="flex items-center p-2 rounded bg-red-700 text-white text-base md:text-lg lg:text-xl mb-20">
                    <i class="fas fa-sign-out-alt text-xl mr-3"></i>
                    <span>Logout</span>
                </a>
            </div>
    
            <!-- Navigation Links -->
            <div class="bg-gray-900 mb-10">
                <ul>
                    <li class="mb-2">
                        <a href="{{route('admin-dashboard')}}" class="flex items-center p-2 rounded bg-white text-sky-900 text-base md:text-lg lg:text-xl">
                            <i class="react-icons ti ti-home text-xl mr-3 text-sky-900"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{route('Subscriptions')}}" class="flex items-center p-2 rounded hover:bg-gray-700 text-white text-base md:text-lg lg:text-xl">
                            <i class="react-icons ti ti-calendar text-xl mr-3 text-white"></i>
                            <span>Subscriptions</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{route('registrations.admin')}}" class="flex items-center p-2 rounded hover:bg-gray-700 text-white text-base md:text-lg lg:text-xl">
                            <i class="ti ti-user-plus text-xl mr-3"></i> <!-- Tabler Icons user-add icon -->
                            <span>Registrations</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{route('admin.index1')}}" class="flex items-center p-2 rounded hover:bg-gray-700 text-white text-base md:text-lg lg:text-xl">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10V3H6v7M3 21h18a1 1 0 001-1V6a1 1 0 00-1-1H3a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                            </svg>
                            <span>Abstracts</span>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Logout Button -->
           
        </div>
    </div>
    
    
    

    <!-- Main Content -->
    <div class="flex-1 md:ml-64 bg-sky-100">
        <!-- Navbar -->
        <header class="bg-red-900 text-white p-5 flex items-center justify-between">
            <div class="flex items-center">
                <!-- Logo -->
                <!-- Adjust 'path/to/your/logo.png' and 'h-12' as needed -->
        
                <div class="text-xl font-bold">
                    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-white">
                        Malawi Digital Health Forum
                    </h2>
                    <p class="text-sm text-gray-300 mt-1">Admin dashboard</p>
                </div>
            </div>
            
            <button id="menu-button" class="md:hidden text-gray-800 p-4">
                <svg id="menu-icon" class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </header>
        
        
     

        <!-- Admin Panel Title -->
        

        <!-- Cards Container -->
        <div class="p-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Subscriptions Card -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col items-center text-center">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Subscriptions</h3>
                    <p class="text-4xl font-bold text-blue-600" id="subscriptions-count">{{ $subscriptionsCount }}</p>
                </div>
                <!-- Registrations Card -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col items-center text-center">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Registrations</h3>
                    <p class="text-4xl font-bold text-green-600" id="registrations-count">{{ $registrationsCount }}</p>
                </div>
                <!-- Abstracts Card -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col items-center text-center">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Abstracts</h3>
                    <p class="text-4xl font-bold text-purple-600" id="abstracts-count">{{ $abstractsCount }}</p>
                </div>
                <!-- Additional Card (example) -->
            </div>
        </div>
        
    </div>

    <!-- JavaScript for toggling the sidebar -->
    <script>
        const menuButton = document.getElementById('menu-button');
        const sidebar = document.getElementById('sidebar');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        menuButton.addEventListener('click', function() {
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
