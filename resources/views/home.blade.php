@extends('layouts.app')
@section('titulo')
{{--  Pagina principal  --}}
Bienvenido a la pagina principal
@endsection

@section('contenido')

    <x-listar-post :posts="$posts" />

@endsection
