
   

<?php 

$post=get_post();

if($post == false){
    header("Location:admin.php?page=error");
}else{

    ?>
    </div>
<div class="parallax-container">
      <div class="parallax"><img src="assets/img/<?=$post->image?>" alt="<?=$post->title?>"></div>
    </div>
    <div class="container">

    <h4><?=$post->title?></h3>
    <h6>par <?=$post->nom?> le <?=date('d/m/y à H:i',strtotime($post->date))?></h6>
    <p><?=html_entity_decode(nl2br($post->content)) ?></p>
    <?php
}

?>
 <?php
          if (isset($_POST['submit'])) {

            $nom = htmlspecialchars(trim($_POST['nom']));
             $email = htmlspecialchars(trim($_POST['email']));
            $comment = htmlspecialchars(trim($_POST['comment']));
            if (empty($nom) || empty($comment)) {

              $error['empty'] = 'veuillez renseigner tous vos champs svp';
            } else {
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'adresse email non valide';
              }
            }

            if (!empty($error)) {

          ?>

        <div class="card red">
          <div class="card-content white-text">

            <?php

              foreach ($error as $errors)
                echo $errors . '<br/>';

            ?>
             </div>
        </div>
      <?php
            } else {
              commentaire($nom, $comment,$email);
      ?>
        <script>
          window.location.replace('admin.php?page=post&id=<?= $_GET['id'] ?>');
        </script>

    <?php
            }
          }
          ?>
<hr>
    <h6>Commentaires</h6>
       <div class="card">
         <div class="card-content">
                     <div class="row">
                      <form method="post">
       
     
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom">Nom</label>
        </div>
         <div class="input-field col s6">
          <input   type="email" class="validate" id="email" name="email">
          <label for="">email</label>
        </div>
     
        </div>
        <div class="row">
            <div class="col s12">
                 <label for="comment">Votre Commentaire</label>
                <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
               
            </div>
        </div>
         </div>
         <div class="card-action">
              <button  type="submit" class=" btn btn"   name="submit">commenter </button>
   
         </div>
                  
                </div>
   
    <div class="col s4">
<?php
          $commentaire = get_comment();
          if ($commentaire == false) {
            # code...
          ?>
            <h6><i class="material-icons bounce">info</i>
              Aucun Commentaire pour le moment...</h6>

            <?php
          } else {

            foreach ($commentaire as $commentaires) {

            ?>



              <ul class="collection">
                <li class="collection-item avatar white-text" style="background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">
                  <div class="chip">
                    <img src="./assets/img/lion.png" alt="newImage" class="circle">
                    <span class="title"> <?= $commentaires->name ?></span>
                  </div>
                  <blockquote>
                    <b>
                      <p><?= nl2br($commentaires->comment) ?></p>
                    </b>
                  </blockquote>
                  <a href="#!" class="secondary-content valign-wrapper white-text"><i class="material-icons white-text">calendar_today</i><span>(<?= date('d/m/y', strtotime($commentaires->date)) ?>)</span></a>
                </li>
              </ul>

          <?php
            }
          }



          ?>
    </div>
  </div>
 
    <script src="../assets/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>