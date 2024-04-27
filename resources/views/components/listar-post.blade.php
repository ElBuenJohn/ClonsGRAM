<div>
    @if ($posts->count())
   
    <div class=" grid md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-6 xl:px-80 ">
        @foreach ($posts as $post)
            <div class="shadow bg-white p-5 mb-5" >
                
                <p class="font-bold p-3">
                    <a href="{{ route('posts.index', $post->user) }}">
                    {{ $post->user->username }} </p> </a>
                <a href="{{ route('posts.show', ['post' => $post, 'user'=> $post->user ]) }}">
                    <img src="{{ asset('uploads') .'/'. $post->imagen }}" 
                    alt="Imagen del post {{ $post->titulo }}">


                        
                    <p class="text-center"> {{ $post->descripcion }} </p>
                    <p class="text-sm text-gray-500 text-center">{{ $post->created_at->diffForHumans()}}</p>
                </a>
    
            </div>
            
        @endforeach
        </div>
    @else 
    <p class="text-center"> No hay publicaciones, sigue a alguien para poder mostrarlas</p>
    @endif
</div>