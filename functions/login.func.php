<?php
function is_admin($email,$password){
    global $pdo;
    $a=[
        'email'=>$email,
        'password'=>sha1($password),

    ];
    $sql='select * from admin where email=:email and password=:password';
    $req=$pdo->prepare($sql);
    $req->execute($a);
    $exist=$req->rowCount();
    return $exist;
}