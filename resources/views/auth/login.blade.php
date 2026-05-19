<x-guest-layout>
    <div class="text-center u-add-bottom">
        <h3 class="u-remove-bottom">Welcome Back</h3>
        <p class="text-pretitle">Admin Login</p>
    </div>

    @if (session('status'))
        <div class="alert alert--success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-field">
            <label for="email" class="text-pretitle">Email Address</label>
            <input id="email" class="u-fullwidth" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Email Address">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-field">
            <label for="password" class="text-pretitle">Password</label>
            <input id="password" class="u-fullwidth" type="password" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-field">
            <label for="remember_me" class="u-remove-bottom">
                <input id="remember_me" type="checkbox" name="remember">
                <span class="ms-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <div class="u-add-bottom">
            <input type="submit" value="Log In" class="btn btn--primary u-fullwidth">
        </div>

        <div class="auth-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
