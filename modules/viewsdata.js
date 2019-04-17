import { functionData } from '../configjs/utils.js';

const { urlviews } = functionData.serverurl;

export const viewsForm = () => {
    const objcard = $("#datos-html");
    fetch(urlviews)
        .then(function (res) {
            return res.json();
        })
        .then(function (data) {
            data.map((items) => {
                let htmlcard = `
                <div class="card tarjetas-de-datos" style="margin-top:10px;">
                    <h5 class="card-header">${items.nombreblog}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Autor: ${items.autorblog}</h5>
                        <p class="card-text">
                            ${items.notasblog}
                        </p>
                        <a class="btn btn-success btn-link-fondo" href="${items.linkblog}" target="post_">
                            <i class="fas fa-link"></i> | Link
                        </a>
                        <a id="editar-post" class="btn btn-danger btn-editar-fondo" href="/php-text/editar.php?${items.id}">
                            <i class="fas fa-pencil-alt"></i> | Editar
                        </a>
                    </div>
                </div>
          `;
                objcard.append(htmlcard);
            })
        });



}