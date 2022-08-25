<?php
$title = "Emploi de temps";
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
include "functions/affichage_cahier.php";

?>

<div class="container-xxl flex-grow-1 container-p-y py-5 my-4 ">
    <!-- <h4 class="fw-bold "><span class="text-muted fw-light">UI elements /</span> Offcanvas</h4> -->

    <div class="col-sm-12 col-xl-12">
        <div class=" rounded h-100 p-4">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">6e A</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">6e B</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">6e C</button>
                </div>
            </nav>
            <div class="tab-content pt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="">
                        <h5 class="card-header">Emploi de Temps</h5>
                        <div class="card-body">
                            <div class="row gy-3">

                                <!-- Enable Scrolling & Backdrop Offcanvas -->
                                <div class="col-lg-12 col-md-12">
                                    <!-- <small class="text-light fw-semibold mb-3">Enable Scrolling & Backdrop</small> -->
                                    <div class="mt-3">
                                        <table class="col-lg-10 col-sm-12 col-md-12 table-bordered table-striped">
                                            <thead>
                                                <th>Lundi</th>
                                                <th>Mardi</th>
                                                <th>Mercredi</th>
                                                <th>Jeudi</th>
                                                <th>Vendredi</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <button style='border:none; background-color: white;'
                                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth"
                                                            aria-controls="offcanvasBoth">
                                                            Francais
                                                        </button>
                                                        <div class="offcanvas offcanvas-end" data-bs-scroll="true"
                                                            tabindex="-1" id="offcanvasBoth"
                                                            aria-labelledby="offcanvasBothLabel">
                                                            <div class="offcanvas-header">
                                                                <h5 id="offcanvasBothLabel" class="offcanvas-title">
                                                                    Contenu du cours
                                                                </h5>
                                                                <button type="button" class="btn-close text-reset"
                                                                    data-bs-dismiss="offcanvas"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body  mx-0 flex-grow-0">
                                                                <div style='border-left: 3px solid red' class="px-3">
                                                                    <strong>FRANCAIS</strong><br>
                                                                    <small>Mme DUPAS M. <br>
                                                                        lundi 30 sept. de 07h30 à 08h25
                                                                    </small>
                                                                </div>
                                                                <div class="px-3">
                                                                    <embed src=document/DataCamp01.pdf width=800
                                                                        height=500 type='application/pdf' />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Sanctus vero sit kasd sea gubergren takimata consetetur elitr elitr, consetetur
                    sadipscing takimata
                    ipsum dolores. Accusam duo accusam et labore ea elitr ipsum tempor sit, dolore
                    aliquyam ipsum sit
                    amet sit. Et dolore ipsum labore invidunt rebum. Sed dolore gubergren sanctus
                    vero diam lorem rebum
                    elitr, erat diam dolor clita.
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Sit consetetur eirmod lorem ea magna sadipscing ipsum elitr invidunt, dolores
                    lorem erat ipsum ut
                    aliquyam eos lorem sed. Nonumy aliquyam ea justo eos dolores dolores duo
                    dolores. Aliquyam dolor sea
                    dolores sit takimata no erat vero. At lorem justo tempor lorem duo, stet kasd
                    aliquyam ipsum
                    voluptua labore at.
                </div>
            </div>
        </div>
    </div>



    <!-- <td>
                                        <button style='border:none; background-color: white;' type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                                            Enable both scrolling & backdrop
                                        </button>
                                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                                            id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both
                                                    scrolling &
                                                    backdrop
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button style='border:none; background-color: white;' type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                                            Enable both scrolling & backdrop
                                        </button>
                                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                                            id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both
                                                    scrolling &
                                                    backdrop
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button style='border:none; background-color: white;' type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                                            Enable both scrolling & backdrop
                                        </button>
                                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                                            id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both
                                                    scrolling &
                                                    backdrop
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button style='border:none;background-color: white;' type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                                            Enable both scrolling & backdrop
                                        </button>
                                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                                            id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both
                                                    
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                Text
                                            </div>
                                        </div>
                                    </td> -->




<?php include "partials/_footer.php"; ?>