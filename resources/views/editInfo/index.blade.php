@extends('layouts.main')

@section('content')

<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
    <div class="mb-8">
      <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
        Edit Your Profile
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Manage your name, password and account settings.
      </p>
    </div>

    <form>
      <!-- Grid -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
        <div class="sm:col-span-3">
          <label class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Profile photo
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="flex items-center gap-5">
            <label for="af-submit-app-upload-images" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-gray-700">
            <input id="af-submit-app-upload-images" name="af-submit-app-upload-images" type="file" class="sr-only">
            <svg class="w-10 h-10 mx-auto text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
              <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            <span class="mt-2 block text-sm text-gray-800 dark:text-gray-200">
              Browse your device or <span class="group-hover:text-blue-700 text-blue-600">drag 'n drop'</span>
            </span>
            <span class="mt-1 block text-xs text-gray-500">
              Maximum file size is 2 MB
            </span>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-account-full-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Full name
          </label>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="sm:flex">
            <input id="af-account-full-name" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="first name">
            <input type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="last name">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-account-email" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Email
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-account-email" type="email" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="your email">
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-account-password" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Password
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="af-account-password" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="enter current password">
            <input type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="enter new password">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="date-of-birth" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Date of Birth
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input type="date" id="start" name="trip-start" value="yyyy-mm-dd" min="1950-01-01" max="2005-12-31" />
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="year-in-university" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Year in University
          </label>
        </div>
        <!-- End Col -->

        <select class="py-2 px-3 pr-9 block w-full sm:w-auto border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          <option selected>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
        <!-- End Col -->

        
        <div class="sm:col-span-3">
          <label for="faculty" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Faculty
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="faculty" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <input id="show-faculty" name="show-faculty" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
          <label for="show-faculty" class="text-sm dark:text-white">show your faculty on profile</label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-account-gender-checkbox" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Gender
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="sm:flex">
            <label for="af-account-gender-checkbox" class="flex py-2 px-3 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
              <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-male">
              <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Male</span>
            </label>

            <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
              <input type="radio" name="af-account-gender-checkbox-female" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
              <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Female</span>
            </label>

            <label for="af-account-gender-checkbox-other" class="flex py-2 px-3 block w-full border border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
              <input type="radio" name="af-account-gender-checkbox-other" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other">
              <span class="text-sm text-gray-500 ml-3 dark:text-gray-400">Other</span>
            </label>
          </div>
        </div>
        <!-- End Col -->

        
        <div class="sm:col-span-3">
          <label for="af-account-bio" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            Social Contacts
          </label>
            <span class="text-sm text-gray-400 dark:text-gray-600">
              (Optional)
            </span>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-social-facebook-url" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Facebook URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="af-social-facebook-url" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-social-instagram-url" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Instagram URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="af-social-instagram-url" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-social-twitter-url" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Twitter URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="af-social-twitter-url" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-social-line-url" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Line URL
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input id="af-social-other-url" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
          </div>
        </div>
        <!-- End Col -->


        <div class="sm:col-span-3">
          <label for="af-account-bio" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
            BIO
          </label>
            <span class="text-sm text-gray-400 dark:text-gray-600">
              (Optional)
            </span>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <textarea id="af-account-bio" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="6" placeholder="Type your message..."></textarea>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->

      <div class="mt-5 flex justify-end gap-x-2">
        <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
          Cancel
        </button>
        <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
          Save changes
        </button>
      </div>
    </form>
  </div>
  <!-- End Card -->
</div>
<!-- End Card Section -->

@endsection