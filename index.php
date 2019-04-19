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
                            <label for="nombre-blog" class="col-sm-2 col-form-label">Nombre del blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre-blog" placeholder="nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link-blog" class="col-sm-2 col-form-label">Link del Blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link-blog" placeholder="link">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="autor-blog" class="col-sm-2 col-form-label">Autor del Blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="autor-blog" placeholder="autor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notas-blog" class="col-sm-2 col-form-label">Notas del Blog</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="notas-blog" rows="3" placeholder="notas"></textarea>
                            </div>
                        </div>
                        <div class="alert alert-danger" role="alert" id="res-message"></div>
                        <hr>
                        <button id="submit" type="submit" class="btn btn-primary btn-app-custom btn-enviar-fondo"><i class="fas fa-caret-right"></i> Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cont-form">
                    <h2>Blogs</h2>
                    <div id="datos-html" class="cont-datos-html" style="margin-bottom:50px;"></div>
                </div>
            </div>
        </div>
    </div>

<?php 

    include ('parcial/footer.php');

?>