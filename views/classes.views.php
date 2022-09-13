<?php
$title = "Classes";
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
require_once 'functions/ajout_cours.php';
$elements = matiere_et_heure($_SESSION["user"]["id"]);

?>


<div>
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <!-- <a href="partials/apps-calendar.php"><button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span><i class="fa fa-book mr-2"></i> Cahier de texte</span></button></a> -->
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span><i class="fa fa-book mr-2"></i> Cahier de texte</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-chart-line me-2"></i>Statistiques Evaluations</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Commentaires</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-saisie-tab" data-bs-toggle="pill" data-bs-target="#pills-saisie" type="button" role="tab" aria-controls="pills-saisie" aria-selected="false">saisir</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="bg-light rounded h-100 p-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?=$elements[$num]['nom_matiere'].' |' .$elements[$num]['nom_classe']?></button>
                                </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                          <?php include "affichage_cahier.php";?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Autres
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="pr-1 mb-3 mr-2 mb-xl-0">
                                                            <button type="button" class="btn btn-warning bg-white btn-icon-text border"><i class="fa-solid fa-arrow-up-from-bracket" aria-hidden="true"></i>Importer votre
                                                                signature</button>
                                                        </div>
                                                        <div class="pr-1 mb-3 mb-xl-0">
                                                            <button type="button" class="btn btn-warning bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>Info</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                  Evaluation
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea sea sit sanctus magna gubergren kasd, magna justo ea lorem
                                                        lorem. Elitr aliquyam ipsum clita consetetur duo at nonumy
                                                        invidunt, invidunt eos dolore vero sit amet amet magna tempor
                                                        clita, takimata diam justo stet erat et vero erat. Sit ipsum
                                                        eirmod sea ut vero dolores sea clita nonumy, no.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                       Travaux dirigés
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea sea sit sanctus magna gubergren kasd, magna justo ea lorem
                                                        lorem. Elitr aliquyam ipsum clita consetetur duo at nonumy
                                                        invidunt, invidunt eos dolore vero sit amet amet magna tempor
                                                        clita, takimata diam justo stet erat et vero erat. Sit ipsum
                                                        eirmod sea ut vero dolores sea clita nonumy, no.
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Activités d'intégration
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea sea sit sanctus magna gubergren kasd, magna justo ea lorem
                                                        lorem. Elitr aliquyam ipsum clita consetetur duo at nonumy
                                                        invidunt, invidunt eos dolore vero sit amet amet magna tempor
                                                        clita, takimata diam justo stet erat et vero erat. Sit ipsum
                                                        eirmod sea ut vero dolores sea clita nonumy, no.
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
               
                            <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                Sit consetetur eirmod lorem ea magna sadipscing ipsum elitr invidunt, dolores lorem erat
                                ipsum ut
                                aliquyam
                                eos lorem sed. Nonumy aliquyam ea justo eos dolores dolores duo dolores. Aliquyam dolor
                                sea dolores sit
                                takimata no erat vero. At lorem justo tempor lorem duo, stet kasd aliquyam ipsum
                                voluptua labore at.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    Invidunt rebum voluptua lorem eirmod dolore. Amet no sed sanctus lorem ea. Nonumy sit stet sit
                    magna. Rebum rebum ipsum clita erat consetetur, sit dolor sit clita et amet. Est et clita dolore
                    takimata, sea dolores tempor erat consetetur lorem. Consetetur sea sadipscing dolor et dolores et
                    stet, tempor elitr.
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="col-md-12 mt-5">
                        <span class="label label-info">Commentaires</span>
                        <textarea id="basic-example"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-saisie" role="tabpanel" aria-labelledby="pills-saisie-tab">
         <?php include "cours.php";?>
         <div class="tab-pane fade active show" id="nav-saisie" role="tabpanel" aria-labelledby="nav-saisie-tab">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                          
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Autres
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="pr-1 mb-3 mr-2 mb-xl-0">
                                                            <button type="button" class="btn btn-warning bg-white btn-icon-text border"><i class="fa-solid fa-arrow-up-from-bracket" aria-hidden="true"></i>Importer votre
                                                                signature</button>
                                                        </div>
                                                        <div class="pr-1 mb-3 mb-xl-0">
                                                            <button type="button" class="btn btn-warning bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>Info</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Evaluation
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                             <?php include "evaluation.php";?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Travaux dirigés
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea sea sit sanctus magna gubergren kasd, magna justo ea lorem
                                                        lorem. Elitr aliquyam ipsum clita consetetur duo at nonumy
                                                        invidunt, invidunt eos dolore vero sit amet amet magna tempor
                                                        clita, takimata diam justo stet erat et vero erat. Sit ipsum
                                                        eirmod sea ut vero dolores sea clita nonumy, no.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Activités d'intégrations
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea sea sit sanctus magna gubergren kasd, magna justo ea lorem
                                                        lorem. Elitr aliquyam ipsum clita consetetur duo at nonumy
                                                        invidunt, invidunt eos dolore vero sit amet amet magna tempor
                                                        clita, takimata diam justo stet erat et vero erat. Sit ipsum
                                                        eirmod sea ut vero dolores sea clita nonumy, no.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                </div>
        
            </div>



        </div>
    </div>
</div>

<?php include "partials/_footer.php" ?>