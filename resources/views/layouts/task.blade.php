<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            max-width: 100%;
            scroll-behavior: smooth;
        }

        .container,
        .content,
        .section,
        .header,
        .footer {
            overflow-x: hidden;
            max-width: 100%;
            margin: 0 auto;
        }

        .container {
            padding-right: 1rem;
            padding-left: 1rem;
            width: 100%;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .footer-line {
            border-top: 1px solid gray;
            margin-top: 1px;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .back-to-top:hover {
            background-color: #0056b3;
        }


        li {
            margin-left: 20px;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 7px 20px;
            text-decoration: none;
        }



        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: red;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 20px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .btn{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            width: 100%;
            text-align: left;
        }

        .btn:hover{
            background-color: #f1f1f1;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        
    </style>
</head>

<body class="font-sans bg-gray-100 text-gray-900">

    <header class="bg-white">
        <nav class="bg-red-600 shadow-md fixed top-0 left-0 w-full z-50">
            <div class="container mx-auto flex justify-between items-center py-4 px-4 md:px-0">

                <a href="/"> <img src="data:image/png;base64,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" alt="Bloodbank Logo" class="h-16"></a>


                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-black hover:text-white focus:outline-none">
                        <i class='bx bx-menu text-3xl'></i>
                    </button>
                </div>


                <ul id="nav-links" class="hidden md:flex items-center">
                    <li>
                        <a href="/" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-cog'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">
                            <i class='bx bx-bell'></i>
                            <span>Notification</span>
                        </a>
                    </li>
                </ul>


                <ul>
                    <li class="dropdown">
                        @auth
                        <a href="javascript:void(0)" class="dropbtn text-2xl font-medium flex items-center space-x-1 text-black hover:text-white">Hi, {{auth()->user()->name}}</a>
                        <div class="dropdown-content">
                            <a href="{{route('users.profile')}}">Profile</a>
                            <form action="{{route('logout')}}" method="post" class="inline">
                                @csrf
                                <button type="submit" class=" btn">Logout</button>
                            </form>

                        </div>
                        @endauth
                    </li>
                </ul>
            </div>

            <div id="mobile-menu" class="md:hidden hidden bg-gray-100 shadow-md transition-all">
                <ul class="flex flex-col items-center space-y-4 py-4">
                    <li>
                        <a href="/" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-home'></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-user'></i>
                            <span>About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="text-1xl font-bold flex items-center space-x-1 text-black hover:text-blue-500">
                            <i class='bx bx-cog'></i>
                            <span>Our Services</span>
                        </a>
                    </li>
                </ul>


                <div class="relative" data-twe-dropdown-ref>
                    <button class="flex items-center rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" type="button" id="dropdownMenuButton1" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-init data-twe-ripple-color="light">
                        Dropdown button
                        <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Another action</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Something else here</a>
                        </li>
                    </ul>
                </div>



            </div>
        </nav>
    </header>

    <!-- Main content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 px-4 md:px-0">

            <div class="lg:col-span-2">
                <h3 class="font-bold mb-2 ml-5">About Us</h3>
                <p class="text-gray-400 ml-5">
                    Hello there. How are ya </p>
            </div>

            <div>
                <h3 class="font-bold mb-2">Contact Info</h3>
                <ul class="text-gray-400 ">
                    <li class="flex items-center mb-3 hover:text-blue-400">
                        <i class='bx bx-map mr-2'></i> Gaindakot-01, Nawalpur
                    </li>
                    <li class="flex items-center mb-3 hover:text-blue-400">
                        <i class='bx bx-phone mr-2'></i> 078-7501202 / 9812345678
                    </li>
                    <li class="flex items-center mb-3 hover:text-blue-400">
                        <i class='bx bx-envelope mr-2'></i> info@bloodbank.com
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Quick Links</h3>
                <ul>
                    <li class="mb-2"><a href="/" class="hover:text-blue-400">Home</a></li>
                    <li class="mb-2"><a href="#about" class="hover:text-blue-400">About Us</a></li>
                    <li class="mb-2"><a href="#services" class="hover:text-blue-400">Notifications</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold mb-2">Find Us On</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="hover:text-blue-400"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="hover:text-blue-400"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="hover:text-blue-400"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-line"></div>
    <div class="copyright text-center bg-gray-900 text-white py-2">
        <p>&copy;{{date('Y')}} All Rights Reserved Blood Bank</p>
    </div>

    <!-- Back to top button -->
    <button class="back-to-top" id="back-to-top">
        <i class="bx bx-up-arrow-alt"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>