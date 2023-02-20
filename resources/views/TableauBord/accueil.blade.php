@extends('layouts.tb_app')
@section('content')
<div class="section section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mt-5 mb-5"><span class="font-weight-bold">Tableau de bord</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="nav-wrapper position-relative mb-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-general"
                        role="tablist">
                        {{-- resume --}}
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="resume-tab"
                                data-bs-toggle="tab"
                                href="#resume"
                                role="tab" aria-controls="resume" aria-selected="true">
                                <i class="fas fa-info-circle"></i>Resumé
                            </a>
                        </li>
                        {{-- vacation --}}
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="add-vacation-tab"
                                data-bs-toggle="tab"
                                href="#add-vacation"
                                role="tab" aria-controls="add-vacation" aria-selected="false">
                                <i class="fas fa-edit"></i>Ajouter vacation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow-inset bg-primary border-light p-4 rounded">
                    <div class="card-body p-0">
                        <div class="tab-content" id="tabgeneral">

                            {{-- resume-tab --}}
                            <div class="tab-pane fade show active" id="resume" role="tabpanel"
                            aria-labelledby="resume-tab" tabindex="0">
                            
                                {{-- visuel --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mt-5 mb-5"><span class="font-weight-bold">Informations générales</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="nav-wrapper position-relative mb-4">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-info"
                                                    role="tablist">
                                                    {{-- journalier --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="journalier-tab"
                                                            data-bs-toggle="tab"
                                                            href="#journalier"
                                                            role="tab" aria-controls="journalier" aria-selected="true">
                                                            <i class="fas fa-calendar-day"></i>Journalier
                                                        </a>
                                                    </li>
                                                    {{-- hebdomadaire --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0" id="hebdomadaire-tab"
                                                            data-bs-toggle="tab"
                                                            href="#hebdomadaire"
                                                            role="tab" aria-controls="hebdomadaire" aria-selected="false">
                                                            <i class="fas fa-calendar-week"></i>Hebdomadaire
                                                        </a>
                                                    </li>
                                                    {{-- mensuel --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0"
                                                            id="mensuel-tab" data-bs-toggle="tab"
                                                            href="#mensuel"
                                                            role="tab" aria-controls="mensuel" aria-selected="false">
                                                            <i class="fas fa-calendar-alt"></i>Mensuel
                                                        </a>
                                                    </li>
                                                    {{-- annuel --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0"
                                                            id="annuel-tab" data-bs-toggle="tab"
                                                            href="#annuel"
                                                            role="tab" aria-controls="annuel" aria-selected="false">
                                                            <i class="fas fa-calendar"></i>Annuel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card shadow-inset bg-primary border-light p-4 rounded">
                                                <div class="card-body p-0">
                                                    <div class="tab-content" id="tabinfo">

                                                        {{-- journalier-tab --}}
                                                        <div class="tab-pane fade show active" id="journalier" role="tabpanel"
                                                        aria-labelledby="journalier-tab" tabindex="0">
                                                            <div class="mb-1">
                                                                <div class="mb-4">
                                                                    <span class="h5">Résumé</span>
                                                                </div>

                                                                <div class="table-responsive-sm shadow-soft rounded p-3">
                                                                    <table class="table table-hover datatable">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-0" scope="col" id="class2">Nom</th>
                                                                                <th class="border-0" scope="col" id="teacher2">Date</th>
                                                                                <th class="border-0" scope="col" id="teacher2">Heures</th>
                                                                                <th class="border-0" scope="col" id="males2">Gain</th>
                                                                                <th class="border-0" scope="col" id="females2">Gestion</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($dataJour as $data)
                                                                                @php
                                                                                /**
                                                                                 * Format date
                                                                                */
                                                                                    $jour = substr($data->debut_journee, 8, 2);
                                                                                    $mois = substr($data->debut_journee, 5, 2);
                                                                                    $annee = substr($data->debut_journee, 0, 4);
                                                
                                                                                    $laDate = $jour . '/' . $mois . '/' . $annee;
                                                                                /**
                                                                                 * Calcul les heures entre 2 dates
                                                                                */
                                                                                    $date1 = new DateTime($data->debut_journee);
                                                                                    $date2 = new DateTime($data->fin_journee);
                                                                                    $diff = $date2->diff($date1);
                                                                                    $hours = $diff->h;
                                                                                    $hours = $hours + ($diff->days*24);

                                                                                /**
                                                                                 * Calcul les heures entre 2 dates
                                                                                */
                                                                                $gains = $hours * $data->taux_horaire
                                                                                @endphp
                                                                                <tr>
                                                                                    <td>{{ $data->nom }}</td>
                                                                                    <td>{{ $laDate }}</td>
                                                                                    <td>{{ $hours }}</td>
                                                                                    <td>{{ $gains }}</td>
                                                                                    <td class="text-center">
                                                                                        <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" 
                                                                                        data-bs-toggle="modal" data-bs-target="#modal_detail{{$data->idPointage}}"
                                                                                        type="button">
                                                                                            <i class="fas fa-cogs"></i>
                                                                                            <span aria-hidden="true" class="fas fa-cogs"></span>
                                                                                        </button>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- hebdomadaire-tab --}}
                                                        <div class="tab-pane fade show" id="hebdomadaire" role="tabpanel"
                                                        aria-labelledby="hebdomadaire-tab" tabindex="0">
                                                            <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                                                beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                                                chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest
                                                                in do umami readymade swag.</p>
                                                            <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                                                married his account removal. Estimable me disposing of be moonlight
                                                                cordially curiosity.</p>
                                                        </div>

                                                        {{-- mensuel-tab --}}
                                                        <div class="tab-pane fade show" id="mensuel" role="tabpanel"
                                                        aria-labelledby="mensuel-tab" tabindex="0">
                                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                                                sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                                                proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                                                Pinterest in do umami readymade swag.</p>
                                                            <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                                                married his account removal. Estimable me disposing of be moonlight
                                                                cordially curiosity.</p>
                                                        </div>

                                                        {{-- annuel-tab --}}
                                                        <div class="tab-pane fade show" id="annuel" role="tabpanel"
                                                        aria-labelledby="annuel-tab" tabindex="0">
                                                            a
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- vacation-tab --}}
                            <div class="tab-pane fade show" id="add-vacation" role="tabpanel"
                            aria-labelledby="add-vacation-tab" tabindex="0">

                                <form method="POST" action="{{ route('ajout-Pointage') }}" class="card bg-primary shadow-soft border-light">
                                    @csrf
                                    
                                    <div class="card-body px-5">
                                        <div class="row">
                                            {{-- Journée debut --}}
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="date_debut_journee">Début journée</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_debut_journee"
                                                        name="date_debut_journee" :value="old('date_debut_journee')" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Journée fin --}}
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="date_fin_journee">Fin journée</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_fin_journee"
                                                        name="date_fin_journee" :value="old('date_fin_journee')" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- Mission --}}
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="my-1 mr-2" for="mission">Mission/Vacation</label>
                                                    <select class="custom-select my-1 mr-sm-2" id="mission" name="mission">
                                                        <option selected="selected">vide</option>
                                                        @foreach ($lesMissions as $data)
                                                        <option value="{{ $data->id }}"
                                                            {{ old('mission') == $data->id ? 'selected' : '' }}>
                                                            {{ $data->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center pt-0 pb-5">
                                        <button type="reset" class="btn btn-primary text-danger rounded">
                                            Annuler
                                        </button>
                                        <button type="submit" class="btn btn-primary text-success rounded">
                                            Valider
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal pour chaque données --}}
@foreach ($dataJour as $dataSelected)
    <div class="modal fade" id="modal_detail{{$dataSelected->idPointage}}" tabindex="-1" aria-labelledby="modal_detail{{$dataSelected->idPointage}}"
    aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-xl-down">
            <div class="modal-content shadow-soft">
                <div class="modal-header">
                    <button type="button" class="close ml-auto" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body px-6">
                    <div class="py-3">
                        <div class="col">
                            
                            <div class="nav-wrapper position-relative mb-4">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-detail-{{$dataSelected->idPointage}}" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="graph-tab" data-bs-toggle="tab"
                                        href="#graph{{$dataSelected->idPointage}}" role="tab" aria-controls="graph" aria-selected="true">
                                            <i class="fas fa-chart-area"></i>
                                            Graphique
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="maj-tab" data-bs-toggle="tab"
                                        href="#maj{{$dataSelected->idPointage}}" role="tab" aria-controls="maj" aria-selected="false">
                                            <i class="fas fa-sync-alt"></i>
                                            Mise à jour
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 del ceBTN{{$dataSelected->idPointage}}" id="suppression-tab" data-bs-toggle="tab"
                                        href="#suppression{{$dataSelected->idPointage}}" role="tab" aria-controls="suppression" aria-selected="false">
                                            <i class="fas fa-calendar-times"></i>
                                            Supprimer
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card shadow-inset bg-primary border-light p-4 rounded">
                                <div class="card-body p-0">
                                    {{-- --}}
                                    <div class="tab-content" id="tabdetail{{$dataSelected->idPointage}}">
                                        {{-- --}}
                                        <div class="tab-pane fade show active" id="graph{{$dataSelected->idPointage}}" role="tabpanel"
                                        aria-labelledby="graph-tab" tabindex="0">
                                            Bientôt
                                        </div>
                                        {{-- --}}
                                        <div class="tab-pane fade show" id="maj{{$dataSelected->idPointage}}" role="tabpanel"
                                        aria-labelledby="maj-tab" tabindex="0">
                                            <form method="POST" action="{{ route('edition-Pointage') }}" class="card bg-primary shadow-soft border-light">
                                                @csrf

                                                <input class="form-control" type="hidden" value="{{ $dataSelected->idPointage }}" name="pointage">
                                                
                                                <div class="card-body px-5">
                                                    <div class="row">
                                                        {{-- Journée debut --}}
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="date_debut_journee">Début journée</label>
                                                                <div class="input-group mb-4">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <span class="far fa-calendar-alt"></span>
                                                                        </span>
                                                                    </div>
                                                                    <input class="form-control datepicker" type="text" id="date_debut_journee"
                                                                    name="date_debut_journee" value="{{$dataSelected->debut_journee}}" required autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Journée fin --}}
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label for="date_fin_journee">Fin journée</label>
                                                                <div class="input-group mb-4">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <span class="far fa-calendar-alt"></span>
                                                                        </span>
                                                                    </div>
                                                                    <input class="form-control datepicker" type="text" id="date_fin_journee"
                                                                    name="date_fin_journee" value="{{$dataSelected->fin_journee}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        {{-- Mission --}}
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="my-1 mr-2" for="mission">Mission/Vacation</label>
                                                                <select class="custom-select my-1 mr-sm-2" id="mission" name="mission">
                                                                    @foreach ($lesMissions as $data)
                                                                    <option value="{{ $data->id }}"
                                                                        {{ $dataSelected->idPointage == $data->id ? 'selected' : '' }}>
                                                                        {{ $data->nom }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center pt-0 pb-5">
                                                    <button type="reset" class="btn btn-primary text-danger rounded">
                                                        Annuler
                                                    </button>
                                                    <button type="submit" class="btn btn-primary text-success rounded">
                                                        Valider
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- --}}
                                        <div class="tab-pane fade show text-center" id="suppression{{$dataSelected->idPointage}}" role="tabpanel"
                                        aria-labelledby="suppression-tab" tabindex="0">
                                            <p>Voulez vous supprimer <b>définitivement</b> la mission du {{ $dataSelected->debut_journee }} ?</p>
                                            <p class="twinkling">Un retour en arrière ne sera pas possible</p>
                                            <div class="progressBar">
                                                <div class="bar"></div>
                                            </div>
                                            <form method="POST" action="{{ route('suppression-Pointage') }}">
                                                @csrf

                                                <input class="form-control" type="hidden" value="{{ $dataSelected->idPointage }}" name="pointage">

                                                <button type="button" class="btn btn-primary rounded" data-bs-dismiss="modal">
                                                    Annuler
                                                </button>
                                                <button type="submit" class="btn btn-primary text-danger rounded ceBTN{{$dataSelected->idPointage}}" disabled="disabled">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer z-2 mx-auto text-center">
                    <p class="text-gray">{{$dataSelected->nom}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection