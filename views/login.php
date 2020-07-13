<?php
    if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    $loginUser = new UsersController();
    $loginUser->auth();
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Connexion
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <input autocomplete="off" type="text" class="form-control" name="username" 
                            placeholder="Pseudo" id="">
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" type="password" class="form-control" name="password" 
                            placeholder="Mot de passe" id="">
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                                Connexion
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL;?>register" class="btn btn-link">
                        Inscription
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>