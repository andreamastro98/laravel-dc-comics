<?php

$fastLinks = array(
    array(
        'name' => 'digital comics',
        'url' => 'buy-comics-digital-comics.png',
    ),
    array(
        'name' => 'dc merchandise',
        'url' => 'buy-comics-merchandise.png',
    ),
    array(
        'name' => 'subscription',
        'url' => 'buy-comics-subscriptions.png',
    ),
    array(
        'name' => 'comic shop locator',
        'url' => 'buy-comics-shop-locator.png',
    ),
    array(
        'name' => 'dc power visa',
        'url' => 'buy-dc-power-visa.svg',
    ),
);

?>

<section class="fastlinks">
    <div class="container d-flex justify-content-between align-items-center py-5">
        @foreach($fastLinks as $elem)
        <div>
            <img src="{{ Vite::asset('resources/img/' . $elem['url']) }}" :alt="index">
            <a href="{{ $elem['url'] }}">{{ $elem['name'] }}</a>
        </div>
        @endforeach
    </div>
</section>