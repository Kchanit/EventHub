@extends('layouts.main')

@section('content')
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 mt-4 sm:px-6 lg:px-8  mx-auto">
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
                                    Attendees of {event name}
                                </h2>
                                
                                {{-- <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Add users, edit and more.
                                </p> --}}
                            </div>
                            <div>
                              <p class="text-sm text-gray-600 dark:text-gray-400">
                                  <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
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
                        <div class="min-h-[540px] overflow-auto max-h-[540px]">
                        <table class="table-auto overflow-scroll min-w-full divide-y divide-gray-200 dark:divide-gray-700">
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

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Time
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-right"></th>
                                </tr>
                            </thead>
                            <div class="overflow-auto">
                            {{-- item --}}
                            <tbody x-data="xData()" class=" divide-gray-200 dark:divide-gray-700">
                                <template x-for="post in posts">
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
                                        {{-- image+name --}}
                                        <td class="pl-5 h-px w-px whitespace-nowrap">
                                            <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"
                                                        :src="post.image" alt="Image Description">
                                                    <div class="grow">
                                                        {{-- <span x-text="post.name"
                                                        class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Christina
                                                        </span> --}}
                                                        <span x-text="post.name"
                                                            class="block text-sm text-gray-500">christina@site.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- faculty --}}
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                {{-- <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Director</span> --}}
                                                <span x-text="post.faculty" class="block text-sm text-gray-500">Human
                                                    resources</span>
                                            </div>
                                        </td>
                                        {{-- email --}}

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span x-text="post.email" class="block text-sm text-gray-500">Human
                                                    resources</span>
                                            </div>
                                        </td>
                                        {{-- phone --}}
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <span x-text="post.phone" class="text-xs text-gray-500">1/5</span>

                                                </div>
                                            </div>
                                        </td>
                                        {{-- create --}}
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-500">28 Dec, 12:12</span>
                                            </div>
                                        </td>
                                        {{-- button --}}
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-1.5">
                                                <a class=" rounded-3xl border border-gray-200 inline-flex items-center gap-x-1.5 px-3 mr-5 text-lg text-green-600 decoration-2 hover:scale-110 font-medium"
                                                    href="#">
                                                    ✔︎
                                                </a>
                                                <a class="rounded-3xl border inline-flex items-center gap-x-1.5 px-3 text-lg text-red-600 decoration-2 hover:scale-110 font-medium"
                                                    href="#">
                                                    ✘
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
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
    <script>
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
    </script>
@endsection
