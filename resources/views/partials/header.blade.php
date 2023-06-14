<?php

$menuLinks = array(
    array(
        'name' => 'Characters',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Comics',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Movies',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Tv',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Games',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Collectibles',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Videos',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Fans',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'News',
        'link' => '',
        'currennt' => ''
    ),
    array(
        'name' => 'Shop',
        'link' => '',
        'currennt' => ''
    )
);

?>

<div>
    <header class="container">
        <nav class="d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" style="width: 70%;">
            </div>
            <div>
                <ul>
                    @foreach($menuLinks as $elem)
                        <li>
                            <a href="#"> {{$elem['name']}} </a>
                        </li>
                    @endforeach

                </ul>
            </div>

            

        </nav>
    </header>

    <div class="jumbotron">
        <div class="container position-relative">
            <span class="section-title">current series</span>
        </div>
    </div>
</div>