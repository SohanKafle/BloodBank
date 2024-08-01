@extends('layouts.master')
@section('content')
    <main class="mt-20">

<section class="relative bg-pink-200 text-center py-20" data-aos="fade-up">
    <div class="absolute inset-0">
        <img src="https://static.vecteezy.com/system/resources/previews/008/191/708/non_2x/human-blood-donate-and-heart-rate-on-white-background-free-vector.jpg" alt="Blood donation" class="w-full h-full object-cover opacity-100">
        <div class="absolute inset-0 bg-white opacity-40"></div>
    </div>
    <div class="relative container mx-auto px-4 py-16">
        <div class="flex flex-col items-center text-center">
            <h1 class="text-5xl font-bold text-black mb-2 ">DONATE BLOOD</h1>
            <h1 class="text-5xl font-bold text-black mb-2">Save Lives!</h1>
            <div class="text-2xl font-bold text-white mt-4 mb-8 bg-red-500 py-3 px-2 rounded-lg">Donate Today</div>
            <br>
            <br>
            <p class="text-lg mb-8 font-medium">Every blood donation counts, and every donor is a hero. Be a hero today and donate blood.</p>
            <div class="flex space-x-4">
                <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">Become Donors</button>
                <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">Request Blood</button>
            </div>
        </div>
    </div>
</section>

<section id="goals" class="py-10 container mx-auto bg-pink-100" data-aos="fade-right">
    <h1 class="text-4xl font-bold text-red-500 text-center mb-2">Our Goals!</h1>
    <p class="text-lg text-center mb-8 font-medium">Saving lives, Spreading Smiles!</p>
    <p class="text-center text-gray-500 mb-10 font-bold">We live on earth with an equal right to live in this earth because this is our earth</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                    <span class="text-2xl text-gray-600 font-bold"><i class='bx bx-search'></i></span>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Quick Find</h2>
            <p class="text-gray-500">Instant matching of blood donors by blood type and location.</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                    <span class="text-2xl text-gray-600 font-bold"><i class='bx bx-search'></i></span>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Real time availability</h2>
            <p class="text-gray-500">Donors can update real-time availability status, ensuring notifications are sent only to those able to donate during emergencies.</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                    <span class="text-2xl text-gray-600 font-bold"><i class='bx bx-search'></i></span>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Emergency Notifications</h2>
            <p class="text-gray-500">The website sends emergency notifications to matching donors nearby via email or notifications through webapp.</p>
        </div>
    </div>
</section>

<section id="steps" class="py-10 container mx-auto bg-pink-100" data-aos="fade-left">
    <h1 class="text-4xl font-bold text-red-500 text-center mb-4">Steps to Become Donors</h1>
    <p class="text-lg text-center mb-8 font-medium">A minute of work can save thousands of lives.</p>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="rounded-lg shadow-md p-6 bg-white transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex items-center justify-center rounded-full w-16 h-16 bg-red-500 text-white font-bold mb-4">1</div>
            <h2 class="text-xl font-bold mb-2">Registration</h2>
            <p class="text-gray-700">For registration, one should fill out the form and then the data is collected on our secure server, used only when needed.</p>
        </div>
        <div class="rounded-lg shadow-md p-6 bg-white transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex items-center justify-center rounded-full w-16 h-16 bg-red-500 text-white font-bold mb-4">2</div>
            <h2 class="text-xl font-bold mb-2">Verification</h2>
            <p class="text-gray-700">After registration, data is verified for security and authenticity. Only verified data is used.</p>
        </div>
        <div class="rounded-lg shadow-md p-6 bg-white transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex items-center justify-center rounded-full w-16 h-16 bg-red-500 text-white font-bold mb-4">3</div>
            <h2 class="text-xl font-bold mb-2">Participation in Donation</h2>
            <p class="text-gray-700">Participate in blood donation events as scheduled. Ensure you follow the guidelines provided.</p>
        </div>
        <div class="rounded-lg shadow-md p-6 bg-white transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
            <div class="flex items-center justify-center rounded-full w-16 h-16 bg-red-500 text-white font-bold mb-4">4</div>
            <h2 class="text-xl font-bold mb-2">Receive the Notification</h2>
            <p class="text-gray-700">Receive notifications about donations request and other relevant information through our system.</p>
        </div>
    </div>
</section>

        <section id="search" class="container mx-auto px-4 py-8 bg-pink-100" data-aos="fade-down">
            <div class="flex flex-col lg:flex-row items-center lg:items-start ml-6">
                <div class="flex-1 mb-8 lg:mb-0 lg:pr-8 mt-20">
                    <h1 class="text-4xl font-bold text-red-500">Donors Near Me</h1>
                    <p class="text-lg mt-2 font-medium">Search the nearest donors</p>
                    <br>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Search Donors Near Me</button>
                </div>
                <div class="flex-1 flex justify-center lg:justify-end pr-10">
                    <img class="rounded-md shadow-md" src="https://t4.ftcdn.net/jpg/02/21/47/99/360_F_221479946_2yUmWRmVPBka6d4zcXbBhJbRra8WcpQV.jpg" alt="Blood Donation" />
                </div>
            </div>
        </section>
        
    </main>
@endsection
