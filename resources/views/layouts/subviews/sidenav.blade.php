  <!-- Sidebar -->

  <div id="application-sidebar"
      class="sidebar hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 shadow-lg bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
      <div class="px-6 flex justify-between">
          <a class="text flex-none text-xl font-semibold dark:text-white" href="{{ route('events.index') }}"
              aria-label="Brand">EventHub</a>
          <button onclick="hide()" id="menu-toggle" class="toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
          </button>

      </div>

      <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
          <ul class="space-y-1.5">
              <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-900 dark:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                      href="{{ route('events.index') }}">
                      <svg class="icon w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                              d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                          <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                      </svg>
                      <p class="text font-b">Home</p>
                  </a>
              </li>


              <li class="hs-accordion" id="account-accordion">
                  <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                      href="javascript:;" onclick="dropdownAccount()">
                      <svg class="icon w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                          <path fill-rule="evenodd"
                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                      </svg>
                      <p class="text "> Account</p>

                      <svg id="account-arrow"
                          class="account-arrow hs-accordion-active:hidden ml-auto block w-3 h-3 text-gray-600 group-hover:text-gray-500 rotate-90 duration-150 width="
                          16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                      </svg>
                  </a>

                  <div id="account-accordion-child"
                      class="hs-accordion-content w-full overflow-hidden transition-[height]  duration-300 hidden">
                      <ul class="pt-2 pl-2">
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Link 1
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Link 2
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Link 3
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li class="hs-accordion" id="events-accordion">
                  <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                      href="#">
                      <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path
                              d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z">
                          </path>
                          <path
                              d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z">
                          </path>
                      </svg>
                      <p class="text">Event Management</p>

                      <svg id="events-arrow" onclick="dropdownEvents()"
                          class="events-arrow hs-accordion-active:hidden ml-auto block w-3 h-3 text-gray-600 group-hover:text-gray-500 rotate-90 duration-150  width="
                          16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                      </svg>
                  </a>

                  <div id="events-accordion-child"
                      class="hs-accordion-content w-full overflow-hidden duration-300 hidden transition-all transform">
                      <ul class="pt-2 pl-2">
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100  focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="{{ route('myevents.index') }}">
                                  My Events
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="{{ route('events.members') }}">
                                  Members
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="{{ route('budgets.index') }}">
                                  Budget
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Schedule
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Tasks
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Attendees
                              </a>
                          </li>
                          <li>
                              <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                                  href="javascript:;">
                                  Summary
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>

              <li><a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                      href="{{ route('myevents.index') }}">
                      <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path
                              d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                          <path
                              d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                      </svg>
                      <p class="text"> Applied Events </p>
                  </a></li>
              <li><a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:font-semibold focus:bg-gray-100"
                      href="{{ route('attended-events.index') }}">
                      <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path
                              d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                      </svg>
                      {{-- <p class="text"> Attended Events </p> --}}
                  </a></li>
          </ul>
      </nav>
  </div>
  <!-- End Sidebar -->

  <script>
      function hide() {
          sidebar = document.getElementById("application-sidebar");
          sidebar.classList.toggle("close");
      }

      function dropdownAccount() {
          child = document.getElementById("account-accordion-child");
          arrow = document.getElementById("account-arrow");

          child.classList.toggle("hidden");
          arrow.classList.toggle("rotate-90");
      }

      function dropdownEvents() {
          child = document.getElementById("events-accordion-child");
          arrow = document.getElementById("events-arrow");

          child.classList.toggle("hidden");
          arrow.classList.toggle("rotate-90");
      }
  </script>