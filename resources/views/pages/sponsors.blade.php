<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sponsors</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
               <a href="{{route('Registration')}}" class="text-xl hover:text-cyan-500 duration-500 mx-4 ">Registration</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('Abstracts')}}" class=" text-xl hover:text-cyan-500 duration-500 mx-4 ">Abstracts</a>
            </li>
            <li class="mx-3 my-6 md:my-0 ">
                <a href="{{route('sponsors')}}" class=" text-xl font-bold text-cyan-500 underline duration-500 mx-4">Sponsors</a>
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
   
        <!-- Sponsorship Paragraph -->
        <div class="p-8 md:p-12 lg:p-16 xl:p-20 bg-gray-100 text-center">
            <p class="text-lg md:text-xl leading-relaxed">
                <Span class="underline text-sky-900 font-bold">Sponsorship</Span> of the Malawi Digital Health Forum is one of the most impactful ways to highlight 
                your organization’s work to drive effective and equitable digital health outcomes. As a sponsor, you will play a crucial
                 role in  <Span class=" text-sky-900 font-bold">advancing the field of global public health through technology and innovation,</Span>   
                 and through your support of the MDHF, we can bring more technologists, practitioners, funders, and researchers from around the world together to share lessons learned and insights to help strengthen our digital technologies.
            </p>
            <p class="text-lg md:text-xl leading-relaxed mt-4">
                With our enhanced hybrid approach for this year’s forum, we are ambitiously creating a truly global experience that facilitates both in-person exchange, as well as equitable access to virtual engagement.
                 Help us make the 2024 MDHF the most innovative, inclusive, engaging and global event yet by becoming a sponsor today.
            </p>
        </div>
    </div>
    <div class="p-8 md:p-12 lg:p-16 xl:p-20 bg-gray-100 bg-sky-900 text-white">
        <h2 class="text-3xl lg:text-4xl font-bold mb-8 text-center">Sponsorship opportunities are available to support:</h2>
        <ul class="list-disc list-inside text-lg md:text-xl leading-relaxed space-y-2">
            <li>Plenary and breakout sessions</li>
            <li>Scholarships</li>
            <li>Multi-lingual and sign language interpretation</li>
            <li>Innovative programming, such as multi-city Watch Parties and Fail Fest</li>
            <li>The Pop-Up Studio</li>
            <li>Wellness breaks</li>
            <li>Happy hour</li>
            <li>And more!</li>
        </ul>
    </div>
    <div class="py-6 px-4 bg-gray-200">
        <h2 class="text-3xl font-bold text-center mb-4">Sponsors</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 pb-10">
          <div class="flex justify-center items-center bg-sky-900 p-4 rounded-lg shadow">
            <img src="{{asset('images/sponsor .png')}}" alt="Sponsor 1" class="h-20">
          </div>
          
      </div>
      </div>
    <div class="p-8 md:p-12 lg:p-16 xl:p-20 bg-yellow-500 text-white">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <!-- Left section -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0 text-lg md:text-xl leading-relaxed">
                <p>We welcome your partnership, collaboration and leadership at this key industry event!</p>
                <p class="mt-4">
                    If you’d like to learn more about sponsoring this year’s event, please reach out to Lizzie Kadango at
                    <a href="lkadango4@gmail.com" class="text-blue-500 hover:underline">lkadango4@gmail.com</a>.
                </p>
            </div>
            <!-- Right section -->
            <div class="w-full md:w-1/2 flex justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded text-lg md:text-xl">
                    BECOME A SPONSOR TODAY
                </button>
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

</body>

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