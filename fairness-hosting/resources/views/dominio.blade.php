@extends('template')
@section('title', 'Dominio')
@section('content')
@if(!empty($busca))
    <p> exibindo id do prosuto: {{$busca}}</p>
@endif
@endsection