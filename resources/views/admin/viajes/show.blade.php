@extends('adminlte::page')
@section('title', 'Transporte')
@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Mostrar viajes</h1>
@stop

@section('content')
    <div class="container mx-auto">

       {{--  <x-alert /> --}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')