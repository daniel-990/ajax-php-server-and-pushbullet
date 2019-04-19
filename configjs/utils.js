//utils

export const functionData = {
    "serverurl":{
        url:"./server/send.php",
        urledit:"./server/editardatos.php",
        urlviews:"./server/recibirdatos.php",
        urldelete:"./server/eliminar.php"
    },
    "inputs":{
        nombreblog:$("#nombre-blog"),
        linkdelblog:$("#link-blog"),
        autorblog:$("#autor-blog"),
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