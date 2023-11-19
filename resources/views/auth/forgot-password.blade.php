<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo style="width: 50px; height: 50px; fill: current; color: #ccc;" />
            </a>
        </x-slot>

        

<!-- Session Status -->
<div style="margin-bottom: 1rem;">
    @if (session('status'))
        {{ session('status') }}
    @endif
</div>

<!-- Validation Errors -->
<div style="margin-bottom: 1rem;">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>

<form method="POST" action="{{ route('password.email') }}" style="margin-left: 28%; margin-top: 2.5rem; max-width:20rem; background-color: #0a7e8c; padding:10rem; color:white; border-radius:10px; font-size:18px;">
    @csrf

    <div style="margin-bottom: 1rem; font-size: 0.875rem; color: wheat;">
    Forgot your password? No problem. Just let us know your email address, and we will email you a password reset link that will allow you to choose a new one.
</div>

    <!-- Email Address -->
    <div style="margin-bottom: 1rem;">
        <label for="email" style="display: block; margin-bottom: 0.25rem; font-weight: bold;">Email</label>
        <input id="email" style="display: block; width: 100%; margin-top: 0.25rem; padding: 0.5rem;" type="email" name="email" value="{{ old('email') }}" required autofocus />
    </div>

    <div style="display: flex; align-items: center; justify-content: flex-end; margin-top: 1rem;">
        <button style="padding: 0.5rem;">Email Password Reset Link</button>
    </div>
</form>

    </x-auth-card>
</x-guest-layout>
