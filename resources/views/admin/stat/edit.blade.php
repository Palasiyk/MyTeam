@extends('layouts.admin_layouts')

@section('title', 'Stat Edit')

@section('content')

    <container>
        <form class="form-control w-50" action="{{ route('updateStatPlayer',  $id->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input class="form-control mt-3" name="namber" type="number" id="PlayerNu" value="{{ $id->namber }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">Name</label>
                <input name="PlayerName" type="text" class="form-control" id="PlayerName" placeholder="name" value="{{ $id->PlayerName }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Зіграно партій</label>
                <input class="form-control" name="PlayedSet" type="number" id="PlayedSet" value="{{ $id->PlayedSet }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Набрано очків</label>
                <input class="form-control" name="TotPoint" type="number" id="PlayedSet" value="{{ $id->PlayedSet }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього подач</label>
                <input class="form-control" name="TotServ" type="number" id="TotServ" value="{{ $id->TotServ }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Ейс</label>
                    <input class="form-control" name="AceServ" type="number" id="AceServ" value="{{ $id->AceServ }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилка подачі</label>
                <input class="form-control" name="ErrServ" type="number" id="ErrServ" value="{{ $id->ErrServ }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього прийомів</label>
                <input class="form-control" name="TotRes" type="number" id="TotRes" value="{{ $id->TotRes }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилки в прийомі</label>
                <input class="form-control" name="ErrRes" type="number" id="ErrRes" value="{{ $id->ErrRes }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Негативний прийом</label>
                <input class="form-control" name="NegRes" type="number" id="NegRes" value="{{ $id->NegRes }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Хороший прийом</label>
                <input class="form-control" name="ExcRes" type="number" id="ExcRes" value="{{ $id->ExcRes }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього атак</label>
                <input class="form-control" name="TotAtac" type="number" id="TotAtac" value="{{ $id->TotAtac }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилки в атац</label>
                <input class="form-control" name="ErrAtac" type="number" id="ErrAtac" value="{{ $id->ErrAtac }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Атака в блок</label>
                <input class="form-control" name="BlkAtec" type="number" id="BlkAtec" value="{{ $id->BlkAtec }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Виграні атаки</label>
                <input class="form-control" name="ExcAtec" type="number" id="ExcAtec" value="{{ $id->ExcAtec }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Більше</label>
                <input class="form-control" name="EffAtec" type="number" id="EffAtec" value="{{ $id->EffAtec }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Блок</label>
                <input class="form-control" name="Block" type="number" id="Block" value="{{ $id->Block }}">
            </div>
            <button class="btn btn-success text-black" type="submit">
                UPDATE
            </button>
        </form>

    </container>


@endsection
