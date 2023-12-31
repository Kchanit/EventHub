@extends('layouts.main2')

@section('content')

    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Attendees <span
                                        class="ml-3 font-normal text-xs text-gray-600 dark:text-gray-400">{{ $event->title }}</span>
                                </h2>


                                {{-- <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Add users, edit and more.
                                </p> --}}
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ count($event->attendees) . ' / ' . $event->attendees_limit }}</span>

                                </p>
                            </div>


                            {{-- <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        href="#">
                                        View all
                                    </a>

                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="#">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Add user
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <div class="min-h-[485px] overflow-auto max-h-[540px]">
                            <table
                                class="table-auto overflow-scroll min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                @if (count($event->attendees))
                                    <thead class="bg-gray-50 dark:bg-slate-800 sticky top-0">
                                        <tr>
                                            {{-- <th scope="col" class="pl-6 py-3 text-left">
                                        <label for="hs-at-with-checkboxes-main" class="flex">
                                            <input type="checkbox"
                                                class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-main">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </th> --}}
                                            <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="pl-5 text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        No.
                                                    </span>
                                                </div>
                                            </th>
                                            <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="pl-5 text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Name
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Faculty
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Year
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Email
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-left">
                                                <div class="flex items-center gap-x-2">
                                                    <span
                                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                        Phone
                                                    </span>
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-right"></th>
                                        </tr>
                                    </thead>
                                    <div class="overflow-auto">
                                        {{-- item --}}

                                        @foreach ($event->attendees as $user)
                                            <tbody class=" divide-gray-200 dark:divide-gray-700">
                                                <tr class="w-full h-5 overflow-y-auto border">
                                                    {{-- <td class="h-px w-px whitespace-nowrap">
                                                        <div class="pl-6 py-3">
                                                            <label for="hs-at-with-checkboxes-1" class="flex">
                                                                <input type="checkbox"
                                                                    class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                                    id="hs-at-with-checkboxes-1">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td> --}}

                                                    {{-- no. --}}
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                                {{ $loop->iteration }}
                                                            </span>
                                                        </div>
                                                    </td>

                                                    {{-- image+name --}}
                                                    <td class="pl-5 h-px w-px whitespace-nowrap">
                                                        <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"
                                                                    src="{{ asset('storage/' . $user->image_url) }}"
                                                                    alt="Image Description">
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                                        {{ $user->name }}
                                                                    </span>
                                                                    <span class="block text-sm text-gray-500">
                                                                        {{ $user->student_id }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- faculty --}}
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            {{-- <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Director</span> --}}
                                                            <span class="block text-sm text-gray-500">
                                                                {{ $user->faculty }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    {{-- year --}}
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class=" ml-3 text-sm text-gray-500">
                                                                {{ $user->college_year }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    {{-- email --}}
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="block text-sm text-gray-500">
                                                                {{ $user->email }}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    {{-- phone --}}
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span class="text-xs text-gray-500">
                                                                    {{ $user->phone_number }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </div>
                                @else
                                    {{-- no attendees --}}
                                    <div
                                        class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                        <div
                                            class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-md dark:bg-gray-800">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                            </svg>

                                        </div>

                                        <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                            No attendees yet</h2>
                                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                            Promote your event to attract attendees and make it a success!
                                        </p>

                                    </div>
                                @endif
                        </div>
                        {{-- end item --}}
                        </table>
                    </div>
                    <!-- End Table -->

                    <!-- Footer -->
                    {{-- <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        Prev
                                    </button>

                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        Next
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
    </div>
    <!-- End Table Section -->

    {{-- <script>
        function xData() {
            /**
             * Shuffle an array
             * @param {Array} array
             * @source https://stackoverflow.com/a/2450976/6940144
             */
            function shuffle(array) {
                let currentIndex = array.length,
                    randomIndex;

                // While there remain elements to shuffle.
                while (currentIndex != 0) {
                    // Pick a remaining element.
                    randomIndex = Math.floor(Math.random() * currentIndex);
                    currentIndex--;

                    // And swap it with the current element.
                    [array[currentIndex], array[randomIndex]] = [
                        array[randomIndex],
                        array[currentIndex],
                    ];
                }

                return array;
            }

            const posts = [{
                    name: "Napatsorn Laopitakkul",
                    faculty: "Science",
                    email: "napatsorn@ku.th",
                    phone: "xxx-xxx-xxxx",
                    image: "https://www.svgrepo.com/show/271865/mute.svg"
                },
                {
                    name: "Chanitaphon Lohamongkol",
                    faculty: "Science",
                    email: "chanitaphon@ku.th",
                    phone: "xxx-xxx-xxxx",
                    image: "https://www.svgrepo.com/show/271873/flushed-emoji.svg"
                },
                {
                    name: "Phawat Pongthawaradet",
                    faculty: "Science",
                    email: "phawat@ku.th",
                    phone: "xxx-xxx-xxxx",
                    image: "https://www.svgrepo.com/show/271871/smirking-emoji.svg"
                },
                {
                    name: "Dujrawee Lhoayookhong",
                    faculty: "Science",
                    email: "dujrawee@ku.th",
                    phone: "xxx-xxx-xxxx",
                    image: "https://www.svgrepo.com/show/271856/smile.svg"

                },
            ];

            return {
                posts: [
                    ...shuffle(posts),
                    ...shuffle(posts),
                    ...shuffle(posts),
                    ...shuffle(posts),
                ],
            };
        }
    </script> --}}
@endsection
