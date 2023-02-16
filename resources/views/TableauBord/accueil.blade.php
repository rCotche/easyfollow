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
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                        role="tablist">
                        {{-- resume --}}
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="resume-tab"
                                data-bs-toggle="tab"
                                href="#resume"
                                role="tab" aria-controls="resume" aria-selected="false">
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
                        <div class="tab-content" id="tabcontent2">

                            {{-- resume-tab --}}
                            <div class="tab-pane fade show active" id="resume" role="tabpanel"
                            aria-labelledby="resume-tab">
                            
                                {{-- visuel --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mt-5 mb-5"><span class="font-weight-bold">Informations</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="nav-wrapper position-relative mb-4">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                                    role="tablist">
                                                    {{-- journalier --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="journalier-tab"
                                                            data-bs-toggle="tab"
                                                            href="#journalier"
                                                            role="tab" aria-controls="journalier" aria-selected="false">
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
                                                            role="tab" aria-controls="mensuel" aria-selected="true">
                                                            <i class="fas fa-calendar-alt"></i>Mensuel
                                                        </a>
                                                    </li>
                                                    {{-- annuel --}}
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0"
                                                            id="annuel-tab" data-bs-toggle="tab"
                                                            href="#annuel"
                                                            role="tab" aria-controls="annuel" aria-selected="true">
                                                            <i class="fas fa-calendar"></i>Annuel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card shadow-inset bg-primary border-light p-4 rounded">
                                                <div class="card-body p-0">
                                                    <div class="tab-content" id="tabcontent2">

                                                        {{-- journalier-tab --}}
                                                        <div class="tab-pane fade show active" id="journalier" role="tabpanel"
                                                            aria-labelledby="journalier-tab">
                                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                                                sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                                                proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                                                Pinterest in do umami readymade swag.</p>
                                                            <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                                                married his account removal. Estimable me disposing of be moonlight
                                                                cordially curiosity.</p>
                                                        </div>

                                                        {{-- hebdomadaire-tab --}}
                                                        <div class="tab-pane fade show" id="hebdomadaire" role="tabpanel"
                                                            aria-labelledby="hebdomadaire-tab">
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
                                                            aria-labelledby="mensuel-tab">
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
                                                            aria-labelledby="annuel-tab">
                                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                                                sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                                                proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                                                Pinterest in do umami readymade swag.</p>
                                                            <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                                                married his account removal. Estimable me disposing of be moonlight
                                                                cordially curiosity.</p>
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
                            aria-labelledby="add-vacation-tab">
                                <form method="POST" action="{{ route('login') }}" class="card bg-primary shadow-soft border-light">
                                    @csrf
                                    
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="date_debut_matin">Email</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_debut_matin"
                                                        name="date_debut_matin" :value="old('date_debut_matin')" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="date_debut_matin">Email</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_debut_matin"
                                                        name="date_debut_matin" :value="old('date_debut_matin')" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="date_debut_matin">Email</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_debut_matin"
                                                        name="date_debut_matin" :value="old('date_debut_matin')" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="date_debut_matin">Email</label>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <span class="far fa-calendar-alt"></span>
                                                            </span>
                                                        </div>
                                                        <input class="form-control datepicker" type="text" id="date_debut_matin"
                                                        name="date_debut_matin" :value="old('date_debut_matin')" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer text-center pt-0 pb-5">
                                        <button type="reset" class="btn btn-primary rounded">
                                            Annuler
                                        </button>
                                        <button type="submit" class="btn btn-success rounded">
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
@endsection