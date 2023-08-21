@extends('layouts.main')

@section('content')
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-2xl ">
            <div class="flex flex-row gap-x-5">
                <img src="{{ asset('storage/' . $event->image_url) }}"
                    class="bg-gray-300 mb-4 max-w-[16rem] object-cover z-0 shadow-md">
                <div class="flex flex-col gap-y-3">
                    {{-- Title --}}
                    <h2 class="text-3xl font-bold lg:text-4xl  leading-none text-gray-900 md:text-2xl dark:text-white">
                        {{ $event->title }}
                    </h2>
                    <div class="flex gap-x-2 text-lg text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);">
                            <path
                                d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM5 7h14v2H5V7z">
                            </path>
                        </svg>
                        <p class="">
                            {{ date('d F Y', strtotime($event->date)) }}
                        </p>
                    </div>
                    <div class="flex gap-x-2 text-lg text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <p class="">
                            {{ $event->location }}
                        </p>
                    </div>
                    <div class="flex text-lg">
                        <span class="font-semibold">Attendees:</span> {{ count($event->attendees) }}
                    </div>
                    <div class="">
                        <h3 class="text-lg font-semibold mb-1 leading-none text-gray-900 dark:text-white">Description</h3>
                        <p class="text-lg text-gray-800 sm:mb-5 dark:text-gray-400">{{ $event->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="max-w-[85rem] ">
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
                                        Expenses
                                    </h2>
                                </div>
                            </div>
                            <!-- End Header -->
                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-slate-900">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Item
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Estimated
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Quantity
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Total cost
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Status
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Created
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Note
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <div class="overflow-auto">
                                    @foreach ($event->expenses as $expense)
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="font-mono text-sm text-blue-600 dark:text-blue-500">{{ $expense->title }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="text-sm text-gray-600 dark:text-gray-400">{{ $expense->amount }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="text-sm text-gray-600 dark:text-gray-400">{{ $expense->quantity }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="text-sm text-gray-600 dark:text-gray-400">{{ $expense->total }}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                                <svg class="w-2.5 h-2.5"
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                                Paid
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                {{ $expense->date }}</span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="text-sm text-gray-600 dark:text-gray-400">{{ $expense->note }}</span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td>
                                                    <form
                                                        action="{{ route('events.budgets.delete', ['event' => $event, 'expense' => $expense]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" href=""
                                                            class="text-sm text-gray-600">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        </tbody>
                                    @endforeach
                                </div>
                            </table>
                            <!-- End Table -->

                            <!-- Footer -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <span
                                            class="font-semibold text-gray-800 dark:text-gray-200">{{ count($event->expenses) }}</span>
                                        results
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                            <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.506 1.64001L4.85953 7.28646C4.66427 7.48172 4.66427 7.79831 4.85953 7.99357L10.506 13.64"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Prev
                                        </button>

                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                            Next
                                            <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.50598 2L10.1524 7.64645C10.3477 7.84171 10.3477 8.15829 10.1524 8.35355L4.50598 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
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

        {{-- Buttons --}}
        <div class="flex justify-center mt-5 gap-x-5">
            <form name="approve" action="{{ route('events.budgets.approve-budget', ['event' => $event]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <button type="button" id="approve-btn"
                    class="py-2 px-3 w-24 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Approve
                </button>
            </form>
            <form name="reject" action="{{ route('events.budgets.reject-budget', ['event' => $event]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <button type="button" id="reject-btn"
                    class="py-2 px-3 w-24 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Reject
                </button>
            </form>
        </div>
    </section>

    {{-- approve modal --}}
    <div id="approve-modal"
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
                                Approve Budget
                            </h3>
                            <p class="text-gray-500">
                                Are you sure you want to approve this budget? The event will be published after approval.
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
                    <button type="submit" onclick="fadeOut(approveModal); validateApproveForm();"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Approve
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end approve modal --}}
    {{-- reject modal --}}
    <div id="reject-modal"
        class="hidden w-full h-full justify-center fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto backdrop-brightness-75 ">
        <div class="self-center md:max-w-2xl md:w-full m-3 md:mx-auto">
            <div
                class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                <div class="absolute top-2 right-2">
                    <button type="button" onclick="fadeOut(rejectModal);"
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
                                Reject Budget
                            </h3>
                            <p class="text-gray-500">
                                This will reject the budget and send it back for revision. Are you sure you want to proceed?
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                    <button type="button" id="cancel" onclick="fadeOut(rejectModal);"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-overlay="#hs-danger-alert">
                        Cancel
                    </button>
                    <button type="submit" onclick="fadeOut(rejectModal); validateRejectForm();"
                        class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Reject
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end reject modal --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        // Get the modal
        var approveModal = document.getElementById("approve-modal");
        var rejectModal = document.getElementById("reject-modal");
        // Get the button that opens the modal
        var approveBtn = document.getElementById("approve-btn");
        var rejectBtn = document.getElementById("reject-btn");
        // Get the <span> element that closes the modal
        var close = document.getElementById("close");
        var cancel = document.getElementById("cancel");

        // When the user clicks on the button, open the modal
        approveBtn.onclick = function() {
            fadeIn(approveModal);
        }
        rejectBtn.onclick = function() {
            fadeIn(rejectModal);
        }

        // When the user clicks on <span> (x), close the modal
        cancel.onclick = function() {
            fadeOut(approveModal);
        }
        close.onclick = function() {
            fadeOut(approveModal);
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == approveModal) {
                fadeOut(approveModal);
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

        function validateApproveForm() {
            event.preventDefault(); // prevent form submit
            var form = document.forms["approve"]; // storing the form
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Approved!',
                showConfirmButton: false,
                timer: 1000
            })
            setTimeout(function() {
                form.submit();
            }, 1200);
        }

        function validateRejectForm() {
            event.preventDefault(); // prevent form submit
            var form = document.forms["reject"]; // storing the form
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Rejected!',
                showConfirmButton: false,
                timer: 1000
            })
            setTimeout(function() {
                form.submit();
            }, 1200);
        }
    </script>
@endsection
