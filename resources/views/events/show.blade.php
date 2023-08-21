@extends('layouts.main2')

@section('content')

    <section class="bg-white relative   ">
        <!-- Gradients -->
        <div aria-hidden="true" class="flex absolute -top-96 left-1/2 transform -translate-x-1/2">
            <div
                class="bg-gradient-to-r from-violet-300/50 to-purple-100 -z-40 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
            </div>
            <div
                class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 -z-40 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
            </div>
        </div>
        <!-- End Gradients -->

        <div class="py-2 px-8 mx-auto relative">
            <!-- Hero -->
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 ">
                <!-- Grid -->
                <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 lg:justify-center md:items-center ">
                    <div>
                        <h1
                            class="block text-3xl line-clamp-2 font-bold text-gray-800 sm:text-4xl  lg:text-5xl lg:leading-tight dark:text-white">
                            {{ $event->title }}
                        </h1>
                        <p class="mt-3 text-lg text-gray-800  line-clamp-2">{{ $event->description }}</p>

                        <!-- Buttons -->
                        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                            <form action="{{ route('events.join-event', ['event' => $event]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                                    href="#">
                                    Join event
                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </form>


                        </div>
                        <!-- End Buttons -->

                        <!-- Items -->
                        <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                            <!-- Count Attendess Card -->
                            <div class=" p-7 flex flex-col bg-white border shadow-sm rounded-xl">
                                <h4 class="text-xs uppercase tracking-wide text-gray-500">
                                    Total Attendees
                                </h4>

                                <div class="mt-1 flex items-center content-center text-blue-500">
                                    <p class="text-3xl  font-bold ">
                                        {{ $event->attendees->count() }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22"
                                        class="inline-block w-6 h-6 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Countdown Card -->
                            <div class=" p-7 flex flex-col bg-white border shadow-sm rounded-xl">
                                <p class="text-xs uppercase tracking-wide text-gray-500">
                                    Countdown
                                </p>

                                <h3 id="countdown" class="text-xl sm:text-2xl font-medium text-pink-500 ">
                                    Loading...
                                </h3>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Items -->
                    </div>
                    <!-- End Col -->

                    <div class="relative ml-4">
                        <img class="w-3/4 rounded-md object-cover" src="{{ asset('storage/' . $event->image_url) }}"
                            alt="Image Description">

                    </div>
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Hero -->

            <div class="flex max-w-[85rem] mt-10 mx-auto px-8 gap-x-28 ">

                <dl class=" text-gray-900 divide-y w-2/3 divide-gray-200 ">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg ">Date</dt>
                        <dd class="text-lg font-semibold">{{-- Date --}}
                            @if ($event->end_date === null)
                                <!--Single Date -->
                                <span class="  uppercase  ">
                                    {{ date('d F Y', strtotime($event->start_date)) }}
                                </span>
                            @else
                                {{-- Multiple Dates --}}
                                {{-- Same month --}}
                                @if (date('m', strtotime($event->start_date)) == date('m', strtotime($event->end_date)))
                                    <span class="  uppercase  ">
                                        {{ date('d', strtotime($event->start_date)) . ' - ' . date('d F Y', strtotime($event->end_date)) }}
                                    </span>
                                @else
                                    {{-- Diff month --}}
                                    <span class="  uppercase  ">
                                        {{ date('d M', strtotime($event->start_date)) . ' - ' . date('d M', strtotime($event->end_date)) }}
                                    </span>
                                @endif
                            @endif
                        </dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg ">Location</dt>
                        <dd class="text-lg font-semibold">{{ $event->location }}</dd>
                    </div>
                    <div class="flex flex-col pt-3">
                        <dt class="mb-1 text-gray-500 md:text-lg ">Description</dt>
                        <dd class="text-lg font-semibold">{{ $event->description }}</dd>
                    </div>
                </dl>

                {{-- Buttons --}}
                @can('joinEvent', $event)
                    @if (auth()->check())
                        @if ($event->attendees->contains(auth()->user()))
                            <form action="{{ route('events.leave-event', ['event' => $event]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center text-white bg-red-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Leave event
                                </button>
                            </form>
                        @else
                            <form action="{{ route('events.join-event', ['event' => $event]) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Join event
                                </button>
                            </form>
                        @endif
                    @endif
                @endcan

                @can('update', $event)
                    <div class="flex flex-col items-end space-y-4">

                        <a href="{{ route('events.edit', $event) }}"
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                            Edit event
                        </a>

                        <form id="delete-event-form" action="{{ route('events.destroy', $event) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                onclick="event.preventDefault(); document.getElementById('delete-event-form').submit();"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                    </path>
                                </svg>

                                Delete event
                            </button>
                        </form>
                    </div>
                @endcan
                {{-- End Buttons --}}
            </div>
        </div>
    </section>

    <script>
        // Calculate the remaining time in seconds
        function getRemainingTime(endDate) {
            const currentTime = new Date().getTime();
            const endTime = new Date(endDate).getTime();
            const remainingTime = endTime - currentTime;

            return Math.max(remainingTime, 0); // Ensure the countdown is positive
        }

        // Update the countdown timer
        function updateCountdown() {
            const countdownElement = document.getElementById('countdown');
            const endDate = '{{ $event->start_date }}'; // Replace with your event's end date

            const remainingTime = getRemainingTime(endDate);
            const seconds = Math.floor((remainingTime / 1000) % 60);
            const minutes = Math.floor((remainingTime / 1000 / 60) % 60);
            const hours = Math.floor((remainingTime / 1000 / 3600) % 24);
            const days = Math.floor(remainingTime / 1000 / 86400);

            const countdownText = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            countdownElement.textContent = countdownText;

            // Update every second
            setTimeout(updateCountdown, 1000);
        }

        // Start the countdown on page load
        window.addEventListener('load', updateCountdown);
    </script>
@endsection
