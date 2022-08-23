<?php
$title = "Emploi de temps";
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Offcanvas</h4>

    <div class="card mb-4">
        <h5 class="card-header">Placements</h5>
        <div class="card-body">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6">
                    <small class="text-light fw-semibold mb-3">Enable Scrolling & Backdrop</small>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">
                            Enable both scrolling & backdrop
                        </button>
                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth"
                            aria-labelledby="offcanvasBothLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both scrolling & backdrop
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                <p class="text-center">
                                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying
                                    out print,
                                    graphic or web designs. The passage is attributed to an unknown typesetter in
                                    the 15th
                                    century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et
                                    Malorum
                                    for use in a type specimen book.
                                </p>
                                <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                                <button type="button" class="btn btn-outline-secondary d-grid w-100"
                                    data-bs-dismiss="offcanvas">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>