@extends('layout.admin')
@section('title', 'Админ - добавить статью')
@section('content')

    <!-- =========={ MAIN }==========  -->
    <main id="content">


        <div class="bg-gray-50 py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">

                    <!-- right -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/5 lg:pl-8 order-first">
                        <div class="w-full">
                            <ul id="side-menu" class="w-full float-none flex flex-col font-medium">
                                <!-- dropdown -->
                                <li class="relative">
                                    <div id="mobiledrop-01" class="block py-2 px-4 hover:text-blue-700">
                                        Getting started
                                    </div>

                                    <!-- dropdown menu -->
                                    <ul class="block rounded rounded-t-none top-full z-50 pl-3 py-0.5 text-left mb-1 font-normal" style="min-width: 12rem">
                                        <li class="relative inline-block lg:block">
                                            <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="index.html">Introduction</a>
                                        </li>
                                        <li class="relative inline-block lg:block">
                                            <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="customize.html">Customize</a>
                                        </li>
                                        <li class="relative inline-block lg:block">
                                            <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="components.html">Components</a>
                                        </li>
                                        <li class="relative inline-block lg:block">
                                            <a class="text-blue-700 block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="{{ route('admin.posts.index') }}">Все статьи</a>
                                        </li>
                                        <li class="relative inline-block lg:block">
                                            <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="changelogs.html">Changelog</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End right -->


                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
                        <div class="w-full py-3">
                            <h2 class="text-gray-800 text-3xl font-bold">
                                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> Добавить статью
                            </h2>
                        </div>
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full px-3 pb-5">
                                <div class="px-8 py-6 border border-gray-100 bg-white">
                                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-wrap flex-row -mx-4">
                                        @csrf

                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <label for="inputfirst4" class="inline-block mb-2">Title</label>
                                            @error('title')
                                                <label for="inputfirst4" class="inline-block mb-2 text-red-500">{{ $message }}</label>
                                            @enderror
                                            <input name="title" type="text" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 @error('title') border-red-500 @enderror overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputfirst4" required>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <label for="inputlast4" class="inline-block mb-2">Preview</label>
                                            @error('preview')
                                                <label for="inputfirst4" class="inline-block mb-2 text-red-500">{{ $message }}</label>
                                            @enderror
                                            <input name="preview" type="text" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 @error('preview') border-red-500 @enderror overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputlast4" required>
                                        </div>
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            <label for="exampleTextarea1" class="inline-block mb-2">Description</label>
                                            @error('description')
                                                <label for="inputfirst4" class="inline-block mb-2 text-red-500">{{ $message }}</label>
                                            @enderror
                                            <textarea name="description" class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 @error('description') border-red-500 @enderror overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="exampleTextarea1" rows="3"></textarea>
                                        </div>
                                        @if(isset($post) && $post->thumbnail)
                                            <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                                <label for="exampleTextarea1" class="inline-block mb-2">Thumbnail</label>
                                                <div class="flex flex-row flex-wrap -mx-3">
                                                    <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                                                        <div class="flex flex-row sm:block hover-img">
                                                            <img class="max-w-full w-full mx-auto" src="/storage/posts/{{ $post->thumbnail }}" alt="alt title">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="flex-shrink max-w-full px-4 w-full mb-6">
                                            @error('thumbnail')
                                                <label for="inputfirst4" class="inline-block mb-2 text-red-500">{{ $message }}</label>
                                            @enderror
                                            <input name="thumbnail" type="file" />
                                        </div>

                                        <div class="flex-shrink max-w-full px-4 w-full">
                                            <button type="submit" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                                                Сохранить
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left -->

                </div>
            </div>
        </div>
    </main>

    <!-- end main -->


@endsection
