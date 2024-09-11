<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fix') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-4">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <textarea name="text" class="form-textarea mt-1 block w-full" placeholder="Escribe algo..."></textarea>
            </div>
            <div class="mb-4">
                <input type="file" name="image" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <input type="file" name="video" class="form-input mt-1 block w-full">
            </div>
<button type="submit" class="text-white bg-gradient-to-br from-[#666f88] to-[#b5bac9] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Publicar</button>

        <div class="mt-8">
            @foreach($posts as $post)
                <div class="border p-4 mb-4">
                    <p>{{ $post->text }}</p>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Imagen" class="mt-2 max-w-full h-auto">
                    @endif
                    @if($post->video)
                        <video controls class="mt-2 max-w-full h-auto">
                            <source src="{{ asset('videos/' . $post->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    <p class="text-sm mt-2">Publicado por {{ $post->user->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <a href="">IVAN</a>
        <a href="">Dessiré2</a>

</x-app-layout>
