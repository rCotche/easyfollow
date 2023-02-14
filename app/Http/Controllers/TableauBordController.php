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
    public function addClient(Request $request)
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

        /*
        |--------------------------------------------------------------------------
        | Users == compte utilisateur
        |--------------------------------------------------------------------------
        */

        $user = User::create([
            'name' => $request->nom . " " . $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'formateur',
        ]);

        event(new Registered($user));

        //Envoi un notification quand l'user est créé
        //$user->notify(new UserRegisteredNotification($user));

        //$post = ['titre' => 'usper titre'];
        //)$user->notify(new UserRegisteredNotification($user, $post));

        /*
        |--------------------------------------------------------------------------
        | Personne
        |--------------------------------------------------------------------------
        */

        //insert personne
        $personne = Personne::create([
            'nom' => $request->nom,
            'mail' => $request->email,
            'telephone' => null,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'idUsers' => $user->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Personne physique
        |--------------------------------------------------------------------------
        */

        //insert personne physique
        $personnePhysique = PersonnePhysique::create([
            'idPersonne' => $personne->idPersonne,
            'prenom' => $request->prenom
        ]);

        /*
        |--------------------------------------------------------------------------
        | Formateur
        |--------------------------------------------------------------------------
        */

        //insert formateur
        $formateur = Formateur::create([
            'dossier' => Hash::make($request->prenom . $request->nom . time()),
            'idPersonnePhysique' => $personnePhysique->idPersonnePhysique
        ]);

        //Storage::disk('public')->makeDirectory('donneesBifrost/'.$formateur->dossier);

        /*
        |--------------------------------------------------------------------------
        | Formateur abonnement
        |--------------------------------------------------------------------------
        */

        // Laravel has the Carbon dependency attached to it.
        $dateExpiration = Carbon::now();

        switch ($request->renouvellement) {
            case 'Annuel':
                $dateExpiration = $dateExpiration->addYear();
                break;

            default:
                $dateExpiration = $dateExpiration->addMonth();
                break;
        }

        FormateurAbonnement::create([
            'dateCreation' => Carbon::now()->format('Y-m-d'), //mysql format
            'dateModification' => Carbon::now()->format('Y-m-d'),
            'dateExpiration' => $dateExpiration,
            'renouvellement' => $request->renouvellement,
            'idFormateur' => $formateur->idFormateur,
            'idAbonnement' => $request->abonnement
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

        /*
        |--------------------------------------------------------------------------
        | Users == compte utilisateur
        |--------------------------------------------------------------------------
        */

        $user = User::findOrFail($request->utilisateur);
        $user->update([
            'name' => $request->nom . " " . $request->prenom,
            'role' => 'formateur',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Personne
        |--------------------------------------------------------------------------
        */

        $personne = Personne::findOrFail($request->perso);

        //update personne | mise à jour
        $personne->update([
            'nom' => $request->nom,
            'mail' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'idUsers' => $user->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Personne physique
        |--------------------------------------------------------------------------
        */

        $personnePhysique = PersonnePhysique::findOrFail($request->physique);

        //update personne physique
        $personnePhysique->update([
            'idPersonne' => $personne->idPersonne,
            'prenom' => $request->prenom
        ]);
        /*
        |--------------------------------------------------------------------------
        | Formateur
        |--------------------------------------------------------------------------
        */

        $formateur = Formateur::findOrFail($request->formateur);

        //update formateur
        $formateur->update([
            'dossier' => Hash::make($request->prenom . $request->nom . time()),
            'idPersonnePhysique' => $personnePhysique->idPersonnePhysique
        ]);
        /*
        |--------------------------------------------------------------------------
        | Formateur abonnement
        |--------------------------------------------------------------------------
        */

        $formateurAbonnement = FormateurAbonnement::findOrFail($request->fa);

        $formateurAbonnement->update([
            'dateCreation' => $formateurAbonnement->dateCreation, //mysql format
            'dateModification' => Carbon::now()->format('Y-m-d'),
            'dateExpiration' => $formateurAbonnement->dateExpiration,
            'renouvellement' => $formateurAbonnement->renouvellement,
            'idFormateur' => $formateur->idFormateur,
            'idAbonnement' => $request->abonnement
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
