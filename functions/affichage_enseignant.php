<?php
include 'config/database.php';



function enseignant($nom, $profession, $email){
    echo '
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4>'.$nom.'</h4>
                            <p class="text-muted">'.$profession.'<span>| </span><span><a href="#" class="text-pink">'.$email.'</a></span></p>
                        </div>
                        <button type="button" class="btn btn-warning mt-3 btn-rounded waves-effect w-md waves-light">Notifier</button>
                    </div>
                </div>
            </div>
        ';
}