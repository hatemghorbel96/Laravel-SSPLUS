@extends('layouts.admin')
@section('content')
    
        <div class="content">
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Verifier votre donnnee.<br>
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="orange">
                                <a class="material-icons" href="{{ route('fichierClient.create') }}">assignment</a>
                            </div>

                            <h4 class="card-title">Ajouter Fichiers</h4>
                            <div class="card-content">
                                <div class="material-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                        <thead class="text-warning">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Intervention</th>
                                            <th>Titre du fichier</th>
                                            <th>Type du fichier</th>
                                            <th>Nom du fichier</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($fichiers as $fichier)
                                            <tr>
                                                <td class="text-center">{{++$i}}.</td>
                                                <td>{{ $fichier->interventions->Titre }}</td>
                                                <td> {{ $fichier->titre }}</td>
                                                <td> {{ $fichier->TypeF }}</td>
                                                <td class="text-left"> <span class="glyphicon glyphicon-file"></span>{{ $fichier->fichAv }}</td>
                                                <form action="{{ route('fichierClient.destroy', $fichier->id_Fichier) }}" method="post">
                                                    <td class="td-actions text-right">

                                                        <a class="btn btn-info"  href="{{route('fichierClient.show',$fichier->id_Fichier)}}">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" rel="tooltip"  class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>

                                                    </td>
                                                </form>
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