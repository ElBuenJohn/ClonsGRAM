@extends('layouts.app')
@section('titulo')
Editar perfil: {{ auth()->user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data" class="mt-10 md:mt-0" >
                @csrf

                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>

                    <input 
                    
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu Nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ auth()->user()->name }}"
                    />
                    
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> 
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>

                    <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu Nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}"
                    />
                    
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> 
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>

                    <input 
                    
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Tu Email"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ auth()->user()->email }}" />

                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> 
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen de perfil
                    </label>

                    <input 
                        id="imagen"
                        name="imagen"
                        type="file"
                        class="border p-3 w-full rounded-lg"
                        value=""
                        accept=".jpg, .png, .jpeg"
                    />

                </div>

                <input 
                type="submit" 
                value="Guardar cambios"
                class="bg-[#2d8f8c] hover:bg-[#115e59] transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
            <div>
                
                <a  
                        href="{{ route('pass.index') }}"
                        class="cursor-pointer"
                    {{--  <lavel class=" text-gray-500 text-sm" > Cambiar Contraseña 
                    </lavel>   --}}
                </a>
                
            </div>
        </div>
    </div>

@endsection