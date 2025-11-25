@extends('layouts.public')

@section('content')
<!-- About Section -->
<section class="py-24 bg-white flex items-center min-h-screen relative overflow-hidden">
    <!-- Subtle Sea Background Decoration -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <!-- Left Side: Image -->
            <div class="relative group">
                <div class="absolute inset-0 bg-primary rounded-[3rem] rotate-3 opacity-20 transition-transform group-hover:rotate-6 duration-500"></div>
                <img src="{{ asset('storage/about.png') }}" alt="Coralwind Interior" class="relative w-full h-[650px] object-cover rounded-[3rem] shadow-2xl transition-transform group-hover:scale-[1.01] duration-500">
            </div>

            <!-- Right Side: Content -->
            <div class="pl-4">
                <h1 class="text-5xl font-bold text-primary mb-8 leading-tight">About Coralwind Hotel</h1>
                
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Immerse yourself in the rhythm of the ocean at <span class="text-primary font-medium">Coralwind Suites</span>. Inspired by the calming breeze and the azure depths of the sea, our hotel offers a sanctuary where coastal elegance meets modern luxury.
                </p>
                <p class="text-gray-500 text-lg leading-relaxed mb-10">
                    From the moment you step in, you'll be embraced by an atmosphere of serenity. Whether you're here to chase the sunset or simply unwind in our premium suites, we promise an experience as refreshing as the ocean breeze.
                </p>

                <ul class="space-y-6">
                    <li class="flex items-center group">
                        <div class="flex-shrink-0 mr-4 p-2 bg-primary/10 rounded-full group-hover:bg-primary/20 transition-colors">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600 text-lg font-medium group-hover:text-primary transition-colors">24/7 Coastal Concierge</span>
                    </li>
                    <li class="flex items-center group">
                        <div class="flex-shrink-0 mr-4 p-2 bg-[#74A6AF]/10 rounded-full group-hover:bg-[#74A6AF]/20 transition-colors">
                            <svg class="w-5 h-5 text-[#74A6AF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600 text-lg font-medium group-hover:text-[#74A6AF] transition-colors">Ocean-Breeze Wi-Fi</span>
                    </li>
                    <li class="flex items-center group">
                        <div class="flex-shrink-0 mr-4 p-2 bg-[#74A6AF]/10 rounded-full group-hover:bg-[#74A6AF]/20 transition-colors">
                            <svg class="w-5 h-5 text-[#74A6AF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-600 text-lg font-medium group-hover:text-[#74A6AF] transition-colors">Seaside Dining & Bar</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
