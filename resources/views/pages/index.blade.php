@extends('layout.app')

@section('titlePage')
Laravel comics | Home
@endSection

@section('content')

<div class="container d-flex flex-wrap py-5">

    @foreach($comics as $elem)
    <div class="card position-relative">
        <img src="{{$elem['thumb']}}" alt="">
        <a href="{{ route( 'comics.edit', $elem ) }}">
            <i class="fa-solid fa-pen first-icon" style="color: #ffffff;"></i>
        </a>
        
        <form action=" {{ route('comics.destroy', $elem) }} " method="POST">
            @csrf
            @method('DELETE')
            <button onclick="return cancellaElem()" class="second-icon" type="submit"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
        </form>
        
        
        
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

<script>
    function cancellaElem(){
        return confirm('Sei sicuro di voler cancellare il fumetto?')
    }
</script>