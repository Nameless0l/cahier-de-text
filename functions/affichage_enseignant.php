<?php
include 'config/database.php';

function enseignant($nom, $profession, $email)
{
    echo '
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>' . $nom . '</h4>
                                <p class="text-muted">' . $profession . '<span>| </span><span><a href="#" class="text-pink">' . $email . '</a></span></p>
                            </div>
                            <button  class="btn btn-warning mt-3 btn-rounded waves-effect w-md waves-light col-md-6 mx-auto">Notifier</button>
                        </div>
                </div>
            </div>
        ';
}


if (!empty($_POST)) {
  $error='Veillez remplir tout les champs';
  if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["matricule"])
    && !empty($_POST["nom"]) && !empty($_POST["matricule"]) && !empty($_POST["prenom"])
  ) {
    SendMesg((int)$_SESSION["user"]["id"],(int)$_POST["id"],$_SESSION["user"]["Nom"],$_POST["message"],$_SESSION["user"]["table"]);
   
  } else {
    die('formulaire incomplet');
  }
}

function enseig($nom, $update)
{
    echo '
    <tr>
    <td>
        <div class="d-flex">
            <img class="img-sm rounded-circle mb-md-0 mr-2" src="assets/images/user.jpg" alt="profile image">
            <div>
                <div class="font-weight-bold mt-1">' . $nom . '</div>
            </div>
        </div>
    </td>
    <td>
        <div class="font-weight-bold text-danger  mt-1">Cahier de Texte ' . $update . '
        </div>
    </td>
    <td>    
        <div class="font-weight-bold  mt-1">07 Nov 2022</div>
    </td>
    <td> 
    
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Notifier</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Envoyer la notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3 needs-validation" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Entrer l\'id de l\'enseignant:</label>
            <input type="number" name="id" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Entrer votre message</label>
            <textarea class="form-control" name="message" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer le message</button>
      </div>
    </div>
  </div>
</div>  
    </td>
    </tr>
';
}
