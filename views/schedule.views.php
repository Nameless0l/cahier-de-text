<?php
$title = "Emploi de temps";
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
include "functions/affichage_cahier.php";

?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Offcanvas</h4>



    <div class="card">
        <h5 class="card-header">Backdrop</h5>
        <div class="card-body">
            <div class="row gy-3">

                <!-- Enable Scrolling & Backdrop Offcanvas -->
                <div class="col-lg-12 col-md-12">
                    <!-- <small class="text-light fw-semibold mb-3">Enable Scrolling & Backdrop</small> -->
                    <div class="mt-3">
                        <table>
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
                                        <button style='border:none; background-color: white;'  data-bs-toggle="offcanvas"
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
                                                    <!-- scrolling &
                                                    backdrop -->
                                                </h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                <!-- Text -->
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


    <?php include "partials/_footer.php"; ?>