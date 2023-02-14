@extends('layouts.tb_app')
@section('content')
<div class="section section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mt-5 mb-5"><span class="font-weight-bold">Tab With Icons</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="nav-wrapper position-relative mb-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                data-bs-toggle="tab"
                                href="#tabs-icons-text-1"
                                role="tab" aria-controls="tabs-icons-text-1" aria-selected="false">
                                <i class="fas fa-tint"></i>Journalier
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab"
                                data-bs-toggle="tab"
                                href="#tabs-icons-text-2"
                                role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                                <i class="fas fa-bug"></i>Semaine
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0"
                                id="tabs-icons-text-3-tab" data-bs-toggle="tab"
                                href="#tabs-icons-text-3"
                                role="tab" aria-controls="tabs-icons-text-3" aria-selected="true">
                                <i class="fas fa-user-astronaut"></i>Mensuel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0"
                                id="tabs-icons-text-3-tab" data-bs-toggle="tab"
                                href="#tabs-icons-text-3"
                                role="tab" aria-controls="tabs-icons-text-3" aria-selected="true">
                                <i class="fas fa-user-astronaut"></i>Annuel
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card shadow-inset bg-primary border-light p-4 rounded">
                    <div class="card-body p-0">
                        <div class="tab-content" id="tabcontent2">

                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                    sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                    proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                    Pinterest in do umami readymade swag.</p>
                                <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                    married his account removal. Estimable me disposing of be moonlight
                                    cordially curiosity.</p>
                            </div>

                            <div class="tab-pane fade show" id="tabs-icons-text-2" role="tabpanel"
                                aria-labelledby="tabs-icons-text-2-tab">
                                <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                    beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                    chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest
                                    in do umami readymade swag.</p>
                                <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                    married his account removal. Estimable me disposing of be moonlight
                                    cordially curiosity.</p>
                            </div>

                            <div class="tab-pane fade show" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan
                                    sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips
                                    proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                                    Pinterest in do umami readymade swag.</p>
                                <p>Day handsome addition horrible sensible goodness two contempt. Evening for
                                    married his account removal. Estimable me disposing of be moonlight
                                    cordially curiosity.</p>
                            </div>

                            <div class="tab-pane fade show" id="tabs-icons-text-3" role="tabpanel"
                                aria-labelledby="tabs-icons-text-3-tab">
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
@endsection