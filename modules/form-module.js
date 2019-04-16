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
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                nombre: nombreblog.val(),
                link: linkdelblog.val(),
                autor: autorblog.val(),
                notas: notasblog.val()
            },
            success: function (res) {
                console.log(res);
                $("#res-message").html(res);
            },
            error: function (err) {
                alert(err);
            }
        })

    }

    const pushBull = () => {
        const nombre = "Daniel";
        const url = "www.google.com";
        event.preventDefault();
        PushBullet.push("note", deviceID, null, {
            title: `Hola mi nombre es: ${nombre}`,
            body: `Esto es una prueba para: ${url}`,
        }, function (err, res) {
            if (err) {
                throw err;
            } else {
                console.log(res);
            }
        });
    }

    submit.on('click', enviarDatos);
}