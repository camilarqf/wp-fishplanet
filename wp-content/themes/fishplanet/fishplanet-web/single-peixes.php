<?php
// Template Name: Single Peixes
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <style>
            .subtitulo-interno {
                margin-top: 116px;
            }
        </style>

        <section class="peixe_dulc container animar-interna">
            <h2 class="subtitulo-interno">Peixes <?php the_title(); ?></h2>
            <ul class="lista_peixes">
                <li class="grid-1-3"><img src="<?php the_field('foto_pxd01'); ?>" alt="<?php the_field('titulo_pxd01'); ?>">
                    <h3><?php the_field('titulo_pxd01'); ?></h3>
                </li>
                <li class="grid-1-3"><img src="<?php the_field('foto_pxd02'); ?>" alt="<?php the_field('titulo_pxd02'); ?>">
                    <h3><?php the_field('titulo_pxd02'); ?></h3>
                </li>
                <li class="grid-1-3"><img src="<?php the_field('foto_pxd03'); ?>" alt="<?php the_field('titulo_pxd03'); ?>">
                    <h3><?php the_field('titulo_pxd03'); ?></h3>
                </li>
                <li class="grid-8"><img src="<?php the_field('foto_pxd04'); ?>" alt="<?php the_field('titulo_pxd04'); ?>">
                    <h3><?php the_field('titulo_pxd04'); ?></h3>
                </li>
                <li class="grid-8"><img src="<?php the_field('foto_pxd05'); ?>" alt="<?php the_field('titulo_pxd05'); ?>">
                    <h3><?php the_field('titulo_pxd05'); ?></h3>
                </li>
            </ul>
            <!--lista_peixes-->
        </section>
        <!--peixe_dulc container-->


        <?php include(TEMPLATEPATH . "/inc/orcamento.php") ?>

    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>