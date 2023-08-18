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
                            {{ date('d F', strtotime($event->date)) }}
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
                        Attendees: {{ count($event->attendees) }}
                    </div>
                    <div class="">
                        <h3 class="text-lg mb-1 leading-none text-gray-900 dark:text-white">Description</h3>
                        <p class="font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $event->description }}</p>
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
            <form action="{{ route('events.budgets.approve-budget', ['event' => $event]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" id="submit-budget-btn"
                    class="py-2 px-3 w-24 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Approve
                </button>
            </form>
            <form action="{{ route('events.budgets.reject-budget', ['event' => $event]) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" id="submit-budget-btn"
                    class="py-2 px-3 w-24 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Reject
                </button>
            </form>
        </div>
    </section>
@endsection
