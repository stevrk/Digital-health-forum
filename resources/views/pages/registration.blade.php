<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body id="body" class="bg-gray-100 relative ">
       
  
        


    
        
    
      

    
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
                <a href="{{route('Registration')}}" class="text-xl font-bold text-cyan-500 underline duration-500 mx-4">Registration</a>
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

    <div class="relative w-full h-64 lg:h-80 xl:h-64 bg-black">
        <img src="../images/reg.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-30  ">
        <div class="absolute inset-0 flex items-center justify-center">
           <h1 class="text-white text-2xl lg:text-4xl font-bold">Open For Registration</h1>
        </div>
    </div>
    <div class=" mx-auto px-4 py-8 lg:px-8 text-center">
        <p class="text-lg lg:text-3xl text-gray-900 mb-4 ">
            The Malawi Digital Health Forum (MDHF) is the leading networking and relationship-building opportunity 
            to connect government stakeholders, digital health developers, researchers, donors, implementers and field experts 
            in public health and technology from across the globe.
        </p>
        <a href="#" class="text-yellow-500 mb-2 inline-block lg:text-3xl underline font-bold">Register today for the 2024 hybrid event experience.</a>
        <p class="text-yellow-500 mb-2 lg:text-2xl font-bold">September 4-5, 2024</p>
        <p class="text-gray-700 mb-2 lg:text-3xl font-bold">
            Virtual: MDHF on the TechChange Platform<br>
            In-Person: Lilongwe, Malawi at BICC
        </p>
        <a href="#" class="text-green-500 underline mb-4 inline-block lg:text-3xl font-bold">Learn more about the Lilongwe, Malawi venue</a>
      
        <div class="flex justify-center mb-4">
            <button id="registerBtn" class="bg-blue-500 text-white py-2 px-6 rounded-lg mr-4 font-bold lg:text-2xl hover:bg-blue-600">Register</button>
            <!--<button class="bg-blue-500 text-white py-2 px-6 rounded-lg font-bold  lg:text-2xl">Reserve Your Hotel Room</button>-->
        </div>
       
        
        
        
    </div>
    <div id="modalBackdrop" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <!-- Modal content -->
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Register for Malawi Digital Health Forum</h2>
            <form id="registrationForm" class="space-y-4"  action="{{route('regform') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Your Name"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Your Email Address"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="phone" required placeholder="Your Phone Number"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                    <input type="text" id="organization" name="organization" required placeholder="Your Organization"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Register
                    </button>
                    <button type="button" id="closeModalBtn" class="ml-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-sky-900  px-8 py-6 text-white text-center ">
        <h2 class="text-2xl lg:text-3xl font-bold mb-4">What does my ticket include?</h2>
        
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 pr-4 mb-4 lg:mb-0">
                <h3 class="text-lg lg:text-xl font-bold mb-2">Lilongwe, Malawi Participants</h3>
                <ul class="list-disc list-inside text-white">
                    <li>Conference pass to all two days of the in-person MDHF Event in Lilongwe on September 4-5 September at BICC</li>
                    <li>Access to all virtual and hybrid sessions spanning the Nation September 4-5, featuring your peers at the cutting edge of technology and digital health in Asia, Africa, the Middle East, Europe, and the Americas.</li>
                    <li>Participation in exciting, compelling, relevant sessions on TechChange’s online learning platform.</li>
                    <li>Virtual networking opportunities with 3000+ digital health experts across the globe.</li>
                </ul>
            </div>
            <div class="lg:w-1/2 pl-4">
                <h3 class="text-lg lg:text-xl font-bold mb-2">Virtual Participants</h3>
                <ul class="list-disc list-inside text-white">
                    <li>Access to all virtual and hybrid sessions spanning the Nation on September 4-5, featuring your peers at the cutting edge of technology and development in Asia, Africa, the Middle East, Europe, and the Americas.</li>
                    <li>Participation in exciting, compelling, relevant sessions on TechChange’s online learning platform.</li>
                    <li>Virtual networking opportunities with 3000+ digital health experts across the globe.</li>
                </ul>
            </div>
        </div>
        
        <div class="flex justify-center mt-6">
            <!--<button class="bg-blue-500 text-white py-2 px-6 rounded-lg font-bold hover:bg-blue-600">Register</button>-->
        </div>
    </div>
    <div class="w-full mx-auto p-6 bg-white shadow-md rounded-lg mt-10 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Ticket FAQs</h2>
        <div class="faq-item">
            <button class="flex justify-between items-center w-full py-4 px-6  rounded-md mb-2 focus:outline-none font-bold bg-gray-100"
                    onclick="toggleFAQ('faq1')">
                    I submitted an abstract and am waiting to hear back if it has been accepted. Do I need to wait to hear back before registering?
                    <ion-icon id="faq2-icon" name="chevron-down-outline" class="ml-2"></ion-icon>
            </button>
            <p id="faq1-answer" class="faq-answer hidden bg-gray-100 py-4 px-6 rounded-b-md">
                Yes. If you submitted an abstract to speak at NDHF, please wait until you have been notified of your abstract status before registering. Abstract submitters will be notified during the week of September 1 of their abstract status. If accepted, NDHF speakers may register under the Speaker Rate. If rejected, you may still register for NDHF under the Early Bird Rate until September 30.

                If you are not already eligible for a lower price than the Speaker Rate (i.e. LMIC) then we recommend you wait before booking your ticket.

            </p>
        </div>
        <div class="faq-item">
            <button class="flex justify-between items-center w-full py-4 px-6 bg-gray-200 rounded-md mb-2 focus:outline-none font-bold"
                    onclick="toggleFAQ('faq2')">
                    Do I qualify to register under the LMIC rate?
                <ion-icon id="faq2-icon" name="chevron-down-outline" class="ml-2"></ion-icon>
            </button>
            <p id="faq2-answer" class="faq-answer hidden bg-gray-100 py-4 px-6 rounded-b-md">Please refer to the World Bank LMIC list here to confirm if you qualify for the LMIC rate.</p>
        </div>
        <div class="faq-item">
            <button class="flex justify-between items-center w-full py-4 px-6 bg-gray-200 rounded-md mb-2 focus:outline-none font-bold"
                    onclick="toggleFAQ('faq3')">
                    I need a visa in order to attend NDHF in Lilongwe. Are there visa supporting documents available?
                <ion-icon id="faq3-icon" name="chevron-down-outline" class="ml-2"></ion-icon>
            </button>
            <p id="faq3-answer" class="faq-answer hidden bg-gray-100 py-4 px-6 rounded-b-md">Yes. Please see here a NDHF Letter of Invitation template to support your visa application. Be sure to download the template to edit and add personal
                 information. See the "Visa Requirements" section of the Hotel & Logistics Page to learn more about visa requirements.</p>
        </div>
        <div class="faq-item">
            <button class="flex justify-between items-center w-full py-4 px-6 bg-gray-200 rounded-md mb-2 focus:outline-none font-bold"
                    onclick="toggleFAQ('faq4')">
                    How can I access a ticket at the sponsor rate?

                <ion-icon id="faq4-icon" name="chevron-down-outline" class="ml-2"></ion-icon>
            </button>
            <p id="faq4-answer" class="faq-answer hidden bg-gray-100 py-4 px-6 rounded-b-md">Employees of organizations that are sponsoring the forum will have access to the discounted sponsor rate. To learn more about how your organization may sponsor GDHF, check out GDHF Sponsorships and reach out to Sheerin Vesin (sheerin.vesin@techchange.org) for any inquiries.</p>
        </div>
        <div class="faq-item">
            <button class="flex justify-between items-center w-full py-4 px-6 bg-gray-200 rounded-md mb-2 focus:outline-none font-bold"
                    onclick="toggleFAQ('faq5')">
                    I registered and can no longer attend NDHF. What is the refund policy?


                <ion-icon id="faq4-icon" name="chevron-down-outline" class="ml-2"></ion-icon>
            </button>
            <p id="faq5-answer" class="faq-answer hidden bg-gray-100 py-4 px-6 rounded-b-md">
                If you request a cancellation/refund before November 12, 2024, you will receive a full refund.

                If you request a cancellation/refund between November 12, 2024, to November 28, 2024, you will receive a 50% refund.

                If you request a cancellation/refund after November 28, 2024, you will not be eligible for a refund.

                Your registration fee can be transferred to a substitute attendee from the same organization.

                To request a refund, email support@techchange.org

            </p>
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

    <!--<script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                const loadingDiv = document.getElementById('loading');
                const body = document.body;
                loadingDiv.style.display = 'none';
                //body.classList.remove('hidden');
            }, ); 
        });
    </script>-->
       <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerBtn = document.getElementById('registerBtn');
            const modalBackdrop = document.getElementById('modalBackdrop');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const registrationForm = document.getElementById('registrationForm');
    
            // Show modal on registerBtn click
            registerBtn.addEventListener('click', function () {
                modalBackdrop.classList.remove('hidden');
            });
    
            // Hide modal on closeModalBtn click or outside click
            closeModalBtn.addEventListener('click', function () {
                modalBackdrop.classList.add('hidden');
            });
    
            modalBackdrop.addEventListener('click', function (event) {
                if (event.target === modalBackdrop) {
                    modalBackdrop.classList.add('hidden');
                }
            });
           
       
          
            
        });
    </script>
    
    
    
    
    
    
    
    
    
    
    
    <script>
        function menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? 
                (e.name = "close", list.classList.add('top-[68px]'), list.classList.add('opacity-100')) :
                (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'));
        }
    </script>
   @if(session('success_reg'))
   <!-- Popup structure -->
   <div id="successPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
       <div class="bg-white p-6 rounded-lg shadow-lg">
           <p class="text-xl text-green-600 mb-4">{{ session('success_reg') }}</p>
           <button id="closePopup" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-md">Close</button>
       </div>
   </div>
   
   <!-- JavaScript to show popup and handle close -->
   <script>
       document.addEventListener('DOMContentLoaded', function() {
           var successPopup = document.getElementById('successPopup');
           successPopup.classList.remove('hidden');
       
           document.getElementById('closePopup').addEventListener('click', function() {
               successPopup.classList.add('hidden');
           });
       });
   </script>
@endif

</body>
</html>