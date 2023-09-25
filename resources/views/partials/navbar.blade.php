
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
            <img  src="/images/dc-logo.png" alt="">
            @foreach ($liste as $lista)
            <ul class="navbar-nav ">
                <li class="nav-link"><a  class="text-dark" href="#"><strong>{{$lista}}</strong></a></li>
            </ul>
            @endforeach
        </div>
    </div>

    <div class="sfondo-img">

    </div>
</nav>


















<style>

a {
    color: white;
    text-decoration: none;
    font-size: 0.8rem
}
    
i {
    font-size: 0.5rem
}
    
.blue {
    background-color: #0282F9;
}

.sfondo-img {
    background-image: url(/images/jumbotron.jpg);
    height: 100%;
}

.centratura {

    align-items: center
}

</style>