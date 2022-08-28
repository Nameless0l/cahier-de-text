<?php
session_start();

$title = "Profil Utilisateur";
include 'partials/_header.php';
include "partials/_sidebar.php";
include "partials/_nav.php";
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold"><?=$_SESSION["user"]["Nom"].' '.$_SESSION["user"]["Prenom"] ?></span><span class="text-black-50"><?=$_SESSION["user"]["email"] ?></span><span>
                </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class='row'>
                <div class="col-md-11 border-right">
                    <div class="card p-3 py-4">
                        <div class="card-header d-flex justify-content-between align-items-center mb-3">
                            <h4 class=" text-right">Paramètres de l'Utilisateur</h4>
                        </div>
                        <button class="btn btn-info col-md-3" id='updateProfile'>
                            Modifier votre Profil
                        </button>
                        <div class="col-md-8 " id='infoProfil'>
                            <form class=" mb-4">
                                <!-- <h5 class="card-header">Basic</h5> -->


                                <div class="card-body demo-vertical-spacing demo-only-element py-4">
                                    <div class='row'>
                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Matricule</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="21P485" aria-describedby="basic-default-text" disabled />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>

                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Numero de
                                                Telephone</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="6 99 99 99 99" aria-describedby="basic-default-text" />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text " id="basic-addon11">@</span>
                                        <input type="text" class="form-control" value="maffonatacha@gmail.com" aria-label="Username"
                                            aria-describedby="basic-addon11" />
                                    </div>

                                    <div class="form-text-toggle py-3">
                                        <label class="form-label" for="basic-default-password12">Nom et Prenom</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control " id="basic-default-password12"
                                                value="AMOUGOU Olivier" aria-describedby="basic-default-text" />
                                            <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                        </div>
                                    </div>

                                    <div class="form-password-toggle py-2">
                                        <label class="form-label" for="basic-default-password12">Mot de Passe</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password"
                                                value="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="basic-default-password2" />
                                            <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i class="fa fa-eye-slash"
                                                    id="togglePassword"></i></span>

                                        </div>
                                    </div>


                                    <div class='row'>

                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Ville</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="Yaounde" aria-describedby="basic-default-text" />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>

                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Quartier</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="Bastos" aria-describedby="basic-default-text" />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-outline-success my-3">
                                        Enregistrer les Modifications
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
include "partials/_footer.php";
?>