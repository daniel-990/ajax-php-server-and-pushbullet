<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
    .cont-form {
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cont-form">
                    <h3>[ Formulario Blogs ] <i class="fas fa-server"></i></h3>
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
                            <label for="autos-blog" class="col-sm-2 col-form-label">Autor del Blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="autos-blog" placeholder="autor">
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
                        <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont-form"></div>
            </div>

            <div class="container">
                <hr>
                <div id="datos-html" class="cont-datos-html" style="margin-bottom:50px;"></div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://alexschneider.github.io/pushbullet-js/pushbullet.min.js" type="text/javascript"></script>
    <script type="module" src="app.js"></script>
</body>

</html>