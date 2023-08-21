@extends('template')
@section('title', 'Se-Conecte')
@section('content')
<div class="container-fluid">
    <div class="row">
    @foreach($pessoas as $p)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img src="{{ $p['image'] }}" class="card-img-top" alt="test">
                <div class="card-body">
                    <h5 class="card-title">{{ $p['nome'] }}</h5>
                    <h5 class="card-title">{{ $p['birth'] }}</h5>
                    <p class="card-text">{{ $p['idade'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
