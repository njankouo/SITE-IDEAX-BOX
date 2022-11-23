<?php
require './functions/Connex.php';

$db->exec("UPDATE comments SET seen='0' where id='{$_POST['id']}'");