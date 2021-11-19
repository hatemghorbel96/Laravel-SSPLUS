<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Reclamation;
use App\Client;
class ReclamationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reclamations = Reclamation::latest()->paginate();
        return view('userRec.index',compact('reclamations')) 
        ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = DB::table('clients')->get();

        return view('userRec.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'Type' => 'string|required',
            'comment' => 'string|required',
           
          ]);
  
          Reclamation::create($request->all());
          return redirect()->route('userRec.create')
                          ->with('success', 'reclamation a ete envoyer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_rec)
    {
        $reclamation = Reclamation::find($id_rec);
        return view('userRec.detail', compact('reclamation'));
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
    public function destroy($id_rec)
    {
        $reclamation = Reclamation::find($id_rec);
        $reclamation->delete();
        return redirect()->route('userRec.index')
                        ->with('success', 'reclamation supprimer avec succés');
    }
}
