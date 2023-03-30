<?php 
include 'config/database.php';
require_once 'functions/ajout_cours.php';
// $elements = matiere_et_heure($_SESSION["user"]["id"]);
?>






<div class="sidebar fond_gris">
    <nav class="navbar  fond_gris">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-white"></i>LOGO</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="assets/images/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="fond_gris rounded-circle border border-2 border-info position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-black"><?= $_SESSION["user"]["Nom"].' '.$_SESSION["user"]["Prenom"] ?></h6>
                <span> 
                        <?php 
                        echo  strtoupper($_SESSION["user"]["table"]);
                        ?>
                </span>
            
            </div>
        </div>
        <div class="navbar-nav w-100">
            <form class="d-none d-md-flex mb-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
            <a href="index.php" class="nav-item nav-link" class="text-white"><i class="fa fa-tachometer-alt me-2 text-black"></i>Tableau de Bord</a>


            <?php if($_SESSION["user"]["table"]==='censeur'): ?>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2 text-black"></i><span class="text-black">Créer</span></a>
                <div class="dropdown-menu fond_gris border-0">
                    <a href="creation_cahier_texte.php" class="dropdown-item text-black">Cahier de texte</a>
                    <a href="Ajout_enseignant.php" class="dropdown-item text-black">Compte enseignant</a>
                    <a href="register_new_class.php" class="dropdown-item text-black">enregistrer une classe</a>
                </div>
            </div>
            <?php endif ?>
            <?php if($_SESSION["user"]["table"]==='parent'): ?>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2 text-black"></i><span class="text-black">enfant(s)</span></a>
            </div>
            <?php endif ?>


            <div class="nav-item dropdown">
                <?php
                    $sql = $db->prepare("SELECT *FROM classes ");
                    $result = $sql->execute();
                    $classes = $sql->fetchAll(PDO::FETCH_ASSOC);
                   
                   
                ?>        
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2 text-black"></i><span class="text-black">Classes</span></a>
                <div class="dropdown-menu fond_gris border-0">
                    
                <!--?php
                     foreach($elements as $classe){ $num = $classe['id_classe'];

                        echo '<a href="classes.php?id='.$num.'" class="dropdown-item text-info">'.$classe['nom_classe'].'</a>' ;
                    
                    } ?>-->
                    
                    <?php
                     foreach($classes as $classe){ $num = $classe['id'];

                        echo '<a href="classes.php?id='.$num.'" class="dropdown-item text-black">'.$classe['nom_classe'].'</a>' ;
                    
                    } ?> 
                </div>
            </div>
            <a href="schedule.php" class="nav-item nav-link text-black"><i class="fa fa-th me-2"></i><span class="text-black">Emploi de temps</span> </a>
            <a href="stats_evaluations.php" class="nav-item nav-link text-black"><i class="fa fa-chart-bar me-2"></i><span class="text-black">Stats - Evaluations</span> </a>
            <a href="profile.php" class="nav-item nav-link text-black"><i class="fa fa-user me-2"></i><span class="text-black">Profil</span></a>

        </div>

<!-- <div class="sidebar bg-dark  pe-4 pb-3">
    <nav class="navbar  navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"></i>LOGO</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="assets/images/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-info position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-info">?= $_SESSION["user"]["Nom"].' '.$_SESSION["user"]["Prenom"] ?></h6>
                <span> 
                        ?php 
                        echo  strtoupper($_SESSION["user"]["table"]);
                        ?>
                </span>
            
            </div>
        </div>
        <div class="navbar-nav w-100">
            <form class="d-none d-md-flex mb-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
            <a href="index.php" class="nav-item nav-link text-success"><i class="fa fa-tachometer-alt me-2 text-success"></i>Tableau de Bord</a>


            ?php if($_SESSION["user"]["table"]==='censeur'): ?>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2 text-info"></i><span class="text-info">Créer</span></a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="creation_cahier_texte.php" class="dropdown-item">Cahier de texte</a>
                    <a href="Ajout_enseignant.php" class="dropdown-item">Compte enseignant</a>
                    <a href="Ajout_matiere.php" class="dropdown-item text-info">Attribuer des matieres a vos enseignant</a>
                </div>
            </div>
            ?php endif ?>


            <div class="nav-item dropdown">
                ?php
                    $sql = $db->prepare("SELECT *FROM classes ");
                    $result = $sql->execute();
                    $classes = $sql->fetchAll(PDO::FETCH_ASSOC);
                   
                   
                ?>        
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2 text-info"></i><span class="text-info">Classes</span></a>
                <div class="dropdown-menu bg-transparent border-0">
                    ?php
                     foreach($elements as $classe){ $num = $classe['id_classe'];

                        echo '<a href="classes.php?id='.$num.'" class="dropdown-item text-info">'.$classe['nom_classe'].'</a>' ;
                    
                    } ?>
                </div>
            </div>
            <a href="schedule.php" class="nav-item nav-link text-info"><i class="fa fa-th me-2"></i>Emploi de temps</a>
            <a href="stats_evaluations.php" class="nav-item nav-link text-info"><i class="fa fa-chart-bar me-2"></i>Stats - Evaluations</a>
            <a href="profile.php" class="nav-item nav-link text-info"><i class="fa fa-user me-2"></i>Profil</a>

        </div> -->
    </nav>
</div>
<!-- Sidebar End -->