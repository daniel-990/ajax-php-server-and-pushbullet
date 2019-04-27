import { functionData } from '../configjs/utils.js';

const { correo, pass } = functionData.inputs;
const { loginurl } = functionData.serverurl;

export const loginApp = () =>{

    const login = $("#submit-login");

    const enviarLogin = (event) => {
        event.preventDefault();
        $.ajax({
            type:'POST',
            url:loginurl,
            data:{
                correo:correo.val(),
                password:pass.val()
            },
            success: function (response){
                $('#respuesta').append(response,'<br />');
            },
            error: function (err){
                console.log(err);
            }
        })
    }

    login.on('click', enviarLogin);
} 