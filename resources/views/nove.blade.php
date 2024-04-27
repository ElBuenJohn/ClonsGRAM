@extends('layouts.app')
@section('titulo')
{{--  Pagina principal  --}}
Novedades
@endsection

@section('contenido')

<x-listar-post :posts="$posts" />

@endsection