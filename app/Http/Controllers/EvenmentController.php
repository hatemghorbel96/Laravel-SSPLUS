<?php

namespace App\Http\Controllers;

use App\Evenment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EvenmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $event = DB::table('evenments')->get()[0];

        return view('Evenment.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ev)
    {

        $request->validate([

            'P1' => 'nullable',
            'P2' => 'nullable',
            'P3' => 'nullable',
            'P4' => 'nullable',
            'P5' => 'nullable',
            'P6' => 'nullable',
        ]);
        $evenm = Evenment::find($id_ev);

        $evenm->P1 = $request->get('P1');
        $evenm->P2 = $request->get('P2');
        $evenm->P3 = $request->get('P3');
        $evenm->P4 = $request->get('P4');
        $evenm->P5 = $request->get('P5');
        $evenm->P6 = $request->get('P6');

        $evenm->save();
        return redirect()->route('Evenment.index')
            ->with('success', 'Evenment modifier avec succés ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
