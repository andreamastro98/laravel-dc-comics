@extends('layout.app')

@section('titlePage')
Laravel comics | Comic
@endSection



@section('content')

    <div id="single-comic" class=" py-5">
        <div class="container">
            <div class="row">
                <div class="col-3 me-5">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="col-8">
                    <h1>{{$comic['title']}}</h1>
                    <div id="available" class="row align-items-center">
                        <div class=" col-8 row">
                            <div class="col-6"><span>U.S Price {{$comic['price']}}</span></div>
                            <div class="col-6"><span>AVAILABLE</span></div>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-success">Check availability</button>
                        </div>                        
                    </div>
                    <div>
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div id="specs" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-4">Talent</h3>
                    <div class="row">
                        <div class="col-4"><span>Art By:</span></div>
                        <div class="col-8">
                            <span>{{$comic['artists']}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><span>Written By:</span></div>
                        <div class="col-8"><span>{{$comic['writers']}}</span></div>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="mb-4">Specs</h3>
                    <div class="row">
                        <div class="col-4"><span>Series:</span></div>
                        <div class="col-8"><span>{{$comic['series']}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><span>U.S Price:</span></div>
                        <div class="col-8"><span>{{$comic['price']}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><span>On Sale Date:</span></div>
                        <div class="col-8"><span>{{$comic['sale_date']}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include ('partials.fastLink')
        
    
@endSection