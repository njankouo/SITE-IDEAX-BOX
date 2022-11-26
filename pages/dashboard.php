

  

<style>
  div.material-table {
  padding: 0;
}

div.material-table .hiddensearch {
  padding: 0 14px 0 24px;
  border-bottom: solid 1px #DDDDDD;
  display: none;
}

div.material-table .hiddensearch input {
  margin: 0;
  border: transparent 0 !important;
  height: 48px;
  color: rgba(0, 0, 0, .84);
}

div.material-table .hiddensearch input:active {
  border: transparent 0 !important;
}

div.material-table table {
  table-layout: fixed;
}

div.material-table .table-header {
  height: 64px;
  padding-left: 24px;
  padding-right: 14px;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  display: flex;
  -webkit-display: flex;
  border-bottom: solid 1px #DDDDDD;
}

div.material-table .table-header .actions {
  display: -webkit-flex;
  margin-left: auto;
}

div.material-table .table-header .btn-flat {
    min-width: 36px;
    padding: 0 8px;
}

div.material-table .table-header input {
  margin: 0;
  height: auto;
}

div.material-table .table-header i {
  color: rgba(0, 0, 0, 0.54);
  font-size: 24px;
}

div.material-table .table-footer {
  height: 56px;
  padding-left: 24px;
  padding-right: 14px;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-justify-content: flex-end;
  justify-content: flex-end;
  -webkit-align-items: center;
  align-items: center;
  font-size: 12px !important;
  color: rgba(0, 0, 0, 0.54);
}

div.material-table .table-footer .dataTables_length {
  display: -webkit-flex;
  display: flex;
}

div.material-table .table-footer label {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.54);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row
  /* works with row or column */
  
  flex-direction: row;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

