<?php
session_start();
$dbname='blog';
$dbpassword='';
$dbuser='root';
$dbhost='localhost';

try {
 $pdo=new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpassword,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
//echo 'connexion etablie';
} catch (Exception $e) {
   die ('echec de connexion à la base de donnée');
}

?>