@extends('layouts.main2')

@section('content')
    <div class="px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">


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
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        Create expenses, edit, download and more.
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        @if (count($event->expenses) > 0)
                                            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                href="#">
                                                View all
                                            </a>

                                            <button type="button"
                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold hover:bg-indigo-600 bg-indigo-700 text-white  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                id="create-btn" href="#" onclick="modalHandler(true)">
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Create
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- End Header -->
                            @if (count($event->expenses) > 0)
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
                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
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
                                                {{-- <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span
                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">Food</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">$3500.00</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">20</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">$3500.00</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-green-200">
                                                    <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                    </svg>
                                                    Declined
                                                </span>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">28 December</span>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span class="text-sm text-gray-600 dark:text-gray-400">Food for
                                                    attendees</span>
                                            </div>
                                        </a>
                                    </td>

                                </tr> --}}

                                            </tbody>
                                        @endforeach
                                    </div>
                                </table>
                                <!-- End Table -->
                            @else
                                <!-- Body -->
                                <div class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                    <div
                                        class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-md dark:bg-gray-800">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                            <path
                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </div>

                                    <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                        No expense yet</h2>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        Draft an expense and submit it to an officer.
                                    </p>


                                    <div class="mt-5 grid sm:flex gap-2">
                                        <button type="button" id="create-btn2" onclick="modalHandler(true)"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Create a new expense
                                        </button>

                                        {{-- <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        Use a Template
                                    </button> --}}
                                    </div>
                                </div>
                                <!-- End Body -->
                            @endif
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

        {{-- Submit Budget Button --}}
        @if (count($event->expenses) > 0)
            <div class="flex justify-center mt-5">
                <form action="{{ route('events.budgets.submit-budget', ['event' => $event]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" id="submit-budget-btn"
                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Submit budget to officer
                    </button>
                </form>
            </div>
        @endif
        {{-- End Submit Budget Button --}}

        {{-- Modal --}}
        <dialog class="modal" id="modal">
            <form action="{{ route('events.budgets.store-expense', ['event' => $event]) }}" method="POST">
                @csrf
                <div class="h-full w-full fixed top-0  left-0 z-[60] overflow-x-hidden overflow-y-auto">
                    <div class="py-12 bg-opacity-90  transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
                        id="modal">
                        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                            <div class="relative  py-8 px-5 md:px-10 bg-white shadow-lg rounded-3xl border-gray-400">
                                <div class="w-full flex justify-start text-gray-600 mb-3">
                                    {{-- Wallet Icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet"
                                        width="52" height="52" viewBox="0 0 24 24" stroke-width="1"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                    </svg>
                                </div>
                                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                                    Create new expense
                                </h1>

                                {{-- Name --}}
                                <label for="title"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                    Title</label>
                                <input id="title" name="title" type="text"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 @error('date') border-red-400 @enderror font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Expense title" />

                                {{-- Date --}}
                                <label for="date"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                    Date</label>
                                <div class="relative mb-5 mt-2">
                                    {{-- <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer"> --}}
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-calendar-event" width="20" height="20"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="5" width="16" height="16"
                                            rx="2" />
                                        <line x1="16" y1="3" x2="16" y2="7" />
                                        <line x1="8" y1="3" x2="8" y2="7" />
                                        <line x1="4" y1="11" x2="20" y2="11" />
                                        <rect x="8" y="15" width="2" height="2" />
                                    </svg> --}}
                                    {{-- </div> --}}
                                    <input id="date" type="date" name="date"
                                        class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 @error('date') border-red-400 @enderror font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />

                                </div>

                                <div class="flex gap-2">
                                    <div>
                                        {{-- Amount --}}
                                        <label for="amount"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                            Amount</label>
                                        <input id="amount" type="number" name="amount"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 @error('date') border-red-400 @enderror font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="1000" />
                                    </div>

                                    <div>
                                        {{-- Quantity --}}
                                        <label for="quantity"
                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                            Quantity</label>
                                        <input id="quantity" type="number" name="quantity"
                                            class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 @error('date') border-red-400 @enderror font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                            placeholder="1" />
                                    </div>
                                </div>

                                {{-- Note --}}
                                <label for="note"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                    Note</label>
                                <textarea id="note" name="note" type="text"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 @error('date') border-red-400 @enderror font-normal w-full h-20 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>


                                {{-- Buttons --}}
                                <div class="flex items-center justify-start w-full">
                                    <button type="submit"
                                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-md transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 text-white px-8 py-2 text-sm">Submit</button>
                                    <button type="button"
                                        class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded-md px-8 py-2 text-sm"
                                        onclick="modalHandler()" id="cancel-btn">Cancel</button>
                                </div>

                                {{-- exit icon --}}
                                <button type="button"
                                    class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                                    onclick="modalHandler()" aria-label="close modal" role="button" id="close-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <line x1="18" y1="6" x2="6" y2="18" />
                                        <line x1="6" y1="6" x2="18" y2="18" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </dialog>
        {{-- End Modal --}}
    </div>
    <script>
        const modal = document.querySelector("#modal");
        const openModal = document.getElementById("create-btn");
        const openModal2 = document.getElementById("create-btn2");
        const closeModal = document.querySelector("#close-btn");
        const cancel = document.querySelector("#cancel-btn");

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
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                    el.style.opacity = 1; // Reset opacity for next use
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }

        const currentDate = new Date().toISOString().split("T")[0];

        document.getElementById("date").value = currentDate;
    </script>
@endsection
