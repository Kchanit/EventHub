 <!-- ========== HEADER ========== -->
 <header
     class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full shadow-lg bg-white border-b text-sm py-2.5 sm:py-4 lg:pl-64 ">
     <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
         <div class="mr-5 lg:mr-0 lg:hidden">
             <a class="flex-none text-xl font-semibold " href="#" aria-label="Brand">EventHub</a>
         </div>

         <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
             <div class="sm:hidden">
                 <button type="button"
                     class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs  ">
                     <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" viewBox="0 0 16 16">
                         <path
                             d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                     </svg>
                 </button>
             </div>

             {{-- Search  --}}
             <div class="hidden sm:block">
                 <label for="icon" class="sr-only">Search</label>
                 <div class="relative">
                     <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                         <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                             height="16" fill="currentColor" viewBox="0 0 16 16">
                             <path
                                 d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                         </svg>
                     </div>
                     <input type="text" id="icon" name="icon"
                         class="py-2 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500  "
                         placeholder="Search">
                 </div>
             </div>

             <div class="flex flex-row items-center justify-end gap-2">
                 @if (Auth::check())
                     <div x-data="{ isOpen: false }">
                         <!-- Notification Icon -->
                         <button type="button" @click="isOpen=!isOpen" @click.away="isOpen=false"
                             class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs  ">
                             <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" viewBox="0 0 16 16">
                                 <path
                                     d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                             </svg>
                         </button>

                         {{-- Notification Dropdown --}}
                         <div x-show="isOpen"
                             class=" overflow-hidden absolute right-0 z-50 my-4 max-w-sm bg-white text-base list-none bg-green divide-y divide-gray-100 shadow-lg  rounded-xl"
                             id="notification-dropdown">
                             <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 ">
                                 Notifications
                             </div>
                             <div>
                                 <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 ">
                                     <div class="flex-shrink-0">
                                         <img class="w-11 h-11 rounded-full"
                                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                             alt="Bonnie Green avatar" />
                                         <div
                                             class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 rounded-full border border-white bg-primary-700 ">
                                             <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                                 </path>
                                                 <path
                                                     d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                                 </path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="pl-3 w-full">
                                         <div class="text-gray-500 font-normal text-sm mb-1.5 ">
                                             New message from
                                             <span class="font-semibold text-gray-900 ">Bonnie
                                                 Green</span>:
                                             "Hey, what's up? All set for the presentation?"
                                         </div>
                                         <div class="text-xs font-medium text-primary-600 ">
                                             a few moments ago
                                         </div>
                                     </div>
                                 </a>
                                 <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 ">
                                     <div class="flex-shrink-0">
                                         <img class="w-11 h-11 rounded-full"
                                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                             alt="Jese Leos avatar" />
                                         <div
                                             class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-gray-900 rounded-full border border-white ">
                                             <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                 </path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="pl-3 w-full">
                                         <div class="text-gray-500 font-normal text-sm mb-1.5">
                                             <span class="font-semibold text-gray-900 ">Jese leos</span>
                                             and
                                             <span class="font-medium text-gray-900 ">5 others</span>
                                             started following you.
                                         </div>
                                         <div class="text-xs font-medium text-primary-600 ">
                                             10 minutes ago
                                         </div>
                                     </div>
                                 </a>
                                 <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 ">
                                     <div class="flex-shrink-0">
                                         <img class="w-11 h-11 rounded-full"
                                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                             alt="Joseph McFall avatar" />
                                         <div
                                             class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-red-600 rounded-full border border-white ">
                                             <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd"
                                                     d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                     clip-rule="evenodd"></path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="pl-3 w-full">
                                         <div class="text-gray-500 font-normal text-sm mb-1.5 ">
                                             <span class="font-semibold text-gray-900 ">Joseph
                                                 Mcfall</span>
                                             and
                                             <span class="font-medium text-gray-900 ">141 others</span>
                                             love your story. See it and view more stories.
                                         </div>
                                         <div class="text-xs font-medium text-primary-600 ">
                                             44 minutes ago
                                         </div>
                                     </div>
                                 </a>
                                 <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 ">
                                     <div class="flex-shrink-0">
                                         <img class="w-11 h-11 rounded-full"
                                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                             alt="Roberta Casas image" />
                                         <div
                                             class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-green-400 rounded-full border border-white ">
                                             <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd"
                                                     d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                                     clip-rule="evenodd"></path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="pl-3 w-full">
                                         <div class="text-gray-500 font-normal text-sm mb-1.5 ">
                                             <span class="font-semibold text-gray-900 ">Leslie
                                                 Livingston</span>
                                             mentioned you in a comment:
                                             <span class="font-medium text-primary-600 ">@bonnie.green</span>
                                             what do you say?
                                         </div>
                                         <div class="text-xs font-medium text-primary-600 ">
                                             1 hour ago
                                         </div>
                                     </div>
                                 </a>
                                 <a href="#" class="flex py-3 px-4 hover:bg-gray-100 ">
                                     <div class="flex-shrink-0">
                                         <img class="w-11 h-11 rounded-full"
                                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                                             alt="Robert image" />
                                         <div
                                             class="flex absolute justify-center items-center ml-6 -mt-5 w-5 h-5 bg-purple-500 rounded-full border border-white ">
                                             <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                     d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                 </path>
                                             </svg>
                                         </div>
                                     </div>
                                     <div class="pl-3 w-full">
                                         <div class="text-gray-500 font-normal text-sm mb-1.5 ">
                                             <span class="font-semibold text-gray-900 ">Robert
                                                 Brown</span>
                                             posted a new video: Glassmorphism - learn how to implement the
                                             new design trend.
                                         </div>
                                         <div class="text-xs font-medium text-primary-600 ">
                                             3 hours ago
                                         </div>
                                     </div>
                                 </a>
                             </div>
                             <a href="#"
                                 class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 ">
                                 <div class="inline-flex items-center">
                                     <svg aria-hidden="true" class="mr-2 w-4 h-4 text-gray-500 " fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                         <path fill-rule="evenodd"
                                             d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                             clip-rule="evenodd"></path>
                                     </svg>
                                     View all
                                 </div>
                             </a>
                         </div>
                         {{-- End Noti Dropdown --}}
                     </div>

                     {{-- Apps Icon --}}
                     <button type="button"
                         class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs  "
                         data-hs-offcanvas="#hs-offcanvas-right">
                         <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" viewBox="0 0 16 16">
                             <path
                                 d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                             <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                         </svg>
                     </button>

                     {{-- Profile --}}
                     <div x-data="{ isOpen: false }"
                         class="hs-dropdown relative inline-block [--placement:bottom-right]">
                         <button id="hs-dropdown-with-header" type="button" @click="isOpen=!isOpen"
                             @click.away="isOpen=false"
                             class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs  ">
                             <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white "
                                 src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                 alt="Image Description">
                         </button>

                         {{-- Profile Dropdown --}}
                         <div x-show="isOpen"
                             class="hs-dropdown-menu transition-[opacity,margin] duration absolute min-w-[15rem] right-0 mt-1 bg-white shadow-md rounded-lg p-2 "
                             aria-labelledby="hs-dropdown-with-header">
                             <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg ">
                                 <p class="text-sm text-gray-500 ">Signed in as</p>
                                 <p class="text-sm font-medium text-gray-800 ">
                                     {{ Auth::user()->email }} </p>
                             </div>
                             <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500  "
                                     href="#">
                                     <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                         fill="currentColor">
                                         <path
                                             d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                     </svg>
                                     Newsletter
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500  "
                                     href="#">
                                     <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                         fill="currentColor">
                                         <path
                                             d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                         <path
                                             d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                     </svg>
                                     Purchases
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500  "
                                     href="#">
                                     <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                         fill="currentColor">
                                         <path fill-rule="evenodd"
                                             d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                         <path
                                             d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                     </svg>
                                     Downloads
                                 </a>
                                 <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500  "
                                     href="#">
                                     <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                         fill="currentColor">
                                         <path
                                             d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                     </svg>
                                     Team Account
                                 </a>
                                 <!-- Logout Button -->
                                 <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                     <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-red-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500  "
                                         href="{{ route('logout') }}"
                                         onclick="event.preventDefault(); this.closest('form').submit();">
                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="flex-none"
                                             width="16" height="16">
                                             <path stroke-linecap="round" stroke-linejoin="round"
                                                 d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9">
                                             </path>
                                         </svg>
                                         Logout
                                     </a>
                                 </form>

                             </div>
                         </div>
                         {{-- End Profile Dropdown --}}
                     </div>
                     {{-- End Profile --}}
                 @else
                     <a href="{{ route('login') }}"
                         class="bg-tgray text-gray-800 rounded-3xl py-3 px-3.5 font-bold hover:bg-gray-800 hover:text-tgray duration-100">
                         Login
                     </a>
                     <a href="{{ route('register') }}"
                         class="bg-tgray text-gray-800 rounded-3xl py-3 px-3.5 font-bold hover:bg-gray-800 hover:text-tgray duration-100">
                         Register
                     </a>
                 @endif


             </div>
         </div>
     </nav>
 </header>
 <!-- ========== END HEADER ========== -->
