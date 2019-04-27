import { functionData } from '../configjs/utils.js';
const { url } = functionData.serverurl;
const { nombreblog, linkdelblog, autorblog, notasblog } = functionData.inputs;
const { api, deviceid } = functionData.accesstokens;

//apis and keys
PushBullet.APIKey = api;
const deviceID = deviceid;

export const form = () => {
    const submit = $("#submit");

    const enviarDatos = (event) => {
        //--
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                nombre: nombreblog.val(),
                link: linkdelblog.val(),
                autor: autorblog.val(),
                notas: notasblog.val()
            },
            success: function (response) {
                console.log(response);

                PushBullet.push("note", deviceID, null, {
                    title: `Hola mi nombre es: ${autorblog.val()}`,
                    body: `Datos nuevos: ${nombreblog.val()} | ${linkdelblog.val()} | ${autorblog.val()} | ${notasblog.val()}`,
                }, function (err, res) {
                    if (err) {
                        throw err;
                    } else {
                        console.log(res);
                        window.location.href = "/php-text/";
                    }
                });

                $("#res-message").html(response);
            },
            error: function (err) {
                alert(err);
            }
        })

    }

    submit.on('click', enviarDatos);
}