<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{asset('css/register.css')}}"/>
    <form method="POST" action="{{ route('register') }}">
        @csrf

            <h1>会員登録</h1>
        <!-- Name -->
        <div>
            <x-text-input id="name" class="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="名前" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="mail" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="メールアドレス" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-text-input id="password" class="pass"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="パスワード" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-text-input id="password_confirmation" class="pass-confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="確認用パスワード"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
            <x-primary-button class="register_button">
                {{ __('会員登録') }}
            </x-primary-button>

            <p class="guidance">アカウントをお持ちの方はこちらから</p>
            <div class="flex items-center justify-center">
            @if (Route::has('login'))
                <a class="login" href="{{ route('login') }}">
                    {{ __('ログイン') }}
                </a>
            @endif

        </div>
    </form>
</x-guest-layout>
