<?php get_header(); ?>
    <section>
        <!--    Contenu des derniers articles -->
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <p>Article écrit par<?php the_author(); ?> en date de
                    <?php the_date(); ?></p>
                <p><?php the_content(); ?></p>
            </article>
        <?php endwhile; ?>
    </section>
    <?php comments_template(); ?>
<?php get_footer(); ?>