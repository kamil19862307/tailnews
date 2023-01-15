<div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
    <div class="flex flex-row sm:block hover-img">
        <a href="{{ route('posts.show', $post->id) }}">
            <img class="max-w-full w-full mx-auto"
                 src="storage/src/img/dummy/img{{ rand(1, 27) }}.jpg"
        </a>
        <div class="py-0 sm:py-3 pl-3 sm:pl-0">
            <h3 class="text-lg font-bold leading-tight mb-2">
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </h3>
            <p class="hidden md:block text-gray-600 leading-tight mb-1">
                {!! $post->preview !!}
            </p>
            <a class="text-gray-500" href="{{ route('posts.show', $post->id) }}">
                <span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe
            </a>
        </div>
    </div>
</div>
