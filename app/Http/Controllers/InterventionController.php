<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Intervention;
use App\Client;
use App\Employer;
class InterventionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function calend()
    {
        $events=Intervention::all();
        $event=[];

        foreach ($events as $row){
            $enddate = $row->dateF."24:00:00" ;
            $event[]=\Calendar::event(

                $row->Titre,
                true,

                new \Datetime($row->dateR),
                new \Datetime($row->dateR),
                $row->id_inter,
                [
                    'color'=> $row->Color,
                ]

            );

        }
        $calendar=\Calendar::addEvents($event);

        return view('calend',compact('events', 'calendar'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $interventions = Intervention::latest()->paginate(5);
        return view('interAdmin.index',compact('interventions'))
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
        $employers = DB::table('employers')->get();
        return view('interAdmin.create',['clients'=>$clients],['employers'=>$employers]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Inter = new Intervention();

        $Inter->id = request('id');;
        $Inter->Titre = request('Titre');
        $Inter->id_emp = request('id_emp');
        $Inter->dateD = request('dateD');
        $Inter->dateF = request('dateF');
        $Inter->dateR = request('dateR');
        $Inter->Color = request('Color');
        $Inter->Etat = "0";
        $Inter->Commentaire = request('Commentaire');
        $Inter->save();

        return redirect()->route('interAdmin.index')
            ->with('success', 'Intervention ajouter avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_inter)
    {
        $intervention = Intervention::find($id_inter);
        return view('interAdmin.detail', compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_inter)
    {
        $intervention = Intervention::find($id_inter);
        return view('interAdmin.edit', compact('intervention'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_inter)
    {
        $request->validate([
            'id' => 'required',
            'Titre' => 'required',
            'id_emp' => 'required',
            'dateD' => 'required',
            'dateF' => 'required',
            'dateR' => 'required',
            'Color' => 'required',
            'Commentaire' => 'required',

        ]);
        $intervention = Intervention::find($id_inter);
        $intervention->id = $request->get('id');
        $intervention->Titre = $request->get('Titre');
        $intervention->id_emp = $request->get('id_emp');
        $intervention->dateD = $request->get('dateD');
        $intervention->dateF = $request->get('dateF');
        $intervention->dateR = $request->get('dateR');
        $intervention->Color = $request->get('Color');
        $intervention->Etat = "0";
        $intervention->Commentaire = $request->get('Commentaire');

        $intervention->save();
        return redirect()->route('interAdmin.index')
            ->with('success', 'intervention modifier avec succés ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsew
     */
    public function destroy($id_inter)
    {
        $intervention = Intervention::find($id_inter);
        $intervention->delete();
        return redirect()->route('interAdmin.index')
            ->with('success', 'intervention supprimer avec succés');
    }
}
