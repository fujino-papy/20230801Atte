<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>ログイン</h1>
        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="mail" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="メールアドレス" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="pass"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="パスワード"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            <x-primary-button class="login_button">
            {{ __('ログイン') }}
            </x-primary-button>


            <p class="guidance">アカウントをお持ちでない方はこちらから</p>


        <div class="flex items-center justify-center">
            @if (Route::has('register'))
                <a class="register" href="{{ route('register') }}">
                    {{ __('会員登録') }}
                </a>
            @endif

        </div>
    </form>
</x-guest-layout>
