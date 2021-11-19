<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Client;
use App\Fichier;
class FichierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $fichiers = Fichier::latest()->paginate();
        return view('fichierClient.index',compact('fichiers'))
            ->with('i',(request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interventions = DB::table('interventions')->get();

        return view('fichierClient.create',['interventions'=>$interventions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fichier=new Fichier();
        $fichier->id_inter=$request->id_inter;
        $fichier->titre=$request->titre;
        $fichier->TypeF=$request->TypeF;
        $fichier->fichAv='Files';


        $fichier->save();

        $lastid=$fichier->id_Fichier;
        $fileInfo=$request->file('fichAv');

        $fileName=$lastid.$fileInfo->getClientOriginalName();
        $folder="uploads/";
        $fileInfo->move($folder,$fileName);
        $fileUrl=$fileName;
        $fichierFile=fichier::find($lastid);
        $fichierFile->fichAv=$fileUrl;
        $fichierFile->save();


        return redirect()->route('fichierClient.index')
            ->with('success', 'fichier ajouter avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Fichier)
    {
        $fichier = Fichier::find($id_Fichier);
        return view('fichierClient.detail', compact('fichier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Fichier)
    {
        $fichier = Fichier::find($id_Fichier);
        $fichier->delete();
        return redirect()->route('fichierClient.index')
            ->with('success', 'fichier supprimer avec succés');
    }
}
