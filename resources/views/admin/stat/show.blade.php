@extends('layouts.admin_layouts')

@section('title', 'Stat Show')

@section('content')

    <div class="container" style="margin: 0 auto; width: 100%; max-width: 1400px">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">NumberPlayer</th>
                <th scope="col">PlayerName</th>
                <th scope="col">Played Set</th>
                <th scope="col">TotPoint</th>
                <th scope="col">TotServ</th>
                <th scope="col">AceServ</th>
                <th scope="col">ErrServ</th>
                <th scope="col">TotRes</th>
                <th scope="col">ErrRes</th>
                <th scope="col">NegRes</th>
                <th scope="col">ExcRes</th>
                <th scope="col">TotAtac</th>
                <th scope="col">ErrAtac</th>
                <th scope="col">ExcAtec</th>
                <th scope="col">Block</th>
                <th scope="col">More</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $id->namber }}</th>
                <td>{{ $id->PlayerName }}</td>
                <td>{{ $id->PlayedSet }}</td>
                <td>{{ $id->TotPoint }}</td>
                <td>{{ $id->TotServ }}</td>
                <td>{{ $id->AceServ }}</td>
                <td>{{ $id->ErrServ }}</td>
                <td>{{ $id->TotRes }}</td>
                <td>{{ $id->ErrRes }}</td>
                <td>{{ $id->NegRes }}</td>
                <td>{{ $id->ExcRes }}</td>
                <td>{{ $id->TotAtac }}</td>
                <td>{{ $id->ErrAtac }}</td>
                <td>{{ $id->ExcAtec }}</td>
                <td>{{ $id->Block }}</td>
                <td>
                    <button>
                        <a href="{{ $id->More }}">More</a>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="{{route('statAdminPlayer')}}" class="btn btn-sm btn-outline-secondary">BACK</a>
                <a href="{{route('editStatPlayer', $id->id)}}" class="btn btn-sm btn-outline-secondary">UPDATE</a>
                <form action="{{ route('deleteStatPlayer', $id->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="DELETE" class="btn btn-sm btn-outline-secondary">
                </form>
            </div>
        </div>
    </div>


@endsection
