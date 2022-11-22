<?php


function get_post(){
    global $pdo;
$req=$pdo->query("
select posts.id,
posts.title,
posts.image,
posts.content,
posts.date,
admin.nom
from posts
join admin
ON posts.writter=admin.email
where posts.id='{$_GET['id']}'
AND posts.posted='1'

");

$result=$req->fetchObject();
return $result;
}
function commentaire($nom, $comment,$email)
{
    global  $pdo;

    $a = array(
            'nom' => $nom,
        'email' => $email,
        'comment' => $comment,
        
       // 'post_id' => $_GET['id'],
    );
    $inser = 'insert into comments (name,email,comment,date) values(:nom,:email,:comment,NOW())';
    $result = $pdo->prepare($inser);
    $result->execute($a);
}
function get_comment()
{
    global $pdo;

    $checkcomment = $pdo->query("select * from comments where post_id='{$_GET['id']}' order by date DESC");

    $result = [];
    while ($rows = $checkcomment->fetchObject()) {
        $result[] = $rows;
    }
    return $result;
}
