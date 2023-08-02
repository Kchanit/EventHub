@extends('layouts.main')

@section('content')
    <div>
        
        <!-- Testimonials -->
        <div class="relative overflow-hidden">
        <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute left-0 -z-[1]">
            <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
            <div class="hidden lg:block lg:col-span-2">
                <img class="rounded-xl" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="lg:col-span-4">
                <!-- Blockquote -->
                <blockquote>
                
                <p class="text-xl font-large text-gray-800 lg:text-2xl lg:leading-normal dark:text-gray-200">
                    Your Profile
                </p>
                <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300
                 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white 
                 transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="/info/editInfo">
                        Edit Profile
                </a>
                <footer class="mt-6">
                    <div class="flex items-center">
                    <div class="lg:hidden flex-shrink-0">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1671726203390-cdc4354ee2eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                    </div>
                    <div class="ml-4 lg:ml-0">
                        <p class="font-medium text-gray-800 dark:text-gray-200">
                        Nicole Grazioso
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                        Head of Finance
                        </p>
                    </div>
                    </div>
                </footer>
                </blockquote>
                <!-- End Blockquote -->
            </div>
            <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        </div>
        <!-- End Testimonials -->
            </div>
    </div>
@endsection