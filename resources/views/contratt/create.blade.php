@extends('layouts.admin')
@section('content')

    <div class="content">
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
            <div class="card">
                <form id="main" action="{{route('contratt.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()  }}
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('contratt.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">contrat Forms</h4>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Client :
                                <small>*</small>
                            </label>
                            <select class="selectpicker" data-style="select-with-transition"  title="select client" name="id">
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->Identifion}}</option>
                                @endforeach
                            </select>
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
                            <input class="form-control" name="Title" type="text" required="true" />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group">
                            <label class="label-control">Date debut</label>
                            <input type="date" class="form-control datepicker" name="Debut"  />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group">
                            <label class="label-control">Date fin</label>
                            <input type="date" class="form-control datepicker" name="Fin"  />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">access_time</i>
                                                        </span>
                        <div class="form-group">
                            <label class="label-control">Durée</label>
                            <input type="text" class="form-control timepicker" name="Duree"  />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">attach_money</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Budget
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Budget" type="text" required="true" />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">comment</i>
                                                        </span>

                        <div class="form-group label-floating">

                            <label class="control-label">
                                Commentaire
                                <small>*</small>
                            </label>
                            <textarea class="form-control" name="Commentaire"  rows="4" required="true"></textarea>
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">attach_file</i>
                                                        </span>
                            <div class="text-center">
                        <div class="form-group label-floating">

                            <p class="form-control-static">
                  <span class="btn btn-default fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Ajouter un fichier</span>
<input class="form-control" name="fich" type="file"  /> </span>
                            </p>
                        </div>
                            </div>
                        </div>





                        <div class="form-footer text-right">

                            <button type="submit" class="btn btn-warning">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
