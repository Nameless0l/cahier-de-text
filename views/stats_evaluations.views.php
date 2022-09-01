<?php
$title = "Statistiques | Evaluations";
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
?>

<div class="container d-flex justify-content-around flex-wrap">

    <div class="card col-md-5 mt-3 " style="border:none" id="tled">
        <div class="card col-md-12 mt-3 " style="border:none">
            <div class="d-flex flex-wrap justify-content-between ">
                <h4 class="card-title mb-1"> Tle D </h4>
                <a href="stats_cours.php#tled" class="mb-1">Voir Tout </a>
            </div>
            <div class='row'>
                <div class="card col-5 mt-3 p-3 mx-2 stats_cours">
                    <label for="">
                        <h6>Mathematiques </h6> M. ********
                    </label>
                    <div id="donut-chart"></div>
                    <h3 class="card-title mb-2">$12,628</h3>
                    <small class="text-success fw-semibold"><i class="fa-solid fa-arrow-up"></i> +72.80%</small>
                </div>
                <div class="card col-5 mt-3 p-3 mx-2 stats_cours">
                    <label for="">
                        <h6>Mathematiques </h6> M. ********
                    </label>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                        </div>
                    </div>
                </div>
                <div class="card col-5 mt-3 p-3 mx-2 stats_cours">
                    <label for="">
                        <h6>Mathematiques </h6> M. ********
                    </label>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                        </div>
                    </div>
                </div>
                <div class="card col-5 mt-3 p-3 mx-2 stats_cours">
                    <label for="">
                        <h6>Mathematiques </h6> M. ********
                    </label>
                    <div class="progress ">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">

                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="fa-solid fa-arrow-up"></i> +72.80%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>