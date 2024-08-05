@vite(['resources/css/app.css', 'resources/js/app.js'])
@auth
<div class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 bg-red-600 sm:px-6">
        <h3 class=" text-2xl leading-6 font-bold text-white text-center">
            User Profile
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->name}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->email}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Phone number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->phone}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->address}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Blood Group
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->bloodgroup}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Age
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{auth()->user()->age}}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                
                    <dt class="text-sm font-medium text-gray-500">
                        Report Card
                    </dt>
                    <dt class="text-sm font-medium text-gray-500">
                        <img src="{{asset('images/donor/'.auth()->user()->photopath)}}" class="w-24" alt="">
                    </dt>
                        
                    
              
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <img src="" alt="">
                </dd>
            </div>
        </dl>
    </div>
</div>
@endauth
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<style>
    .footer{
        overflow-x: hidden;
            max-width: 100%;
            margin: 0 auto;
    }
    .footer-line {
            border-top: 1px solid gray;
            margin-top: 1px;
        }
</style>
<br>
<div>
<a href="{{route('users.edit', auth()->user()->id)}}"><Button type="submit" class="bg-red-600 hover:bg-red-800 text-white py-2 w-6/12 ml-80 rounded-lg mt-2">Edit</Button></a>
</div>
<a href="{{route('users.index')}}"><button type="submit" class="bg-red-600 hover:bg-red-800 text-white py-2 w-6/12 ml-80 rounded-lg mt-2">Home</button></a>
 <br><br><!-- Footer -->
 <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 px-4 md:px-0">

            <div class="lg:col-span-2">
                <h3 class="font-bold mb-2 ml-5">About Us</h3>
                <p class="text-gray-400 ml-5">
                If you are looking for a blood donor or wanting to donate blood then we are the one for you. We look forward to helping you! </p>
            </div>

            <div>
                <h3 class="font-bold mb-2">Contact Info</h3>
                <ul class="text-gray-400 ">
                    <li class="flex items-center mb-3 hover:text-red-400">
                        <i class='bx bx-map mr-2'></i> Gaindakot-01, Nawalpur
                    </li>
                    <li class="flex items-center mb-3 hover:text-red-400">
                        <i class='bx bx-phone mr-2'></i> 078-7501202 / 9812345678
                    </li>
                    <li class="flex items-center mb-3 hover:text-red-400">
                        <i class='bx bx-envelope mr-2'></i> info@bloodbank.com
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Quick Links</h3>
                <ul>
                    <li class="mb-2"><a href="{{route('users.index')}}" class="hover:text-red-400">Home</a></li>
                    <li class="mb-2"><a href="#about" class="hover:text-red-400">About Us</a></li>
                    <li class="mb-2"><a href="#services" class="hover:text-red-400">Notifications</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Find Us On</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-red-400"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="hover:text-red-400"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="hover:text-red-400"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="hover:text-red-400"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-line"></div>
    <div class="copyright text-center bg-gray-900 text-white py-2">
        <p>&copy;{{date('Y')}} All Rights Reserved Blood Bank</p>
    </div>