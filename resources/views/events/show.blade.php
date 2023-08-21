@extends('layouts.main2')

@section('content')

    <section class="bg-white">
        <div class="py-2 px-8 mx-auto">
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

                        <!-- Reviews -->
                        <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                            <!-- Card -->
                            <div class="py-5">
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <h4 class="text-xs uppercase tracking-wide text-gray-500">
                                                Total Attendees</h4>
                                        </div>

                                        <div class="mt-1 flex items-center">
                                            <p class="mt-2 sm:mt-3 text-4xl sm:text-xl font-bold text-blue-500">
                                                {{ $event->attendees->count() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div class="pt-5">
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                                Countdown
                                            </p>
                                        </div>
                                        <div class="mt-1 flex items-center">
                                            <h3 id="countdown" class="text-xl sm:text-2xl font-medium text-gray-800 ">
                                                Loading...
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Reviews -->
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


            <dl class="max-w-4xl text-gray-900 divide-y divide-gray-200 ">
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
                <div class="flex items-center space-x-4">
                    <a href="{{ route('events.edit', $event) }}"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Edit
                    </a>

                    <form id="delete-event-form" action="{{ route('events.destroy', $event) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button"
                            onclick="event.preventDefault(); document.getElementById('delete-event-form').submit();"
                            class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            @endcan
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
