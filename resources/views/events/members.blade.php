@extends('layouts.main2')

@section('content')
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-10 lg:py-14 mx-auto">
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
                                    Staff
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Add staff, edit and more.
                                </p>
                            </div>


                            <div class=" @if (count($event->members) < 1) hidden @endif">
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        href="#">
                                        View all
                                    </a>
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="#" id="create-btn">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Add staff
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            @if (count($event->members))
                                <thead class="bg-gray-50 dark:bg-slate-800 sticky top-0">
                                    <tr>
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
                                    @foreach ($event->members as $user)
                                        <tbody class=" divide-gray-200 dark:divide-gray-700">
                                            <tr class="w-full h-5 overflow-y-auto border">

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
                                                                080-xxx-xxxx
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- button --}}
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <div class="px-6 py-1.5">
                                                        @can('update', $event)
                                                            <form
                                                                action="{{ route('events.members.remove', ['event' => $event, 'user' => $user]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" href=""
                                                                    class=" text-gray-400 inline-flex items-center gap-x-1.5 px-3 mr-5 text-sm hover:text-gray-600">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        @endcan
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </div>
                            @else
                                {{-- no members --}}
                                <div class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                    <div
                                        class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-md dark:bg-gray-800">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24"
                                            style="fill: rgba(0, 0, 0, 1);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);">
                                            <path
                                                d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                                            </path>
                                        </svg>
                                    </div>

                                    <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                        No staff have been added yet</h2>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        You can start by adding staff to help you organize this project.
                                    </p>


                                    <div class="mt-5 grid sm:flex gap-2">
                                        <button type="button" id="create-btn2"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Add new staff
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ count($event->members) }}</span>
                                    results
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
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->

    {{-- Modal --}}
    <dialog class="modal" id="modal">

        <div class="h-full w-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
            <div class="py-12 bg-opacity-90 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
                id="modal">
                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-lg rounded-3xl border-gray-400">

                        <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                            Add Member to your event
                        </h1>

                        {{-- User Select --}}
                        <form action="{{ route('events.members.add', ['event' => $event]) }}" method="POST">
                            @csrf
                            <label for="student_id" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                Student ID</label>

                            @error('student_id')
                                <div class="text-red-500 text-sm" id="err_txt1">
                                    {{ $message }}
                                </div>
                            @enderror

                            @error('exist')
                                <div class="field-validation-error text-red-500 text-sm" id="err_txt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <input name="student_id" id="student_id" type="text"
                                class="form-control mb-5 mt-2  text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 items-center pl-3 text-sm border-gray-300 rounded border  @error('student_id') border-red-400 @enderror "
                                placeholder="Enter Student ID">
                            {{-- Buttons --}}
                            <div class="flex items-center justify-start w-full">
                                <button
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-md transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 text-white px-8 py-2 text-sm"
                                    type="submit">Add Member</button>
                        </form>
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded-md px-8 py-2 text-sm"
                            type="button" onclick="modalHandler();" id="cancel-btn">Cancel</button>
                    </div>

                    {{-- Exit Icon --}}
                    <button
                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                        type="button" onclick="modalHandler()" aria-label="close modal" role="button" id="close-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                            height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        </div>

    </dialog>
    {{-- End Modal --}}

    <script>
        const modal = document.querySelector("#modal");
        const openModal = document.getElementById("create-btn");
        const openModal2 = document.getElementById("create-btn2");
        const closeModal = document.querySelector("#close-btn");
        const cancel = document.querySelector("#cancel-btn");
        const input = document.getElementById("student_id");
        const errText = document.getElementById("err_txt1");
        @if (count($errors) > 0)
            modal.showModal();
        @endif
        openModal.addEventListener("click", () => {
            modal.showModal();
        });
        openModal2.addEventListener("click", () => {
            modal.showModal();
        });
        closeModal.addEventListener("click", () => {
            modal.close();
        });
        cancel.addEventListener("click", () => {
            modal.close();
        });

        function modalHandler(val) {
            if (val) {
                modal.style.display = display || "flex";
                errText.style.display = "hidden";
                // fadeIn(modal);
            } else {

                modal.style.display = "hidden";
                input.value = '';
                input.style.borderColor = "gray";
                modal.close()
                // fadeOut(modal);
            }
        }
    </script>
@endsection
