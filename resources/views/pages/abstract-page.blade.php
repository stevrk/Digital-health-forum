<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abstract-form</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
<body id="body" class="bg-gray-100 relative">
    <nav class="p-2.5 bg-sky-900 shadow md:flex md:items-center md:justify-between">
        <!--<div class="flex justify-between items-center">
            <span class="cursor-pointer">
                <img src="{{ asset('images/logo (2).png') }}" alt="" class="h-12 sm:h-20 md:h-30 lg:h-50 inline">
            </span>
            <span class="text-3xl cursor-pointer md:hidden  block mx-2 ">
                <ion-icon name="menu-outline" onclick="menu(this)" class="text-white md" ></ion-icon>
            </span>
        </div>-->
        <div class="flex justify-between items-center">
            <span class="cursor-pointer ml-4">
                <img src="../images/sponsor1.png" alt="Logo 2" class="h-12 sm:h-20 md:h-30 lg:h-50 inline">
            </span>
            <span class="cursor-pointer">
                <img src="../images/logo (2).png" alt="Logo 1" class="h-12 sm:h-20 md:h-30 lg:h-50 inline">
            </span>
            
            <span class="text-3xl cursor-pointer md:hidden block mx-2">
                <ion-icon name="menu-outline" onclick="menu(this)" class="text-white"></ion-icon>
            </span>
        </div>
        <ul class=" md:flex text-white md:items-center z-10 md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 md:pl-7 bg-sky-900 sm:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
           <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('home')}}" class="text-xl  hover:text-cyan-500  duration-500 mx-4">Home</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{ route('Registration') }}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Registration</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('Abstracts')}}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Abstracts</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('sponsors')}}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Sponsors</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('hotels')}}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Hotel & Lodges</a>
            </li>
            <li>
                <a href="{{route('Abstracts-submit')}}"><button  id="abstract-btn" class="bg-cyan-500 text-blue duration-500 px-6 py-2 mx-3 hover:bg-cyan-500 rounded">
                    SUBMIT ABSTRACT IDEA
                </button></a>
            </li>
        </ul>
    </nav>

    <div class="container mx-auto ">
        @if(session('message'))
            <div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
                <div class="bg-white p-5 rounded shadow-lg text-center">
                    <p>{{ session('message') }}</p>
                    <button onclick="closePopup()" class="mt-3 bg-blue-500 text-white px-4 py-2 rounded">Close</button>
                </div>
            </div>
            <script>
                function closePopup() {
                    document.getElementById('popup').style.display = 'none';
                }
            </script>
        @endif
        <div class="max-w-2xl mx-auto bg-gray-300 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl mb-4 text-center font-bold">Submit Your Abstract</h2>
            <form id="abstractForm" action="{{ route('Abstract-form') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="organization" class="block text-gray-700">Organization</label>
                    <input type="text" id="organization" name="organization" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title of Abstract</label>
                    <input type="text" id="title" name="title" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
        
                <!-- File Upload for Abstract -->
                <div class="mb-4">
                    <label for="abstract_file" class="block text-gray-700">Upload Your Abstract</label>
                    <input type="file" id="abstract_file" name="abstract_file" accept=".doc,.docx,.pdf" class="w-full border border-gray-300 px-4 py-2 rounded-lg" required>
                </div>
        
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </form>
            
        </div>
        



   

    
    <script>
        function menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? 
                (e.name = "close", list.classList.add('top-[68px]'), list.classList.add('opacity-100')) :
                (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'));
        }
    </script>
</div>
<div class="flex flex-col items-center lg:flex-row lg:justify-center lg:flex-wrap bg-sky-900">
    <img src="{{asset('images/logo (2).png')}}" alt="Sponsor 1" class="h-10 lg:h-25 mb-4 lg:mx-4">
    <img src="{{asset('images/sponsor1.png')}}  " alt="Sponsor 2" class="h-20 lg:h-32 mb-4 lg:mx-4">
    <img src="{{asset('images/sponsor .png')}}" alt="Sponsor 1" class="h-20 lg:h-32 mb-4 lg:mx-4">
</div>

 <div class="py-12 bg-sky-900">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-white">Contact Us</h2>
        


        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col sm:flex-row sm:justify-between">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Dr. Charles Maere</h3>
                <div class="flex items-center mb-4">
                    <ion-icon name="call-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold">+265 997 71 58 21</p>
                    <p class="text-gray-700 ml-2 font-bold">+265 994 94 22 66</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="mail-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold"><a href="mailto:cmaere@pedaids.org" class="text-blue-500 hover:text-blue-600">cmaere@pedaids.org</a></p>
                </div>
            </div>
            <div class="mb-8 sm:mb-0 sm:mr-4 text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Lizzie Kadango Mikeka</h3>
                <div class="flex items-center mb-4">
                    <ion-icon name="call-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold">+265 992 00 00 95</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="mail-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold"><a href="mailto:lkadango4@gmail.com" class="text-blue-500 hover:text-blue-600">lkadango4@gmail.com</a></p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    function menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? 
            (e.name = "close", list.classList.add('top-[68px]'), list.classList.add('opacity-100')) :
            (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'));
    }
</script>
    
</body>
</html>