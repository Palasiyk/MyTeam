@extends('layouts.admin_layouts')

@section('title', 'About')

@section('content')

    <div class="container">
        <div class="col mb-5 card p-3">
            <div class="row text-center">
                <h2>Контакти</h2>
            </div>
            <div class="col text-center">
                <div class="row m-2">
                    <a href="tel:5551234567">
                        <span class="icon-phone">&#9743;</span> +38 (098) 552-66-36
                    </a>
                </div>
                <div class="row m-2">
                    <a href="email: mailto:ruslan.staer@gmail.com">
                        <span class="icon-email"></span> mailto:ruslan.staer@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row text-center m-3">
                <h3>Наші партнери</h3>
            </div>
            <div class="row justify-content-between align-items-center text-center p-3">
                <div class="col text-center">
                    <div class="about_logo text-center">
                        <img src="public/images/sponsor/getFit.svg" alt="get">
                    </div>
                </div>
                <div class="col">
                    <div class="about_logo text-center">
                        <img src="public/images/sponsor/UOSK_LOGO_mono-_1_.svg" alt="uosk">
                    </div>

                </div>
                <div class="col text-start">
                    <div class="about_logo text-center">
                        <img src="public/images/sponsor/zunu.png" alt="get">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="about_logo text-center">
                    <img src="public/images/sponsor/logo-pol-01.png" alt="pol">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row text-center m-3">
                <h3>Напишіть нам</h3>
            </div>
            <div class="container">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>


@endsection
