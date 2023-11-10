

<x-guest-layout style="backgrond-color: black;">
  <x-auth-card style="max-width: 150px; background-color: black;">
    <x-slot name="logo">
      <a href="/">
        <x-application-logo style="width: 50px; height: 50px; fill: current; color: #ccc;" />
      </a>
    </x-slot>

    <x-auth-session-status style="margin-bottom: 10px;" :status="session('status')" />

    <x-auth-validation-errors style="margin-bottom: 10px;" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}" style="margin-left: 28%; margin-top: 2.5rem; max-width:20rem; background-color: #0a7e8c; padding:10rem; color:white; border-radius:10px; font-size:18px;">
      @csrf

      <div>
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" style="display: block; margin-top: 5px; width: 100%;" type="email" name="email" :value="old('email')" required autofocus />
      </div>

      <div style="margin-top: 10px;">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" style="display: block; margin-top: 5px; width: 100%;" type="password" name="password" required autocomplete="current-password" />
      </div>

      <div style="margin-top: 10px;">
        <label for="remember_me" style="display: flex; align-items: center;">
          <input id="remember_me" type="checkbox" style="border: 1px solid #ccc; margin-right: 5px;" name="remember">
          <span style="font-size: 14px; color: #ccc;">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
        @if (Route::has('password.request'))
          <a style="font-size: 14px; color: #ccc; text-decoration: underline;" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
        @endif

        <x-button style="margin-left: 10px; background-color: #007bff; color: white; padding: 5px 10px; border: none;">
          {{ __('Log in') }}
        </x-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>

