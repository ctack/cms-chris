<?php
// Si les commentaires sont bien activés, on affiche le formulaire
if ('open' == $post->comment_status): ?>
<h3 id="respond">Laissez un commentaire</h3>
<?php //Si l'utilisateur estb obligé d'etre inscrit et qu'il n'eswt pas connecté,
// on affiche un lien vers le login
if (/*get_option('comment_registration') &&*/ ! $user_ID) :
?>
<p>Vous devez être <a href="<?php get_option('siteurl'); ?>/wp-system/wp-login.php?redirect_to=<?php the_permalink(); ?>">connecté</a> pour laisser un commentaire</p>
<?php else: ?>
   <?php // Affichage du formulaire ici ?>
<?php endif; // Fin de condition user est connecté ?>
<?php endif; // Fin condition "On peut lasisser des commentaires" ?>
