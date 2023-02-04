@extends('layout.admin')
@section('title', 'Админ - главная')
@section('content')

    <!-- =========={ MAIN }==========  -->
    <main id="content">


        <!-- block news -->
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
                    <div class="flex-shrink max-w-full w-full lg:w-4/5  overflow-hidden">
                        <div class="p-7 rounded bg-white">
                            <div class="mb-6">
                                <h1 class="text-4xl mb-4 font-semibold text-gray-800">Все статьи</h1>
                                <a href="{{ route('admin.posts.create') }}">
                                    <button type="button" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">
                                        Добавить
                                    </button>
                                </a>
                            </div>

                            <div id="free-plugins" class="mb-1 2">
                                <div class="tabless">
                                    <table class="table-auto">
                                        <thead class="bg-gray-100">
                                        <tr class="border border-gray-200">
                                            <th class="py-2">Id</th>
                                            <th class="py-2">Title</th>
                                            <th class="py-2">Preview</th>
                                            <th class="py-2">Изменить</th>
                                            <th class="py-2">Удалить</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($posts as $post)
                                            <tr>
                                                <td class="border border-gray-200 px-4 py-2 text-gray-600"><span class="font-medium">{{ $post->id }}</span></td>
                                                <td class="border border-gray-200 px-4 py-2 text-gray-600">{{ $post->title }}</td>
                                                <td class="border border-gray-200 px-4 py-2 text-gray-600">{{ $post->preview }}</td>
                                                <td class="border border-gray-200 px-4 py-2 text-gray-600"><a class="text-blue-700" href="{{ route('admin.posts.edit', $post->id) }}">Редактировать</a></td>
                                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <td class="border border-gray-200 px-4 py-2 text-gray-600">
                                                        <button type="submit" onclick="return confirm('Удалить \'{{ $post->title }}\'?')" class="text-red-500">Удалить</button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            {{ $posts->links() }}
                        </div>
                    </div>
                    <!-- End left -->

                </div>
            </div>
        </div>
    </main>

    <!-- end main -->


@endsection
