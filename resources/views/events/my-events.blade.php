@extends('layouts.main')

@section('content')
    <div class="max-w-[64rem] sm:px-6 lg:px-1 lg:py-5 mx-auto">
        {{-- Start Drafted Events --}}
        {{-- Header --}}
        <div class="flex items-center justify-between mb-5">
            <div>
                <h1 class="text-3xl font-semibold">
                    Drafted Events
                </h1>
                <p class="text-sm text-gray-500">
                    Events you have drafted for and have not published yet.
                </p>
            </div>

            <div
                class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">

                <div class="flex items-center w-full space-x-3 md:w-auto">
                    <div x-data="{ isOpen: false }">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" @click="isOpen=!isOpen"
                            @click.away="isOpen=false"
                            class="py-2 px-3 inline-flex justify-center items-center gap-1 rounded-md border font-medium bg-white text-gray-700 shadow-lg align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm "
                            type="button">
                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                            Sort
                        </button>
                        {{-- Dropdown --}}
                        <div id="actionsDropdown" x-show="isOpen"
                            class="z-10 absolute mt-1 bg-white divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Date</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Title</a>
                            </div>
                        </div>
                    </div>
                    {{-- Filter --}}
                    <div x-data="{ isOpen: false }">
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" @click="isOpen=!isOpen"
                            @click.away="isOpen=false"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-lg align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm "
                            type="button">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            Filter

                        </button>
                        <!-- Dropdown menu -->
                        <div x-show="isOpen" id="filterDropdown"
                            class="z-10 w-48 p-3 absolute mt-1 bg-white rounded-lg shadow ">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 ">
                                Type
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="Eligible" type="checkbox" value="" checked
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500  focus:ring-2 " />
                                    <label for="Eligible" class="ml-2 text-sm font-medium text-gray-900 ">
                                        Eligible
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="Ineligible" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500  focus:ring-2 " />
                                    <label for="Ineligible" class="ml-2 text-sm font-medium text-gray-900 ">
                                        Ineligible
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Header --}}
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($drafted_events as $event)
                <!-- Card -->
                <div
                    class=" rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <a href=" {{ route('events.show', ['event' => $event]) }} ">
                        <figure class="group relative">
                            {{-- Image from upload --}}
                            {{-- <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" /> --}}

                            <!-- Image -->
                            <img class="bg-gray-300 h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" />

                            <div class="px-4 py-2">
                                <div class="flex justify-between items-center">
                                    {{-- Date --}}
                                    @if ($event->end_date === null)
                                        <!--Single Date -->
                                        <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                            {{ date('d F', strtotime($event->start_date)) }}
                                        </span>
                                    @else
                                        {{-- Multiple Dates --}}
                                        {{-- Same month --}}
                                        @if (date('m', strtotime($event->start_date)) == date('m', strtotime($event->end_date)))
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d', strtotime($event->start_date)) . ' - ' . date('d F', strtotime($event->end_date)) }}
                                            </span>
                                        @else
                                            {{-- Diff month --}}
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d M', strtotime($event->start_date)) . ' - ' . date('d M', strtotime($event->end_date)) }}
                                            </span>
                                        @endif
                                    @endif
                                    @switch($event->event_status)
                                        @case('DRAFTED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-normal bg-gray-200 text-gray-800">Drafted</span>
                                        @break

                                        @case('PUBLISHED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Published</span>
                                        @break

                                        @default
                                    @endswitch
                                </div>
                                <!-- Title -->
                                <p class="text-lg font-bold leading-5 line-clamp-2 mt-1 text-gray-800 ">
                                    {{ $event->title }}
                                </p>
                                <p class="text-gray-500 leading-4 mt-1">
                                    {{ $event->location }}
                                </p>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- End Card -->
            @endforeach
        </div>
        <!-- End Grid -->
        {{-- End Drafted Events --}}

        {{-- Start Pending Events --}}
        <div class="flex items-center mt-10 justify-between mb-5">
            <div>
                <h1 class="text-3xl font-semibold">
                    Pending Events
                </h1>
                <p class="text-sm text-gray-500">
                    Events that you have finalized and are waiting for approval.
                </p>
            </div>
        </div>
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($pending_events as $event)
                <!-- Card -->
                <div
                    class=" rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <a href=" {{ route('events.show', ['event' => $event]) }} ">
                        <figure class="group relative">
                            {{-- Image from upload --}}
                            {{-- <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" /> --}}

                            <!-- Image -->
                            <img class="bg-gray-300 h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" />

                            <div class="px-4 py-2">
                                <div class="flex justify-between items-center">
                                    {{-- Date --}}
                                    @if ($event->end_date === null)
                                        <!--Single Date -->
                                        <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                            {{ date('d F', strtotime($event->start_date)) }}
                                        </span>
                                    @else
                                        {{-- Multiple Dates --}}
                                        {{-- Same month --}}
                                        @if (date('m', strtotime($event->start_date)) == date('m', strtotime($event->end_date)))
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d', strtotime($event->start_date)) . ' - ' . date('d F', strtotime($event->end_date)) }}
                                            </span>
                                        @else
                                            {{-- Diff month --}}
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d M', strtotime($event->start_date)) . ' - ' . date('d M', strtotime($event->end_date)) }}
                                            </span>
                                        @endif
                                    @endif
                                    @switch($event->event_status)
                                        @case('DRAFTED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-normal bg-gray-200 text-gray-800">Drafted</span>
                                        @break

                                        @case('PENDING')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-normal bg-yellow-100 text-yellow-800">Pending</span>
                                        @break

                                        @case('PUBLISHED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Published</span>
                                        @break

                                        @default
                                    @endswitch
                                </div>
                                <!-- Title -->
                                <p class="text-lg font-bold leading-5 line-clamp-2 mt-1 text-gray-800 ">
                                    {{ $event->title }}
                                </p>
                                <p class="text-gray-500 leading-4 mt-1">
                                    {{ $event->location }}
                                </p>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- End Card -->
            @endforeach
        </div>
        <!-- End Grid -->
        {{-- End Pending Events --}}


        {{-- Start Published Events --}}
        <div class="flex items-center mt-10 justify-between mb-5">
            <div>
                <h1 class="text-3xl font-semibold">
                    Published Events
                </h1>
                <p class="text-sm text-gray-500">
                    Events that you have finalized and made public.
                </p>
            </div>
        </div>
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($published_events as $event)
                <!-- Card -->
                <div
                    class=" rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <a href=" {{ route('events.show', ['event' => $event]) }} ">
                        <figure class="group relative">
                            {{-- Image from upload --}}
                            {{-- <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" /> --}}

                            <!-- Image -->
                            <img class="bg-gray-300 h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" />

                            <div class="px-4 py-2">
                                <div class="flex justify-between items-center">
                                    {{-- Date --}}
                                    @if ($event->end_date === null)
                                        <!--Single Date -->
                                        <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                            {{ date('d F', strtotime($event->start_date)) }}
                                        </span>
                                    @else
                                        {{-- Multiple Dates --}}
                                        {{-- Same month --}}
                                        @if (date('m', strtotime($event->start_date)) == date('m', strtotime($event->end_date)))
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d', strtotime($event->start_date)) . ' - ' . date('d F', strtotime($event->end_date)) }}
                                            </span>
                                        @else
                                            {{-- Diff month --}}
                                            <span class="block text-xs font-semibold uppercase text-blue-600 ">
                                                {{ date('d M', strtotime($event->start_date)) . ' - ' . date('d M', strtotime($event->end_date)) }}
                                            </span>
                                        @endif
                                    @endif
                                    @switch($event->event_status)
                                        @case('DRAFTED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-normal bg-gray-200 text-gray-800">Drafted</span>
                                        @break

                                        @case('PENDING')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-normal bg-yellow-100 text-yellow-800">Pending</span>
                                        @break

                                        @case('PUBLISHED')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Published</span>
                                        @break

                                        @default
                                    @endswitch
                                </div>
                                <!-- Title -->
                                <p class="text-lg font-bold leading-5 line-clamp-2 mt-1 text-gray-800 ">
                                    {{ $event->title }}
                                </p>
                                <p class="text-gray-500 leading-4 mt-1">
                                    {{ $event->location }}
                                </p>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- End Card -->
            @endforeach
        </div>
        <!-- End Grid -->

    </div>
@endsection
