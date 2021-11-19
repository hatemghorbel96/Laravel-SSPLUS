
@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="card-header card-header-icon" data-background-color="orange">
                    <a class="material-icons" href="{{ route('fichierClient.index') }}">keyboard_return</a>
                </div>
            </div>


            <div class="container ">
                <div class="col-md-10 ">
                    <div class="profile-container ">
                        <div class="profile-header row">

                            <div class="col-md-12 col-sm-12 text-center">
                                <img src="data:image/jpeg;base64,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" alt="" class="header-avatar">
                            </div>
                            <div class="col-md-12 col-sm-12 profile-info">
                                <div class="row">
                                    <div class="col-md-11">

                                    </div>

                                </div>

                                <table class="table table-striped table-bordered table-hover table-condensed" >




                                        <tr><td width="800px"><label class="stats-value pink">Titre d'intervention </label></td>
                                            <td width="400px">  <label class="stats-title">{{ $fichier->interventions->Titre }} </label></td>
                                        </tr>

                                        <tr><td width="400px"> <label class="stats-value pink">Titre du fichier</label></td>
                                            <td width="400px">   <label class="stats-title">{{ $fichier->titre }}

                                                </label></td> </tr>

                                        <tr><td width="400px"> <label class="stats-value pink">Type du fichier</label></td>
                                            <td width="400px">   <label class="stats-title">{{ $fichier->TypeF }}

                                                </label></td> </tr>
                                        <br>
                                        <tr><td width="400px"> <label class="stats-value pink">Nom du fichier</label></td>
                                            <td width="400px">   <label class="stats-title"><span class="glyphicon glyphicon-file"></span>{{ $fichier->fichAv }}<br><a href="/uploads/{{$fichier->fichAv}}" download="/uploads/{{$fichier->fichAv}}">
                                                        <button type="button" class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-download">
                                                                Telecharger
                                                            </i>
                                                        </button>
                                                    </a></label></td> </tr>



                                </table>
                            </div>
                            </center>
                        </div>
                        <br>




                        </table>
                    </div>

                </div>
            </div>

        </div>

        <style>


            article {
                margin: 40px 30px;
            }

            h1 {
                font-family: 'Open Sans Condensed', sans-serif;
                letter-spacing: 1px;
                font-size: 2.3em;
                line-height: 44px;
                text-transform: uppercase;
                color: #fff;
                font-weight: 900;
                margin: 0;
                padding: 10px 0 0 30px;
                letter-spacing: 2px;
            }

            h2 { margin: 20px 0 10px 0;
                font-weight: 900;
            }

            p {
                margin: 20px 0 5px 0;
            }


            /* Table Layout */

            table.vitamins {
                margin: 20px 0 0 0;
                border-collapse: collapse;
                border-spacing: 0;
                background: #212121;
                color: #fff;

            }

            table.vitamins th, table.vitamins td {
                text-align: center;
            }

            table.vitamins thead {
                line-height: 12px;
                background: #2e63e7;
                text-transform: uppercase;
            }

            table.vitamins thead th {
                color: #fff;
                padding: 10px;
                letter-spacing: 1px;
                vertical-align: bottom;
            }

            table.vitamins thead th:nth-child(1) {
                width: 20%;
                text-align: left;
                padding-left: 20px;
            }

            table.vitamins thead th:nth-child(2) {
                width: 30%;
            }

            table.vitamins thead th:nth-child(3) {
                width: 35%;
            }

            table.vitamins thead th:nth-child(4) {
                width: 15%;
            }

            table.vitamins tbody {
                font-size: 1em;
                line-height: 15px;
            }

            table.vitamins tbody tr {
                border-top: 2px solid rgba(109, 176, 231, 0.8);
                transition: background 0.6s, color 0.6s;
            }

            table.vitamins tbody tr:nth-child(even) {
                background: rgba(255, 255, 255, 0.2);
            }

            table.vitamins tbody tr:hover {
                color: #000;
                background: rgba(255, 255, 255, 0.7);
                font-weight: 900;
            }

            table.vitamins tbody td {
                padding: 12px;
            }

            table.vitamins tbody tr:hover td:first-child {
                background: rgba(0,0,0,0);
            }

            table.vitamins tbody td:first-child {
                text-align: left;
                padding-left: 20px;
                font-weight: 700;
                background: rgba(109, 176, 231, 0.35);
                transition: backgrounf 0.6s;

            }

            table.vitamins tfoot {
                font-size: 0.8em;

            }

            table.vitamins tfoot tr {
                border-top: 2px solid #2e63e7;
            }

            table.vitamins tfoot td {
                color: rgba(255,255,215,0.6);
                text-align: left;
                line-height: 15px;
                padding: 15px 20px;
            }


            /* Mobile Layout */

            @media screen and (max-width: 400px) {
                h1 {
                    font-size: 34px;
                    line-height: 36px;
                    padding-left: 15px;

                }

                article {
                    margin: 10px 15px;
                }

                table.vitamins {
                    font-size: 0.8em;
                }
            }
        </style>
        <style>
            .profile-container
            {
                margin-left: 200px ;
                margin-right: 0.25px;
            }
            .profile-container .profile-header .profile-stats .inlinestats-col:not(:last-child) {
                border-right: 1px solid #eee;
            }
            .profile-container .profile-header .profile-stats .inlinestats-col {
                padding-top: 15px;
                text-align: center;
                font-family: 'Lucida Sans','trebuchet MS',Arial,Helvetica;
                border-top: 1px solid #eee;
                min-height: 55px;
                margin: 50px auto;
            }
            .profile-container .profile-header .profile-stats .stats-col .stats-value {
                display: block;
                margin: 50px auto;
                text-align: center;
                font-size: 30px;
                font-family: 'Lucida Sans','trebuchet MS',Arial,Helvetica;
            }
            .pink {
                margin-right: 20px;
                color: #e75b8d!important;

            }
            .profile-container .profile-header .profile-stats .stats-col:not(:last-child) {
                border-right: 1px solid #eee;
            }
            .profile-container .profile-header .profile-stats .stats-col {
                margin: 50px auto;
                text-align: center;
            }
            .profile-container .profile-header .profile-stats {
                min-height: 175px;
                margin: 50px auto;
                border-right: 1px solid #eee;
            }
            .profile-container .profile-header .profile-info .header-information {
                line-height: 23px;
                margin: 50px auto;
                text-align: justify;
            }
            .profile-container .profile-header .profile-info .btn-follow {
                /*    position: absolute;
                    top: 45px;
                    right: 40px;*/
            }
            .btn-palegreen, .btn-palegreen:focus {
                background-color: #a0d468!important;
                border-color: #a0d468;
                color: #fff;
            }
            .profile-container .profile-header .profile-info .header-fullname {
                font: 21px 'Lucida Sans','trebuchet MS',Arial,Helvetica;
                margin-top: 27px;
                display: inline-block;

            }
            .profile-container .profile-header .profile-info {
                min-height: 175px;
                border-right: 1px solid #eee;
                padding-top: 15px;
                padding-bottom: 35px;

            }
            .profile-container .profile-header .header-avatar {
                width: 125px;
                height: 125px;
                -webkit-border-radius: 50%;
                -webkit-background-clip: padding-box;
                -moz-border-radius: 50%;
                -moz-background-clip: padding;
                border-radius: 50%;
                background-clip: padding-box;
                border: 5px solid #f5f5f5;
                -webkit-box-shadow: 0 0 10px rgba(0,0,0,.15);
                -moz-box-shadow: 0 0 10px rgba(0,0,0,.15);
                box-shadow: 0 0 10px rgba(0,0,0,.15);
                margin: 25px auto;

            }


            .profile-container .profile-header {

                min-height: 175px;
                margin: 15px 15px 0;

                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.35);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.35);
                box-shadow: 0 1px 2px rgba(0,0,0,.35);
                background-color: #fbfbfb;

            }
        </style>
    </section>
@endsection