<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pointage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Notifications\UserRegisteredNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/*
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\AbonnementController;
*/

class TableauBordController extends Controller
{

    // doit être connecte pour avoir accès aux fonction
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function initializePageAccueil()
    {
        /*
        $parSemaine = DB::table(DB::raw(
            '(SELECT 
            ProductName,
            DATEDIFF(week, \'2011-05-30\', date) AS WeekNumber,
            sale
            FROM table)'))
        ->select('ProductName','WeekNumber',DB::raw('sum(sale)'))
        ->groupBy(['ProductName','WeekNumber'])
        ->get();
        */
        $parJour = DB::table('pointage')
            ->join('mission', 'mission.id', '=', 'pointage.idMission')
            ->select('*')
            ->get();

        $missions = DB::table('mission')
            ->select('*')
            ->get();

        return view('TableauBord.accueil', [
            'lesMissions' => $missions,
            'dataJour' => $parJour,
        ]);
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD
    |--------------------------------------------------------------------------
    */
    /**
     * Pointage
     */
    public function addPointage(Request $request)
    {
        //valide les donnees de la requete
        $request->validate([
            'date_debut_journee' => ['required', 'date', 'date_format:Y-m-d H:i'],
            'date_fin_journee' => ['required',  'date', 'date_format:Y-m-d H:i', 'after:date_debut_journee'],
            'mission' => ['required', 'integer'],
        ]);

        //ajout d'un pointage dans la bdd
        Pointage::create([
            'debut_journee' => $request->date_debut_journee,
            'fin_journee' => $request->date_fin_journee,
            'idUsers' => Auth::user()->id,
            'idMission' => $request->mission,
        ]);

        return redirect('/dashboard');
    }
    public function updatePointage(Request $request)
    {
        //valide les donnees de la requete
        $request->validate([
            'date_debut_journee' => ['required', 'date', 'date_format:Y-m-d H:i'],
            'date_fin_journee' => ['required',  'date', 'date_format:Y-m-d H:i', 'after:date_debut_journee'],
            'mission' => ['required', 'integer'],
        ]);

        //mise à jour du pointage en indiquant l'id correspondant
        $lePointage = Pointage::findOrFail($request->pointage);
        $lePointage->update([
            'debut_journee' => $request->date_debut_journee,
            'fin_journee' => $request->date_fin_journee,
            'idUsers' => Auth::user()->id,
            'idMission' => $request->mission,
        ]);

        return redirect('/dashboard');
    }
    public function deletePointage(Request $request)
    {
        //supprime le pointage en indiquant l'id correspondant
        $personne = Pointage::findOrFail($request->pointage);
        $personne->delete();

        return redirect('/dashboard');
    }
}
