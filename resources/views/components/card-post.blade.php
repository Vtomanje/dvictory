@props(['post', 'tag'])
<article class="mb-6 bg-white shadow-xl rounded-lg overflow-hidden">
    <img class="w-full h-36 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">

    <div class="px-6 py-4">
        <h1 class="font-bold text-lg mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>

        <div class="text-gray-700 text-base">
            {{$post->extract}}
        </div>

        <div class="px-6 pt-4 pb-2">
            @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-800 mr-2">{{$tag->name}}</a>
                
            @endforeach
        </div>
    </div>
</article>
