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
    <form action="<?php get_option('siteurl'); ?>/wp-system/wp-comments-post.php" method="post">
        <?php if ($user_ID): ?>
        <p>Connecté en tant que <?php $user_identity; ?></p>
        <?php // Ajouter liens de profil et lien de déconnexion ?>
        <?php else: ?>
        <p>
            <input type="text" name="author" id="author" value="<?php $comment_author ?>" size="40" tabindex="1" placeholder="Votre nom" />
            <label for="author">Nom<?php if ($req) { echo "(requis)"; }?></label>
        </p>
        <p>
            <input type="text" name="email" id="email" value="<?php $comment_author_email ?>" size="40" tabindex="2" placeholder="exemple@courrielcom />
            <label for="email">Courriel<?php if ($req) { echo "(requis)"; }?></label>
        </p>
        <p>
            <input type="text" name="url" id="url" value="<?php $comment_author_url ?>" size="40" tabindex="3" placeholder="http://* />
            <label for="url">Site Web</label>
        </p>
        <?php endif; ?>
    <p>
        <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4">
        </textarea>
    </p>
    <p>
    <input type="submit" name="submit" id="submit" tabindex="5" value="Envoyer" />
    <input type="hidden" name="content_post_ID" value="<?php echo $id; ?>" />
    </p>
    </form>

   <?php // Affichage du formulaire ici ?>
<?php endif; // Fin de condition user est connecté ?>
<?php endif; // Fin condition "On peut lasisser des commentaires" ?>
