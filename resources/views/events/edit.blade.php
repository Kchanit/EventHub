@extends('layouts.main')

@section('content')
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-1 pb-14 mx-auto">
        <form name="myForm" action="{{ route('events.update', ['event' => $event]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-md dark:bg-slate-900">

                <div class="p-4 sm:pt-0 sm:p-7">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        <h1 class="text-2xl font-bold text-center pt-10">
                            Update your event
                        </h1>
                        <div class="space-y-2">
                            <label for="title"
                                class="inline-block text-sm font-medium text-gray-800 mt-4 dark:text-gray-200">
                                Event title
                            </label>

                            <input id="title" type="text" name="title" value="{{ $event->title }}"
                                class="@error('title') border-red-400 @enderror py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Enter event title">
                            @error('title')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="space-y-2">
                            <label for="location"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Location
                            </label>

                            <input id="location" type="text" name="location" value="{{ $event->location }}"
                                class="@error('location') border-red-400 @enderror py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Enter your event location">
                            @error('location')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Date --}}
                        <div class="space-y-2">
                            <label for="event_type"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Event Type
                            </label>

                            <div class="flex items-center space-x-4">
                                <input type="radio" id="single_day" name="event_type" value="single_day" checked>
                                <label for="single_day">Single Day</label>

                                <input type="radio" id="multi_day" name="event_type" value="multi_day">
                                <label for="multi_day">Multi Day</label>
                            </div>
                        </div>

                        <div class="space-y-2 text-sm font-medium  text-gray-800  dark:text-gray-200">
                            <label class="block mt-2.5" for="start_date">
                                Select date
                            </label>
                            <div class="flex">
                                <input id="start_date" name="start_date" type="date" value="{{ $event->start_date }}"
                                    class="@error('date') border-red-400 @enderror py-2 px-3 pr-11 border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Select start date">
                                @error('start_date')
                                    <div class=" text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div id="dateInputs" class="hidden">
                                    <span class="mx-2">
                                        to
                                    </span>
                                    <input id="end_date" name="end_date" type="date" value="{{ $event->end_date }}"
                                        class="@error('date') border-red-400 @enderror py-2 px-3 pr-11 border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        placeholder="Select end date">

                                    @error('end_date')
                                        <div class=" text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- End Date --}}

                        <div class="space-y-2">
                            <label for="attendees_limit"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Attendees limit
                            </label>

                            <input id="attendees_limit" name="attendees_limit" type="number" min="1"
                                value="{{ $event->attendees_limit }}"
                                class="@error('attendees_limit') border-red-400 @enderror py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="10">
                            @error('attendees_limit')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="image_url"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Preview image
                            </label>

                            <label for="image_url"
                                class="@error('image_url') border-red-400 @enderror group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-gray-700">
                                <input id="image_url" name="image_url" type="file" class="sr-only" accept="image/*"
                                    onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);">
                                <img src="{{ asset('storage/' . $event->image_url) }}" id="preview"
                                    class="max-h-[400px] mx-auto shadow-md rounded-lg">

                            </label>
                            @error('image')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="description"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Description
                            </label>

                            <textarea id="description" name="description"
                                class="@error('description') border-red-400 @enderror py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="6"
                                placeholder="A detailed summary will better explain your event to the attendees. Our users will see this in your dedicated event page.">{{ $event->description }}</textarea>
                            @error('description')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-center gap-x-2">
                        <button type="button" id="myBtn"
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Submit your event
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        
    </div>
    <!-- End Card Section -->

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
                            class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-green-50 bg-green-100 textgreene-500 dark:bg-green-700 dark:border-green-600 dark:text-green-100">
                            <svg class="w-10 h-10" fill="#3da81f" viewBox="0 0 64.00 64.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" stroke="#3da81f" stroke-width="0.00064"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.256"></g><g id="SVGRepo_iconCarrier"> <g transform="matrix(1,0,0,1,-640,-320)"> <rect id="Icons" x="0" y="0" width="1280" height="800" style="fill:none;"></rect> <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1" serif:id="Pen"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check" transform="matrix(1,0,0,0.99911,0,0.24916)"> <path id="radio-check1" serif:id="radio-check" d="M672.021,328C685.279,328 696.043,338.764 696.043,352.021C696.043,365.279 685.279,376.043 672.021,376.043C658.764,376.043 648,365.279 648,352.021C648,338.764 658.764,328 672.021,328ZM687.751,342.828L665.123,365.456L656,356.332L658.767,353.566L665.062,359.861L684.922,340C685.865,340.943 686.808,341.886 687.751,342.828Z"></path> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g transform="matrix(0.638317,0.368532,-0.368532,0.638317,785.021,-208.975)"> <g id="coffee-beans"> <g id="coffee-bean1" serif:id="coffee-bean"> </g> </g> </g> <g id="coffee-bean-filled"> </g> <g transform="matrix(0.638317,0.368532,-0.368532,0.638317,913.062,-208.975)"> <g id="coffee-beans-filled"> <g id="coffee-bean2" serif:id="coffee-bean"> </g> </g> </g> <g id="clipboard"> </g> <g transform="matrix(1,0,0,1,128.011,1.35415)"> <g id="clipboard-paste"> </g> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g> </g></svg>                        
                        </span>
                        <!-- End Icon -->

                        <div class="grow">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                Update Event
                            </h3>
                            <p class="text-gray-500">
                                Are you sure you want to update this event? All changes will be saved.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                    <button type="button" id="cancel"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-overlay="#hs-danger-alert">
                        Close
                    </button>
                    <button type="submit"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
    {{-- end mpdal --}}
    <script>
        var form = document.forms["myForm"]; // storing the form
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
    </script>
@endsection
