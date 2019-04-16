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
                <div class="card" style="margin-top:10px;">
                    <h5 class="card-header">${items.nombreblog}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Autor: ${items.autorblog}</h5>
                        <p class="card-text">
                            ${items.notasblog}
                        </p>
                        <a class="btn btn-success" href="${items.linkblog}" target="post_">
                            <i class="fas fa-external-link-alt"></i> | Ver Link
                        </a>
                        <a id="editar-post" class="btn btn-danger" href="/editar.php?${items.id}">
                            <i class="fas fa-pencil-alt"></i> | Editar
                        </a>
                    </div>
                </div>
          `;
                objcard.append(htmlcard);
            })
        });



}