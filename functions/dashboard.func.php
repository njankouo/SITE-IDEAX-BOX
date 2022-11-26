<?php
function post($titre,$contenu,$status){

    global $pdo;
    $p=[
        'titre'=>$titre,
        'contenu'=>$contenu,
        'status'=>$status,
        //'image'=>$image,
       'writter'=>$_SESSION['admin']
    ];
    $sql='insert into posts(title,content,posted,date,writter)values(:titre,:contenu,:status,NOW(),:writter)';
    $req=$pdo->prepare($sql);
    $req->execute($p);
}

function post_img($tmp_name,$extension){
    global $pdo;
    $id=$pdo->lastInsertId();
    $i=[
        "id"=>$id,
        "image"=>$id.$extension
    ];

 $sql = 'update posts set image=:image where id=:id';
    $req = $pdo->prepare($sql);
    $req->execute($i);
    move_uploaded_file($tmp_name, 'assets/img/' . $id . $extension);
}
function   admin($nom,$prenom,$email,$password,$role){
    global $pdo;
    $ad=[
    'nom'=>$nom,
    'prenom'=>$prenom,
    'email'=>$email,
    'password'=> sha1( $password),
    'role'=>$role


    ];
    $sql='insert into admin(nom,prenom,email,password,role)values(:nom,:prenom,:email,:password,:role)';
    $req=$pdo->prepare($sql);
    $req->execute($ad);
}

function list_admin(){
    global $pdo;
    $req=$pdo->query("select * from admin where role='admin'");
    $result=[];
    while($rows =$req->fetchObject()){
  $result[]=$rows;
    }
  return $result;
}
function inTable($table)
{
    global $pdo;

    $query = $pdo->query("select count(id) from $table");
    return $nombre = $query->fetch();
}
function get_comment()
{
    global $pdo;

    $req = $pdo->query("select comments.id,comments.name,comments.email,comments.date,comments.post_id,comments.comment,posts.title from comments join posts ON comments.post_id=posts.id where comments.seen='0' order by comments.date asc");
    $results = [];

    while ($rows = $req->fetchObject()) {
        $results[] = $rows;
    }
    return $results;
}