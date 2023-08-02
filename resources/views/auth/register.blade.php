<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- id  รหัสนิสิต-->
        <div class="mt-4">
            <x-input-label for="id" :value="__('Id')" />
            <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus autocomplete="id" />
            <x-input-error :messages="$errors->get('id')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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

        <!-- social contact-->
        <div class="mt-4">
            <x-input-label for="social_contact" :value="__('Social Contact')" />
            <x-text-input id="social_contact" class="block mt-1 w-full" type="text" name="social_contact" :value="old('social_contact')" required autofocus autocomplete="social_contact" />
            <x-input-error :messages="$errors->get('social_contact')" class="mt-2" />
        </div>

        <!-- Faculty-->
        <div class="mt-4">
            <x-input-label for="faculty" :value="__('Faculty')" />
            <x-input-error :messages="$errors->get('faculty')" class="mt-2" />
            <select id="faculty" class="block mt-1 w-full" type="text" name="faculty" :value="old('faculty')" required autofocus autocomplete="faculty">

            </select>
        </div>

        <!-- college year-->
        <div class="mt-4">
            <x-input-label for="college_year" :value="__('College Year')" />
            <select id="college_year" class="block mt-1 w-full" type="text" name="college_year" :value="old('college_year')" required autofocus autocomplete="college_year">
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