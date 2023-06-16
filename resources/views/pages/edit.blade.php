@extends('layout.app')

@section('titlePage')
Laravel comics | Edit One Comic
@endSection

@section('content')

<div id="form-section" class="py-5">
    <div class="container">
        <h1>Modifica un fumetto</h1>
        <form action="{{ route( 'comics.update', $comic ) }}" method="POST" >

            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="comic-title" class="form-label">Title</label>
                <input type="text" id="comic-title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci title" value="{{ old('title') ?? $comic->title }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="comic-description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="comic-description" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="comic-thumb" class="form-label">Thumb Image</label>
                <input type="text" id="comic-thumb" name="thumb"  class="form-control" value="{{ old('thumb') ?? $comic->thumb }}">
            </div>

            <div class="form-group mb-3">
                <label for="comic-price" class="form-label">Price</label>
                <input type="text" id="comic-price" name="price"  class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ?? $comic->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="comic-series" class="form-label">Series</label>
                <input class="form-control" type="text" id="comic-series" class="form-control" name="series" value="{{ old('series') ?? $comic->series }}">
            </div>

            <div class="form-group mb-3">
                <label for="comic-sale-date" class="form-label">Sale date</label>
                <input type="text" id="comic-sale-date" name="sale_date" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}">
            </div>

            <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ old('type') ?? $comic->type }}">
            </div>

            <div class="form-group mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" id="artists" name="artists" class="form-control" value="{{ old('artists') ?? $comic->artists }}">
            </div>

            <div class="form-group mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" id="writers" name="writers" class="form-control" value="{{ old('writers') ?? $comic->writers }}">
            </div>

            <button type="submit" class="btn btn-primary mt-5">Edit Comic</button>

        </form>
    </div>
</div>

@endSection