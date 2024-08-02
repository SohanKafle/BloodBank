@extends('layouts.task')
@section('content')
<div class="bg-pink-100 py-8">
    <div class="relative h-80">
        <img src="https://img.freepik.com/free-vector/happy-world-blood-donor-day-red-grey-yellow-background-social-media-design-banner-free-vector_1340-21612.jpg" alt="Classic Cars" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-4xl text-white font-bold">About Us</h1>
        </div>
    </div>

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
                <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Quick Find</h2>
                <p class="text-gray-500">Instant matching of blood donors by blood type and location.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                        <span class="text-2xl text-gray-600 font-bold"><i class='bx bx-time'></i></span>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Real time availability</h2>
                <p class="text-gray-500">Donors can update real-time availability status, ensuring notifications are sent only to those able to donate during emergencies.</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-xl hover:bg-red-50">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                        <span class="text-2xl text-gray-600 font-bold"><i class='bx bx-bell'></i></span>
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Emergency Notifications</h2>
                <p class="text-gray-500">The website sends emergency notifications to matching donors nearby via email or notifications through webapp.</p>
            </div>
        </div>
    </section>



    <section class="bg-pink-100" id="aboutus" data-aos="fade-left">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-bold text-red-500 mb-8 text-center">About Us</h2>
                    <p class="mt-4 text-gray-600 text-lg">
                       Blood Bank System shall remain an efficient, self-sustainable, and independent humanitarian organization committed to provide immediate relief to human suffering, under the Fundamental Principles of the Blood Bank, through its network of Blood Bank workers throughout the country working closely with communities in a democratic, transparent and participatory way.
                        If you are looking for a blood donor or wanting to donate blood then we are the one for you. We look forward to helping you!</p>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://www.spotlightnepal.com/media/images/World_Blood_day.2e16d0ba.fill-650x500.jpg" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-700 body-font bg-pink-100" id="gallery" data-aos="fade-down">
        <div class="flex justify-center text-3xl font-bold text-red-500 text-center py-10">
          Our Happy Members
        </div>

        <div class="grid grid-cols-1 place-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">

            <div class="group relative">
                <img src="https://nhsbtdbe.blob.core.windows.net/umbraco-assets-corp/23800/tia-pod-2.jpg?width=362&height=271" class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>

            <div class="group relative">
                <img src="https://media.post.rvohealth.io/wp-content/uploads/sites/3/2020/06/GettyImages-471394055-732x549.jpg" alt="Image 1" class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>

            <div class="group relative">
            <img src="{{asset('images\donor\mohan.PNG')}}" alt="Image 1" class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>

            <div class="group relative">
                <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/3CEA/production/_128549551_khan2.jpg" alt="Image 1" class="aspect-[2/3] h-80 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
            </div>
            
           

        </div>

    </section>
</div>
@endsection