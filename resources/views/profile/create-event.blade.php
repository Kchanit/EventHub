@extends('layouts.main')

@section('content')
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-1 pb-14 mx-auto">
        <form id="myForm" name="myForm" action="{{ route('profile.store-event') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-md dark:bg-slate-900">

                <div class="p-4 sm:pt-0 sm:p-7">
                    <!-- Grid -->
                    <div class="space-y-4 sm:space-y-6">

                        <h1 class="text-2xl font-bold text-center pt-10">
                            Create your event
                        </h1>
                        <div class="space-y-2">
                            <label for="title"
                                class="inline-block text-sm font-medium text-gray-800 mt-4 dark:text-gray-200">
                                Event title
                            </label>

                            <input id="title" type="text" name="title" value="{{ old('title', '') }}"
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

                            <input id="location" type="text" name="location" value="{{ old('location', '') }}"
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
                                <input id="start_date" name="start_date" type="date" value="{{ old('start_date', '') }}"
                                    class="@error('date') border-red-400 @enderror py-2 px-3 pr-11 border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Select start date">
                                <div id="dateInputs" class="hidden">
                                    <span class="mx-2">
                                        to
                                    </span>
                                    <input id="end_date" name="end_date" type="date" value="{{ old('end_date', '') }}"
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
                                value="{{ old('attendees_limit', '') }}"
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
                                    onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]); document.getElementById('preview').style.display = 'block'; document.getElementById('upload').style.display = 'none';">
                                <img id="preview" class="hidden max-h-[400px] mx-auto shadow-md rounded-lg">
                                <div id="upload">
                                    <svg class="w-10 h-10 mx-auto text-gray-400 dark:text-gray-600"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                        <path
                                            d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                    </svg>
                                    <span class="upload-text mt-2 block text-sm text-gray-800 dark:text-gray-200">
                                        Browse your device or <span class="group-hover:text-blue-700 text-blue-600">drag 'n
                                            drop'</span>
                                    </span>
                                    <span class="upload-text mt-1 block text-xs text-gray-500">
                                        Maximum file size is 2 MB
                                    </span>
                                </div>
                            </label>
                            @error('image')
                                <div class=" text-red-500 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        {{-- <div class="space-y-2">
                            <label for="af-submit-app-category"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Category
                            </label>

                            <select id="af-submit-app-category"
                                class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option selected>Select a category</option>
                                <option>Seminar</option>
                                <option>Workshop</option>
                                <option>Music</option>
                                <option>Art</option>
                                <option>Sport</option>
                                <option>Others</option>
                            </select>
                        </div> --}}

                        <div class="space-y-2">
                            <label for="description"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                                Description
                            </label>

                            <textarea id="description" name="description"
                                class="@error('description') border-red-400 @enderror py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="6"
                                placeholder="A detailed summary will better explain your event to the attendees. Our users will see this in your dedicated event page.">{{ old('description') }}</textarea>
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
                            class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 text-blue-500 dark:bg-blue-700 dark:border-blue-600 dark:text-blue-100">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 7.75C11.3787 7.75 10.875 8.25368 10.875 8.875C10.875 9.28921 10.5392 9.625 10.125 9.625C9.71079 9.625 9.375 9.28921 9.375 8.875C9.375 7.42525 10.5503 6.25 12 6.25C13.4497 6.25 14.625 7.42525 14.625 8.875C14.625 9.58584 14.3415 10.232 13.883 10.704C13.7907 10.7989 13.7027 10.8869 13.6187 10.9708C13.4029 11.1864 13.2138 11.3753 13.0479 11.5885C12.8289 11.8699 12.75 12.0768 12.75 12.25V13C12.75 13.4142 12.4142 13.75 12 13.75C11.5858 13.75 11.25 13.4142 11.25 13V12.25C11.25 11.5948 11.555 11.0644 11.8642 10.6672C12.0929 10.3733 12.3804 10.0863 12.6138 9.85346C12.6842 9.78321 12.7496 9.71789 12.807 9.65877C13.0046 9.45543 13.125 9.18004 13.125 8.875C13.125 8.25368 12.6213 7.75 12 7.75ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                        fill="#1593f4"></path>
                                </g>
                            </svg>
                        </span>
                        <!-- End Icon -->

                        <div class="grow">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                Create New Event
                            </h3>
                            <p class="text-gray-500">
                                Are you sure you want to create this event? All details will be saved.
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
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>
    </form>
    {{-- end modal --}}
    <script>
        var form = document.forms["myForm"]; // storing the form
        // Get the modal
        var modal = document.getElementById("modal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the element that closes the modal
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
    <script>
        const singleDayRadio = document.getElementById('single_day');
        const multiDayRadio = document.getElementById('multi_day');
        const dateInputs = document.getElementById('dateInputs');

        singleDayRadio.addEventListener('change', () => {
            dateInputs.style.display = 'none';
        });

        multiDayRadio.addEventListener('change', () => {
            dateInputs.style.display = 'block';
        });
    </script>
@endsection
