@extends('layout.layout')
@section('title', 'Login')
@section('content')


<!-- =========={ MAIN }==========  -->
<main id="content">
<!-- advertisement -->
<div class="bg-gray-50 py-4 hidden">
<div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
<div class="mx-auto table text-center text-sm">
    <a class="uppercase" href="#">Advertisement</a>
    <a href="#">
        <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
    </a>
</div>
</div>
</div>

<!-- block news -->
<div class="bg-gray-50 py-6">
<div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
<div class="flex justify-center flex-wrap">
<!-- Left -->
<div class="flex-shrink max-w-full w-full lg:w-1/3  overflow-hidden">
<div class="w-full py-3">
    <h2 class="text-gray-800 text-3xl font-bold">
        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> Login
    </h2>
</div>
<div class="flex flex-row flex-wrap -mx-3">
    <div class="flex-shrink max-w-full w-full px-3 pb-5">
        <div class="px-8 py-6 border border-gray-100 bg-white">
            <form class="flex flex-wrap flex-row -mx-4">

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inpuemail4" class="inline-block mb-2">Email</label>
                    <input type="email" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inpuemail4" required>
                </div>

                <div class="flex-shrink max-w-full px-4 w-full  mb-6">
                    <label for="inputfirst4" class="inline-block mb-2 text-red-600">Password</label>
                    <input type="text" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-red-600 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputfirst4" required>
                </div>



                <div class="flex-shrink max-w-full px-4 w-full mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="checked-demo" value="1" class="form-checkbox h-5 w-5 text-blue-500 dark:bg-gray-700 border border-gray-100 dark:border-gray-700 focus:outline-none" required>
                        <span class="text-gray-700 ml-4">Запомнить меня</span>
                    </label>
                </div>
                <div class="flex-shrink max-w-full px-4 w-full">
                    <button class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                        Войти
                    </button>
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
