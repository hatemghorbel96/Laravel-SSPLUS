@extends('layouts.userhome')
@section('content')
<section class="content">

<form id="main" class="col-sm-30 col-sm-offset-0 form-horizontal" action="{{route('userRec.store')}}" method="post" >
@csrf 
    <input type="hidden" name="security" id="security" value="1" />    <input type="hidden" name="_nonce" value="fe09faa957" />    <span class="sr-only">(*) : les champs marqués d'un astérisque sont obligatoires</span>    
  
      <div id="content-head" class="hidden-print">
            
                                      <div class="pull-left" style="margin-right:10px;">
          
        </div>

          </div><!-- /#content-head -->
    
        
  <div id="content-main">
  
            
    <ul class="breadcrumb">
        <li><a href="#"><span class="sr-only">Retour à : </span>Home</a></li>
    <li class="active"><span class="sr-only">Page actuelle : </span>Envoyer une reclamation</li>
  </ul>        
    
  
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
  
  
        
    <div class="row">
      <div class="col-xs-6">
        <fieldset>
        <legend>Informations générales</legend>
          
        <div class="form-group">
      <label for="Client" class="control-label col-sm-4">Client</label>
      <div class="col-sm-8">
      <select class="form-control" name="id" >
                                    @foreach (App\Client::get() as $client)
                                        <option value="{{$client->id}} ">{{$client->nom}} {{$client->prenom}}</option>
                                    @endforeach
                                </select>
      </div>
    </div>
    <p>




    <div class="form-group">
      <label for="Type" class="control-label col-sm-4">Type</label>
      <div class="col-sm-8">
        
        <input type="text" class="form-control input-sm" 
          name="Type" 
       
          placeholder="Type"/>
        
      </div>
    </div>
    <div class="form-group">
    <label for="comment" class="control-label col-sm-4">Objet</label>
    <div class="col-sm-8"><input type="text"  name="comment" class="form-control input-sm"  placeholder="Objet">
          </div></div>        </fieldset>
      
        
        
              </div>
    </div><!-- /.row -->
    
  <p><div class="form-group"><label class="control-label col-sm-4">&nbsp;</label><div class="col-sm-8"><input type="submit" class="btn btn-primary" value="envoyer" /></div></div></p>
        


</form>

  
   

</section> 
@endsection