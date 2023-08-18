@extends('layouts.main')

@section('content')

<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                Event Tasks
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                Add tasks, edit and more.
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                  View all
                </button>

                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-indigo-700 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" 
                id="create-btn" href="#" onclick="modalHandler(true)">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  Add task
                </button>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-slate-900">
              <tr>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Task
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                        Brief
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Status
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Progress
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Created
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-right"></th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <!--New Row-->
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                      <div class="px-6 py-2">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Beverage Booth</span>
                      </div>
                    </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                      <div class="px-6 py-2">
                        <span class="block text-sm text-gray-800 dark:text-gray-200">build mini booth and require 2 members</span>
                      </div>
                    </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200">
                      <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      In progress
                    </span>
                  </div>
                </a>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <span class="text-xs text-gray-500">1/5</span>
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500">28 Dec, 12:12</span>
                    </div>
                  </a>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                      <div class="px-6 py-2">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">MC work</span>
                      </div>
                    </a>
                </td>

                <td class="h-px w-72 whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="block text-sm text-gray-500">plan speech and schedule</span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200">
                      <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      In progress
                    </span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <span class="text-xs text-gray-500">3/5</span>
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500">20 Dec, 09:27</span>
                  </div>
                </a>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                      <div class="px-6 py-2">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Props work</span>
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
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                      <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
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
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                    <div class="px-6 py-3">
                      <span class="text-sm text-gray-500">18 Dec, 15:20</span>
                    </div>
                  </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">


                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">                      <div class="px-6 py-2">
                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Permissions</span>
                    </div>
                  </a>
                </td>

                <td class="h-px w-72 whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500">Waiting for permissions</span>
                    </div>
                  </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                    <div class="px-6 py-3">
                      <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                        <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        Not started
                      </span>
                    </div>
                  </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <span class="text-xs text-gray-500">0/5</span>
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500">18 Dec, 15:20</span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                      <div class="px-6 py-2">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Overall schedule</span>
                      </div>
                    </a>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="block text-sm text-gray-500">draft and finalize overall schedule</span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                      <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
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
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500">15 Dec, 14:41</span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                    <div class="px-6 py-2">
                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">Buy materials</span>
                    </div>
                  </a>
                </td>

                <td class="h-px w-72 whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="block text-sm text-gray-500">makro material shopping</span>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                      <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
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
                      <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-gray-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </a>
                </td>

                <td class="h-px w-px whitespace-nowrap">
                  <a class="block" href="javascript:;" data-hs-overlay="#hs-ai-invoice-modal">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500">11 Dec, 18:51</span>
                  </div>
                </a>
                </td>
                
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <button type="button" class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium" href="#">
                      Edit
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
            <div>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                  Prev
                </button>

                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  Next
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
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
  <form action="" method="">
      @csrf
      @method('PUT')
      <div class="h-full w-full fixed top-0  left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="py-12 bg-opacity-50  transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
            id="modal">
              <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                  <div class="relative  py-8 px-5 md:px-10 bg-white shadow-lg rounded-3xl border-gray-400">
                      <div class="w-full flex justify-start text-gray-600 mb-3">
                          {{-- Tasks Icon --}}
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 12l.01 0" />
                            <path d="M13 12l2 0" />
                            <path d="M9 16l.01 0" />
                            <path d="M13 16l2 0" />
                          </svg>
                      </div>
                      <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                          Create new task
                      </h1>

                      {{-- Name --}}
                      <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                          Task</label>
                      <input id="name"
                          class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                          placeholder="task name" />

                      {{-- Brief --}}
                      <label for="brief" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                        Brief</label>
                    <textarea id="brief"
                        class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-20 flex items-center pl-3 text-sm border-gray-300 rounded border"
                        placeholder="Short task description."></textarea>


                      <div class="flex gap-5 align-left">
                          <div>
                              {{-- Status --}}
                              <label for="status"
                                  class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                  Status</label>
                                  <select class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                                    <option selected>Not started</option>
                                    <option>In progress</option>
                                    <option>Complete</option>
                                  </select>
                          </div>

                          <div class="">
                            {{-- Progress --}}
                            <label for="progress"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">
                                Progress</label>
                                <select class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                                  <option selected>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                        </div>
                      </div>


                      {{-- Buttons --}}
                      <div class="flex items-center justify-start w-full">
                          <button
                              class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 rounded-md transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 text-white px-8 py-2 text-sm">
                              Add task</button>
                          <button
                              class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded-md px-8 py-2 text-sm"
                              onclick="modalHandler()" id="cancel-btn">Cancel</button>
                      </div>

                      {{-- exit icon --}}
                      <button
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

{{-- End Modal --}}
<script>
  const modal = document.querySelector("#modal");
  const openModal = document.getElementById("create-btn");
  const closeModal = document.querySelector("#close-btn");
  const cancel = document.querySelector("#cancel-btn");

  openModal.addEventListener("click", () => {
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
</script>
@endsection
