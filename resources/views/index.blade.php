

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body id="body" class="bg-gray-100 relative">
 <!-- Success Message Popup -->
@if(session('success_message'))
<div id="successPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-xl text-green-600 mb-4">{{ session('success_message') }}</p>
        <button id="closeSuccessPopup" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-md">Close</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var successPopup = document.getElementById('successPopup');
        var closeSuccessPopup = document.getElementById('closeSuccessPopup');
        
        if (successPopup) {
            successPopup.classList.remove('hidden');
        }
        
        if (closeSuccessPopup) {
            closeSuccessPopup.addEventListener('click', function() {
                if (successPopup) {
                    successPopup.classList.add('hidden');
                }
            });
        }
    });
</script>
@endif

<!-- Email Error Message Popup -->
@if(session('email_error_message'))
<div id="emailErrorPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-xl text-red-600 mb-4">{{ session('email_error_message') }}</p>
        <button id="closeEmailErrorPopup" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-md">Close</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var emailErrorPopup = document.getElementById('emailErrorPopup');
        var closeEmailErrorPopup = document.getElementById('closeEmailErrorPopup');
        
        if (emailErrorPopup) {
            emailErrorPopup.classList.remove('hidden');
        }
        
        if (closeEmailErrorPopup) {
            closeEmailErrorPopup.addEventListener('click', function() {
                if (emailErrorPopup) {
                    emailErrorPopup.classList.add('hidden');
                }
            });
        }
    });
</script>
@endif

<!-- Generic Error Message Popup -->
@if(session('error_message'))
<div id="errorPopup" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-xl text-red-600 mb-4">{{ session('error_message') }}</p>
        <button id="closeErrorPopup" class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-md">Close</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var errorPopup = document.getElementById('errorPopup');
        var closeErrorPopup = document.getElementById('closeErrorPopup');
        
        if (errorPopup) {
            errorPopup.classList.remove('hidden');
        }
        
        if (closeErrorPopup) {
            closeErrorPopup.addEventListener('click', function() {
                if (errorPopup) {
                    errorPopup.classList.add('hidden');
                }
            });
        }
    });
