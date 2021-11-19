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

                        <h4 class="card-title">Liste des Contrat</h4>
                        <div class="card-content">
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <thead class="text-warning">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nom du client</th>
                                        <th>Titre</th>
                                        <th>Debut</th>
                                        <th>Fin</th>
                                        <th>Nom du fichier</th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($contrats as $contrat)
                                        <tr>
                                            <td class="text-center">{{++$i}}.</td>

                                            <td>{{ $contrat->clients->nom }} {{ $contrat->clients->prenom }}</td>
                                            <td>{{ $contrat->Title }}</td>
                                            <td>{{ $contrat->Debut }}</td>
                                            <td>{{ $contrat->Fin }}</td>
                                            <td><span class="glyphicon glyphicon-file"></span> {{ $contrat->fich }}</td>
                                            <td class="text-center"><a href="/uploads/{{$contrat->fich}}" download="/uploads/{{$contrat->fich}}">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="glyphicon glyphicon-download">
                                                            Telecharger
                                                        </i>
                                                    </button>
                                                </a></td>


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
        {!! $contrats->links() !!}
    </div>
@endsection