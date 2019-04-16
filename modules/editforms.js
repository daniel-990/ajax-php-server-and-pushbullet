import { functionData } from '../configjs/utils.js';
const { urlviews, urledit } = functionData.serverurl;
const { nombreblog, linkdelblog, autorblog, notasblog } = functionData.inputs;

//tomamos la url de la pagina actual para detectar el ID del obj a editar
const path = window.location.search;
const result = path.split("?")[1];

export const editForm = () => {

    const objform = $("#form-editar");
    fetch(urlviews)
        .then(function (res) {
            return res.json();
        })
        .then(function (data) {
            data.map((items) => {

                let htmlform = `

                        <div class="form-group row">
                        <label for="nombre-blog" class="col-sm-2 col-form-label">Nombre del blog</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre-blog" placeholder="nombre" value="${items.nombreblog}">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="link-blog" class="col-sm-2 col-form-label">Link del Blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="link-blog" placeholder="link" value="${items.linkblog}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="autos-blog" class="col-sm-2 col-form-label">Autor del Blog</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="autos-blog" placeholder="autor" value="${items.autorblog}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notas-blog" class="col-sm-2 col-form-label">Notas del Blog</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="notas-blog" rows="3" placeholder="notas" value="${items.notasblog}">${items.notasblog}
                                </textarea>
                            </div>
                        </div>
                        <div class="alert alert-danger" role="alert" id="res-message"></div>
                        <hr>
                        <button id="submit-edit" type="submit" class="btn btn-success">Editar</button>
                `;
                if (items.id == result) {
                    objform.append(htmlform);
                    const btnedit = $("#submit-edit");
                    
                    const edidardbform = (e) => {
                        e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: urledit,
                            data:  {
                                nombre: nombreblog.val(),
                                link: linkdelblog.val(),
                                autor: autorblog.val(),
                                notas: nombreblog.val(),
                                id:result
                            },
                            success: function(res){
                                console.log('enviado datos al servidor php ',res);
                            },
                            error: function(err){
                                console.log(err);
                            }
                        })
                        console.log('enviar datos');
                    }
                    btnedit.on('click', edidardbform);
                } else {

                }
            })
        });


}