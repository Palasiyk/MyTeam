@extends('layouts.admin_layouts')

@section('title', 'edit player')

@section('content')

    <container>
        <form class="form-control w-50" action="{{ route('updatePlayer', $id->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{ $id->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">SPORT NATIONALITY</label>
                <input name="nacionality" type="text" class="form-control" id="nacionality" placeholder="NATIONALITY" value="{{ $id->nacionality }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">BIRTH PLACE</label>
                <input name="bith_place" type="text" class="form-control" id="bith_place" placeholder="BIRTH PLACE" value="{{ $id->bith_place }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input class="form-control" name="namber" type="number" id="number" value="{{ $id->number }}">
            </div>
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="position" id="position" value="{{ $id->position }}">
                <option selected>Position</option>
                <option value="setter">Setter</option>
                <option value="midle">Middle-blocker</option>
                <option value="opposite">Opposite</option>
                <option value="opposite">Libero</option>
                <option value="opposite">Wing-spiker</option>
            </select>
            <div class="mb-3">
                <label for="date">byrthday date</label>
                <input class="form-control" name="byrthday" type="date" id="byrthday" value="{{ $id->byrthday }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">Instagtam</label>
                <input name="insta" type="text" class="form-control" id="insta" placeholder="Instagtam">
            </div>
            <div class="mb-3">
                <label for="number">height</label>
                <input name="height" class="form-control" type="number" id="height" value="{{ $id->height }}">
            </div>
            <div class="mb-3">
                <label for="number">weight</label>
                <input name="weight" class="form-control" type="number" id="weight" value="{{ $id->weight }}">
            </div>
            <div class="mb-3">
                <label for="number">jump</label>
                <input name="jump" class="form-control" type="number" id="jump" value="{{ $id->jump }}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input name="image" class="form-control btn btn-secondary" type="file" id="formFile">
            </div>

            <button class="btn btn-success text-black" type="submit">
                UPDATE
            </button>
        </form>
    </container>

@endsection
