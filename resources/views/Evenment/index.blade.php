<script type="text/javascript">
    $(function () {
        $("envoyer").click(function(){
            return false;
        });
    });

</script>
@extends('layouts.admin')
@section('content')

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
            <div class="card">
                <form id="main" action="{{route('Evenment.update',$event->id_ev)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" >event</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Modifier Événement </h4>





                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Titre
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P1" type="text"  value="{{$event->P1}}" />
                            </div>

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Evenement
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P2" type="text"  value="{{$event->P2}}" />

                            </div>

                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Date
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P3" type="text"  value="{{$event->P3}}" />
                            </div>

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Titre
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P4" type="text"  value="{{$event->P4}}" />
                            </div>

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Evenement
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P5" type="text" value="{{$event->P5}}" />
                            </div>

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">title</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Date
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="P6" id="P6"   type="text"  value="{{$event->P6}}" />
                            </div>

                        </div>



                        <div class="form-footer text-right">
                            <button type="submit" value="Envoyer" id="envoyer" class="btn btn-warning" >Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
