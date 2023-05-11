@extends('layouts.admin_layouts')

@section('title', 'show player')

@section('content')

    <div class="container">
        <div class="card rounded-3 shadow-sm">
            <div class="row">
                <h1 class="text-center font-monospace border-3 m-3">{{$id->name}}</h1>
                <div class="col text-center">
                    <a href="{{$id->insta}}">
                        <img class="mb-4 bd-placeholder-img card-img-top" style="max-width: 500px"
                             src="../../images/team/{{$id->image}}" alt="omelchenko">
                    </a>
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card_text card-title pricing-card-title">ігровий номер  <span class="card_text fs-2">{{$id->namber}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">позтція  <span class="card_subtext fs-2">{{$id->position}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">національність  <span class="card_subtext fs-2">{{$id->nacionality}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">місце народження  <span class="card_subtext fs-4">{{$id->bith_place}}</span></h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="card_text">ріст  <span class="card_subtext fs-3">{{$id->height}}</span></li>
                            <li class="card_text">висота стибка  <span class="card_subtext fs-3">{{$id->jump}}</span></li>
                            <li class="card_text">дата народження  <span class="card_subtext fs-3">{{$id->byrthday}}</span></li>
                        </ul>

                        <div class="nav ос m-3">
                            <a href="{{$id->insta}}" target="_blank">
                                <img class="w-50" src="../../images/logo/Instagram.png" alt="insta">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <h4>СТАТИСТИКА</h4>
                    <table class="table table-striped-columns table-group-divider">
                        <thead>
                        <tr>
                            <th scope="col">Зіграно партій</th>
                            <th scope="col">Всього балів</th>
                            <th scope="col">Блок</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $id -> stat['PlayedSet'] }}</td>
                            <td>{{ $id -> stat['TotPoint'] }}</td>
                            <td>{{ $id -> stat['Block'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5>АТАКА</h5>
                    <table class="table table-striped-columns table-group-divider">
                        <thead>
                        <tr>
                            <th scope="col">Всього атак</th>
                            <th scope="col">Помилки</th>
                            <th scope="col">Виграно</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $id -> stat['TotAtac'] }}</td>
                            <td>{{ $id -> stat['ErrAtac'] }}</td>
                            <td>{{ $id -> stat['ExcAtec'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5>ПОДАЧА</h5>
                    <table class="table table-striped-columns table-group-divider">
                        <thead>
                        <tr>
                            <th scope="col">Всього</th>
                            <th scope="col">Ейс</th>
                            <th scope="col">Помилка</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $id -> stat['TotServ'] }}</td>
                            <td>{{ $id -> stat['AceServ'] }}</td>
                            <td>{{ $id -> stat['ErrServ'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5>ПРИЙОМ \ ЗАХИСТ</h5>
                    <table class="table table-striped-columns table-group-divider">
                        <thead>
                        <tr>
                            <th scope="col">Всього</th>
                            <th scope="col">Помилки</th>
                            <th scope="col">Неативний</th>
                            <th scope="col">Позитивний</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $id -> stat['TotRes'] }}</td>
                            <td>{{ $id -> stat['ErrRes'] }}</td>
                            <td>{{ $id -> stat['NegRes'] }}</td>
                            <td>{{ $id -> stat['ExcRes'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped table-group-divider">
                        <td>
                            <button class="btn btn-success w-100">
                                <a class="text-white" href="{{ $id -> stat['More'] }}">ДЕТЕЛЬНІШЕ</a>
                            </button>
                        </td>
                    </table>
                </div>
            </div>

        </div>

@endsection
