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
                                <a class="material-icons" >assignment</a>
                            </div>

                            <h4 class="card-title">List des Reclamtions</h4>
                            <div class="card-content">
                                <div class="material-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Client</th>
                                            <th>Nom du client</th>
                                            <th>Type</th>
                                            <th>Objet</th>

                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ($reclamations as $reclamation)
                                            <tr>
                                                <td class="text-center">{{++$i}}.</td>
                                                <td><a href="{{route('clientt.show',$reclamation->client->id)}}">{{$reclamation->client->Identifion}}</a></td>
                                                <td>{{$reclamation->client->nom}} {{$reclamation->client->prenom}}</td>
                                                <td>{{$reclamation->Type}}</td>
                                                <td>{{$reclamation->comment}}</td>

                                                <form action="{{ route('userRec.destroy', $reclamation->id_rec) }}" method="post">
                                                    <td class="td-actions text-right">

                                                        <a class="btn btn-info"  href="{{route('userRec.show',$reclamation->id_rec)}}">
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
            {!! $reclamations->links() !!}
        </div>


@endsection