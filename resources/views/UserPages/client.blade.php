@extends('layouts.userhome')

@section('content')

    <div class="content">


        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="glyphicon glyphicon-pushpin"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Nb Interventions</p>
                        <h3 class="card-title">{{$nbintervention}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">link</i>
                            <a href="/client/intervention">Liste Interventions...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Nb Ficher</p>
                        <h3 class="card-title">{{$nbichiers}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">link</i>
                            <a href="/client/fileintervention">Liste Fichiers...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Nb Contrat</p>
                        <h3 class="card-title">{{$nbcontrat}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">link</i>
                            <a href="/client/contrat">Liste Contrats...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="glyphicon glyphicon-warning-sign"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Tot Reclamations</p>
                        <h3 class="card-title">{{$nbreclamation}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">link</i>
                            <a href="/client/reclamation">Envoyer une Reclamation...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



@endsection