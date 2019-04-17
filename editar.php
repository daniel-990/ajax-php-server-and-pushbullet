<?php 

    include ('parcial/head.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cont-form">
                    <h3>[ Editar Blogs ] <i class="fas fa-server"></i> | <a href="/php-text" class="btn btn-danger">Inicio</a></h3>
                    <hr>
                    <form id="form-editar">
                        <div class="form-group row">
                            <label for="nombre-blog" class="col-sm-2 col-form-label">Nombre del blog...</label>
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
                                <label for="autos-blog" class="col-sm-2 col-form-label">Autor del Blog</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="autos-blog" placeholder="autor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notas-blog" class="col-sm-2 col-form-label">Notas del Blog</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="notas-blog" rows="3" placeholder="notas">
                                    </textarea>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert" id="res-message"></div>
                            <hr>
                            <button id="submit-edit" type="submit" class="btn btn-success btn-editar-fondo"><i class="fas fa-sync-alt"></i> Actualizar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont-form"></div>
            </div>
        </div>
    </div>

<?php 

    include ('parcial/footer.php');

?>