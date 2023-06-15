@extends('layout.app')

@section('titlePage')
Laravel comics | Home
@endSection

@section('content')

<div class="container d-flex flex-wrap py-5">

    @foreach($comics as $elem)
    <div class="card position-relative">
        <img src="{{$elem['thumb']}}" alt="">
        <a href="">
            <i class="fa-solid fa-pen first-icon" style="color: #ffffff;"></i>
        </a>
        <a href="">
            <i class="fa-solid fa-trash second-icon" style="color: #ffffff;"></i>
        </a>
        
        <a href="{{ route ('comics.show', $elem -> id)}}">
            <span>{{ $elem['series'] }}</span>
        </a>        
    </div>
    @endforeach

</div>
<div class="d-flex justify-content-center pb-5">
    <a href="{{ route('comics.create') }}">
        <button>add one</button>
    </a>    
</div>

@include ('partials.fastLink')

@endSection