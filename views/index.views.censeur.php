
<div class="container" ?>
    <div class=" d-flex justify-content-around flex-wrap">
        <div class="card col-md-6" style="border:none">
            <div class="card-body ">
                <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3"></h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>
                                Nom
                            </th>
                            <th>
                                Progress
                            </th>
                            <th>
                                Deadline
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $db->prepare('SELECT * FROM enseignant');
                            $result = $sql->execute();
                            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($enseignants as $enseignant) {
                                enseig($enseignant['Nom'], "à jour",$enseignant['id']);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card col-md-6 ml-3" style="border:none">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between">
                    <h4 class="card-title mb-3"></h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>
                                Nom
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Deadline
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $db->prepare('SELECT * FROM enseignant');
                            $result = $sql->execute();
                            $enseignants = $sql->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($enseignants as $enseignant) {
                                enseig($enseignant['Nom'], " Pas à jour");
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-around flex-wrap">
    <div class="card col-md-5 mt-3 " style="border:none">
        <div class="d-flex flex-wrap justify-content-between ">
            <h4 class="card-title mb-1"> Tle D </h4>
            <a href="stats_cours.php#tled" class="mb-1">Voir Tout </a>
        </div>
        <div class="mt-3">
            <label for="">Mathematiques</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">SVT</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Informatique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Physique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md-5 mt-3 " style="border:none">
        <div class="d-flex flex-wrap justify-content-between ">
            <h4 class="card-title mb-1"> Tle C </h4>
            <a href="stats_cours.php#tlec" class="mb-1">Voir Tout </a>
        </div>
        <div class="mt-3">
            <label for="">Mathematiques</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">SVT</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Informatique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
        <div class="mt-3">
            <label for="">Physique</label>
            <div class="progress ">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%
                </div>
            </div>
        </div>
    </div>
</div>