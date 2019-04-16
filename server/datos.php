<?php 

    // $pass = $_POST['password'];    
    $token = "o.Q7qT79TRM0VLnFYKW0sLsrs5UxPRUo5j";
    $deviceid = "ujxE6LafSBosjz0aw36Wn6";

    $tokennHash = password_hash($token, PASSWORD_BCRYPT);
    $idHash = password_hash($deviceid, PASSWORD_BCRYPT);

    if(password_verify($token, $tokennHash) || password_verify($deviceid, $idHash)){
        echo "conecto!: ". $dato1 = $token;
        return;
    }else{
        echo "Error: ".$tokennHash,$idHash;
    }

?>