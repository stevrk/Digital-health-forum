<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abstracts</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
</head>
<body class="bg-gray-100">
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
                <a href="{{ route('Registration') }}" class="text-xl hover:text-cyan-500 duration-500 mx-4">Registration</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{ route('Abstracts') }}" class="text-xl font-bold text-cyan-500 underline duration-500 mx-4  ">Abstracts</a>
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
    <div class="relative w-full h-64 lg:h-80 xl:h-64 bg-black">
        <img src="../images/reg.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-2xl lg:text-4xl sm:text-1.5xl font-bold mb-4">Hybrid Event - Virtual & In-Person in Lilongwe, Malawi</h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 text-lg lg:text-xl ">
                Submit your abstracts by August 9
            </button>
        </div>
    </div>
    <div class="py-6 px-4 bg-gray-200">
       
        <div class="text-left text-lg text-gray-800 ">
          <p class="text-2xl md:text-3xl font-bold mb-4 text-yellow-500 text-center">
            Dear Malawi Digital Health Community,
          </p>
          <p class="mt-4 text-center">
            Are you passionate about driving innovation in digital health? We invite you to submit your abstract ideas for this year’s National Digital Health Forum, focusing on the theme <strong>"Digital Health Solutions for Stronger Health Systems and Better Care."</strong> This theme explores how digital health acts as a catalyst and enabler for achieving Universal Health Coverage (UHC) by enhancing health systems through various digital tools and platforms.
          </p>
          <p class="mt-4 text-center">
            <strong class="text-2xl ">Major Topic Areas:</strong>
          </p>
          <ol class="list-decimal list-inside mt-2">
            <li><strong>Digital Health Solutions for Information Management and Decision Making:</strong> Digital health tools are crucial for providing timely, accurate, and synthesized information to aid decision-making at all healthcare system levels. This includes systems like Health Management Information Systems (HMIS), consolidated dashboards, and data pipelines.</li>
            <li class="mt-2"><strong>Digital Health Solutions for Patient-Level Care and Client Information Exchange:</strong> These solutions support comprehensive, longitudinal care, allowing healthcare providers to make informed decisions during service delivery. They ensure the availability of critical patient information, such as allergies and previous encounters, enhancing the quality of care and accountability.</li>
            <li class="mt-2"><strong>Digital Health Solutions for Disease Surveillance and Preventive Mechanisms:</strong> Digital health solutions improve the ability to detect, monitor, and prevent disease outbreaks. Tools like the One Health Surveillance Platform (OHSP), mobile health apps, and Geographic Information Systems (GIS) enhance real-time data collection, analytics, and reporting for better preventive measures and targeted interventions.</li>
            <li class="mt-2"><strong>Emerging Technologies and Solutions:</strong> Emerging technologies such as drones for medical supply transport, wearable devices for health monitoring, machine learning, and AI for health dynamics prediction, and robotic devices for healthcare tasks offer innovative approaches to health service delivery. These technologies provide a glimpse into the future of healthcare in Malawi, where such innovations will play a crucial role in improving health outcomes.</li>
          </ol>
          <p class="mt-4">
            This year's event aims to create a global experience, facilitating both in-person exchanges in Lilongwe, Malawi, and virtual engagements worldwide. We encourage you to submit your abstracts and share your innovative ideas to help shape the future of digital health in Malawi and beyond.
          </p>
          <p class="mt-4 font-bold text-center">
            Submit your abstracts now and be a part of this transformative event!
          </p>
        </div>
      </div>
      
    <div class="p-5 md:p-0 lg:p-12 xl:p-16 bg-gray-100  bg-yellow-500">
        <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-2xl lg:text-4xl text-center">Session types for this year’s forum include:</h2>
        <ol class="list-disc list-inside text-lg space-y-2 text-2xl lg:text-4xl">
            <li>Keynote address : on the significance of the digital health policy.</li>
            <li>Official unveiling of the digital health policy</li>
            <li>Showcase and Exhibition
                <ul class="list-disc list-inside pl-6 mt-1 space-y-1">
                    <li>Booths and presentations by digital health development partners showcasing their innovations and progress.</li>
                    <li>Interactive demonstrations of digital health solutions.</li>
                 
                </ul>


            </li>
            <li>Presentations on the current landscape and future of digital health in Malawi</li>

        </ol>
          
        <li>Panel Discussion
            <ul class="list-disc list-inside pl-6 mt-1 space-y-1">
                <li>Topic 1: Policy and strategic alignment with HSSP III</li>
                <li>Topic 2: Collaboration and Synergy: Building a Unified Digital Health Ecosystem</li>
            </ul>
            
        </li>
      
    


    </div>
    
    <div class="flex justify-center items-center p-6 md:p-10 lg:p-12 xl:p-16 bg-yellow-500">
       
        <a href="{{route('Abstracts-submit')}}"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-1xl lg:text-2xl">
            SUBMIT YOUR ABSTRACT IDEA HERE
        </button></a>
    </div>
    <div class="md:p-5 lg:p-16 xl:p-20 bg-gray-100 text-center bg-sky-900 py-5 md:py-5">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white ">GOT QUESTIONS</h2>
        <div class="flex flex-col md:flex-row justify-between p-5">
            <!-- Left section -->
            <div class="w-full md:w-1/2 p-6  bg-white  rounded-lg mb-6 md:mb-0 m-1">
                <h3 class="text-2xl font-semibold mb-4">Sponsoring NDHF</h3>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded">
                    Learn More
                </button>
            </div>
            <!-- Right section -->
            <div class="w-full md:w-1/2 p-6  bg-white  rounded-lg mb-6 md:mb-0 m-1">
                <h3 class="text-2xl font-semibold mb-4">All Other Inquiries</h3>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded">
                    Reach Out
                </button>
            </div>
           
        </div>
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





     