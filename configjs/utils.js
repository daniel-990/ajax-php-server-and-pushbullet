//utils

export const functionData = {
    "serverurl":{
        url:"./server/send.php",
        urledit:"./server/editardatos.php",
        urlviews:"./server/received.php"
    },
    "inputs":{
        nombreblog:$("#nombre-blog"),
        linkdelblog:$("#link-blog"),
        autorblog:$("#autos-blog"),
        notasblog:$("#notas-blog")
    },
    "accesstokens":{
        api:"o.Q7qT79TRM0VLnFYKW0sLsrs5UxPRUo5j",
        deviceid:"ujxE6LafSBosjz0aw36Wn6"
    },
    mostrarInformacion(){
        return this;
    }
    
}