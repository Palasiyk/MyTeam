@extends('layouts.admin_layouts')

@section('title', 'Team')

@section('content')


    <div class="container">
        <div class="row text-center mb-3">
            <h1 class="col team_list_name text-white">Гравці</h1>
        </div>

        <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($team as $player)
                <div class="col">
                    <div class="card player_foto">
                        <div class="col">
                            <a href="{{ route('showTeamPlayer', $player->id) }}">
                                <img class="bd-placeholder-img card-img-top player_foto_img" src="public/images/team/{{$player->image}}" alt="playerImg">
                            </a>
                        </div>

                        <div class="rounded-1">
                            <div class="text-center py-1">
                                <a class="text-decoration-none text-black" href="{{ route('showPlayer', $player->id) }}">
                                    <h4>{{$player->name}} <p>{{$player->namber}}</p> </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row text-center mt-5 mb-4">
            <h1 class="col team_list_name ">Тренерський склад</h1>
        </div>
        <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-around mb-3">
            <div class="col">
                <div class="card player_foto">
                    <div class="col">
                        <img class="bd-placeholder-img card-img-top coach_foto_img" src="public/images/team/krav.jpeg" alt="coach">
                    </div>
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header text-center py-1">
                            <h5 class="team_name my-0">Кравцов Юрій Анатолійович</h5>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card_text card-title pricing-card-title">Головний тренер</h5>
                            <a href="#" target="_blank">
                                <img class="w-50" src="../../images/logo/Instagram.png" alt="insta">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="col player_foto">
                        <img class="bd-placeholder-img card-img-top coach_foto_img" src="public/images/team/osa.jpeg" alt="coach">
                    </div>
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header text-center py-1">
                            <h5 class="team_name my-0">Осадца Віталій Михайлович</h5>
                        </div>
                        <div class="text-center py-2">
                            <h5 class="card_text card-title pricing-card-title">Асистент тренера</h5>
                            <a href="https://www.instagram.com/vitaliyosadtsa/" target="_blank">
                                <img class="w-50" src="../../images/logo/Instagram.png" alt="insta">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="col player_foto">
                        <img class="bd-placeholder-img card-img-top coach_foto_img" src="public/images/team/nast.jpeg" alt="coach">
                    </div>
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header text-center py-3">
                            <h4 class="team_name my-0">Настюк Віталій</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card_text card-title pricing-card-title">Статистик</h5>
                            <a href="https://www.instagram.com/vitaly_nastyuk/" target="_blank">
                                <img class="w-50" src="../../images/logo/Instagram.png" alt="insta">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card player_foto shadow-sm">
                    <div class="col">
                        <img class="bd-placeholder-img card-img-top coach_foto_img" src="public/images/team/mas.jpeg" alt="coach">
                    </div>
                    <div class="card rounded-3 shadow-sm">
                        <div class="card-header text-center py-3">
                            <h5 class="team_name my-0">Ганін Анастасія</h5>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card_text card-title pricing-card-title">Масажист</h5>
                            <a href="https://www.instagram.com/anastasiaganin1992/" target="_blank">
                                <img class="w-50" src="/images/logo/Instagram.png" alt="insta">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
