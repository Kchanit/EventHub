@extends('layouts.main')

@section('content')
    <div class="max-w-[64rem] sm:px-6 lg:px-1 lg:py-5 mx-auto">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h1 class="text-3xl font-semibold">
                    Past Events
                </h1>
                <p class="text-sm text-gray-500">
                    A look back at your event history
                </p>
            </div>
        </div>
        <!-- component -->
        <!-- Card List Section --
                        <!-- Card Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($events as $event)
                <!-- Card Item -->
                <div
                    class=" rounded-3xl overflow-hidden shadow-lg h-[28rem] shadow-gray-300  bg-white  duration-150 hover:-translate-y-1">

                    <!-- Clickable Area -->
                    <a href=" {{ route('events.certificate', ['event' => $event]) }} " class="cursor-pointer ">
                        <figure class="group relative">
                            <span
                                class="z-50 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:ease-in-out absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pr-10 pl-10 pt-4 pb-4 text-center text-black bg-opacity-90 bg-white  dark:text-white dark:bg-opacity-95  dark:bg-gray-800  rounded-3xl">
                                View Certificate
                            </span>

                            <!-- Image -->

                            <!-- Image -->
                            <img class="bg-gray-300  h-full w-full object-cover z-0"
                                src="{{ asset('storage/' . $event->image_url) }}" />

                            <div class="px-4 py-2">
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
            @endforeach
        </div>
    </div>
    </div>
@endsection
