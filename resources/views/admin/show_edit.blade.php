@extends('layout.layout')
@section('title', 'Post edit')
@section('content')

<!-- =========={ MAIN }==========  -->

<main id="content">


    <!-- block news -->
    <div class="bg-gray-50 py-6">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!-- Left -->
                <div class="flex-shrink max-w-full w-full lg:w-4/5  overflow-hidden">
                    <div class="p-7 rounded bg-white">
                        <div class="mb-6">
                            <h1 class="text-4xl mb-4 font-semibold text-gray-800">Все статьи</h1>
                            <p class="text-gray-600 leading-relaxed font-light text-xl mx-auto pb-2">First, let us take this opportunity to thank all the creative minds for their great products and plugins.</p>
                        </div>

                        <div id="free-plugins" class="mb-12">
                            <h2 class="text-2xl mb-2 font-semibold text-gray-800">Plugins</h2>
                            <p class="mb-4">All third-party plugins (libraries) are located in the <code class="text-pink-700">src/vendors/..</code> folder.</p>

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
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><span class="font-medium">1</span></td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600">Rapidl yidly </td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600">Est odio molestiae et et esse illum et.</td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><a class="text-blue-700" href="https://tailwindcss.com/" target="_blank">Изменить</a></td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><a class="text-blue-700" href="https://tailwindcss.com/" target="_blank">Удалить</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="free-design" class="mb-12">
                            <h2 class="text-2xl mb-2 font-semibold text-gray-800">Image sources</h2>
                            <p class="mb-4">Demo image sources in the <code class="text-pink-700">src/img/..</code> folder</p>
                            <div class="tabless">
                                <table class="table-auto">
                                    <thead class="bg-gray-100">
                                    <tr class="border border-gray-200">
                                        <th class="py-2">Name</th>
                                        <th class="py-2">Description</th>
                                        <th class="py-2">URL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><span class="font-medium">Pexels</span></td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600">The best free stock photos & videos shared by talented creators.</td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><a class="text-blue-700" href="https://www.pexels.com/" target="_blank">https://www.pexels.com/</a></td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><span class="font-medium">Bootstrap Icons</span></td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600">For the first time ever, Bootstrap has its own icon library.</td>
                                        <td class="border border-gray-200 px-4 py-2 text-gray-600"><a class="text-blue-700" href="https://icons.getbootstrap.com/" target="_blank">https://icons.getbootstrap.com/</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <a class="text-blue-700 block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="credits.html">Credits</a>
                                    </li>
                                    <li class="relative inline-block lg:block">
                                        <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="changelogs.html">Changelog</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- end main -->


@endsection
