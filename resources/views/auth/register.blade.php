<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-2xl">
            Register your account
        </h1>
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4 ">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Student ID-->
        <div class="mt-4">
            <x-input-label for="student_id" :value="__('Student ID')" />
            <x-text-input id="student_id" class="mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="text" name="student_id" :value="old('student_id')" required autofocus autocomplete="student_id" />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <!-- Faculty-->
        <div class="mt-4">
            <x-input-label for="faculty" :value="__('Faculty')" />
            <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
            <select id="faculty" class="block mt-1 w-full border-gray-200 shadow-sm rounded-lg" type="text" name="faculty" :value="old('faculty')" required autofocus autocomplete="faculty">
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
            <select id="college_year" class="block mt-1 w-full border-gray-200 shadow-sm rounded-lg" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <!-- <x-text-input id="college_year" class="block mt-1 w-full" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year" /> -->
            <x-input-error :messages="$errors->get('college_year')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>