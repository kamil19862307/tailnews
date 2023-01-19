@extends('layout.layout')
@section('title', 'Регистрация')
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
        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> Регистрация
    </h2>
</div>
<div class="flex flex-row flex-wrap -mx-3">
    <div class="flex-shrink max-w-full w-full px-3 pb-5">
        <div class="px-8 py-6 border border-gray-100 bg-white">
            <form action="{{ route('register_process') }}" method="POST" class="flex flex-wrap flex-row -mx-4">
                @csrf

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inpuename4" class="inline-block mb-2">Имя</label>
                    @error('name')
                        <label class="inline-block mb-2 text-red-500">{{ $message }}</label>
                    @enderror
                    <input type="text"
                           name="name"
                    class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white
                        border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400
                        focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                        id="inpuemail4"
                           value="{{ old('name') }}"
                           required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inpuemail4" class="inline-block mb-2">Email</label>
                    @error('email')
                        <label class="inline-block mb-2 text-red-500">{{ $message }}</label>
                    @enderror
                    <input type="email"
                           name="email"
                    class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white
                        border border-gray-100 overflow-x-auto
                        @error('email')
                            border-red-500
                        @enderror
                        focus:outline-none focus:border-gray-400
                        focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                            id="inpuemail4"
                            value="{{ old('email') }}"
                            required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inputfirst4" class="inline-block mb-2">Пароль</label>
                    @error('password')
                        <label class="inline-block mb-2 text-red-500">{{ $message }}</label>
                    @enderror
                    <input type="password"
                           name="password"
                    class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white
                        border border-gray-100 overflow-x-auto
                        @error('password')
                            border-red-500
                        @enderror
                         focus:outline-none focus:border-gray-400
                        focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                    id="inputfirst4" required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inputfirst4" class="inline-block mb-2">Подтвердите пароль</label>
                    @error('password_confirmation')
                        <label class="inline-block mb-2 text-red-500">{{ $message }}</label>
                    @enderror
                    <input type="password"
                           name="password_confirmation"
                    class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white
                        border border-gray-100 overflow-x-auto
                        @error('password_confirmation')
                            border-red-500
                        @enderror
                         focus:outline-none focus:border-gray-400
                        focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                    id="inputfirst4" required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-blue-500 dark:bg-gray-700 border border-gray-100 dark:border-gray-700 focus:outline-none">
                        <span class="text-gray-700 ml-4">Запомнить меня</span>
                    </label>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full">
                    <button type="submit" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                        Зарегистрироваться
                    </button>
                </div>
                <div class="flex-shrink max-w-full px-4 pt-7 w-full">
                    <a href="{{ route('login') }}">
                        <button type="button" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                            Есть аккаунт
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
