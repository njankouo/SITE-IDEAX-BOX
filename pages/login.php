
<?php 
if(isset($_SESSION['admin'])){
    header('location:admin.php?page=dashboard');
}

?>



<body style="background-image: url('assets/img/font.jpg');background-size:cover;background-attachment:fixed">

 <div class="row">
        <div class="col s12 m4"></div>
        <div class="col s12 m4">
            <div class="card" style="margin-top: 40%;" >
                <div class="card-title">
                   <h4 style="font-style:italic;margin-top:10px;margin-left:10px">
                    Authentification</h4>
                    
<?php 

if(isset($_POST['submit'])){
  $email=htmlspecialchars(trim($_POST['email']));
  $password=htmlspecialchars(trim($_POST['password']));
  $errors=[];
  if(empty($email) || empty($password)){
    $errors['empty']='tous les champs ne sont pas remplis!';
  }else if(is_admin($email,$password)==0){
$errors['exist']='cet administrateur est absent';
  }
if(!empty($errors)){
?>

<div class="card red">
  <div class="card-content white-text">
    <?php
    foreach($errors as $error){
      echo $error.'<br/>'; 
    }
    ?>
  </div>
</div>
<?php
}else{
  $_SESSION['admin']=$email;
  header('location:admin.php?page=dashboard');
}
}


?>

                </div>
                <div class="card-content">
                     <div class="row">
                      <form method="post">
        <div class="input-field col s12">
          <input   type="email" class="validate" id="email" name="email">
          <label for="">email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
        <button  type="submit" class=" btn btn"  style="float: right;" name="submit">connexion </button>
      </div>
                  
                </div>
                </form>
            </div>
           
        </div>
    </div>
 