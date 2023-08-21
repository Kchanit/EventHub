@extends('layouts.main2')

@section('content')

    <section class="relative bg-white ">
        <!-- Gradients -->
        <div aria-hidden="true" class="absolute flex transform -translate-x-1/2 -top-96 left-1/2">
            <div
                class="bg-gradient-to-r from-violet-300/50 to-purple-100 -z-40 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
            </div>
            <div
                class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 -z-40 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
            </div>
        </div>
        <!-- End Gradients -->

        <div class="relative px-8 py-2 mx-auto">
            <!-- Hero -->
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 ">
                <!-- Grid -->
                <div class="grid gap-4 md:grid-cols-2 md:gap-8 xl:gap-20 lg:justify-center md:items-center ">
                    <div>
                        <h1
                            class="block text-3xl font-bold text-gray-800 line-clamp-2 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">
                            {{ $event->title }}
                        </h1>
                        <p class="mt-3 text-lg text-gray-800 line-clamp-2">{{ $event->description }}</p>

                        <!-- Buttons -->
                        @can('joinEvent', $event)
                            <div class="grid w-full gap-3 mt-7 sm:inline-flex">
                                <form action="{{ route('events.join-event', ['event' => $event]) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-center text-white transition bg-blue-600 border border-transparent rounded-md gap-x-3 lg:text-base hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-offset-gray-800"
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
                        @else
                            <button type="submit"
                                class="inline-flex items-center justify-center px-4 py-3 mt-5 text-sm text-center text-gray-500 transition bg-white border border-transparent rounded-md shadow-lg cursor-not-allowed fonot-medium gap-x-3 lg:text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-offset-gray-800"
                                disabled>
                                Join event
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                        @endcan
                        <!-- End Buttons -->

                        <!-- Items -->
                        <div class="grid grid-cols-2 mt-6 lg:mt-10 gap-x-5">
                            <!-- Count Attendess Card -->
                            <div class="flex flex-col bg-white border shadow-sm p-7 rounded-xl">
                                <h4 class="text-xs tracking-wide text-gray-500 uppercase">
                                    Total Attendees
                                </h4>

                                <div class="flex items-center content-center mt-1 text-blue-500">
                                    <p class="text-3xl font-bold ">
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
                            <div class="flex flex-col bg-white border shadow-sm p-7 rounded-xl">
                                <p class="text-xs tracking-wide text-gray-500 uppercase">
                                    Countdown
                                </p>

                                <h3 id="countdown" class="text-xl font-medium text-pink-500 sm:text-2xl ">
                                    Loading...
                                </h3>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Items -->
                    </div>
                    <!-- End Col -->

                    <div class="relative ml-4">
                        <img class="object-cover w-3/4 rounded-md" src="{{ asset('storage/' . $event->image_url) }}"
                            alt="Image Description">

                    </div>
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Hero -->

            <div class="flex max-w-[85rem] mt-10 mx-auto px-8 gap-x-28 ">

                <dl class="w-2/3 text-gray-900 divide-y divide-gray-200 ">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg ">Date</dt>
                        <dd class="text-lg font-semibold">{{-- Date --}}
                            @if ($event->end_date === null)
                                <!--Single Date -->
                                <span class="uppercase ">
                                    {{ date('d F Y', strtotime($event->start_date)) }}
                                </span>
                            @else
                                {{-- Multiple Dates --}}
                                {{-- Same month --}}
                                @if (date('m', strtotime($event->start_date)) == date('m', strtotime($event->end_date)))
                                    <span class="uppercase ">
                                        {{ date('d', strtotime($event->start_date)) . ' - ' . date('d F Y', strtotime($event->end_date)) }}
                                    </span>
                                @else
                                    {{-- Diff month --}}
                                    <span class="uppercase ">
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
                            class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
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
                            <button type="button" id="myBtn"
                                onclick="event.preventDefault(); document.getElementById('delete-event-form').submit();"
                                class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-red-600 border border-transparent rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
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


    {{-- modal --}}
    <div id="modal"
        class="hidden w-full h-full justify-center fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto backdrop-brightness-75 ">
        <div class="self-center md:max-w-2xl md:w-full m-3 md:mx-auto">
            <div
                class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                <div class="absolute top-2 right-2">
                    <button type="button" id="close"
                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                        <span class="sr-only">Close</span>
                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>

                <div class="p-4 sm:p-10 overflow-y-auto">
                    <div class="flex gap-x-4 md:gap-x-7">
                        <!-- Icon -->
                        <span
                            class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </span>
                        <!-- End Icon -->

                        <div class="grow">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                Delete Event
                            </h3>
                            <p class="text-gray-500">
                                Permanently remove your Event and all of its contents.
                                This action is not reversible, so please continue with caution.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                    <button type="button" id="cancel"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-overlay="#hs-danger-alert">
                        Cancel
                    </button>
                    <button
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                        onclick="fadeOut(modal);validateForm();">
                        Delete Event
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
        // Get the modal
        var modal = document.getElementById("modal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var close = document.getElementById("close");
        var cancel = document.getElementById("cancel");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            // modal.style.display = "block";
            fadeIn(modal);
        }

        // When the user clicks on <span> (x), close the modal
        cancel.onclick = function() {
            fadeOut(modal);
        }
        close.onclick = function() {
            fadeOut(modal);
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                    el.style.opacity = 1; // Reset opacity for next use
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el) {
            el.style.opacity = 0;
            el.style.display = "flex" || display;
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.1) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }

        function validateForm() {
            event.preventDefault(); // prevent form submit
            var form = document.forms["myForm"]; // storing the form
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Deleted!',
                showConfirmButton: false,
                timer: 1000
            })
            setTimeout(function() {
                form.submit();
            }, 1200);
        }
    </script>
@endsection
