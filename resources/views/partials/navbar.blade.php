
{{-- @extends('layouts.public')


@section("navbar")

@endsection --}}
@php
    $liste =
    [
        "CHARACTERS",
        "COMICS", //da vedere come attivare una classe specifica a lui 
        "MOVIES",
        "TV",
        "GAMES",
        "COLLECTIBLES",
        "VIDEOS",
        "FANS",
        "NEWS",
        "SHOP",
    ]
@endphp


<nav>
    <div class="blue">
        <div class="container d-flex justify-content-end">
            <a class="p-2" href="#">DC POWER  VISA<i class="fa-regular fa-registered piccola"></i></a>
            <a class="p-2" href="#">ADDITIONAL DC DITES <i class="fa-solid fa-angles-down"></i></a>
        </div>
    </div>
    
    <div class="container p-3">
        <div class="nav justify-content-between d-flex  align-items-center">
            <img class="primo-logo"   src="/images/dc-logo.png" alt="">
            @foreach ($liste as $lista)
            <ul class="navbar-nav ">
                <li class="nav-link"><a  class="text-dark" href="#"><strong>{{$lista}}</strong></a></li>
            </ul>
            @endforeach
        </div>
    </div>

    <div class="sfondo-img"></div>

    <div class="container spostato">
        <button class="border-0 text-white p-2"><h2>CURRENT SERIES</h2></button>
    </div>
</nav>


















