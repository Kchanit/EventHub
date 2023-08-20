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
                                    Event Tasks
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    List of tasks for the event.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    @if (count($event->tasks) > 0)
                                        <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                            href="#">
                                            View all
                                        </a>

                                        <button type="button"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-700 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                            id="create-btn" href="#" onclick="modalHandler(true)">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none">
                                                <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Add task
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        @if (count($event->tasks) > 0)
                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-slate-900">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Task
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Brief
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Assignee
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
                                                    Priority
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                    Due Date
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-right"></th>
                                    </tr>
                                </thead>
                                <div class="overflow-auto">
                                    @foreach ($event->tasks as $task)
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                                <!--New Row-->
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                                {{ $task->title }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-2">
                                                            <span class="block text-sm text-gray-800 dark:text-gray-200">
                                                                {{ $task->brief }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="block text-sm text-gray-800 dark:text-gray-200">
                                                                    {{ $task->assignee->name }}
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-3">
                                                            <span class="block text-sm text-gray-800 dark:text-gray-200">
                                                                {{ $task->status }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="block text-sm text-gray-800 dark:text-gray-200">
                                                                    {{ $task->priority }}
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block" href="javascript:;"
                                                        data-hs-overlay="#hs-ai-invoice-modal">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500">
                                                                {{ date('d-m-Y', strtotime($task->date)) }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap ">

                                                    <button type="button" href="" id="edit-btn"
                                                        class="text-sm text-indigo-600 hover:text-indigo-800 cursor-pointer">
                                                        Edit
                                                    </button>

                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <form
                                                        action="{{ route('events.tasks.delete', ['event' => $event, 'task' => $task]) }}"
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
                                            {{-- Edit Modal --}}
                                            <dialog class="modal" id="modal2">
                                                <form action="{{ route('events.tasks.edit', ['task' => $task]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div
                                                        class="h-full w-full fixed top-0  left-0 z-[60] overflow-x-hidden overflow-y-auto">
                                                        <div class="py-12 bg-opacity-10 bg-black transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
                                                            id="modal2">
                                                            <div role="alert"
                                                                class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                                                                <div
                                                                    class="relative  py-8 px-5 md:px-10 bg-white shadow-lg rounded-3xl border-gray-400">
                                                                    <div
                                                                        class="w-full flex justify-start text-gray-600 mb-3">
                                                                        {{-- Tasks Icon --}}
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-tabler icon-tabler-clipboard-list"
                                                                            width="44" height="44"
                                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                                            stroke="#2c3e50" fill="none"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                fill="none" />
                                                                            <path
                                                                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                                                            <path
                                                                                d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                                            <path d="M9 12l.01 0" />
                                                                            <path d="M13 12l2 0" />
                                                                            <path d="M9 16l.01 0" />
                                                                            <path d="M13 16l2 0" />
                                                                        </svg>
                                                                    </div>
                                                                    <h1
                                                                        class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                                                                        Edit task detail
                                                                    </h1>

                                                                    {{-- Title --}}
                                                                    <div class="mb-5">

                                                                        <label for="title"
                                                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                                                            Task</label>
                                                                        <input id="title2" name="title"
                                                                            value="{{ $task->title }}"
                                                                            class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                                                            placeholder="task name" />
                                                                        @error('title')
                                                                            <div class=" text-red-500 text-sm" id="err_txt3">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                    {{-- Brief --}}
                                                                    <label for="brief"
                                                                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                                                        Brief</label>
                                                                    <textarea id="brief2" name="brief"
                                                                        class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-20 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                                                        placeholder="Task description.">{{ $task->brief }}</textarea>
                                                                    <div class="mb-5">
                                                                        {{-- Assignee --}}
                                                                        <label for="assignee_id"
                                                                            class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                                                            Assignee Student ID</label>
                                                                        <input id="assignee_id2" name="assignee_id"
                                                                            value="{{ $task->assignee->student_id }}"
                                                                            class="mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                                                            placeholder="B600000" />
                                                                        @error('assignee_id')
                                                                            <div class=" text-red-500 text-sm" id="err_txt4">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                    {{-- Due Date --}}
                                                                    <div
                                                                        class="space-y-2 mb-5 text-sm font-medium text-gray-800  dark:text-gray-200">
                                                                        <label
                                                                            class="text-gray-800 block text-sm font-bold leading-tight tracking-normal"
                                                                            for="date">
                                                                            Due Date
                                                                        </label>
                                                                        <input id="date2" name="date"
                                                                            type="date" value="{{ $task->date }}"
                                                                            class="@error('date') border-red-400 @enderror mb-5 py-2 px-3 pr-11 border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500"
                                                                            placeholder="Select date start">

                                                                        @error('date2')
                                                                            <div class=" text-red-500 text-sm">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>

                                                                    {{-- Status --}}
                                                                    <div class="flex gap-5 align-left">
                                                                        <div>
                                                                            <label for="status"
                                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                                                                Status</label>
                                                                            <select id="status2" name="status"
                                                                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border">
                                                                                <option
                                                                                    @if ($task->status === 'To do') selected @endif>
                                                                                    To do</option>
                                                                                <option
                                                                                    @if ($task->status === 'In progress') selected @endif>
                                                                                    In progress</option>
                                                                                <option
                                                                                    @if ($task->status === 'Done') selected @endif>
                                                                                    Done</option>
                                                                                <option
                                                                                    @if ($task->status === 'Cancled') selected @endif>
                                                                                    Cancled</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="">
                                                                            {{-- Priority --}}
                                                                            <label for="priority"
                                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                                                                Priority</label>
                                                                            <select id="priority2" name="priority"
                                                                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border">
                                                                                <option
                                                                                    @if ($task->priority === 'Low') selected @endif>
                                                                                    Low</option>
                                                                                <option
                                                                                    @if ($task->priority === 'Medium') selected @endif>
                                                                                    Medium</option>
                                                                                <option
                                                                                    @if ($task->priority === 'High') selected @endif>
                                                                                    High</option>
                                                                                <option
                                                                                    @if ($task->priority === 'Urgent') selected @endif>
                                                                                    Urgent</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    {{-- Buttons --}}
                                                                    <div class="flex items-center justify-start w-full">
                                                                        <button type="submit"
                                                                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-lg transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 text-white px-8 py-2 text-sm">
                                                                            Confirm</button>
                                                                        <button type="button"
                                                                            class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded-lg px-8 py-2 text-sm"
                                                                            onclick="modalHandler()"
                                                                            id="cancel-btn2">Cancel</button>
                                                                    </div>

                                                                    {{-- exit icon --}}
                                                                    <button type="button"
                                                                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                                                                        onclick="modalHandler()" aria-label="close modal"
                                                                        role="button" id="close-btn2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="icon icon-tabler icon-tabler-x"
                                                                            width="20" height="20"
                                                                            viewBox="0 0 24 24" stroke-width="2.5"
                                                                            stroke="currentColor" fill="none"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18" />
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </dialog>
                                        </tbody>

                                        {{-- End Edit Modal --}}
                                    @endforeach

                                    {{--
                                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">

                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-2">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Props
                                                    work</span>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="h-px w-72 whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-3">
                                                <span class="block text-sm text-gray-500">make props for attendances</span>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                    <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                    Complete
                                                </span>
                                            </div>
                                        </a>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <span class="text-xs text-gray-500">5/5</span>
                                                    <div
                                                        class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200"
                                                            role="progressbar" style="width: 100%" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm text-gray-800 dark:text-gray-200">
                                                        {{$task->status}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-6 py-1.5">
                                            <button type="button"
                                                class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                                href="#">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                --}}
                                </div>
                            </table>
                            <!-- End Table -->
                        @else
                            {{-- If No Task --}}
                            <!-- Body -->
                            <div class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                <div
                                    class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-md dark:bg-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-clipboard-list" width="44" height="44"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                        <path
                                            d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        <path d="M9 12l.01 0" />
                                        <path d="M13 12l2 0" />
                                        <path d="M9 16l.01 0" />
                                        <path d="M13 16l2 0" />
                                    </svg>
                                </div>

                                <h2 class="mt-5 font-semibold text-gray-800 dark:text-white">
                                    No tasks have been added yet</h2>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    Create new task here to start managing your event.
                                </p>

                                <div class="mt-5 grid sm:flex gap-2">
                                    <button type="button" id="create-btn2" onclick="modalHandler(true)"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-700 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Create a new task
                                    </button>

                                    {{-- <button type="button"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                Use a Template
                            </button> --}}
                                </div>
                            </div>
                        @endif
                        <!-- End Body -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ count($event->tasks) }}</span>
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

    {{-- Create Modal --}}
    <dialog class="modal" id="modal">
        <form action="{{ route('events.tasks.store-tasks', ['event' => $event]) }}" method="POST">
            @csrf
            <div class="h-full w-full fixed top-0  left-0 z-[60] overflow-x-hidden overflow-y-auto">
                <div class="py-12 bg-opacity-10 bg-black transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
                    id="modal">
                    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                        <div class="relative  py-8 px-5 md:px-10 bg-white shadow-lg rounded-3xl border-gray-400">
                            <div class="w-full flex justify-start text-gray-600 mb-3">
                                {{-- Tasks Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-clipboard-list" width="44" height="44"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M9 12l.01 0" />
                                    <path d="M13 12l2 0" />
                                    <path d="M9 16l.01 0" />
                                    <path d="M13 16l2 0" />
                                </svg>
                            </div>
                            <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                                Create new task
                            </h1>

                            {{-- Title --}}
                            <div class="mb-5">

                                <label for="title"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                    Task</label>
                                <input id="title" name="title"
                                    class=" mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                    placeholder="task name" />
                                @error('title')
                                    <div class=" text-red-500 text-sm" id="err_txt1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- Brief --}}
                            <label for="brief" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                Brief</label>
                            <textarea id="brief" name="brief"
                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-20 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                placeholder="Task description."></textarea>
                            <div class="mb-5">
                                {{-- Assignee --}}
                                <label for="assignee_id"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                    Assignee Student ID</label>
                                <input id="assignee_id" name="assignee_id"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                    placeholder="641040xxxx" />
                                @error('assignee_id')
                                    <div class=" text-red-500 text-sm" id="err_txt2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Assignee --}}
                            <label for="assignee_id"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                Assignee Student ID</label>
                            <input id="assignee_id" name="assignee_id"
                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border"
                                placeholder="641040xxxx" />

                            {{-- Due Date --}}
                            <div class="space-y-2 mb-5 text-sm font-medium text-gray-800  dark:text-gray-200">
                                <label class="text-gray-800 block text-sm font-bold leading-tight tracking-normal"
                                    for="date">
                                    Due Date
                                </label>
                                <input id="date" name="date" type="date" value="{{ old('date', '') }}"
                                    class="@error('date') border-red-400 @enderror mb-5 py-2 px-3 pr-11 border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Select date start">

                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>

                                @error('date')
                                    <div class=" text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Status --}}
                            <div class="flex gap-5 align-left">
                                <div>
                                    <label for="status"
                                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                        Status</label>
                                    <select id="status" name="status"
                                        class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border">
                                        <option selected>To do</option>
                                        <option>In progress</option>
                                        <option>Done</option>
                                        <option>Cancled</option>
                                    </select>
                                </div>

                                <div class="">
                                    {{-- Priority --}}
                                    <label for="priority"
                                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                        Priority</label>
                                    <select id="priority" name="priority"
                                        class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded-lg border">
                                        <option selected>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                        <option>Urgent</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="flex items-center justify-start w-full">
                                <button type="submit"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-lg transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 text-white px-8 py-2 text-sm">
                                    Add task</button>
                                <button type="button"
                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded-lg px-8 py-2 text-sm"
                                    onclick="modalHandler()" id="cancel-btn">Cancel</button>
                            </div>

                            {{-- exit icon --}}
                            <button type="button"
                                class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                                onclick="modalHandler()" aria-label="close modal" role="button" id="close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
    {{-- End Create Modal --}}


    <script>
        const modal = document.querySelector("#modal");
        const modal2 = document.querySelector("#modal2");
        const openModal = document.getElementById("create-btn");
        const openModal2 = document.getElementById("edit-btn");
        const closeModal = document.querySelector("#close-btn");
        const closeModal2 = document.querySelector("#close-btn2");
        const cancel = document.querySelector("#cancel-btn");
        const cancel2 = document.querySelector("#cancel-btn2");
        const title = document.getElementById("title");
        const brief = document.getElementById("brief");
        const date = document.getElementById("due_date");
        const student_id = document.getElementById("student_id");
        const errText = document.getElementById("err_txt1");
        const errText2 = document.getElementById("err_txt2");
        const errText3 = document.getElementById("err_txt3");
        const errText4 = document.getElementById("err_txt4");
        @if ($errors->any())
            {
                modal.showModal();
            }
        @endif

        openModal.addEventListener("click", () => {
            modal.showModal();
        });
        openModal2.addEventListener("click", () => {
            modal2.showModal();
        });
        closeModal.addEventListener("click", () => {
            modal.close();
        });
        closeModal2.addEventListener("click", () => {
            modal2.close();
        });
        cancel.addEventListener("click", () => {
            modal.close();
        });
        cancel2.addEventListener("click", () => {
            modal2.close();
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
                    el.close()
                } else {
                    requestAnimationFrame(fade);
                }
            })();
            title.value = "";
            title2.value = "";
            brief.value = "";
            brief2.value = "";
            date.value = "";
            date2.value = "";
            student_id.value = "";
            student_id2.value = "";
            errText.innerHTML = "";
            errText2.innerHTML = "";
            errText3.innerHTML = "";
            errText4.innerHTML = "";
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
    </script>
@endsection
