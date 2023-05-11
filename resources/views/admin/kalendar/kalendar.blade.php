@extends('layouts.admin_layouts')

@section('title', 'Kalendar')

@section('content')

<div class="main">
    <div class="container">
        <div class="row">
            <h3 class="card text-center mt-3 mb-3">Play-off</h3>
            {{--        //1/4 finals--}}
            <div class="col-4 d-flex flex-column text-center  justify-content-center">
                <div class="card row m-2 play-off_border">
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/epic.svg" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Епіцентр-Подоляни"</h4>
                        <div class="col-3">
                            <h3 class="play-off_number">2</h3>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/barcom.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Барком-Збірна України U-18"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
                <div class="card row m-2 play-off_border">
                    <div class="row col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/prom.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВК "Прометей"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/DSO.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
                <div class="card row m-2 play-off_border">
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/zutu.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Житичі-Полісся"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">2</h2>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/reset.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"ВК "Решетилівка"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
                <div class="card row m-2 play-off_border">
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/mxp.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"МХП-Вінниця"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">1</h2>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/law.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВСК "Юридична академія"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">2</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{--        //1/2 finals--}}
            <div class="col-4 d-flex flex-column justify-content-around">
                <div class="card row m-2 play-off_border">
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/epic.svg" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Епіцентр-Подоляни"</h4>
                        <div class="col-3">
                            <h3 class="play-off_number">2</h3>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/law.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВСК "Юридична академія"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
                <div class="card row m-2 play-off_border">
                    <div class="row col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/prom.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВК "Прометей"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">2</h2>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/zutu.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Житичі-Полісся"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{--        // final--}}
            <div class="col-4 d-flex flex-column justify-content-center">
                <div class="card row m-2 play-off_border">
                    <h6 class="text-center play-off_text">Final</h6>
                    <div class="row col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/prom.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВК "Прометей"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">3</h2>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/epic.svg" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Епіцентр-Подоляни"</h4>
                        <div class="col-3">
                            <h3 class="play-off_number">1</h3>
                        </div>
                    </div>
                </div>
                <div class="card row m-2 play-off_border">
                    <h3 class="text-center play-off_text">3 місце</h3>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/law.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">ВСК "Юридична академія"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">3</h2>
                        </div>
                    </div>
                    <div class="row d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img class="col-3 kalendar_img" src="../../images/logo/zutu.png" alt="logo">
                        <h4 class="col-6 team_name_play-off">"Житичі-Полісся"</h4>
                        <div class="col-3">
                            <h2 class="play-off_number">0</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row card tyrnir_table">
        <h3 class="text-center m-4">5 - 8 місце</h3>
        <container>
            <table class="table table-hover table-striped-columns text-center align-middle border-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">LOGO</th>
                        <th scope="col" class="team_name">КОМАНДА</th>
                        <th scope="col">ІГРИ</th>
                        <th scope="col">ПЕРЕМОГИ</th>
                        <th scope="col">ПОРАЗКИ</th>
                        <th scope="col">ОЧКИ</th>
                        <th scope="col">+/-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">5</th>
                        <td>
                            <img class="card-img" style="width: 60px" src="../../images/logo/mxp.png" alt="logo">
                        </td>
                        <td class="team_name">Волейбольний клуб "МХП-Вінниця"-ШВСМ</td>
                        <td>3</td>
                        <td>3</td>
                        <td>0</td>
                        <td>9</td>
                        <td>4.5</td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td>
                            <img style="width: 60px" src="../../images/logo/barcom.png" alt="logo">
                        </td>
                        <td class="team_name">"Барком-Збірна України U-18"</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                        <td>6</td>
                        <td>1.75</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td class="">
                            <img style="width: 60px" src="../../images/logo/DSO.png" alt="logo">
                        </td>
                        <td class="team_name">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</td>
                        <td>3</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>0.57</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>
                            <img style="width: 60px" src="../../images/logo/reset.png" alt="logo">
                        </td>
                        <td class="team_name">"Збірна Полтавської області ВК "Решетилівка"</td>
                        <td>3</td>
                        <td>0</td>
                        <td>3</td>
                        <td>0</td>
                        <td>0.22</td>
                    </tr>

                </tbody>
            </table>
        </container>
    </div>

    <div class="row card tyrnir_table">
        <h3 class="text-center m-4">Турнірна таблиця</h3>
        <container>
            <table class="table table-hover table-striped-columns text-center align-middle border-danger">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">LOGO</th>
                    <th scope="col" class="team_name">КОМАНДА</th>
                    <th scope="col">ІГРИ</th>
                    <th scope="col">ПЕРЕМОГИ</th>
                    <th scope="col">ПОРАЗКИ</th>
                    <th scope="col">ОЧКИ</th>
                    <th scope="col">+/-</th>
                    <th scope="col">%</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/epic.svg" alt="logo">
                    </td>
                    <td class="team_name">"Епіцентр-Подоляни"</td>
                    <td>21</td>
                    <td>20</td>
                    <td>1</td>
                    <td>59</td>
                    <td>376</td>
                    <td>95,2</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/prom.png" alt="logo">
                    </td>
                    <td class="team_name">ВК "Прометей"</td>
                    <td>21</td>
                    <td>18</td>
                    <td>3</td>
                    <td>55</td>
                    <td>315</td>
                    <td>85,7</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/zutu.png" alt="logo">
                    </td>
                    <td class="team_name">ВК "Житичі-Полісся"</td>
                    <td>21</td>
                    <td>11</td>
                    <td>10</td>
                    <td>32</td>
                    <td>5</td>
                    <td>52,4</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/mxp.png" alt="logo">
                    </td>
                    <td class="team_name">Волейбольний клуб "МХП-Вінниця"-ШВСМ</td>
                    <td>21</td>
                    <td>11</td>
                    <td>10</td>
                    <td>32</td>
                    <td>6</td>
                    <td>52,4</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/law.png" alt="logo">
                    </td>
                    <td class="team_name">ВСК "Юридична академія"</td>
                    <td>21</td>
                    <td>9</td>
                    <td>12</td>
                    <td>28</td>
                    <td>-47</td>
                    <td>42,9</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/reset.png" alt="logo">
                    </td>
                    <td class="team_name">"Збірна Полтавської області ВК "Решетилівка"</td>
                    <td>21</td>
                    <td>7</td>
                    <td>14</td>
                    <td>20</td>
                    <td>-194</td>
                    <td>33,3</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/DSO.png" alt="logo">
                    </td>
                    <td class="team_name">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</td>
                    <td>21</td>
                    <td>5</td>
                    <td>16</td>
                    <td>15</td>
                    <td>-222</td>
                    <td>23,8</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>
                        <img style="width: 60px" src="../../images/logo/barcom.png" alt="logo">
                    </td>
                    <td class="team_name">"Барком-Збірна України U-18"</td>
                    <td>21</td>
                    <td>3</td>
                    <td>18</td>
                    <td>11</td>
                    <td>-239</td>
                    <td>14,3</td>
                </tr>
                </tbody>
            </table>
        </container>
    </div>
</div>










@endsection