</script>
@endif




    

    
   
   <!--<div id="messageBox" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-white text-black shadow-md flex justify-between items-center w-full max-w-md mx-auto hidden">
        <div class="flex justify-between items-center mb-2">
            <p class="text-black">
        
                Please note that this website is currently in development phase. Certain sections are still being finalized,
                and some content is included for demonstration purposes. Thank you for
                your understanding as we work towards completing the site.
            </p>
            <button onclick="closeMessageBox()" class="text-black">
                <ion-icon name="close-circle-outline" class="text-black text-xl"></ion-icon>
            </button>
        </div>
    </div>-->
      
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
                <a href="index.html" class="text-xl font-bold text-cyan-500 underline duration-500 mx-4">Home</a>
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

    <div class="max-w-full mx-auto bg-white shadow-md overflow-hidden max-h-screen lg:max-h-100">
        <img src="images/digital health.jpg" alt="Your Image" class="w-full h-full object-cover">
    </div>

    <div class="w-full mx-auto p-6 bg-white text-center">
        <h1 class="text-2xl lg:text-4xl font-bold mb-4 text-yellow-500">About the National Digital Health Forum</h1>
        <p class="text-xl lg:text-2xl text-gray-700 font-bold">
            Digital Health Division under the Ministry of Health will convene the National Digital Health Forum this September from 4th to 5th, 2024.
        </p>
    </div>

    <div class="bg-white lg:mx-auto lg:p-6 lg:px-8">
        <div class="lg:flex lg:max-w-screen-lg lg:mx-auto">
            <div class="lg:w-1/2 lg:pr-8 lg:flex lg:flex-col lg:justify-center text-center">
                <p class="text-gray-700 text-lg lg:text-1xl">
                In the era of rapid technological advancement, digital health has emerged as a pivotal component 
                in improving healthcare delivery and outcomes. Malawi has made significant strides in adopting digital health 
                solutions to enhance healthcare accessibility, quality, and efficiency. The Ministry of Health’s Digital Health 
                Division (MoH DHD), in collaboration with various development and implementing partners, has been at the forefront of these
                initiatives, aligning efforts with the Health Sector Strategic Plan III (HSSP III).
                 
                </p>
                <p class="mt-4 text-gray-700 text-lg lg:text-1xl">
                DHD is planning to conduct a two day National Digital Health Forum, which aims to launch the  
                digital health policy, bring together key stakeholders to provide a comprehensive overview of
                the current digital health landscape in Malawi, showcase innovations, and foster collaboration 
                for the future of digital health in Malawi.
                
                 
                </p>
            </div>
            <div class="lg:w-1/2 lg:pl-8 lg:flex lg:justify-center lg:items-center">
                <iframe width="875" class="w-full h-96 lg:h-1000" height="492" src="https://www.youtube.com/embed/d5rEnbx6A1k" title="Hon. Khumbize Chiponda, Minister of Health, Malawi | @amtzinfo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="bg-yellow-500 shadow-md text-center px-10 py-10">
        <p class="text-lg lg:text-xl font-bold text-lg lg:text-5xl">
            Call for Abstracts is Open! Submit your Abstract by August 9
        </p>
        <a href="{{route('Abstracts')}}">    <button class="mt-4 px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Learn More
        </button></a>
    
    </div>

    <div class="w-full text-center bg-sky-900 py-10 px-5 text-white">
        <h2 class="text-2xl font-bold mb-4">Stay Updated</h2>
        <div class="lg:flex lg:items-center">
            <div class="lg:w-.5/2 lg:text-left lg:pr-8 mb-10">
                <p class="font-bold mb-2 text-lg lg:text-3xl text-center mb-10">Sign up to receive the latest updates on NDHF</p>
                <p class="text-sm text-white font-bold">Questions? Email us at <a href="lkadango4@gmail.com" class="text-yellow-500">lkadango4@gmail.com</a></p>
            </div>
            <div class="lg:w-1/2 lg:pl-8 lg:text-left">
                 <form action="{{ route('submit.form') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="first_name" class="block text-sm font-medium">First Name (required)</label>
                        <input type="text" id="first_name" name="first_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-sm font-medium">Last Name (required)</label>
                        <input type="text" id="last_name" name="last_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-black" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email (required)</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md text-black" required>
                    </div>
                    <!--<button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md">Submit</button>-->
                    <button id="submitBtn" type="submit" class="relative inline-flex  justify-center px-6 py-2 bg-blue-500 text-white rounded-md focus:outline-none">
                        
                        <span id="loader" class="  inset-0 flex items-center justify-center mr-2 hidden">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" opacity="0.2"/>
                                <path d="M12 2a10 10 0 0 0 0 20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round">
                                  <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="2s" repeatCount="indefinite"/>
                                </path>
                              </svg>
                              
                              
                        </span>
                        <span class="button-content">Submit</span>
                    </button>
                    



                </form>            </div>
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

    <!-- Message Box -->
   
    <script>
        function menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? 
                (e.name = "close", list.classList.add('top-[68px]'), list.classList.add('opacity-100')) :
                (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'));
        }
    </script>
    
     
    



<script>
    function showMessageBox() {
        document.getElementById('messageBox').classList.remove('hidden');
        setTimeout(function() {
            closeMessageBox();
        }, 7000);
    }

    function closeMessageBox() {
        document.getElementById('messageBox').classList.add('hidden');
    }

    // Call showMessageBox on page load to display the message box
    document.addEventListener('DOMContentLoaded', function() {
        showMessageBox();
    });
</script>
<script>/*
    document.addEventListener('DOMContentLoaded', function() {
       document.getElementById('submitBtn').addEventListener('click', function(event) {
            //event.preventDefault(); // Prevent default form submission
            
            // Disable the button to prevent multiple submissions
            this.disabled = true;

            // Hide the button content and show the loader
            this.querySelector('.button-content').classList.add('hidden');
            this.querySelector('#loader').classList.remove('hidden');

            // Submit the form
            this.closest('form').submit();
       });
    });
</script>
</body>
</html>
