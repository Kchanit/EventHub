@extends('layouts.main')

@section('content')
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-1 pb-14 mx-auto">
        <form action="{{ route('events.update', ['event' => $event]) }}" method="POST" enctype="multipart/form-data">
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
                        <button type="submit"
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Submit your event
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </form>
    </div>
    <!-- End Card Section -->
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
