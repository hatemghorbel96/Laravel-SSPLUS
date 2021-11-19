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
            <strong>Whoops! </strong> verifier votre donnee.<br>
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
                                <a class="material-icons" href="{{ route('contratt.create') }}">assignment</a>
                            </div>

                            <h4 class="card-title">Ajouter contrat</h4>
                            <div class="card-content">
                                <div class="material-datatables">
                                    <table id="datatables"  class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                        <thead class="text-warning">
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>telecharger</th>
                                            <th>Client</th>
                                            <th>Titre</th>
                                            <th>Debut</th>
                                            <th>Fin</th>
                                            <th>Nom du fichier</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($contrats as $contrat)
                                            <tr>
                                                <td class="text-center">{{++$i}}.</td>
                                                <td><a href="uploads/{{$contrat->fich}}" download="{{$contrat->fich}}">
                                                        <button type="button" class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-download">
                                                                Telecharger
                                                            </i>
                                                        </button>
                                                    </a></td>
                                                <td><a href="{{route('clientt.show',$contrat->clients->id)}}">{{$contrat->clients->Identifion}}</a></td>
                                                <td>{{ $contrat->Title }}</td>
                                                <td>{{ $contrat->Debut }}</td>
                                                <td>{{ $contrat->Fin }}</td>
                                                <td><span class="glyphicon glyphicon-file"></span> {{ $contrat->fich }}</td>

                                                <form action="{{ route('contratt.destroy', $contrat->id_contrat) }}" method="post">
                                                    <td class="td-actions text-right">

                                                        <a class="btn btn-info"  href="{{route('contratt.show',$contrat->id_contrat)}}">
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
            {!! $contrats->links() !!}
        </div>


@endsection