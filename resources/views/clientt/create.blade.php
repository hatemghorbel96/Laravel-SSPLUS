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
                <form id="main" action="{{ route('clientt.store') }}" method="post">
                    @csrf
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a class="material-icons" href="{{ route('clientt.index') }}">keyboard_return</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Client Forms</h4>
                        <div class="input-group">
                             <span class="input-group-addon">
                                                            <i class="material-icons">account_box</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Login
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Login" type="text" required="true" />
                        </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">security</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Mot de passe
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Pass" type="password" minLength="4" required="true" id="password-field"/>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
                            <input class="form-control" name="email" type="email" required="true" />
                        </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Prénom
                                <small>*</small>
                            </label>
                            <input class="form-control" name="prenom" type="text" required="true" />
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
                            <input class="form-control" name="nom" type="text" required="true" />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">perm_identity</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Identifion
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Identifion" type="text" required="true" />
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
                            <input class="form-control" name="Telephone" type="number" min="8" required="true" />
                        </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">domain</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Nom de la société
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Societe" type="text" required="true" />
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
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }

        .container{
            padding-top:50px;
            margin: auto;
        }
    </style>
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endsection
