@extends('layout.layout')
@section('title', 'Забыл пароль')
@section('content')


<!-- =========={ MAIN }==========  -->
<main id="content">
<!-- advertisement -->


<!-- block news -->
<div class="bg-gray-50 py-6">
<div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
<div class="flex justify-center flex-wrap">
<!-- Left -->
<div class="flex-shrink max-w-full w-full lg:w-1/3  overflow-hidden">
<div class="w-full py-3">
    <h2 class="text-gray-800 text-3xl font-bold">
        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> Восстановить пароль
    </h2>
</div>
<div class="flex flex-row flex-wrap -mx-3">
    <div class="flex-shrink max-w-full w-full px-3 pb-5">
        <div class="px-8 py-6 border border-gray-100 bg-white">
            <form method="POST" action="{{ route('forgot_process') }}" class="flex flex-wrap flex-row -mx-4">
                @csrf

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inpuemail4" class="inline-block mb-2">Email</label>

                    {{ session('password_new') }}

                    @error('email')
                        <label class="inline-block mb-2 text-red-500">{{ $message }}</label>
                    @enderror

                    <input name="email"
                           type="email"
                           value="{{ old('email') }}"
                           class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white
                            border border-gray-100 overflow-x-auto
                            @error('password')
                                border-red-500
                            @enderror
                            focus:outline-none focus:border-gray-400
                            focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                           id="inpuemail4" required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full">
                    <button type="submit" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                        Сбросить пароль
                    </button>
                </div>
                <div class="flex-shrink max-w-full px-4 pt-7 w-full">
                    <a href="{{ route('register') }}">
                        <button type="button" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                            Регистрация
                        </button>
                    </a>
                </div>
                <div class="flex-shrink max-w-full px-4 pt-7 w-full">
                    <a href="{{ route('login') }}">
                        <button type="button" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                            Вспомноил пароль
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</main><!-- end main -->


@endsection