div.material-table .table-footer .select-wrapper {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row
  /* works with row or column */
  
  flex-direction: row;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

div.material-table .table-footer .dataTables_info,
div.material-table .table-footer .dataTables_length {
  margin-right: 32px;
}

div.material-table .table-footer .material-pagination {
  display: flex;
  -webkit-display: flex;
  margin: 0;
}

div.material-table .table-footer .material-pagination li:first-child {
  margin-right: 24px;
}

div.material-table .table-footer .material-pagination li a {
  color: rgba(0, 0, 0, 0.54);
}

div.material-table .table-footer .select-wrapper input.select-dropdown {
  margin: 0;
  border-bottom: none;
  height: auto;
  line-height: normal;
  font-size: 12px;
  width: 40px;
  text-align: right;
}

div.material-table .table-footer select {
  background-color: transparent;
  width: auto;
  padding: 0;
  border: 0;
  border-radius: 0;
  height: auto;
  margin-left: 20px;
}

div.material-table .table-title {
  font-size: 20px;
  color: #000;
}

div.material-table table tr td {
  padding: 0 0 0 56px;
  height: 48px;
  font-size: 13px;
  color: rgba(0, 0, 0, 0.87);
  border-bottom: solid 1px #DDDDDD;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

div.material-table table tr td a {
  color: inherit;
}

div.material-table table tr td a i {
  font-size: 18px;
  color: rgba(0, 0, 0, 0.54);
}

div.material-table table tr {
  font-size: 12px;
}

div.material-table table th {
  font-size: 12px;
  font-weight: 500;
  color: #757575;
  cursor: pointer;
  white-space: nowrap;
  padding: 0;
  height: 56px;
  padding-left: 56px;
  vertical-align: middle;
  outline: none !important;
}

div.material-table table th.sorting_asc,
div.material-table table th.sorting_desc {
  color: rgba(0, 0, 0, 0.87);
}

div.material-table table th.sorting:after,
div.material-table table th.sorting_asc:after,
div.material-table table th.sorting_desc:after {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 16px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  word-wrap: normal;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
  content: "arrow_back";
  -webkit-transform: rotate(90deg);
  display: none;
  vertical-align: middle;
}

div.material-table table th.sorting:hover:after,
div.material-table table th.sorting_asc:after,
div.material-table table th.sorting_desc:after {
  display: inline-block;
}

div.material-table table th.sorting_desc:after {
  content: "arrow_forward";
}

div.material-table table tbody tr:hover {
  background-color: #EEE;
}

div.material-table table th:first-child,
div.material-table table td:first-child {
  padding: 0 0 0 24px;
}

div.material-table table th:last-child,
div.material-table table td:last-child {
  padding: 0 14px 0 0;
}
</style>



 <blockquote>
    <h6 style="font-style: italic;font-weight:bold;font-size:25px;">Tableau de Bord Du Blog &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo 'BIENVENUE' ?>&nbsp;&nbsp;<?php echo '' .$_SESSION['admin']?></h6>
    
</blockquote>

<div class="row">
<?php
if($page!='login' && !isset($_SESSION['admin'])){
  ?>
<script>
  window.location.replace('admin.php?page=login');
</script>
  <?php
}

?>
    <?php
    $tables = [

        'PUBLICATIONS' => 'posts',
        'COMMENTAIRES' => 'comments',
        'ADMINISTRATEURS' => 'admin'
    ];
    ?>

    <?php
    foreach ($tables as $table_name => $table) {
    ?>

        <div class="col l4 m6 s12">
            <div class="card darken-1" style="background: #085078;  
background: -webkit-linear-gradient(to right, #85D8CE, #085078); 
background: linear-gradient(to right, #85D8CE, #085078); 
">
                <div class="card-content white-text">
                  
                    <p>
                        <?php $nombretable = inTable($table); ?>

                        <a class="btn-floating btn-large waves-effect waves-light red-darken-3"><i class="material-icons">grade</i></a>
                        <?= $nombretable[0] ?>   <span class="card-title" style="font-family: forte;"><?= $table_name ?></span>

                    </p>
                </div>

            </div>
        </div>

    <?php
    }
    ?>
   <?php
if (isset($_POST['submit'])) {
    $titre = htmlspecialchars(trim($_POST['titre']));
    $contenu = htmlspecialchars(trim($_POST['contenu']));
    // $image = $_POST['image'];
    if (isset($_POST['status'])) {
        $status = $_POST['status'];
    }
    $errors = [];

    if (empty($titre) || empty($contenu)) {
        $errors['empty'] = 'renseignez tous vos champs';
    }
    if (empty($_FILES['image']['name'])) {
echo 'aucune image';

    }else{
        $file = $_FILES['image']['name'];
        $extensions = ['.png', '.jpg', '.jpeg', '.gif', '.PNG', '.JPG', '.JPEG', '.GIF'];
        $extension = strrchr($file, '.');
        if (!in_array($extension, $extensions)) {
            $errors['image'] = ['image non valide'];
        }
    }

    if (!empty($errors)) {
?>

        <div class="card red">
            <div class="card-content white-text">
                <?php

                foreach ($errors as $error) {
                    echo $error . "<br/>";
                }
                ?>
            </div>
        </div>
<?php
    } else {
        post($titre, $contenu, $status);
        $success = '';

        if (!empty($_FILES['image']['name'])) {
            post_img($_FILES['image']['tmp_name'], $extension);
            // var_dump($_FILES['image']['name']);
            // var_dump($extension);
          
        } else {
          
           $id = $pdo->lastInsertId();
          //  var_dump($id);
          //  echo 'ne marche pas';
            //header('Location:index.php?page=post&id=' . $id);
        }
    }
}


?>
    </div>
<a class="waves-effect waves-light btn modal-trigger blue darken-3" href="#mod2" style="float:right;margin:20px;">LISTE DES  ADMINISTRATEUR</a>
<div id="mod2" class="modal">
    <div class="modal-content">
      <h4>LISTE DES ADMINISTRATEURS</h4>
     <div class="card">
      <div class="card-content">
         <table class="responsive-table">
        <thead>
          <tr>
              <th>NOM</th>
              <th>PRENOM</th>
              <th>EMAIL</th>
              <th>ROLE</th>
          </tr>
        </thead>

        <tbody>
          <?php
        $liste=list_admin();

?>
        
            <?php
      foreach($liste as $list){
        ?>
          <tr>
            <td><?=$list->nom?></td>
            <td><?=$list->prenom?></td>
            <td><?=$list->email?></td>
            <td><?=$list->role?></td>
          </tr>
        <?php
      }
?>       
        </tbody>
      </table>
      </div>
     </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
 <a class="waves-effect waves-light btn modal-trigger" href="#mod1" style="float:right;margin:20px;">ESPACE ADMINISTRATEUR</a>

  <!-- Modal Structure -->
  <?php
if(isset($_POST['sub'])){
  $nom=htmlspecialchars(trim($_POST['nom']));
 
  $prenom=htmlspecialchars(trim($_POST['prenom']));
   $email=htmlspecialchars(trim($_POST['email']));
  $password=htmlspecialchars(trim($_POST['password']));
  $role=htmlspecialchars(trim($_POST['role']));

  if(empty($nom)|| empty($prenom)|| empty($email) || empty($password)||empty($role)){
    $error=['renseignez les champs administrateurs svp'];
  }if(!empty($error)){
    ?>
 <div class="card red">
            <div class="card-content white-text">
                <?php

                foreach ($error as $errors) {
                    echo $errors . "<br/>";
                }
                ?>
            </div>
        </div>

<?php


}else{
  admin($nom,$prenom,$email,$password,$role);
  }
}

?>
  <div id="mod1" class="modal">
    <div class="modal-content">
      <h4>ESPACE ADMINISTRATEUR</h4>
      <div class="row">
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom"> Nom</label>
        </div>
        <div class="input-field col s6">
          <input id="prenom" type="text" class="validate" name="prenom">
          <label for="prenom">prenom</label>
        </div>
         <div class="input-field col s6">
          <input id="email" type="text" class="validate" name="email">
          <label for="email">email</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">password</label>
        </div>
        <div class="input-field col s12">
          <input id="role" type="text" class="validate" name="role">
          <label for="role">role</label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="waves-effect btn" type="submit" name="sub">valider</button>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
    </div>
  </div>
  </div>
      </form>    
<div class="row">
  <div id="man" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">
         <h4 style="font-family:forte"> Liste Des Commentaires Et Publications</h4> </span>
        <div class="actions">
          <a href="#modal1" class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">library_add</i></a>
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="card-content">
                            <table id="datatable" class="responsive-table">
                                <thead>
                                    <tr>
                                        <th>TITRE PUBLICATION</th>
                                        <th>COMMENTAIRE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $comment =  get_comment();

                                    foreach ($comment as $comments) {

                                    ?>
                                        <tr id="commentaire_<?= $comments->id ?>">
                                            <td><?= $comments->title ?> </td>


                                            <td>
                                                <?= substr($comments->comment, 0, 100)  ?>
                                            </td>
                                            <td>
                                                <!-- &nbsp; <a id="<?= $comments->id ?>" class="btn-floating btn-small waves-effect waves-light white darken-4 tooltipped see_comment" data-position="top" data-tooltip="valider la publication"><i class="material-icons">done</i></a>
                                                &nbsp; &nbsp; -->
                                                
                                                <a class="btn-floating btn-small waves-effect waves-light green-darken-4  modal-trigger tooltipped" href="#comments_<?= $comments->id ?>" data-position="top" data-tooltip="lire le commentaire">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div id="comments_<?= $comments->id ?>" class="modal bottom-sheet">
                                                    <div class="modal-content">
                                                        <h4><?= $comments->title ?></h4>
                                                        <p>Commentaire Poste par <strong><?= $comments->name . "(" . $comments->email . ")</strong><br/>Le " . date('d/m/y H:i', strtotime($comments->date)) ?></p>
                                                        <hr>
                                                        <p><?= nl2br($comments->comment) ?></p>
                                                    </div>
                                                    <div class="modal-footer   darken-4">
                                                      
                                                         <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
   
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
        </div>
      </div>
    
  </div>

  <div id="modal1" class="modal">
    <div class="modal-header">
  
    <form class="col s12" method="POST" enctype="multipart/form-data">
    <div class="modal-content">
 <h4>PUBLICATION DU CONTENU</h4>
     
      <div class="row">
        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="titre">
          <label for="last_name">Titre Publication</label>
        </div>
        
        <div class="input-field col s6">
          <select multiple name="status">
      <option value="" disabled selected>Choose your option</option>
      <option value="1"> Actif</option>
      <option value="0">Inactif </option>
    
    </select>
    <label>Status Publication</label>
        </div>
        <div class="row">
      <div class="col s12 m12">
         <div class="file-field input-field">
      <div class="btn">
        <span>Image</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>
      <div class="col s12 m12">
          <label for="textarea1">Contenu Publication</label>
         <textarea id="textarea1" class="materialize-textarea" name="contenu"></textarea>
        
      </div>
      </div>


      </div>
    </div>
      <div class="modal-footer">
         <button type="submit" class="btn waves-effect blue darken-4 white-text" name="submit" >publiez votre contenu</button>
   
    <a href="#!" class="modal-close btn waves-effect waves-light red darken-4"
    > cancel</a>
  </div>
 </form>
  
  </div>
 
          
 </div>
  </div>
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../assets/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<script>
   $(document).ready(function(){
    $('.modal').modal({
      dismissible:false
    });
  });
</script>

<script>
  
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>

 
  <script>
  (function(window, document, undefined) {

  var factory = function($, DataTable) {
    "use strict";

    $('.search-toggle').click(function() {
      if ($('.hiddensearch').css('display') == 'none')
        $('.hiddensearch').slideDown();
      else
        $('.hiddensearch').slideUp();
    });

    /* Set the defaults for DataTables initialisation */
    $.extend(true, DataTable.defaults, {
      dom: "<'hiddensearch'f'>" +
        "tr" +
        "<'table-footer'lip'>",
      renderer: 'material'
    });

    /* Default class modification */
    $.extend(DataTable.ext.classes, {
      sWrapper: "dataTables_wrapper",
      sFilterInput: "form-control input-sm",
      sLengthSelect: "form-control input-sm"
    });

    /* Bootstrap paging button renderer */
    DataTable.ext.renderer.pageButton.material = function(settings, host, idx, buttons, page, pages) {
      var api = new DataTable.Api(settings);
      var classes = settings.oClasses;
      var lang = settings.oLanguage.oPaginate;
      var btnDisplay, btnClass, counter = 0;

      var attach = function(container, buttons) {
        var i, ien, node, button;
        var clickHandler = function(e) {
          e.preventDefault();
          if (!$(e.currentTarget).hasClass('disabled')) {
            api.page(e.data.action).draw(false);
          }
        };

        for (i = 0, ien = buttons.length; i < ien; i++) {
          button = buttons[i];

          if ($.isArray(button)) {
            attach(container, button);
          } else {
            btnDisplay = '';
            btnClass = '';

            switch (button) {

              case 'first':
                btnDisplay = lang.sFirst;
                btnClass = button + (page > 0 ?
                  '' : ' disabled');
                break;

              case 'previous':
                btnDisplay = '<i class="material-icons">chevron_left</i>';
                btnClass = button + (page > 0 ?
                  '' : ' disabled');
                break;

              case 'next':
                btnDisplay = '<i class="material-icons">chevron_right</i>';
                btnClass = button + (page < pages - 1 ?
                  '' : ' disabled');
                break;

              case 'last':
                btnDisplay = lang.sLast;
                btnClass = button + (page < pages - 1 ?
                  '' : ' disabled');
                break;

            }

            if (btnDisplay) {
              node = $('<li>', {
                  'class': classes.sPageButton + ' ' + btnClass,
                  'id': idx === 0 && typeof button === 'string' ?
                    settings.sTableId + '_' + button : null
                })
                .append($('<a>', {
                    'href': '#',
                    'aria-controls': settings.sTableId,
                    'data-dt-idx': counter,
                    'tabindex': settings.iTabIndex
                  })
                  .html(btnDisplay)
                )
                .appendTo(container);

              settings.oApi._fnBindAction(
                node, {
                  action: button
                }, clickHandler
              );

              counter++;
            }
          }
        }
      };

      // IE9 throws an 'unknown error' if document.activeElement is used
      // inside an iframe or frame. 
      var activeEl;

      try {
        // Because this approach is destroying and recreating the paging
        // elements, focus is lost on the select button which is bad for
        // accessibility. So we want to restore focus once the draw has
        // completed
        activeEl = $(document.activeElement).data('dt-idx');
      } catch (e) {}

      attach(
        $(host).empty().html('<ul class="material-pagination"/>').children('ul'),
        buttons
      );

      if (activeEl) {
        $(host).find('[data-dt-idx=' + activeEl + ']').focus();
      }
    };

    /*
     * TableTools Bootstrap compatibility
     * Required TableTools 2.1+
     */
    if (DataTable.TableTools) {
      // Set the classes that TableTools uses to something suitable for Bootstrap
      $.extend(true, DataTable.TableTools.classes, {
        "container": "DTTT btn-group",
        "buttons": {
          "normal": "btn btn-default",
          "disabled": "disabled"
        },
        "collection": {
          "container": "DTTT_dropdown dropdown-menu",
          "buttons": {
            "normal": "",
            "disabled": "disabled"
          }
        },
        "print": {
          "info": "DTTT_print_info"
        },
        "select": {
          "row": "active"
        }
      });

      // Have the collection use a material compatible drop down
      $.extend(true, DataTable.TableTools.DEFAULTS.oTags, {
        "collection": {
          "container": "ul",
          "button": "li",
          "liner": "a"
        }
      });
    }

  }; // /factory

  // Define as an AMD module if possible
  if (typeof define === 'function' && define.amd) {
    define(['jquery', 'datatables'], factory);
  } else if (typeof exports === 'object') {
    // Node/CommonJS
    factory(require('jquery'), require('datatables'));
  } else if (jQuery) {
    // Otherwise simply initialise as normal, stopping multiple evaluation
    factory(jQuery, jQuery.fn.dataTable);
  }

})(window, document);

$(document).ready(function() {
  $('#datatable').dataTable({
    "oLanguage": {
      "sStripClasses": "",
      "sSearch": "",
      "sSearchPlaceholder": "Enter Keywords Here",
      "sInfo": "_START_ -_END_ of _TOTAL_",
      "sLengthMenu": '<span>Rows per page:</span><select class="browser-default">' +
        '<option value="10">10</option>' +
        '<option value="20">20</option>' +
        '<option value="30">30</option>' +
        '<option value="40">40</option>' +
        '<option value="50">50</option>' +
        '<option value="-1">All</option>' +
        '</select></div>'
    },
    bAutoWidth: false
  });
});
</script>
