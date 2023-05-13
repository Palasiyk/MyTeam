@extends('layouts.admin_layouts')

@section('content')
    <div class="container first">
        <div class="row card">
            <div class="row text-center m-3">
                <h3 class="text-center">Наступний матч</h3>
                <h4 class="text-center">3.04.2023 - 20:00</h4>
            </div>
            <div class="row next_game mb-3 text-center align-items-center">
                <div class="col-5 text-center d-flex flex-column align-items-center">
                    <h1>«Поліція охорони-ЗУНУ-Динамо»</h1>
                    <img class="w-75 next_game_logo" src="/public/images/logo/DSO.svg" alt="dso">
                </div>
                <div class="col text-center d-flex flex-column align-items-center">
                    <img class="w-75 next_game_logo" src="/public/images/logo/vs.png" alt="vs">
                </div>
                <div class="col-5 text-center d-flex flex-column align-items-center">
                    <h1>ВК «Епіцентр»</h1>
                    <img class="w-75 next_game_logo" src="/public/images/logo/epic.svg" alt="prom">
                </div>
            </div>
        </div>

            {{--    VIDEO--}}
        <div class="row">
            <h3 class="text-center m-3">Попередні ігри</h3>
            @foreach($PlayOffs as $PlayOff)
                <div class="row card m-1">
                    <div class="row text-center" >
                        <h3 class="text-center">«Поліція охорони-ЗУНУ-Динамо» - {{ $PlayOff->team_name }}</h3>
                        <h5 class="text-center"><p><a type="data">{{ $PlayOff->data }}</a></p></h5>
                    </div>
                    <div class="row">
                        <a class="col col-sm-12 w-100 text-center" href="{{ $PlayOff->foto }}">
                            <img class="display-block " width="80%" src="public/images/logo/{{ $PlayOff->game['team_foto'] }}" alt="foto">
                        </a>
                        <a class="col col-sm-6 w-50 text-center" href="{{ $PlayOff->video }}">
                            <img class="display-block" width="50%" src="public/images/youtub.png" alt="Статитика">
                        </a>
                        <a class="col col-sm-6 w-50 text-center" href="{{ $PlayOff->stat }}">
                            <img class="display-block" width="50%" src="public/images/STVolleyIcon.png" alt="Статитика">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row card mt-2">
            {{--    CAROUSEL--}}
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="11" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="12" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="13" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="14" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="15" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="16" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="17" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="18" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="19" aria-label="Slide 11" class="" aria-current="true"></button>
                </div>
                <div class="carousel-inner m-1">
                    <div class="carousel-item active">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/0.jpg" alt="carousel">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/1.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/2.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/3.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/4.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/5.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/6.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/7.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/8.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/9.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/10.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/11.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/12.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/13.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/14.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/15.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/16.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/17.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/18.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="public/images/play-off%20Prometey/19.jpg" alt="yura">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
