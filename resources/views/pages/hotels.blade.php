<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sponsors</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <style>
       
          </style>
    </head>

<body>
    <nav class="p-2.5 bg-sky-900 shadow md:flex md:items-center md:justify-between">
        <!--<div class="flex justify-between items-center">
            <span class="cursor-pointer">
                <img src="../images/logo (2).png" alt="" class="h-12 sm:h-20 md:h-30 lg:h-50 inline">
            </span>
            <span class="text-3xl cursor-pointer md:hidden block mx-2">
                <ion-icon name="menu-outline" onclick="menu(this)" class="text-white"></ion-icon>
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
        
        <ul class=" md:flex text-white md:items-center z-10 md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 md:pl-7 bg-sky-900 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
           <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('home')}}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Home</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">    
                <a href="{{ route('Registration') }}" class="text-xl hover:text-cyan-500 duration-500 mx-4 ">Registration</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{ route('Abstracts') }}"  class=" text-xl hover:text-cyan-500 duration-500 mx-4 ">Abstracts</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{ route('sponsors') }}" class=" text-xl hover:text-cyan-500 duration-500 mx-4 ">Sponsors</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{ route('hotels') }}" class=" text-xl font-bold text-cyan-500 underline duration-500 mx-4">Hotel & Lodges</a>
            </li>
            <li>
                <a href="{{route('Abstracts-submit')}}"><button  id="abstract-btn" class="bg-cyan-500 text-blue duration-500 px-6 py-2 mx-3 hover:bg-cyan-500 rounded">
                    SUBMIT ABSTRACT IDEA
                </button></a>
            </li>
        </ul>
    </nav>
    <div class="py-6 px-4 bg-gray-200">
        <div class="py-6 px-4 bg-gray-200">
            <h2 class="text-3xl font-bold text-center mb-10">Hotels and Lodges</h2>
            <div class="flex flex-col md:flex-row items-center">
              <img src="../images/BICC.jpg" alt="Hotels and Lodges Image" class="h-auto md:w-1/2 mr-4 mb-4 md:mb-0 rounded-lg">
              <div class="text-lg text-gray-800">
                <p class="text-center font-bold">
                  Attendees of the National Digital Forum in Lilongwe have access to a diverse selection of accommodation options, ranging from affordable lodges to upscale hotels across the city. Whether seeking centrally located hotels for convenience or peaceful lodges nestled in quieter areas, participants can choose accommodations that best fit their preferences and budget. Many hotels and lodges offer comfortable amenities and services, ensuring a pleasant stay during the event. It's recommended to explore booking options early to secure preferred accommodations and take advantage of various rates and amenities available.
                </p>
              </div>
            </div>
          </div>

        
          
          <div class="py-6 px-4 bg-gray-200">
            <h2 class="text-3xl font-bold text-center mb-4">Getting There</h2>
            <div class="flex flex-col md:flex-row items-center">
             
              <div class="text-lg text-gray-800 md:w-1/2 text-center mx-10">
                <p>
                  Lilongwe, the capital city of Malawi, offers several ways to arrive for the National Digital Forum. 
                  The city is served by Kamuzu International Airport, which is located just outside of Town. 
                  Taxis and private transfers are available at the airport, providing convenient transportation options 
                  to various hotels and lodges across the city. Depending on your arrival point and traffic conditions, 
                  travel times to accommodations can vary. It's advisable to confirm transportation arrangements in advance 
                  and agree on fares to ensure a smooth journey upon arrival.
                </p>
                <p class="mt-4 text-center">
                  Lilongwe's airport facilitates easy access to the city's vibrant cultural attractions, shopping districts, 
                  and dining options, making it convenient for attendees to explore during their visit. Whether arriving from
                   nearby cities or international destinations, attendees can enjoy a seamless travel experience to and within 
                   Lilongwe, enhancing their overall stay for the duration of the forum.
                </p>
              </div>
              <div class="map-responsive md:w-1/2 mr-4 mb-4 md:mb-0 rounded-lg py-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1092180864647!2d33.79329661465652!3d-13.989004943936325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19578b59dd70a8ff%3A0x9210c90f4f887e3e!2sLilongwe%2C%20Malawi!5e0!3m2!1sen!2sus!4v1625895486822!5m2!1sen!2sus" allowfullscreen="" loading="lazy" class="rounded-lg  w-full" style="height: 300px;"></iframe>
              </div>
            </div>
          </div>
     


    <div class="flex flex-col items-center lg:flex-row lg:justify-center lg:flex-wrap bg-sky-900">
        <img src="{{asset('images/logo (2).png')}}" alt="Sponsor 1" class="h-10 lg:h-25 mb-4 lg:mx-4">
        <img src="{{asset('images/sponsor1.png')}} " alt="Sponsor 2" class="h-20 lg:h-32 mb-4 lg:mx-4">
        <img src="{{asset('images/sponsor .png')}}" alt="Sponsor 1" class="h-20 lg:h-32 mb-4 lg:mx-4">
    </div>

    <div class="py-12 bg-sky-900">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-white">Contact Us</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <ion-icon name="location-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold">123 Main Street, City, Country</p>
                </div>
                <div class="flex items-center mb-4">
                    <ion-icon name="call-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold">+123 456 789</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="mail-outline" class="text-gray-700 text-xl"></ion-icon>
                    <p class="text-gray-700 ml-2 font-bold"><a href="mailto:info@example.com" class="text-blue-500 hover:text-blue-600">info@example.com</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>