<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!--phone-->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" name="phone" type="tel" class="mt-1 block w-full" :value="old('phone', $user->phone)"
                required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <!--address-->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-area name="address" rows="2" cols="" id="address"
                class="'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'">
                {{ old('address', $user->address) }}
            </x-text-area>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>



        {{-- <div>
            <x-label for="address" :value="__('address')" />

            <textarea id="address"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="address" required rows="5">{{ $user->address }}</textarea>
        </div> --}}

        {{-- <div>
            <x-splade-textarea name="address" label="address" autosize />
        </div> --}}
        {{-- <div>
            <x-textarea class="block mt-1 w-full" name="address" required :value="old('address', $user->address)" required autofocus
                autocomplete="address" />
            <x-slot name="cols">3</x-slot>
            <x-slot name="rows">10</x-slot>
            </x-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div> --}}

        {{-- <div>
            <x-splade-textarea name="address" lable="Address" autosize />
        </div> --}}


        {{-- <div>
            <x-input-label for="address" :value="__('address')" />
            <x-textarea id="address" class="block mt-1 w-full" name="address" required :value="old('address', $user->address)" required
                autofocus autocomplete="address" />
            <x-slot name="colos">3</x-slot>
            <x-slot name="rows">10</x-slot>
            </x-textarea>
            <x-textarea-error class="mt-2" :message="$errors->get('address')" />
        </div> --}}
        {{-- <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="address" name="address" type="tel" class="mt-1 block w-full" :value="old('address', $user->address)"
                required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div> --}}

        {{-- <div>
            <x-input-label for="address" :value="__('address')" />
            <x-textarea id="address" name="address" rows="3" cols="" class="block mt-1 w-full"
                :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div> --}}

        {{-- 
    <x-textarea class="block mt-1 w-full" name="address" required :value="old('address')" >
    <x-slot name="cols">3</x-slot>
    <x-slot name="rows">10</x-slot>
    </x-textarea>         --}}

        <!--Email-->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
