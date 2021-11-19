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

                        <h4 class="card-title">Fichier intervention</h4>
                        <div class="card-content">
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <thead class="text-warning">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Titre d'intervention</th>
                                        <th>Titre du fichier</th>
                                        <th>Type du fichier</th>
                                        <th>Nom du fichier</th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($fichiers as $fichier)
                                        <tr>
                                            <td class="text-center">{{++$i}}.</td>
                                            <td>{{ $fichier->Titre }}</td>
                                            <td> {{ $fichier->titre }}</td>
                                            <td> {{ $fichier->TypeF }}</td>
                                            <td class="text-left"> <span class="glyphicon glyphicon-file"></span>{{ $fichier->fichAv }}</td>
                                            <td class="text-center"><a href="/uploads/{{$fichier->fichAv}}" download="/uploads/{{$fichier->fichAv}}">
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
        {!! $fichiers->links() !!}
    </div>


@endsection