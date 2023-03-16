@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h1>Home Page</h1>
@role('admin')
    <h4>Bienvenido admin</h4>
@endrole
@role('lider')
<h4>Bienvenido lider</h4>
@endrole
@role('maestro')
<h4>Bienvenido maestro</h4>
@endrole
@endsection
