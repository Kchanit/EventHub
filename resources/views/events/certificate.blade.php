@extends('layouts.main')

@section('content')
    <div class="max-w-[70rem] sm:px-6 lg:px-1 lg:py-5 mx-auto">

        
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h1 class="text-3xl font-semibold">
                        Certificate of Achievement
                    </h1>
                    <p class="text-sm text-gray-500">
                        {{$certificate->event->title}}
        
                    </p>
                </div>
            </div>
            <!-- Blog Article -->
            <div class="px-4 pt-8 pb-12 mx-auto gap-5 grid grid-flow-row sm:grid-flow-col justify-evenly">
                <div class="max-w-3xl hover:scale-105 ease-in duration-300">
                    {{-- cert --}}
                    <img class="w-full object-cover rounded-xl shadow-lg"
                        src="{{ asset('storage/' . $certificate->image_url) }}">
                    {{-- end cert --}}
                </div>
                <div class="grid grid-flow-col sm:grid-flow-row gap-5 content-between justify-between">

                    {{-- congrat --}}
                    <div
                        class="min-w-[180px] hover:scale-105 ease-in duration-200 grid-flow-col border border-gray-200 text-center rounded-xl py-3 hidden sm:block dark:border-gray-700 bg-white shadow-md md:w-auto focus:outline-none">
                        <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Congrats!</h4>
                        <img class="mx-auto max-h-32 py-5 hidden lg:block"
                            src="https://www.svgrepo.com/show/325796/party-confetti.svg">
                    </div>
                    {{-- end congrat --}}
                    {{-- date --}}
                      {{-- name --}}
                      <div
                        class="max-w-[180px] flex items-center self-stretch duration-200 py-10 text-black rounded-lg bg-white border border-gray-200 shadow-md focus:outline-none  hover:scale-105 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <p class="font-medium text-base text-gray-800 dark:text-gray-200 break-words text-center">{{auth()->user()->name}}</p>
                    </div>
                     {{-- end name --}}
                    <div 
                        class="hover:scale-105 ease-in duration-200 grid-flow-col border border-gray-200 text-center rounded-xl py-3 px-16 sm:p-8 dark:border-gray-700 bg-white shadow-md md:w-auto focus:outline-none">
                        <h4 class="font-medium text-xl text-gray-800 dark:text-gray-200 uppercase">{{ date('M', strtotime($certificate->event->date)) }}</h4>
                        <span class="my-5 font-bold text-5xl text-gray-800 dark:text-gray-200 ">{{ date('j', strtotime($certificate->event->date)) }}</span>
                        <p class=" text-lg text-gray-500">{{ date('o', strtotime($certificate->event->date)) }}</p>
                    </div>
                    {{-- end date --}}
                  
                </div>
               
            </div>
            <!-- End Blog Article -->

      
    </div>

    </div>
@endsection
