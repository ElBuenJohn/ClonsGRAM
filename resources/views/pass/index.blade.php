@extends('layouts.app')

@section('titulo')
Editando Contraseña
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
       
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('pass.store') }}" method="POST" novalidate>
                @csrf  

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña Anterior
                    </label>

                    <input 
                    
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Contraseña Anterior"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                   >
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> 
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nueva Contraseña
                    </label>

                    <input 
                    
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Nueva Contraseña"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                   >
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> 
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>

                    <input 
                    
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite tu Contraseña"
                    class="border p-3 w-full rounded-lg">
                </div>
                <input 
                type="submit" 
                value="Cambiar"
                class="bg-[#2d8f8c] hover:bg-[#115e59] transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>

    </div>
@endsection