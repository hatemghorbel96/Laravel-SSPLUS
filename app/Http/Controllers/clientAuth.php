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
class clientAuth extends Controller
{

    public function showUserLogin(Request $request) {
        if($request->session()->exists("clientLogin")) {

            return redirect("/client");
        } else {
            $event = DB::table('evenments')->get()[0];

            return view('login1',compact('event'));
        }
    }
    public function clientLogin(Request $request) {
        if($request->session()->exists("clientLogin")) {
            $client = $request->session()->get("clientLogin")[0];
            $value = object_get($client, 'id');




            $nbcontrat=DB::table('contrats')->where('id',$value)->count();
            $nbintervention=DB::table('interventions')->where('id',$value)->count();
            $nbichiers = DB::table('fichiers')->select()
                ->join('interventions', 'fichiers.id_inter', '=', 'interventions.id_inter')
                ->where('interventions.id',"=",$value)->count();
            $nbreclamation=DB::table('reclamations')->where('id',$value)->count();




            return view("UserPages.client", compact('client','nbcontrat','nbintervention','nbichiers','nbreclamation'));
        }
        $username = $request->get('username');
        $password = $request->get('pass');

        $client = DB::table('clients')->where('Login', $username)->where('Pass', $password)->get();


        if(count($client) > 0) {
            $request->session()->put("clientLogin", $client);
            $client = $client[0];
            return redirect("/client");
            //return view("UserPages.client", compact('client'));
        } else {
           return redirect("/login1");
        }

    }


    public function contrat(Request $request){
        $client = $request->session()->get("clientLogin")[0];
        $value = object_get($client, 'id');
        $contrats = Contrat::whereIn('id', [$value])->latest()->paginate();
return view("UserPages.contrat", compact("client"),compact("contrats"))
    ->with('i',(request()->input('page',1) -1)*10);
    }
    public function calendar(Request $request){
        $client = $request->session()->get("clientLogin")[0];
        $value = object_get($client, 'id');
        $events=Intervention::whereIn('id', [$value])->get();;
        $event=[];

        foreach ($events as $row){
            $enddate = $row->dateF."24:00:00" ;
            $event[]=\Calendar::event(

                $row->Titre,
                true,

                new \Datetime($row->dateD),
                new \Datetime($row->dateF),
                $row->id_inter,
                [
                    'color'=> $row->Color,
                ]

            );

        }
        $calendar=\Calendar::addEvents($event);

        $events2=Intervention::whereIn('id', [$value])->get();;
        $event2=[];

        foreach ($events2 as $row){
            $enddate = $row->dateF."24:00:00" ;
            $event2[]=\Calendar::event(

                $row->Titre.": RDV" ,
                true,

                new \Datetime($row->dateR),
                new \Datetime($row->dateR),
                $row->id_inter,
                [
                    'color'=> $row->Color,
                ]

            );

        }
        $calendar2=\Calendar::addEvents($event2);


        return view("UserPages.calendrier", compact("client"),compact('events', 'calendar','events2','calendar2'));
    }

    public function intervention(Request $request){
        $client = $request->session()->get("clientLogin")[0];
        $value = object_get($client, 'id');
        $interventions = Intervention::whereIn('id', [$value])->get();

        $fichiers = DB::table('fichiers')->select()
            ->join('interventions', 'fichiers.id_inter', '=', 'interventions.id_inter')
            ->where('interventions.id',"=",$value)->paginate();

        //$fichiers = Fichier::whereIn('id_inter', [$value2])->latest()->paginate();

        return view("UserPages.fichierintervention", compact("client"),compact('fichiers'))
        ->with('i',(request()->input('page',1) -1)*10);
    }



    public function interventions(Request $request){
        $client = $request->session()->get("clientLogin")[0];
        $value = object_get($client, 'id');
        $interventions = Intervention::whereIn('id', [$value])->latest()->paginate();
        return view("UserPages.intervention", compact("client"),compact("interventions"))
            ->with('i',(request()->input('page',1) -1)*10);
    }






    public function reclamation(Request $request){
        $client = $request->session()->get("clientLogin")[0];

        return view("UserPages.reclamation", compact("client"));
    }
    public function updateInt(Request $request,$id_inter)
    {
        DB::table('interventions')
            ->where("id_inter", '=',  $id_inter)
            ->update(['Etat'=> request('Etat')]);
      return redirect("/client/intervention");
    }

    public function storeRec(Request $request)
    {
        $client = $request->session()->get("clientLogin")[0];
        $value = object_get($client, 'id');

        $rec = new Reclamation();

        $rec->id = $value;
        $rec->Type = request('Type');
        $rec->comment = request('comment');
        $rec->save();


       return redirect("/client/reclamation")
            ->with('success', 'Votre réclamation a ete envoyer');
    }

    public function getLogout(){

        Session::flush();
        return Redirect::to('/login1');
    }

}
