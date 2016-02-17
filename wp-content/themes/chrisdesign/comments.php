<?php if ($comments) :?>
    <h3><?php comments_number('Pas de commentaire', 'Commentaire:', '% commentaires:'); ?></h3>
    <ol>
        <?php foreach ($comments as $comment) :?>
            <li>
                <strong><?php comment_author_link(); ?></strong>
                <p>Le <?php comment_date('j M Y') ?> a <?php comment_time(); ?></p>
                <p><?php comment_text(); ?></p>
            </li>
        <?php endforeach ?>
    </ol>
<?php endif; ?>