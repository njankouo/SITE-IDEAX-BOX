<?php
include 'functions/Connex.php';
/**analyse su dossier pages */
  $pages=scandir('pages/');

  if(isset($_GET['page']) && !empty($_GET['page'])){
    if(in_array($_GET['page'].'.php',$pages)){
     $page=$_GET['page'];
     
    }else{
       $page='error';
    }
  }else{
    $page='blog';
  }
  $pages_functions=scandir('functions/');
  if(in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IDEAS BOX</title>
  <link href="assets/img/logo.jpeg" rel="icon">
    <link rel="stylesheet" href="./assets/css/materialize.min.css">
    <!-- <link href="./assets/css/icon.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="icon.css">
 <!-- <link rel="stylesheet" href="assets/css/materialize.min.css"> -->
  <!-- <link href="../assets/css/icon.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="assets/css/icon.css"> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<link rel="stylesheet" href="assets/css/icon.css">
     
       
</head>
 <script src="assets/js/jquery-3.6.0.min.js"></script>
<body>

<?php
// if($page!='login' && !isset($_SESSION['admin'])){
//   header('location:admin.php?page=login');
// }

?>
    
<nav class=" darken-4"  style="
background: #c31432; 
  background: -webkit-linear-gradient(to right, #c31432, #240b36); 
  background: linear-gradient(to right, #c31432, #240b36);">
  
	<div class="nav-wrapper">

		<a href="#" class="brand-logo" > <img src="assets/img/logo.jpeg" class="circle" alt="logo" height="50px" width:="25px;" style="margin: 3px;">
                </a>

		<a href="#" class="sidenav-trigger" data-target="mobile-nav">
			<i class="material-icons">menu</i>
		</a>

		<ul class="right hide-on-med-and-down "  >
			<li><a href="index.php">Acceuil</a></li>
			<li class="active"><a href="admin.php?page=blog">Blog</a></li>
            <li><a href="admin.php?page=login">Connexion</a></li>	
		</ul>
	</div>
</nav>
<ul class="sidenav" id="mobile-nav">
	   	<li><a href="index.php">Acceuil</a></li>
			<li><a href="admin.php?page=blog">Blog</a></li>
      <li><a href="admin.php?page=login">Connexion</a></li>	
</ul>
  <?php
include 'pages/'.$page.'.php';
  ?>
   <script src="assets/js/materialize.min.js"></script>
   <?php
$pages_js = scandir('assets/js/');
if (in_array($page . '.func.js', $pages_js)) {

    echo ('<script  src="js/' . $page . '.func.js"></script>');
}
?>

</html>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</body>
</html>
