<x-guest-layout class="mb-20">
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="text-center mt-4">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Already have an account?
                    <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('login') }}">
                        {{ __('Sign in here') }}
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <button type="button" class="mb-1 w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                        <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4" />
                        <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853" />
                        <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05" />
                        <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335" />
                    </svg>
                    Sign up with Google
                </button>

                <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">Or</div>

                <!-- Name -->
                <div class=>
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

                    <x-text-input id="password" class="block mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full text-sm font-medium text-gray-800  dark:text-gray-200" type="password" name="password_confirmation" required autocomplete="new-password" />

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
                    <select id="faculty" class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200 border-gray-200 shadow-sm rounded-lg" type="text" name="faculty" :value="old('faculty')" required autofocus autocomplete="faculty">
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
                    <select id="college_year" class="block mt-1 w-full text-sm font-medium text-gray-800 dark:text-gray-200 border-gray-200 shadow-sm rounded-lg" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <!-- <x-text-input id="college_year" class="block mt-1 w-full" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year" /> -->
                    <x-input-error :messages="$errors->get('college_year')" class="mt-2" />
                </div>

                <button type="submit" class="block mt-5 mb-2 py-3 px-4 w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">{{ __('Register') }}</button>
        </form>
    </div>
</x-guest-layout>