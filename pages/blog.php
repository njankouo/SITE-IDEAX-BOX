<div class="row">
  <div class="col s12 m12">
    <section style="height: 180px;">
<img src="./assets/img/logo.jpeg" alt="">
    </section>
  </div>
</div>



<div class="row">


<?php
$posts=get_posts();

foreach($posts  as $post){
?>

<div class="col s12 m3">
    
 <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
           <img src="assets/img/<?= $post->image?>" alt="<?= $post->title?>" class="activator" style="height: 180px;">
     
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">   <?=$post->title?><i class="material-icons right">more_vert</i></span>
      <a href="admin.php?page=post&id=<?=$post->id?>">article Complet</a>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?=$post->title?><i class="material-icons right">close</i></span>
      <p><?= substr(nl2br($post->content),0,1000);?>......</p>
    </div>
  </div>
</div>

<?php
}
?>
</div>
<script src="../assets/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

