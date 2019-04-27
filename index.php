<?php 

    include ('parcial/head.php');

?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cont-form">
                    <h3>[ Micro Blogs ] <i class="fas fa-server"></i></h3>
                    <hr>
                    <form>

                        <div class="form-group row">
                            <label for="nombre-blog" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="correo" placeholder="Correo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link-blog" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="alert alert-danger" role="alert" id="res-message"></div>
                        <hr>
                        <button id="submit-login" type="submit" class="btn btn-primary btn-app-custom btn-enviar-fondo"><i class="fas fa-caret-right"></i> Login</button>

                        <div id="respuesta">

                        </div>
                    
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cont-form">
                    <h2>Blogs Recientes</h2>
                    <div id="datos-html" class="cont-datos-html" style="margin-bottom:50px;"></div>
                </div>
            </div>
        </div>
    </div>

<?php 

    include ('parcial/footer.php');

?>