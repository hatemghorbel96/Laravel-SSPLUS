<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $clients = Client::latest()->paginate();
       return view('clientt.index',compact('clients'))
       ->with('i',(request()->input('page',1) -1)*5);
    }


   
    public function create()
    {
        return view('clientt.create');
    }
 

    public function store(Request $request)
    {
        $request->validate([
          'Login' => 'string|required',
          'Pass' => 'string|required',
          'prenom' => 'string|required',
          'nom' => 'string|required',
          'email' => 'required|email',
          'Identifion' => 'required',
          'Telephone' => 'numeric|required',
          'Societe' => 'string|required',
          'Commentaire' => 'string|required'
        ]);

        Client::create($request->all());
        return redirect()->route('clientt.index')
                        ->with('success', 'Client ajouter avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clientt.detail', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clientt.edit', compact('client'));
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
      $request->validate([
        'Login' => 'required',
        'Pass' => 'required',
        'prenom' => 'required',
        'nom' => 'required',
        'email' => 'required',
        'Identifion' => 'required',
        'Telephone' => 'required',
        'Societe' => 'required',
        'Commentaire' => 'required'
      ]);
      $client = Client::find($id);
      $client->Login = $request->get('Login');
      $client->Pass = $request->get('Pass');
      $client->prenom = $request->get('prenom');
      $client->nom = $request->get('nom');
      $client->email = $request->get('email');
      $client->Identifion = $request->get('Identifion');
      $client->Telephone = $request->get('Telephone');
      $client->Societe = $request->get('Societe');
      $client->Commentaire = $request->get('Commentaire');
      $client->save();
      return redirect()->route('clientt.index')
                      ->with('success', 'Client modifier avec succés ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clientt.index')
                        ->with('success', 'Client supprimer avec succés');
    }
}