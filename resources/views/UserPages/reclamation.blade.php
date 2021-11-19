@extends('layouts.userhome')

@section('content')


    <div class="content">
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>oups! </strong> verifier votre donnee.<br>
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="orange">
                    <a class="material-icons" href="/client">dashboard</a>
                </div>
                <form id="main" action="/reclamation" method="post">
                    @csrf

                    <div class="card-content">
                        <h4 class="card-title">reclamation Forms</h4>


                        <div class="input-group">
                            <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Type du reclamation
                                <small>*</small>
                            </label>
                            <input class="form-control" name="Type" type="text" required="true" />
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
                            <textarea class="form-control" name="comment"  rows="4" required="true"></textarea>
                        </div>
                        </div>
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-warning" >Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection