<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Client;
use App\Contrat;
use App\Reclamation;
use App\Employer;
class ContratController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contrats = Contrat::latest()->paginate();
        return view('contratt.index',compact('contrats')) 
        ->with('i',(request()->input('page',1) -1)*10);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = DB::table('clients')->get();

        return view('contratt.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrat=new Contrat();
        $contrat->id=$request->id;
        $contrat->Title=$request->Title;
        $contrat->Debut=$request->Debut;
        $contrat->Fin=$request->Fin;
        $contrat->Duree=$request->Duree;
        $contrat->Budget=$request->Budget;
        $contrat->Commentaire=$request->Commentaire;
        $contrat->fich='Files';

        $contrat->save();
     $lastid=$contrat->id_contrat;
     $fileInfo=$request->file('fich');

     $fileName=$lastid.$fileInfo->getClientOriginalName();
     $folder="uploads/";
     $fileInfo->move($folder,$fileName);
     $fileUrl=$fileName;
     $contratFile=Contrat::find($lastid);
     $contratFile->fich=$fileUrl;
     $contratFile->save();
        return redirect()->route('contratt.index')
        ->with('success', 'Contrat ajouter avec succés');

         
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_contrat)
    {
        $contrat = Contrat::find($id_contrat);
        return view('contratt.detail', compact('contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_contrat)
    {
        $contrat = Contrat::find($id_contrat);
        return view('contratt.edit', compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_contrat)
    {
        $request->validate([
            'Login' => 'required',
            'Pass' => 'required',
            'Prenom' => 'required',
            'Nom' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'dateNais' => 'required',
            'Fonction' => 'required',
            'Commentaire' => 'required'
          ]);

          $contrat = Contrat::find($id_contrat);
          $contrat->id=$request->get('id');
          $contrat->Title=$request->get('Title');
          $contrat->Debut=$request->get('Debut');
          $contrat->Fin=$request->get('Fin');
          $contrat->Duree=$request->get('Duree');
          $contrat->Budget=$request->get('Budget');
          $contrat->Commentaire=$request->get('Commentaire');
          $contrat->fich=$request->get('fich');
  
          $contrat->save();
       $lastid=$contrat->id_contrat;
       $fileInfo=$request->file('fich');
  
       $fileName=$lastid.$fileInfo->getClientOriginalName();
       $folder="uploads/";
       $fileInfo->move($folder,$fileName);
       $fileUrl=$folder.$fileName;
       $contratFile=Contrat::find($lastid);
       $contratFile->fich=$fileUrl;
       $contratFile->save();
          return redirect()->route('contratt.index')
          ->with('success', 'employer ajouter avec succés');
  
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_contrat)
    {
        $contrat = Contrat::find($id_contrat);
        $contrat->delete();
        return redirect()->route('contratt.index')
                        ->with('success', 'Contrat supprimer avec succés');
    }
}
