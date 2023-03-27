@extends('adminlte::page')
@section('title', 'Transporte')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    <div class="container mx-auto">
        @livewire('admin.users-index')

       {{--  <x-alert /> --}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop  