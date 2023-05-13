@extends('layouts.app')

@section('content')

    <h2 class="team_list_name">Player Statistiks</h2>
    <div class="stat_table">
        <table class="table table-hover table-striped-columns table-fonts text-center">
            <thead>
            <tr class="slik-kalendar">
                <th scope="col">Номер</th>
                <th scope="col">Прізвище</th>
                <th scope="col">Зірано партій</th>
                <th scope="col">Всьо балів</th>
                <th scope="col">Всього подач</th>
                <th scope="col">Ейс</th>
                <th scope="col">Помилка</th>
                <th scope="col">Всьоо прийомів</th>
                <th scope="col">Помили</th>
                <th scope="col">Негативний</th>
                <th scope="col">Позитивний</th>
                <th scope="col">Всього атак</th>
                <th scope="col">Помилок</th>
                <th scope="col">Вирано</th>
                <th scope="col">Блок</th>
                <th scope="col">Більше</th>
            </tr>
            </thead>
            @foreach($stat as $title)
            <tbody>
            <tr>

                 <th scope="row">
                     <a href="{{ route('showTeamPlayer', $title->id) }}">
                        {{ $title->namber }}
                     </a>
                 </th>
                <td>
                    <a href="{{ route('showTeamPlayer', $title->id) }}">
                        {{ $title->PlayerName }}
                    </a>
                </td>
                <td>{{ $title->PlayedSet }}</td>
                <td>{{ $title->TotPoint }}</td>
                <td>{{ $title->TotServ }}</td>
                <td>{{ $title->AceServ }}</td>
                <td>{{ $title->ErrServ }}</td>
                <td>{{ $title->TotRes }}</td>
                <td>{{ $title->ErrRes }}</td>
                <td>{{ $title->NegRes }}</td>
                <td>{{ $title->ExcRes }}</td>
                <td>{{ $title->TotAtac }}</td>
                <td>{{ $title->ErrAtac }}</td>
                <td>{{ $title->ExcAtec }}</td>
                <td>{{ $title->Block }}</td>
                <td>
                    <button class="btn btn-success">
                        <a class="text-white m-0 table-fonts" href="{{ $title->More }}">...</a>
                    </button>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>

@endsection
