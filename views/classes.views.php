<?php
$title = "Classes";
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>

<div>
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true"><span><i class="fa fa-book mr-2"></i> Cahier de texte</span></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><i class="fa fa-chart-line me-2"></i>Statistiques Evaluations</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Commentaires</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="bg-light rounded h-100 p-4">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Mathematiques</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Physique</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Informatique</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">SVT</button>
                            </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-light rounded h-100 p-4">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="true" aria-controls="flush-collapseOne">
                                                        Visualiser le cahier
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="col-sm-12 col-xl-6">
                                                            <div class="bg-light rounded h-100 p-4">
                                                                <!-- <h6 class="mb-4">Vertical Navs & Tabs</h6> -->
                                                                <div class="d-flex align-items-start">
                                                                    <div class="nav flex-column nav-pills me-3"
                                                                        id="v-pills-tab" role="tablist"
                                                                        aria-orientation="vertical">
                                                                        <button class="nav-link active"
                                                                            id="v-pills-home-tab" data-bs-toggle="pill"
                                                                            data-bs-target="#v-pills-home" type="button"
                                                                            role="tab" aria-controls="v-pills-home"
                                                                            aria-selected="true">semaine</button>
                                                                        <button class="nav-link"
                                                                            id="v-pills-profile-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#v-pills-profile"
                                                                            type="button" role="tab"
                                                                            aria-controls="v-pills-profile"
                                                                            aria-selected="false">mois</button>
                                                                        <button class="nav-link"
                                                                            id="v-pills-messages-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#v-pills-messages"
                                                                            type="button" role="tab"
                                                                            aria-controls="v-pills-messages"
                                                                            aria-selected="false">trimestre</button>
                                                                        <button class="nav-link"
                                                                            id="v-pills-settings-tab"
                                                                            data-bs-toggle="pill"
                                                                            data-bs-target="#v-pills-settings"
                                                                            type="button" role="tab"
                                                                            aria-controls="v-pills-settings"
                                                                            aria-selected="false">Annee</button>
                                                                    </div>
                                                                    <div class="tab-content" id="v-pills-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="v-pills-home" role="tabpanel"
                                                                            aria-labelledby="v-pills-home-tab">
                                                                            Consetetur at sit est sit ut ipsum clita at.
                                                                            Sit elitr sit sea dolor tempor eos sit, erat
                                                                            diam ea rebum clita no ea. Et amet sed
                                                                            nonumy sadipscing dolor et ut sed et. Stet
                                                                            eirmod est nonumy clita invidunt rebum.
                                                                            Nonumy dolor ut diam invidunt eirmod nonumy
                                                                            sed gubergren,.
                                                                        </div>
                                                                        <div class="tab-pane fade" id="v-pills-profile"
                                                                            role="tabpanel"
                                                                            aria-labelledby="v-pills-profile-tab">
                                                                            Tempor et kasd accusam duo et dolor no
                                                                            accusam dolore, dolor sed voluptua duo no,
                                                                            sit et stet lorem dolor ipsum tempor
                                                                            consetetur vero, consetetur est eos sit
                                                                            eirmod erat diam accusam sadipscing sit.
                                                                            Takimata erat ea eirmod tempor elitr dolore
                                                                            sadipscing kasd justo, elitr tempor sed eos
                                                                            sadipscing magna.
                                                                        </div>
                                                                        <div class="tab-pane fade" id="v-pills-messages"
                                                                            role="tabpanel"
                                                                            aria-labelledby="v-pills-messages-tab">
                                                                            Sed kasd kasd ea clita sed lorem amet tempor
                                                                            est voluptua, labore stet dolores gubergren
                                                                            clita lorem sed nonumy at. Dolores et ut
                                                                            erat voluptua. Est voluptua stet accusam
                                                                            rebum, elitr amet sit takimata sea eirmod.
                                                                            Sanctus elitr amet sit dolore sea stet et
                                                                            ut. Dolor et sanctus elitr ut.
                                                                        </div>
                                                                        <div class="tab-pane fade" id="v-pills-settings"
                                                                            role="tabpanel"
                                                                            aria-labelledby="v-pills-settings-tab">
                                                                            Sit et vero kasd sea et at, aliquyam
                                                                            takimata et et est, labore et takimata sed
                                                                            ut stet sanctus, nonumy dolor invidunt sit
                                                                            labore et, amet et dolor sit dolor tempor et
                                                                            dolor ipsum nonumy, accusam clita sadipscing
                                                                            ut et labore labore est, dolore accusam vero
                                                                            at est sit. Invidunt.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Autres
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingTwo"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="pr-1 mb-3 mr-2 mb-xl-0">
                                                            <button type="button"
                                                                class="btn btn-warning bg-white btn-icon-text border"><i
                                                                    class="fa-solid fa-arrow-up-from-bracket"
                                                                    aria-hidden="true"></i>Importer votre
                                                                signature</button>
                                                        </div>
                                                        <div class="pr-1 mb-3 mb-xl-0">
                                                            <button type="button"
                                                                class="btn btn-warning bg-white btn-icon-text border"><i
                                                                    class="typcn typcn-info-large-outline mr-2"></i>Info</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingThree"
                                                    data-bs-parent="#accordionFlushExample">
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
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                Sanctus vero sit kasd sea gubergren takimata consetetur elitr elitr, consetetur
                                sadipscing takimata
                                ipsum
                                dolores. Accusam duo accusam et labore ea elitr ipsum tempor sit, dolore aliquyam ipsum
                                sit amet sit. Et
                                dolore ipsum labore invidunt rebum. Sed dolore gubergren sanctus vero diam lorem rebum
                                elitr, erat diam
                                dolor clita.
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
            </div>
        </div>
    </div>
</div>
<div>

</div>


<?php include "partials/_footer.php" ?>