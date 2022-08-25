<?php
$title = "Profil Utilisateur";
include "partials/_header.php";
include "partials/_sidebar_censeur.php";
include "partials/_nav_censeur.php";
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span>
                </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class='row'>
                <div class="col-md-11 border-right">
                    <div class="card p-3 py-4">
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <h4 class=" text-right">Paramètres de l'Utilisateur</h4>
                        </div>
                        <button class="btn btn-info col-md-3">
                            Modifier votre Profil
                        </button>
                        <div class="col-md-8">
                            <div class=" mb-4">
                                <!-- <h5 class="card-header">Basic</h5> -->
                                <div class="card-body demo-vertical-spacing demo-only-element py-4">
                                    <div class="input-group">
                                        <span class="input-group-text " id="basic-addon11">@</span>
                                        <input type="text" class="form-control" placeholder="Email"
                                            aria-label="Username" aria-describedby="basic-addon11" />
                                    </div>

                                    <div class="form-text-toggle py-3">
                                        <label class="form-label" for="basic-default-password12">Nom et Prenom</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control disabled" id="basic-default-password12"
                                                placeholder="AMOUGOU Olivier"
                                                aria-describedby="basic-default-text" />
                                            <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                        </div>
                                    </div>

                                    <div class="form-password-toggle py-2">
                                        <label class="form-label" for="basic-default-password12">Mot de Passe</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="basic-default-password12"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="basic-default-password2" />
                                            <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></span>

                                        </div>
                                    </div>

                                    <button class="btn btn-outline-success my-3">
                                        Enregistrer les Modifications
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>