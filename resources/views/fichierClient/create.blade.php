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
                <form id="main" action="{{route('fichierClient.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()  }}
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('fichierClient.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">fichier Forms</h4>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">work</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Intervention :
                                <small>*</small>
                            </label>
                            <select class="selectpicker" data-style="select-with-transition"  title="select intervention" name="id_inter">
                                @foreach ($interventions as $intervention)
                                    <option value="{{$intervention->id_inter}}">{{$intervention->Titre}}</option>
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
                                Titre du fichier
                                <small>*</small>
                            </label>
                            <input class="form-control" name="titre" type="text" required="true" />
                        </div>
                        </div></tr></td>
                        <tr><td>
                                <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">merge_type</i>
                                                        </span>
                                <div class="form-group label-floating">
                                    <label class="control-label">
                                        Type de fichiers :

                                    </label>
                                    <select class="selectpicker" data-style="select-with-transition"  title="select type" name="TypeF">
                                        <option disabled>Choix</option>
                                        <option >Fichier avant l'intervention</option>
                                        <option >Fichier en cours de l'intervention</option>
                                        <option >Fichier apres l'intervention</option>
                                    </select>
                                </div>
                                </div>
                                <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">attachment</i>
                                                        </span>
                                <table class="table table-striped table-bordered table-hover table-condensed"><tr><td>

                                            <legend>Import fichier</legend>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../../assets/img/image_placeholder.jpg" >
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Import fichier</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="fichAv" />
                                                    </span>

                                                </div>
                                            </div>
                                    </tr></td><tr><td>

                                </table>
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