<?php 

    // $pass = $_POST['password'];    
    $token = "009871";
    $deviceid = "000123";

    $tokennHash = password_hash($token, PASSWORD_BCRYPT);
    $idHash = password_hash($deviceid, PASSWORD_BCRYPT);

    if(password_verify($token, $tokennHash) || password_verify($deviceid, $idHash)){
        echo "conecto!: ". $dato1 = $token;
        return;
    }else{
        echo "Error: ".$tokennHash,$idHash;
    }

?>