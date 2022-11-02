<x-app-layout>
    <div class="containerBody py-8">
        <h1 class="uppercase font-bold text-center text-3xl">Categoría: {{$category->name}}</h1>

        @foreach ($posts as $post)
           <x-card-post :post='$post' />
        @endforeach

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>



</x-app-layout>