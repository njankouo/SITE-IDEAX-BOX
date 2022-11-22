<?php

function get_posts(){
    global $pdo;


    $req=$pdo->query("
    select posts.id,
    posts.title,
    posts.image,
    posts.date,
    posts.content,
    admin.nom 
    from posts
    JOIN admin 
    ON posts.writter=admin.email 
    WHERE posted='1' ORDER BY date DESC
     LIMIT 0,8
     ");
    $results=array();
    while($rows=$req->fetchObject()){
        $results[]=$rows;
    }
    return $results;

}


?>