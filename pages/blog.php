
<div class="row">


<?php
$posts=get_posts();

foreach($posts  as $post){
?>
<div class="col l3 m12">
    <div class="card">
        <div class="card-content">
            <h6 class="grey-text text-darken-2"><?=$post->title?></h6>
            <h6 class="grey-text text-darken-2"><?=date('d/m/y à H:i',strtotime($post->date))?> par: <?=$post->nom?></h6>
        </div>
        <div class="card-image waves-effect waves-block waves-light">
            <img src="assets/img/<?= $post->image?>" alt="<?= $post->title?>" class="activator img-fluid">
        </div>
        <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
            <i class="material-icons right">more_vert</i>
            <p>
                <a href="admin.php?page=post&id=<?=$post->id?>">article Complet</a>
            </p>
        </span>
    </div>    
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
        <?=$post->title?>
        <i class="material-icons right">close</i>
        </span>
        <p><?php substr(nl2br($post->content),0,1000);?>......</p>
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

