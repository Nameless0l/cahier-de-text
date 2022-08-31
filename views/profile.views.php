<?php
session_start();
$Nom = $_SESSION["user"]["Nom"];
$Prenom = $_SESSION["user"]["Prenom"] ;

$email =$_SESSION["user"]["email"]  ;
$password = $_SESSION["user"]["mot_de_pass"];

$matricule = $_SESSION["user"]["matricule"];
$ville = $_SESSION["user"]["ville"];
$quartier = $_SESSION["user"]["quartier"];

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
                    class="font-weight-bold"><?=$Nom.' '.$Prenom?></span><span class="text-black-50"><?=$email?></span><span>
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
                            <form class=" mb-4" method = 'post'>
                                <!-- <h5 class="card-header">Basic</h5> -->

                                <div class="card-body demo-vertical-spacing demo-only-element py-4">
                                    <div class='row'>
                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Matricule</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="<?=$matricule?>" aria-describedby="basic-default-text" name='matricule' disabled />
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
                                                    value="6 99 99 99 99" aria-describedby="basic-default-text" name='telephone' />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>
                                    </div>

                                    <div class='row mb-3'>
                                        <div class="form-text-toggle col-md-6">
                                            <label class="form-label" for="basic-default-password12">Nom</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="<?=$Nom?>" aria-describedby="basic-default-text" disabled name='nom'/>
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>

                                        <div class="form-text-toggle  col-md-6">
                                            <label class="form-label" for="basic-default-password12">Prenom</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="<?=$Prenom?>" aria-describedby="basic-default-text" name='prenom' />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group py-3 pt-3">
                                        <span class="input-group-text " id="basic-addon11">@</span>
                                        <input type="text" class="form-control" value="<?=$email?>" aria-label="Username"
                                            aria-describedby="basic-addon11" name='email' />
                                    </div>


                                    <div class="form-password-toggle py-2">
                                        <label class="form-label" for="basic-default-password12">Mot de Passe</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password"
                                                value='<?=$password?>'
                                                aria-describedby="basic-default-password2" name='password'/>
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
                                                    value="<?=$ville?>" aria-describedby="basic-default-text" name='ville' />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>

                                        <div class="form-text-toggle py-3 col-md-6">
                                            <label class="form-label" for="basic-default-password12">Quartier</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control " id="basic-default-password12"
                                                    value="<?=$quartier?>" aria-describedby="basic-default-text" name='quartier' />
                                                <!-- <span id="basic-default-password2"
                                                class="input-group-text cursor-pointer"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></span> -->

                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-outline-success my-3" name = 'updateProfile'>
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