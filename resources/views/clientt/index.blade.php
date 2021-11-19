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
              <a class="material-icons" href="{{ route('clientt.create') }}">assignment</a>
            </div>



            <h4 class="card-title">Ajouter Client</h4>

            <div class="card-content">
            <div class="material-datatables">


                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                  <thead class="text-warning">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Identifiant</th>
                    <th>Societe</th>
                    <th >Telephone</th>
                    <th >Email</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                  </thead>


                  <tbody>
                  @foreach ($clients as $client)
                    <tr>
                      <td class="text-center">{{++$i}}.</td>
                      <td>{{$client->nom}}</td>
                      <td>{{$client->prenom}}</td>
                      <td>{{$client->Identifion}}</td>
                      <td>{{$client->Societe}}</td>
                      <td >{{$client->Telephone}}</td>
                      <td >{{$client->email}}</td>
                        <form action="{{ route('clientt.destroy', $client->id) }}" method="post">
                      <td class="td-actions text-right">

                        <a class="btn btn-info"  href="{{route('clientt.show',$client->id)}}">
                          <i class="material-icons">person</i>
                        </a>
                        <a class="btn btn-success"   href="{{route('clientt.edit',$client->id)}}">
                          <i class="material-icons" >edit</i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal">
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
    {!! $clients->links() !!}
  </div>


@endsection