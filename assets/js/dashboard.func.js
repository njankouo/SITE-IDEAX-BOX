document.ready(function() {

    $('.see_comment').click(function() {

        var id = $(this).attr('id');
        $.post('.ajax/see_comment.php', { id: id }, function() {

            /**function qui permet de cacher le commentaire *
             */
            $('#commentaire_' + id).hide();
        });

    });

});