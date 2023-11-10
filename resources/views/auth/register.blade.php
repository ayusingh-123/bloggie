<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div style="align-items:center">
                <h1>BLoggie</h1>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
<div style="margin-left: 25%; margin-top: 3rem; padding:4rem; background-color: #0a7e8c; width:40%; border-radius:5px; align-items:center;">
        <form method="POST" action="{{ route('register') }}" style="margin: 0 auto; max-width: 400px; ">
    @csrf

    <div style="margin-bottom: 1rem;">
        <label for="name" style="display: block; margin-bottom: 0.25rem;">Name</label>
        <input id="name" type="text" name="name" style="width: 100%; padding: 0.375rem; border: 1px solid #D1D5DB;" required autofocus />
    </div>

    <div style="margin-bottom: 1rem;">
        <label for="email" style="display: block; margin-bottom: 0.25rem;">Email</label>
        <input id="email" type="email" name="email" style="width: 100%; padding: 0.375rem; border: 1px solid #D1D5DB;" required />
    </div>

    <div style="margin-bottom: 1rem;">
        <label for="password" style="display: block; margin-bottom: 0.25rem;">Password</label>
        <input id="password" type="password" name="password" style="width: 100%; padding: 0.375rem; border: 1px solid #D1D5DB;" required />
    </div>

    <div style="margin-bottom: 1rem;">
        <label for="password_confirmation" style="display: block; margin-bottom: 0.25rem;">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" style="width: 100%; padding: 0.375rem; border: 1px solid #D1D5DB;" required />
    </div>

    <div style="text-align: right;">
        <a href="{{ route('login') }}" style="text-decoration: underline; color: wheat; padding: 0.25rem;">
            Already registered?
        </a>
        <button style="background-color: #22C55E; color: #ffffff; padding: 0.375rem 1rem; border: none; border-radius: 0.375rem; cursor: pointer; margin-left: 0.25rem;">
            Register
        </button>
    </div>
</form>
</div>

    </x-auth-card>
</x-guest-layout>
