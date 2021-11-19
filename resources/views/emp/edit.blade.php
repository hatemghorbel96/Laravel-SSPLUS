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
                <form id="main" action="{{route('emp.update',$employer->id_emp)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('emp.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Employes Forms</h4>


                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Prénom
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Prenom" type="text" value="{{$employer->Prenom}}" required="true" />
                        </div>
                        </div>

                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Nom
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Nom" type="text" value="{{$employer->Nom}}" required="true" />
                        </div>
                        </div>


                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">alternate_email</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Email Address
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Email" type="email" value="{{$employer->Email}}" required="true" />
                        </div>
                        </div>

                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Téléphone
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Telephone" type="tel" value="{{$employer->Telephone}}" required="true" />
                        </div>
                        </div>

                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                        <div class="form-group">
                            <label class="label-control">Date Naiss</label>
                            <input type="date" class="form-control datepicker" name="dateNais"  value="{{$employer->dateNais}}" />
                        </div>
                        </div>

                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">supervised_user_circle</i>
                                                        </span>
                        <div class="form-group label-floating">

                        <select class="selectpicker" data-style="select-with-transition" title="Choix" data-size="7" name="Fonction">
                            <option disabled>Choix</option>
                            <option >Technicien</option>
                            <option >Stagiaire</option>

                        </select>
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
                            <textarea class="form-control" name="Commentaire"  rows="4"  required="true">{{$employer->Commentaire}}</textarea>
                        </div>
                        </div>




                        <div class="form-footer text-right">

                            <button type="submit" class="btn btn-warning">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

