<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $employers = Employer::latest()->paginate();
        return view('emp.index',compact('employers'))
            ->with('i',(request()->input('page',1) -1)*5);
    }

    public function create()
    {
        return view('emp.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'Prenom' => 'string|required',
            'Nom' => 'string|required',
            'Email' => 'required|email',
            'Telephone' => 'numeric|required',
            'dateNais' => 'required',
            'Fonction' => 'required',
            'Commentaire' => 'string|required'
        ]);

        Employer::create($request->all());
        return redirect()->route('emp.index')
            ->with('success', 'employer ajouter avec succés');
    }

    public function show($id_emp)
    {
        $employer = Employer::find($id_emp);
        return view('emp.detail', compact('employer'));
    }


    public function edit($id_emp)
    {
        $employer = Employer::find($id_emp);
        return view('emp.edit', compact('employer'));
    }


    public function update(Request $request, $id_emp)
    {
        $request->validate([

            'Prenom' => 'required',
            'Nom' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'dateNais' => 'required',
            'Fonction' => 'required',
            'Commentaire' => 'required'
        ]);
        $employer = Employer::find($id_emp);

        $employer->Prenom = $request->get('Prenom');
        $employer->Nom = $request->get('Nom');
        $employer->Email = $request->get('Email');
        $employer->Telephone = $request->get('Telephone');
        $employer->dateNais = $request->get('dateNais');
        $employer->Fonction = $request->get('Fonction');
        $employer->Commentaire = $request->get('Commentaire');
        $employer->save();
        return redirect()->route('emp.index')
            ->with('success', 'Employer modifier avec succés ');
    }

    public function destroy($id_emp)
    {
        $employer = Employer::find($id_emp);
        $employer->delete();
        return redirect()->route('emp.index')
            ->with('success', 'Employer supprimer avec succés');
    }


}