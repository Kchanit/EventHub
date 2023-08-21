@extends('layouts.main')

@section('content')
    <section>
        <div class="max-w-[70rem] px-4 py- mx-auto sm:px-6 sm:py-12 lg:px-8 lg:py-0">
            {{-- <h1 class="text-3xl font-semibold">
                    New Events
                </h1> --}}

            {{-- <p class="max-w-md mx-auto mt-4 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                    praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                    natus?
                </p> --}}

            <ul class="px-6 grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
                <li>
                    <a href="{{ route('events.show', ['event' => $promos[0]]) }}" class="relative block group">
                        <img src="{{ asset('storage/' . $promos[0]->image_url) }}" alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90 round" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">{{ $promos[0]->title }}</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Join Now
                            </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('events.show', ['event' => $promos[1]]) }}" class="relative block group">
                        <img src="{{ asset('storage/' . $promos[1]->image_url) }}" alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">{{ $promos[1]->title }}</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Join Now
                            </span>
                        </div>
                    </a>
                </li>

                <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                    <a href="{{ route('events.show', ['event' => $promos[2]]) }}" class="relative block group">
                        <img src="{{ asset('storage/' . $promos[2]->image_url) }}" alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">{{ $promos[2]->title }}</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Join Now
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Event Cards -->
    <div class="max-w-[64rem] sm:px-6 lg:px-1 lg:py-5 mx-auto">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-5">
            <div>
                <h1 class="text-3xl font-semibold">
                    All Events
                </h1>
                <p class="text-sm text-gray-500">
                    Events you have drafted for and have not published yet.
                </p>
            </div>

            <div
                class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                <button type="button">
                    <a href="{{ route('profile.create-event') }}"
                        class="py-2 px-3 inline-flex justify-center items-center gap-1 rounded-md border font-medium bg-white text-gray-700 shadow-lg align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">

                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Create Event
                    </a>
                </button>
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
        <div class=" card mycard grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($events as $event)
                <!-- Card -->
                <div
                    class="rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <a href=" {{ route('events.show', ['event' => $event]) }} ">
                        <figure class="group relative">
                            {{-- Image from upload --}}
                            {{-- <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" /> --}}

                            <!-- Image -->
                            <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" />

                            <div class="px-4 py-2">
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

        {{-- Pagination --}}
        <div class="flex justify-center mt-10">
            {{ $events->links() }}
        </div>
        {{--  --}}
    </div>
    <!-- End Card Blog -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/search",
                    data: {
                        'search': value
                    },
                    success: function(data) {
                        $('.mycard').html(data);
                    }
                });

            });
        });
    </script>
@endsection
