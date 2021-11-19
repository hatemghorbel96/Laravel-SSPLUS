@extends('layouts.admin')

@section('content')
  <div class="content">

  
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="orange">
            <i class="material-icons">person</i>
          </div>
          <div class="card-content">
            <p class="category">Nb Client</p>
            <h3 class="card-title">{{$Nbclient}}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">link</i>
              <a href="/clientt">Liste Clients...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="rose">
            <i class="material-icons">people</i>
          </div>
          <div class="card-content">
            <p class="category">Nb Employer</p>
            <h3 class="card-title">{{$Nbemp}}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">link</i>
              <a href="/emp">Liste Employers...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="green">
            <i class="material-icons">work</i>
          </div>
          <div class="card-content">
            <p class="category">Nb Intervention</p>
            <h3 class="card-title">{{$Nbint}}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">link</i>
              <a href="/interAdmin">Liste Interventions...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header" data-background-color="blue">
            <i class="material-icons">content_paste</i>
          </div>
          <div class="card-content">
            <p class="category">Nb Contrat</p>
            <h3 class="card-title">{{$Nbcont}}</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">link</i>
              <a href="/contratt">Liste Contrats...</a>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
@endsection
