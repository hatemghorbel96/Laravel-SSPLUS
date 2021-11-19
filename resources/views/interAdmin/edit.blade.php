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
                <form id="main" action="{{ route('interAdmin.update',$intervention->id_inter) }}" method="post">
                @csrf  
      @method('PUT')
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('interAdmin.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Modifier intervention </h4>
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
                                    @foreach (App\Client::get() as $client)
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
                            @foreach (App\Employer::get() as $employer)
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
                            <input class="form-control" name="Titre" type="text" required="true" value="{{$intervention->Titre}}" />
                        </div>

                        </div>


                  
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                date debut
                                <small>*</small>
                            </label>
                            <input type="date" class="form-control datepicker" name="dateD" value="{{$intervention->dateD}}" />
                        </div>
                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                date fin
                                <small>*</small>
                            </label>
                            <input type="date" class="form-control datepicker" name="dateF" value="{{$intervention->dateF}}" />
                        </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    date Rdv
                                    <small>*</small>
                                </label>
                                <input type="date" class="form-control datepicker" name="dateR" value="{{$intervention->dateR}}" />
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
                            <input class="form-control" name="Color" type="color" required="true" value="{{$intervention->Color}}"/>
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
                            <textarea class="form-control" name="Commentaire"  rows="4" required="true" value="{{$intervention->Commentaire}}"></textarea>
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
