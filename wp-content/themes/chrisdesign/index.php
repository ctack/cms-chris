<?php get_header(); ?>
    <section>
        <!--    Contenu des derniers articles -->
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <p>Article écrit par<?php the_author(); ?> en date de
               <?php the_date(); ?></p>
                <a href="<?php the_permalink(); ?>" class="more" >Lire la suite</a>
                <p><?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires') ?></p>
                <?php if (has_post_thumbnail()) { ?>
        <p><?php the_post_thumbnail('thumbanail'); ?></p>
               <?php } ?>
            </article>
    <?php endwhile; ?>
    </section>
<?php get_footer(); ?>