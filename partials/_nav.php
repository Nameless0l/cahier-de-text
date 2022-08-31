<!-- Content Start -->
<!--  -->

<div class="content">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item  d-none d-lg-flex">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Emploi de Temps</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Niveau 1</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="classes.php" class="dropdown-item text-info">6ieme</a>
                                    <a href="#" class="dropdown-item text-info">5ieme</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Niveau 2</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="classes.php" class="dropdown-item text-info">4ieme</a>
                                    <a href="#" class="dropdown-item text-info">3ieme</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Niveau 3</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="classes.php" class="dropdown-item text-info">2nde</a>
                                    <a href="#" class="dropdown-item text-info">1ere</a>
                                    <a href="#" class="dropdown-item text-info">Tle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item  d-none d-lg-flex">
                    <a class="nav-link" href="stats_cours.php">
                        Statistiques
                    </a>
                </li>
                <?php if($_SESSION["user"]["table"]==='censeur'): ?>
                <li class="nav-item  d-none d-lg-flex">
                    <a class="nav-link" href="teacher.php">
                        Enseignants
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="assets/images/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">Hi, <?= $_SESSION["user"]["Nom"] ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    <a href="profile.php" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="deconnexion.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->






    <!--  -->