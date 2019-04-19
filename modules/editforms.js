import { functionData } from '../configjs/utils.js';
const { urlviews, urledit } = functionData.serverurl;
const { nombreblog, linkdelblog, autorblog, notasblog } = functionData.inputs;

//tomamos la url de la pagina actual para detectar el ID del obj a editar
const path = window.location.search;
const result = path.split("?")[1];

export const editForm = () => {

    fetch(urlviews)
        .then(function (res) {
            return res.json();
        })
        .then(function (data) {
            data.map((items) => {
                if (items.id == result) {
                    
                    nombreblog.val(items.nombreblog);
                    linkdelblog.val(items.linkblog);
                    autorblog.val(items.autorblog);
                    notasblog.val(items.notasblog);

                    const btnedit = $("#submit-edit");
                    const edidardbform = (e) => {
                        //e.preventDefault();
                        $.ajax({
                            type: 'POST',
                            url: urledit,
                            data:  {
                                nombre: nombreblog.val(), 
                                link: linkdelblog.val(),
                                autor: autorblog.val(),
                                notas: notasblog.val(),
                                id:result
                            },
                            success: function(res){
                                console.log(res);
                                window.location.href = "/";
                            },
                            error: function(err){
                                console.log(err);
                            }
                        })
                    }
                    btnedit.on('click', edidardbform);
                } else {

                }
            })
        });


}