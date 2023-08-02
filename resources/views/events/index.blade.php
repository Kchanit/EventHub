@extends('layouts.main')

@section('content')
<div>
    <div class="flex items-center justify-between">
        <div>

            <h1 class="text-2xl">
                All Events
            </h1>
            <p class="text-sm text-gray-500">
                Let's see all events happening in the university
            </p>
        </div>
        <a href="{{ route('users.create-event') }}" class="py-2.5 px-6 bg-white text-gray-800 rounded-3xl inline-flex gap-x-2 content-center shadow-md">
            <!-- <svg class="w-[20px] h-[20px] text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg> -->
            Create Event
        </a>
    </div>

    <!-- Event Cards -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->



            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="h-52 flex flex-col justify-center items-center bg-gray-300 rounded-t-xl">

                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        20-21 July
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
                        Freshy Night
                    </h3>
                    <p class="mt-3 text-gray-500">
                        Something or somewhere about this event.
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                        Apply
                    </a>
                </div>
            </div>
            <!-- End Card -->



        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->

</div>
@endsection