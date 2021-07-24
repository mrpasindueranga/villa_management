<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <a href="/">
                <div class="flex">
                    <img src="{{asset('img\WHMCS.png')}}" alt="" class="mr-5">
                    <img src="{{asset('img\WHM 250x50.png')}}" alt="">
                </div>
            </a>
        <div class="flex justify-center text-2xl">SMS Service Provider</div>
        </x-slot>

        <div class="mb-4 text-sm text-white">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
