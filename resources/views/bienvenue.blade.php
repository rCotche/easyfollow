@extends('layouts.my_app')
@section('content')
<div class="section section-header pb-7" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Easy Follow</h1>
                <p class="lead mb-5">
                    Votre application de pointage crossplatform (mobile, desktop, web).
                    Avec une interface intuitive elle permet de suivre ses heures de travail et ses gains
                    obtenus.
                </p>
                <a class="btn btn-primary" href="#">
                    <span class="fas fa-play mr-2"></span>Commencez !
                </a>
            </div>
        </div>
    </div>
</div>

<section class="section section-lg pt-0" id="feature">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card bg-primary shadow-soft border-light p-4">
                    <div class="row">
                        <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                            <div class="card-body text-center bg-primary py-5">
                                <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3"><span
                                        class="far fa-eye"></span></div>
                                <h2 class="h4 mr-2">Visualisation</h2>
                                <p class="mb-0">
                                    Le public visé sont les intérimaires et/ou les travailleurs indépendants, afin qu'ils
                                    puissent avoir un suivi mensuel et hebdomadaire exact de leur temps de travail, ainsi
                                    que le taux horaire associé, lors des différentes missions/vacations auxquelles ils
                                    sont affectés.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                            <div class="card-body text-center bg-primary py-5">
                                <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3"><span
                                        class="fas fa-calendar-week"></span></div>
                                <h2 class="h4 mr-2">Calendrier</h2>
                                <p class="mb-0">
                                    Avec un calendrier à l'intérieur, ils auront la possibilité de saisir, modifier et observer
                                    les intervalles de leurs heures de travail pour chaque mois en consultant les détails.
                                    A travers un graphique les utilisateurs auront la possibilité de voir leurs heures de
                                    travail ou gains mensuels et annuels.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 px-md-0">
                            <div class="card-body text-center bg-primary py-5">
                                <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3"><span
                                        class="fas fa-file-export"></span></div>
                                <h2 class="h4 mr-2">Exportation</h2>
                                <p class="mb-0">
                                    L'exportation des données mensuelles se fera au format PDF.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg pt-0" id="stat">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4"><span
                            class="far fa-smile-beam"></span></div>
                    <h3 class="h5">Membres</h3><span class="counter display-3 text-gray d-block">500</span>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4"><span
                            class="far fa-eye"></span></div>
                    <h3 class="h5">Projets</h3><span
                        class="counter display-3 text-gray d-block">2400</span>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4"><span
                            class="fas fa-globe-europe"></span></div>
                    <h3 class="h5">Pays</h3><span class="counter display-3 text-gray d-block">80</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg pt-0" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <i class="fas fa-user fa-7x card-img-top shadow-soft p-2 
                        border border-light rounded-circle"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">John Doe</h3><span
                            class="h6 font-weight-normal text-gray mb-3">Co-fondateur</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
                            <li><a href="#"
                                    target="_blank" aria-label="facebook social link"
                                    class="icon icon-xs icon-facebook mr-3"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="twitter social link"
                                    class="icon icon-xs icon-twitter mr-3"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="slack social link"
                                    class="icon icon-xs icon-slack mr-3"><span
                                        class="fab fa-slack-hash"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="dribbble social link"
                                    class="icon icon-xs icon-dribbble mr-3"><span
                                        class="fab fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <i class="fas fa-user fa-7x card-img-top shadow-soft p-2 
                        border border-light rounded-circle"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">Elodie Dieloe</h3><span
                            class="h6 font-weight-normal text-gray mb-3">Spécialiste en marketing</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
                            <li><a href="#"
                                    target="_blank" aria-label="facebook social link"
                                    class="icon icon-xs icon-facebook mr-3"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="twitter social link"
                                    class="icon icon-xs icon-twitter mr-3"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="slack social link"
                                    class="icon icon-xs icon-slack mr-3"><span
                                        class="fab fa-slack-hash"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="dribbble social link"
                                    class="icon icon-xs icon-dribbble mr-3"><span
                                        class="fab fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <i class="fas fa-user fa-7x card-img-top shadow-soft p-2 
                        border border-light rounded-circle"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">David Dijoux</h3><span
                            class="h6 font-weight-normal text-gray mb-3">Développeur web</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
                            <li><a href="#"
                                    target="_blank" aria-label="facebook social link"
                                    class="icon icon-xs icon-facebook mr-3"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="twitter social link"
                                    class="icon icon-xs icon-twitter mr-3"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="slack social link"
                                    class="icon icon-xs icon-slack mr-3"><span
                                        class="fab fa-slack-hash"></span></a></li>
                            <li><a href="#"
                                    target="_blank" aria-label="dribbble social link"
                                    class="icon icon-xs icon-dribbble mr-3"><span
                                        class="fab fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection