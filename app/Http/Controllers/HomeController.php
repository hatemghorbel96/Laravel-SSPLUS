<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Contrat;
use App\Fichier;
use App\Intervention;
use App\Employer;
use App\Reclamation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Nbclient= Client::all()->count();
        $Nbemp= Employer::all()->count();
        $Nbint=Intervention::all()->count();
        $Nbcont=Contrat::all()->count();

        return view('home',compact("Nbclient","Nbint","Nbemp","Nbcont"));
    }
    public function welcome()
    {
        return view('welcome');
    }
 

    public function addu()
    {
        return view('adduser');
    }

    public function createUser()
    {
        return view('createUser');
    }

    public function searchUser()
    {
        return view('searchUser');
    }
    public function destroyUser()
    {
        return view('destroyUser');
    }
    public function editUser()
    {
        return view('editUser');
    }
    public function userhome()
    {
        return view('userhome');
    }
    public function RDV()
    {
        return view('RDVuser');
    }

  
  
    public function intervention()
    {
        return view('gestIntervention');
    }
    public function addclient()
    {
        return view('addclient');
    }
    public function addIntervention()
    {
        return view('addIntervention');
    }
  

    public function calendInt()
    {
        return view('calendInt');
    }

    public function Produit()
    {
        return view('Produit');
    }

    public function fichier()
    {
        return view('fichier');
    }
    public function contrat()
    {
        return view('contrat');
    }

    public function addContrat()
    {
        return view('addContrat');
    }

    public function addProduit()
    {
        return view('addProduit');
    }

    public function addfichier()
    {
        return view('addfichier');
    }

    public function adresses()
    {
        return view('adresses');
    }

    public function addadresses()
    {
        return view('addadresses');
    }

    public function recla()
    {
        return view('recla');
    }

    public function clientInter()
    {
        return view('clientInter');
    }
    public function ClientRec()
    {
        return view('ClientRec');
    }

    public function clientInterCalend()
    {
        return view('clientInterCalend');
    }
    public function clientfichier()
    {
        return view('clientfichier');
    }

    public function clientProduit()
    {
        return view('clientProduit');
    }

    public function clientContrat()
    {
        return view('clientContrat');
    }
}
