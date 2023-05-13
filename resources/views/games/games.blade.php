@extends('layouts.app')

@section('content')

    <div class="bd-example" >
        <div class="row">
            <div class="col-4 nav_left_col">
                <nav id="navbar-example3" class="card flex-column align-items-stretch pe-4 border-end nav_left_item" >
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-5" style="font-size: 1em">ПЛЕЙ-ОФФ 5-8</a>
                        <nav class="nav nav-pills flex-column">
                            @foreach($PlayOffs as $PlayOff)
                                <a class="nav-link ms-3 my-1" href="#item-5-{{ $PlayOff->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $PlayOff->team_name }}</font></font></a>
                            @endforeach
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-4">3 коло</a>
                        <nav class="nav nav-pills flex-column">
                            @foreach($Game3s as $Game3)
                                <a class="nav-link ms-3 my-1" href="#item-4-{{ $Game3->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $Game3->team_name }}</font></font></a>
                            @endforeach
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link kalendar_tittle" href="#item-3"><font><font style="vertical-align: inherit;">КУБОК ЛІГИ</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            @foreach($Kups as $Kup)
                                <a class="nav-link ms-3 my-1" href="#item-3-{{ $Kup->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $Kup->team_name }}</font></font></a>
                            @endforeach
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-2">2 коло</a>
                        <nav class="nav nav-pills flex-column">
                            @foreach($Game2s as $Game2)
                                <a class="nav-link ms-3 my-1" href="#item-2-{{ $Game2->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $Game2->team_name }}</font></font></a>
                            @endforeach
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">1 коло</a>
                        <nav class="nav nav-pills flex-column">
                            @foreach($Game1s as $Game1)
                                <a class="nav-link ms-3 my-1" href="#item-1-{{ $Game1->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $Game1->team_name }}</font></font></a>
                            @endforeach
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-8 nav_right_col">
                <div class="card nav_right_item" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                    @foreach($PlayOffs as $PlayOff)
                        <div id="item-5">
                            <div id="item-5-{{ $PlayOff->id }}" class="mb-4">
                                <div class="row justify-content-center" style="width: 100%; max-width: 950px; margin: 0 auto">
                                    <h4 class="text-center"><p><a type="data">{{ $PlayOff->data }}</a></p>{{ $PlayOff->team_name }}</h4>
                                    <div class="row mb-3 p-1 text-center d-block w-100 shadow-sm ">
                                        <iframe src="{{ $PlayOff->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                    <div class="row mb-4 text-center d-flex">
                                        <a class="col" href="{{ $PlayOff->foto }}">
                                            <img class="display-block" width="100%" src="../../images/logo/{{ $PlayOff->game['team_foto'] }}" alt="foto">
                                        </a>
                                        <a class="col" href="{{ $PlayOff->stat }}">
                                            <img class="display-block" width="100%" src="../../images/Statictiks/resetul1tur.png" alt="Статитика">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($Game3s as $Game3)
                        <div id="item-4">
                                <div id="item-4-{{ $Game3->id }}" class="mb-4">
                                    <div class="row justify-content-center" style="width: 100%; max-width: 950px; margin: 0 auto">
                                        <h4 class="text-center"><p><a type="data">{{ $Game3->data }}</a></p>{{ $Game3->team_name }}</h4>
                                        <div class="row mb-3 p-1 text-center d-block w-100 shadow-sm ">
                                            <iframe src="{{ $Game3->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <div class="row mb-4 text-center d-flex">
                                            <a class="col" href="{{ $Game3->foto }}">
                                                <img class="display-block" width="100%" src="../../images/logo/{{ $Game3->game['team_foto'] }}" alt="foto">
                                            </a>
                                            <a class="col" href="{{ $Game3->stat }}">
                                                <img class="display-block" width="100%" src="../../images/Statictiks/resetul1tur.png" alt="Статитика">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @foreach($Kups as $Kup)
                        <div id="item-3">
                                <div id="item-3-{{ $Kup->id }}" class="mb-4">
                                    <div class="row justify-content-center" style="width: 100%; max-width: 950px; margin: 0 auto">
                                        <h4 class="text-center"><p><a type="data">{{ $Kup->data }}</a></p>{{ $Kup->team_name }}</h4>
                                        <div class="row mb-3 p-1 text-center d-block w-100 shadow-sm ">
                                            <iframe src="{{ $Kup->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <div class="row mb-4 text-center d-flex">
                                            <a class="col" href="{{ $Kup->foto }}">
                                                <img class="display-block" width="100%" src="../../images/logo/{{ $Kup->game['team_foto'] }}" alt="foto">
                                            </a>
                                            <a class="col" href="{{ $Kup->stat }}">
                                                <img class="display-block" width="100%" src="../../images/Statictiks/resetul1tur.png" alt="Статитика">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @foreach($Game2s as $Game2)
                        <div id="item-2">
                                <div id="item-2-{{ $Game2->id }}" class="mb-4">
                                    <div class="row justify-content-center" style="width: 100%; max-width: 950px; margin: 0 auto">
                                        <h4 class="text-center"><p><a type="data">{{ $Game2->data }}</a></p>{{ $Game2->team_name }}</h4>
                                        <div class="row mb-3 p-1 text-center d-block w-100 shadow-sm ">
                                            <iframe src="{{ $Game2->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <div class="row mb-4 text-center d-flex">
                                            <a class="col" href="{{ $Game2->foto }}">
                                                <img class="display-block" width="100%" src="../../images/logo/{{ $Game2->game['team_foto'] }}" alt="foto">
                                            </a>
                                            <a class="col" href="{{ $Game2->stat }}">
                                                <img class="display-block" width="100%" src="../../images/Statictiks/resetul1tur.png" alt="Статитика">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @foreach($Game1s as $Game1)
                        <div id="item-1">
                                <div id="item-1-{{ $Game1->id }}" class="mb-4">
                                    <div class="row justify-content-center" style="width: 100%; max-width: 950px; margin: 0 auto">
                                        <h4 class="text-center"><p><a type="data">{{ $Game1->data }}</a></p>{{ $Game1->team_name }}</h4>
                                        <div class="row mb-3 p-1 text-center d-block w-100 shadow-sm ">
                                            <iframe src="{{ $Game1->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <div class="row mb-4 text-center d-flex">
                                            <a class="col" href="{{ $Game1->foto }}">
                                                <img class="display-block" width="100%" src="../../images/logo/{{ $Game1->game['team_foto'] }}" alt="foto">
                                            </a>
                                            <a class="col" href="{{ $Game1->stat }}">
                                                <img class="display-block" width="100%" src="../../images/Statictiks/resetul1tur.png" alt="Статитика">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


