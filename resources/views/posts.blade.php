@extends('layout.layout')
@section('title', 'Posts News')
@section('content')

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- advertisement -->
        <div class="bg-gray-50 py-4 hidden">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="mx-auto table text-center text-sm">
                    <a class="uppercase" href="#">Advertisement</a>
                    <a href="#">
                        <img src="storage/src/img/ads/ads_728.jpg" alt="advertisement area">
                    </a>
                </div>
            </div>
        </div>

        <!-- block news -->
        <div class="bg-gray-50 py-6">
            <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
                <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
                        <div class="flex flex-row flex-wrap -mx-3">
                            <div class="flex-shrink max-w-full w-full px-3">
                                <div class="w-full py-3 mb-4">
                                    <h2 class="text-gray-800 text-3xl font-bold">
                                        <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> Posts news: <b>"news today"</b>
                                    </h2>
                                </div>
                            </div>


                    @each('posts.partials.item', $posts, 'post')



                        </div>
                        <div>

                        {{ $posts->links() }}
                        </div>

                    </div>
                    <!-- right -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                        <div class="w-full bg-white">
                            <div class="mb-6">
                                <div class="p-4 bg-gray-100">
                                    <h2 class="text-lg font-bold">Most Popular</h2>
                                </div>
                                <ul class="post-number">
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                                    </li>
                                    <li class="border-b border-gray-100 hover:bg-gray-50">
                                        <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-sm py-6 sticky">
                            <div class="w-full text-center">
                                <a class="uppercase" href="#">Advertisement</a>
                                <a href="#">
                                    <img class="mx-auto" src="storage/src/img/ads/250.jpg" alt="advertisement area">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end main -->


@endsection
