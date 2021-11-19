@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="card-header card-header-icon" data-background-color="orange">
            <a class="material-icons" href="{{ route('userRec.index') }}">keyboard_return</a>
        </div>
    </div>
    <div class="card card-testimonial">
        <div class="icon">
            <i class="material-icons">format_quote</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Object : {{$reclamation->Type}}</h4>
            <h5 class="card-description">
                {{$reclamation->comment}}
                  </h5>
        </div>
        <div class="footer">

            <h6 class="category">Société : {{$reclamation->client->Societe}}</h6>
            <h6 class="category">Client : {{$reclamation->client->Identifion}}</h6>
            <div class="card-avatar">
                <a  >
                    <img class="img" src="https://www.easiware.com/hubfs/reclamation.png" />
                </a>
            </div>
        </div>
    </div>

    </div>
</section>

@endsection