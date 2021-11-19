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
              <a class="material-icons" href="{{ route('emp.create') }}">assignment</a>
            </div>

            <h4 class="card-title">Ajouter Employes</h4>
            <div class="card-content">
              <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                <thead class="text-warning">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Fonction</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th >Telephone</th>
                    <th >Email</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach ($employers as $employer)
                    <tr>
                      <td class="text-center">{{++$i}}.</td>
                      <td>{{$employer->Fonction}}</td>
                      <td>{{$employer->Nom}}</td>
                      <td>{{$employer->Prenom}}</td>
                      <td >{{$employer->Telephone}}</td>
                      <td >{{$employer->Email}}</td>
                        <form class="delete" action="{{ route('emp.destroy', $employer->id_emp) }}" method="post">
                      <td class="td-actions text-right">

                        <a class="btn btn-info"  href="{{route('emp.show',$employer->id_emp)}}">
                          <i class="material-icons">person</i>
                        </a>
                        <a class="btn btn-success"  href="{{route('emp.edit',$employer->id_emp)}}">
                          <i class="material-icons" >edit</i>
                        </a>
                          @csrf
                          @method('DELETE')

                          <button type="submit" rel="tooltip"   class="btn btn-danger">
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
    {!! $employers->links() !!}
  </div>
  <script>
    $(".delete").on("submit", function(){
      return confirm("Are you sure?");
    });
  </script>

@endsection