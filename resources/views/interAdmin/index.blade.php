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
                            <a class="material-icons" href="{{ route('interAdmin.create') }}">assignment</a>
                        </div>

                        <h4 class="card-title">Ajouter Interventions</h4>
                        <div class="card-content">
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                                <thead class="text-warning">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Client</th>
                                        <th>Employé</th>
                                        <th>Titre</th>
                                        <th >Date Debut</th>
                                        <th >Date Fin</th>
                                        <th >Date RDV</th>
                                        <th >Etat</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($interventions as $intervention)
                                        <tr>
                                            <td class="text-center">{{++$i}}.</td>
                                            <td><a href="{{route('clientt.show',$intervention->clients->id)}}">{{ $intervention->clients->Identifion }}</a></td>
                                            <td>{{ $intervention->employers->Nom }} {{ $intervention->employers->Prenom }}</td>
                                            <td>{{ $intervention->Titre }}</td>
                                            <td>{{ $intervention->dateD }}</td>
                                            <td>{{ $intervention->dateF }}</td>
                                            <td>{{ $intervention->dateR }}</td>
                                            <td>
                                                @if ($intervention->Etat== '0')

                                                    <i class="material-icons" data-notify="icon">close</i>

                                                @else

                                                        <i class="material-icons" data-notify="icon">done</i>

                                                @endif
                                            </td>
                                            <form action="{{ route('interAdmin.destroy', $intervention->id_inter) }}" method="post">
                                                <td class="td-actions text-right">

                                                    <a class="btn btn-info"  href="{{route('interAdmin.show',$intervention->id_inter)}}">
                                                        <i class="material-icons">person</i>
                                                    </a>
                                                    <a class="btn btn-success"  href="{{route('interAdmin.edit',$intervention->id_inter)}}">
                                                        <i class="material-icons" >edit</i>
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
        {!! $interventions->links() !!}
    </div>


@endsection