
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
                <form id="main" action="{{ route('interAdmin.store') }}" method="post">
                    @csrf
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('interAdmin.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Intervention Forms</h4>
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
                                                            <i class="material-icons">people</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Nom de l'employer :
                                    <small>*</small>
                                </label>
                                <select class="selectpicker" data-style="select-with-transition"  title="select employer" name="id_emp">
                                    @foreach ($employers as $employer)
                                        <option value="{{$employer->id_emp}} ">{{$employer->Nom}} {{$employer->Prenom}}</option>
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
                                <input class="form-control" name="Titre" type="text" required="true" />
                            </div>

                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>

                        <div class="form-group">
                            <label class="label-control">Date Debut</label>
                            <input type="date" class="form-control datepicker" name="dateD"  />
                        </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group">
                            <label class="label-control">Date Fin</label>
                            <input type="date" class="form-control datepicker" name="dateF"  />
                        </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                            <div class="form-group">
                                <label class="label-control">Date De la prochaine visite</label>
                                <input type="date" class="form-control datepicker" name="dateR"  />
                            </div>
                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">color_lens</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    color
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="Color" type="color" required="true" />
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
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-warning" >Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
