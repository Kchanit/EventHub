@extends('layouts.main')

@section('content')
    <!-- Card Section -->
    <div class="max-w-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <form method="POST" action="{{ route('info.update', ['user' => auth()->user()]) }}">
            @csrf
            @method('PUT')
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-7 dark:bg-slate-900">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                        Edit Your Profile
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Manage your name, and account settings.
                    </p>
                </div>

                <div class="flex flex-col items-start gap-2">
                    <label class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        Profile photo
                    </label>
                    <label for="image_url"
                        class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-gray-700">

                        <input id="image_url" name="image_url" type="file" class="sr-only">
                        <svg class="w-10 h-10 mx-auto text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                            <path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                        </svg>
                        <span class="mt-2 block text-sm text-gray-800 dark:text-gray-200">
                            Browse your device
                        </span>
                        <span class="mt-1 block text-xs text-gray-500">
                            Maximum file size is 2 MB
                        </span>
                    </label>
                </div>

                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name"
                        class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200" type="text"
                        name="name" value="{{ auth()->user()->name }}" autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <!-- Email Address (Disabled) -->
                <div class="mt-4 ">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email"
                        class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200" type="email"
                        name="email" value="{{ auth()->user()->email }}" disabled />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Student ID (Disabled) -->
                    <x-input-label for="student_id" :value="__('Student ID')" />
                    <x-text-input id="student_id" class="mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200"
                        type="text" name="student_id" value="{{ auth()->user()->student_id }}" disabled />
                    <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                </div>

                <!-- Faculty-->
                <div class="mt-4">
                    <x-input-label for="faculty" :value="__('Faculty')" />
                    <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
                    <select id="faculty"
                        class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200 border-gray-200 shadow-sm rounded-lg"
                        type="text" name="faculty" value="{{ auth()->user()->faculty }}" autofocus
                        autocomplete="faculty">
                        <option selected>Select your faculty</option>
                        <option>Faculty of Agriculture</option>
                        <option> Agro-Industry </option>
                        <option> Architecture</option>
                        <option> Business Administration</option>
                        <option> Economics</option>
                        <option> Education</option>
                        <option> Engineering</option>
                        <option> Environment</option>
                        <option> Fisheries</option>
                        <option> Forestry</option>
                        <option> Humanities</option>
                        <option> Medicine</option>
                        <option> Science</option>
                        <option> Social Sciences</option>
                        <option> Veterinary Medicine</option>
                        <option> Veterinary Technology</option>
                    </select>
                </div>

                <!-- college year-->
                <div class="mt-4">
                    <x-input-label for="college_year" :value="__('College Year')" />
                    <select id="college_year"
                        class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200 border-gray-200 shadow-sm rounded-lg"
                        type="text" name="college_year" value="{{ auth()->user()->college_year }}" autofocus
                        autocomplete="college_year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <!-- <x-text-input id="college_year" class="block mt-1 w-full" type="text" name="college_year" :value="old('college_year')"  autofocus autocomplete="college_year" /> -->
                    <x-input-error :messages="$errors->get('college_year')" class="mt-2" />
                </div>

                {{-- Phone Number --}}
                <div class="mt-4">
                    <x-input-label for="phone_number" :value="__('Phone Number')" />
                    <x-text-input id="phone_number"
                        class="mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="text"
                        name="phone_number" :value="old('phone_number')" autofocus autocomplete="phone_number" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />

                    <!-- Social Contacts -->
                    <div class="mt-4">
                        <x-input-label for="social_contact" :value="__('Social Contact (optional)')" />
                        <x-text-input id="social_contact"
                            class="mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="text"
                            name="social_contact" :value="old('social_contact')" autofocus autocomplete="social_contact" />
                        <x-input-error :messages="$errors->get('social_contact')" class="mt-2" />
                    </div>

                    <!-- Bio -->
                    <div class="mt-4">
                        <x-input-label for="bio" :value="__('Bio')" />
                        <textarea id="bio" name="bio" rows="4"
                            class="mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200 border-gray-200 shadow-sm rounded-lg"
                            type="text" :value="old('bio')" placeholder="Tell them about yourself." autofocus autocomplete="bio"></textarea>
                        <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                    </div>


                    <button type="submit"
                        class="block mt-5 mb-2 py-3 px-4 w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        {{ __('Confirm') }}</button>

                </div>
                <!-- End Card -->
        </form>
    </div>
    <!-- End Card Section -->
@endsection
