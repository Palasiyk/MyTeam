@extends('layouts.admin_layouts')

@section('title', 'Stat Create')

@section('content')

    <div class="container card">
        <form class="form-control w-50" action="{{ route('storeStatPlayer') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1">Індивідуальна статистика</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">Номер</label>
                <input class="form-control" name="namber" type="number" id="namber">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">Імя</label>
                <input name="PlayerName" type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Зфграно партій</label>
                <input class="form-control" name="PlayedSet" type="number" id="PlayedSet">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Набрано очків</label>
                <input class="form-control" name="TotPoint" type="number" id="TotPoint">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього подач</label>
                <input class="form-control" name="TotServ" type="number" id="TotServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Ейс</label>
                <input class="form-control" name="AceServ" type="number" id="AceServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилка подачі</label>
                <input class="form-control" name="ErrServ" type="number" id="ErrServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього прийомів</label>
                <input class="form-control" name="TotRes" type="number" id="TotRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилки в прийомі</label>
                <input class="form-control" name="ErrRes" type="number" id="ErrRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Негативний прийом</label>
                <input class="form-control" name="NegRes" type="number" id="NegRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Хороший прийом</label>
                <input class="form-control" name="ExcRes" type="number" id="ExcRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Всього атак</label>
                <input class="form-control" name="TotAtac" type="number" id="TotAtac">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Помилки в атац</label>
                <input class="form-control" name="ErrAtac" type="number" id="ErrAtac">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Атака в блок</label>
                <input class="form-control" name="BlkAtec" type="number" id="BlkAtec">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Виграні атаки</label>
                <input class="form-control" name="ExcAtec" type="number" id="ExcAtec">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Блок</label>
                <input class="form-control" name="Block" type="number" id="Block">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1">Більше</label>
                <input name="More" type="text" class="form-control" id="more" placeholder="more">
            </div>

            <button class="btn btn-success text-black" type="submit">
                CREATE
            </button>
        </form>
    </div>

@endsection
