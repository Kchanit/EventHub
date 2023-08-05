@extends('layouts.main')

@section('content')
<div>
    <div class="flex items-center justify-between">
        <div>

            <h1 class="text-3xl font-bold">
                All Events
            </h1>
            <p class="text-sm text-gray-500">
                Let's see all events happening in the university
            </p>
        </div>

        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
            <button type="button">
                <a href="{{ route('profile.create-event') }}" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-black rounded-lg bg-white border border-gray-200 shadow-md md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">

                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Create Event
                </a>
            </button>
            <div class="flex items-center w-full space-x-3 md:w-auto">
                <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 shadow-md bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                    Sort
                </button>
                <div id="actionsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Date</a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Title</a>
                    </div>
                </div>
                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium shadow-md text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                    </svg>
                    Filter
                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                        Type
                    </h6>
                    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                        <li class="flex items-center">
                            <input id="Eligible" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                            <label for="Eligible" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                Eligible
                            </label>
                        </li>
                        <li class="flex items-center">
                            <input id="Ineligible" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                            <label for="Ineligible" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                Ineligible
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Cards -->
    <div class="max-w-[64rem] sm:px-6 lg:px-1 lg:py-12 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card -->
            <div class=" rounded-3xl overflow-hidden shadow-lg shadow-gray-300 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-150 hover:-translate-y-1">
                <!-- Clickable Area -->
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <figure class="group relative">
                        <!-- Image -->
                        <img class="bg-gray-300  h-full w-full object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                        <div class="px-4 py-2">
                            <!-- Date -->
                            <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                20-21 July
                            </span>
                            <!-- Title -->
                            <p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                Freshy Night
                            </p>
                            <p class="text-gray-500">
                                Bangkok
                            </p>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class=" rounded-3xl overflow-hidden shadow-lg shadow-gray-300 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-150 hover:-translate-y-1">
                <!-- Clickable Area -->
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <figure class="group relative">
                        <!-- Image -->
                        <img class="bg-gray-300  h-full w-full object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                        <div class="px-4 py-2">
                            <!-- Date -->
                            <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                20-21 July
                            </span>
                            <!-- Title -->
                            <p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                Freshy Night
                            </p>
                            <p class="text-gray-500">
                                Bangkok
                            </p>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class=" rounded-3xl overflow-hidden shadow-lg shadow-gray-300 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-150 hover:-translate-y-1">
                <!-- Clickable Area -->
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <figure class="group relative">
                        <!-- Image -->
                        <img class="bg-gray-300  h-full w-full object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                        <div class="px-4 py-2">
                            <!-- Date -->
                            <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                20-21 July
                            </span>
                            <!-- Title -->
                            <p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                Freshy Night
                            </p>
                            <p class="text-gray-500">
                                Bangkok
                            </p>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class=" rounded-3xl overflow-hidden shadow-lg shadow-gray-300 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-150 hover:-translate-y-1">
                <!-- Clickable Area -->
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <figure class="group relative">
                        <!-- Image -->
                        <img class="bg-gray-300  h-full w-full object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                        <div class="px-4 py-2">
                            <!-- Date -->
                            <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                                20-21 July
                            </span>
                            <!-- Title -->
                            <p class="text-lg font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                                Freshy Night
                            </p>
                            <p class="text-gray-500">
                                Bangkok
                            </p>
                        </div>
                    </figure>
                </a>
            </div>
            <!-- End Card -->


        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
    <hr>


    <!-- Event Cards -->
    <div class="max-w-[50rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card -->
            <div class="flex ">
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <img class="bg-gray-300  w-full rounded-md  object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                    <div class="pt-2 px-2">
                        <!-- Date -->
                        <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                            20-21 July
                        </span>
                        <!-- Title -->
                        <p class="text-lg  font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                            Freshy Night
                        </p>
                        <p class="text-gray-500">
                            Bangkok
                        </p>
                    </div>
                </a>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex ">
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <img class="bg-gray-300  w-full rounded-md  object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                    <div class="pt-2 px-2">
                        <!-- Date -->
                        <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                            20-21 July
                        </span>
                        <!-- Title -->
                        <p class="text-lg  font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                            Freshy Night
                        </p>
                        <p class="text-gray-500">
                            Bangkok
                        </p>
                    </div>
                </a>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex ">
                <a href="{{ route('events.show') }}" class="cursor-pointer">
                    <img class="bg-gray-300  w-full  rounded-md object-cover z-0" src="https://s3-ap-southeast-1.amazonaws.com/tm-img-poster-event/586d3de00b4411ee911101117567899b.png?format=basic&resize=w425,h610" />
                    <div class="pt-2 px-2">
                        <!-- Date -->
                        <span class="block text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                            20-21 July
                        </span>
                        <!-- Title -->
                        <p class="text-lg  font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                            Freshy Night
                        </p>
                        <p class="text-gray-500">
                            Bangkok
                        </p>
                    </div>
                </a>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->

</div>
@endsection