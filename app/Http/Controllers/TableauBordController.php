<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Notifications\UserRegisteredNotification;
use Carbon\Carbon;

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

        return view('TableauBord.accueil');
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD
    |--------------------------------------------------------------------------
    */
    /**
     * Client
     */
    public function addMission(Request $request)
    {
        //valide les donnees de la requete
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'adresse' => ['string', 'max:255'],
            'ville' => ['string', 'max:100'],
            'codePostal' => 'regex:/^\d{5}$/',
            'prenom' => ['required', 'string', 'max:255'],
            'renouvellement' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        return redirect('/dashboard');
    }
    public function updateClient(Request $request)
    {
        // autorise pas à utiliser la méthode si ce n'est pas un admin
        if (!Gate::allows('access-admin')) {
            abort(403);
        }

        //valide les donnees de la requete
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telephone' => 'required|regex:/(0)[0-9]{9}/',
            'adresse' => ['string', 'max:255'],
            'ville' => ['string', 'max:100'],
            'codePostal' => 'regex:/^\d{5}$/',
            'prenom' => ['required', 'string', 'max:255'],
            //'renouvellement' => ['required', 'string', 'max:255'],
        ]);
        return redirect('/dashboard');
    }
    public function deleteClient(Request $request)
    {
        // autorise pas à utiliser la méthode si ce n'est pas un admin
        if (!Gate::allows('access-admin')) {
            abort(403);
        }

        $leFormateur = DB::table('formateur')
            ->join('personne_physique', 'personne_physique.idPersonnePhysique', '=', 'formateur.idPersonnePhysique')
            ->join('personne', 'personne.idPersonne', '=', 'personne_physique.idPersonne')
            ->join('formateur_abonnement', 'formateur_abonnement.idFormateur', '=', 'formateur.idFormateur')
            ->join('abonnement', 'abonnement.idAbonnement', '=', 'formateur_abonnement.idAbonnement')
            ->select(
                'personne.idUsers',
                'personne.idPersonne',
                'personne_physique.idPersonnePhysique',
                'formateur.idFormateur',
                'formateur_abonnement.idFormateurAbonnement',
                'abonnement.idAbonnement'
            )
            ->where('formateur.idFormateur', $request->formateur)
            ->get();

        foreach ($leFormateur as $data) {
            $user = User::findOrFail($data->idUsers);
            $user->delete();

            $personne = Personne::findOrFail($data->idPersonne);
            $personne->delete();

            /*
            $personnePhysique = PersonnePhysique::findOrFail($data->idPersonnePhysique);
            $personnePhysique->delete();

            $formateur = Formateur::findOrFail($data->idFormateur);
            $formateur->delete();
            */

            $formateurAbonnement = FormateurAbonnement::findOrFail($data->idFormateurAbonnement);
            $formateurAbonnement->delete();
        }



        return redirect('/dashboard');
    }
}
