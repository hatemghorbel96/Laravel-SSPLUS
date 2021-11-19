@extends('layouts.userhome')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="orange">
                            <a class="material-icons" href="/client">dashboard</a>
                        </div>

                        <h4 class="card-title">Intervention</h4>
                        <div class="card-content">
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <thead class="text-warning">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Titre d'intervention</th>
                                        <th>Date Debut</th>
                                        <th>Date Fin</th>
                                        <th>Date RDV</th>
                                        <th class="disabled-sorting text-center">Valider Rendez-vous</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($interventions as $intervention)
                                        <tr>
                                            <td class="text-center">{{++$i}}.</td>
                                            <td>{{ $intervention->Titre }}</td>
                                            <td>{{ $intervention->dateD }}</td>
                                            <td>{{ $intervention->dateF }}</td>
                                            <td>{{ $intervention->dateR }}</td>
                                            <td class="text-center">
                                                <form id="main" action="{{ route('updateInt', ['id_inter' => $intervention->id_inter]) }}" method="post">
                                                @csrf

                                                    <input type="radio"  id="Etat" name="Etat" value="0"  {{ ($intervention->Etat=="0")? "checked" : "" }}>Non</label>

                                                    <input type="radio" id="Etat" name="Etat" value="1"  {{ ($intervention->Etat=="1")? "checked" : "" }}>Oui</label>
                                                    <button id="1" class="btn btn-success btn-xs">Valider<div class="ripple-container"></div></button>
                                                </form>

                                            </td>


                                        </tr>
                                    @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        {!! $interventions->links() !!}
    </div>


@endsection