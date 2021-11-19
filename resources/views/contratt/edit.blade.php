@extends('layouts.admin')
@section('content')
<section class="content">
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
<form id="main" class="col-sm-30 col-sm-offset-0 form-horizontal" action="{{ route('contratt.update',$contrat->id_contrat) }}" method="post" enctype="multipart/form-data">
@csrf  
      @method('PUT')
       
  
      <div id="content-head" class="hidden-print">
            
                                      <div class="pull-left" style="margin-right:10px;">
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Enregistrer</button>
        </div>
              
      
              <div class="pull-left" style="margin-right:10px;">
                  </div>
            
     
          </div><!-- /#content-head -->
    
        
  <div id="content-main">
  
            
    <ul class="breadcrumb">
        <li><a href="{{ route('contratt.index') }}"><span class="sr-only">Retour à : </span>Contrats</a></li>
    <li class="active"><span class="sr-only">Page actuelle : </span>Ajouter un contrat</li>
  </ul>        
    
  
     
  <h1 class="sr-only">Ajouter un contrat</h1>

    <input type="hidden" name="con_nonce" id="con_nonce" value="" />    
   
    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
        <label for="selectcon_fk_client_id" class="control-label col-sm-4">Client <span class="color-red">*</span></label><div class="col-sm-8"><div class="input-group">
        <select class="form-control" name="id">
                                    @foreach ($clients as $client)
                                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                                    @endforeach
                                </select><div class="input-group-btn btn-group">
                  
                  </div>
                       </div> </div>      
        </div><!-- /#adresse-select -->
                <div class="form-group">
                <label for="Title" class="control-label  col-sm-4">Titre</label><div class="col-sm-8"><input type="text" class="form-control  input-sm  input-sm"  name="Title"   value="{{$contrat->Title}}" /></div></div>
                <div class="form-group">
                <label for="Debut" class="control-label  col-sm-4">Début</label><div class="col-sm-8"><div class="input-group"><input type="date" class="form-control datepickerWeek input-sm datepickerWeek input-sm"  name="Debut"  value="{{$contrat->Debut}}"  /><div class="input-group-btn btn-group">
              <button type="button" class="btn btn-default btn-sm js-set-current-day"
                      data-toggle="tooltip" data-original-title="Jour courant"
                      data-updateday="inputcon_date_start">
                <span class="glyphicon glyphicon-calendar">
                  <span class="sr-only">Jour courant</span>
                </span>
              </button>
            </div></div></div></div>
            <div class="form-group"><label for="Fin" class="control-label  col-sm-4">Fin</label><div class="col-sm-8"><div class="input-group"><input type="date" class="form-control datepickerWeek input-sm datepickerWeek input-sm"  name="Fin" value="{{$contrat->Fin}}"   /><div class="input-group-btn btn-group">
              <button type="button" class="btn btn-default btn-sm js-set-current-day"
                      data-toggle="tooltip" data-original-title="Jour courant"
                      data-updateday="inputcon_date_end">
                <span class="glyphicon glyphicon-calendar">
                  <span class="sr-only">Jour courant</span>
                </span>
              </button>
            </div></div></div></div><div class="form-group"> <div class="col-sm-8"><div class="checkbox"><label for="con_is_closed"></div>
</div>
</div><div class="form-group">
<label for="Duree" class="control-label  col-sm-4">Durée</label><div class="col-sm-8"><div class="input-group"><input type="time" class="form-control  input-sm  input-sm"  name="Duree"  value="{{$contrat->Duree}}" /><div class="input-group-btn btn-group">
        <button type="button" class="btn btn-default btn-sm js-display-help"
         data-toggle="modal" rel="tooltip" data-target="#modalcon_budget"
         data-original-title="Aide">
          <span class="glyphicon glyphicon glyphicon-info-sign">
              <span class="sr-only">Aide</span>
            </span>
        </button>
      </div>
    </div></div></div>
    <div class="form-group">
    <label for="Budget" class="control-label  col-sm-4">Budget</label><div class="col-sm-8"><div class="input-group"><input type="text" class="form-control  input-sm  input-sm"  name="Budget"  value="{{$contrat->Budget}}"  /><div class="input-group-btn btn-group">
        <button type="button" class="btn btn-default btn-sm js-display-help"
         data-toggle="modal" rel="tooltip" data-target="#modalCContratBudget"
         data-original-title="Aide">
          <span class="glyphicon glyphicon glyphicon-info-sign">
              <span class="sr-only">Aide</span>
            </span>
        </button>
      </div>
    </div></div></div>      </div><!-- /.col -->
      <div class="col-xs-6">
        <div class="form-group">
        <label for="Commentaire" class="control-label col-sm-4">Commentaire</label><div class="col-sm-8"><textarea  name="Commentaire" class="form-control input-sm" rows="3" value="{{$contrat->Commentaire}}"></textarea>
          </div></div>        
        <div class="form-group">
        <label for="fich" class=" col-sm-4 control-label">Fiche Contrat</label><div class="col-sm-8">
                <p class="form-control-static">
                  <span class="btn btn-default fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Ajouter un fichier</span>
                   <input type="file" name="fich"> 
                  </span>
                </p>
                <!-- The global progress bar -->
                <div class="progress progress-0 progress-striped" style="display:none;">
                  <div class="progress-bar progress-bar-success"></div>
                </div>
            </div>
          </div>
          <!-- The container for the uploaded files -->
          <div class="files files-0 form-control-static">
          </div>        
      </div><!-- /.col -->
    </div><!-- /.row -->
    
          <p><div class="form-group"><label class="control-label col-sm-4">&nbsp;</label><div class="col-sm-8"> <button type="submit" class="btn btn-primary" >{{ __('Modifier') }} </button></div></div></p>
        






    
      
      </form>    

 
</section> 
@endsection