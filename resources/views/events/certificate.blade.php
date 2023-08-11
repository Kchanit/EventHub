@extends('layouts.main')

@section('content')
    <div>
        <div class="">
            <div>

                <h1 class="text-2xl">
                    Certificate of Completion: {event_name}
                </h1>
                <p class="text-sm text-gray-500">
                    Awarded to {user_name} for completing {event_name}
                </p>
                <!-- Blog Article -->
                <div class="px-4 pt-8 pb-12 mx-auto gap-5 grid grid-flow-row sm:grid-flow-col justify-evenly">
                    <div class="max-w-3xl hover:scale-105 ease-in duration-300">
                        {{-- cert --}}
                        <img class="w-full object-cover rounded-xl shadow-lg"
                            src="https://templatelab.com/wp-content/uploads/2018/11/Certificate-employee-1-e1542525135159.jpg">
                        {{-- end cert --}}
                    </div>
                    <div class="grid grid-flow-col sm:grid-flow-row gap-5 content-between justify-between">
                        
                        {{-- congrat --}}
                        <div
                            class=" hover:scale-105 ease-in duration-200 grid-flow-col border border-gray-200 text-center rounded-xl py-3 hidden sm:block dark:border-gray-700 bg-white shadow-md md:w-auto focus:outline-none">
                            <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Congrats!</h4>
                            <img class="mx-auto max-h-32 py-5 hidden lg:block" src="https://www.svgrepo.com/show/325796/party-confetti.svg">
                        </div>
                        {{-- end congrat --}}
                        {{-- date --}}
                        <div
                            class="hover:scale-105 ease-in duration-200 grid-flow-col border border-gray-200 text-center rounded-xl py-3 px-16 sm:p-8 dark:border-gray-700 bg-white shadow-md md:w-auto focus:outline-none">
                            <h4 class="font-medium text-xl text-gray-800 dark:text-gray-200 uppercase">Aug</h4>
                            <span class="my-5 font-bold text-5xl text-gray-800 dark:text-gray-200 ">7</span>
                            <p class=" text-lg text-gray-500">2023</p>
                        </div>
                        {{-- end date --}}
                        {{-- download --}}
                        {{-- <div class="flex border  border-gray-200 text-center rounded-xl p-8 dark:border-gray-700 "> --}}
                            <a href="#"
                                class="flex items-center self-stretch px-10 py-5 lg:mt-10 text-base font-medium text-black rounded-lg bg-white border border-gray-200 shadow-md focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg>
                                Download
                            </a>
                        </div>
                        {{-- end download --}}
                    </div>
                    <!-- End Blog Article -->

                </div>
            </div>

        </div>
    @endsection
