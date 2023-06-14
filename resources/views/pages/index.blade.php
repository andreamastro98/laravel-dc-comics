@extends('layout.app')

@section('titlePage')
Laravel comics | Home
@endSection

@section('content')

<div class="container d-flex flex-wrap py-5">

    @foreach($comics as $elem)
    <div class="card">
        <img src="{{$elem['thumb']}}" alt="">
        <a href="{{ route ('show', $elem -> id)}}">
            <span>{{ $elem['series'] }}</span>
        </a>        
    </div>
    @endforeach

</div>
<div class="d-flex justify-content-center pb-5">
    <button>load more</button>
</div>

@include ('partials.fastLink')

@endSection