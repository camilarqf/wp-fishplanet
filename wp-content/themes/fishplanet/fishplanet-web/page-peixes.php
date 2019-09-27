<?php
// Template Name: Peixes
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <style>
            .peixe_dulc img {
                padding-top: 40px;
            }
        </style>

        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <?php
                // the query
                $args = array(
                    'post_type' => 'peixes',
                    'order'   => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>

        <?php if ($the_query->have_posts()) : ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <section class="peixe_dulc animar-interna ">
                    <div class="container">
                        <div class="grid-16">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="subtitulo-interno"><?php the_title(); ?></h2>
                                <img src="<?php the_field('foto_categoria'); ?>">
                            </a>
                        </div>
                    </div>

                </section>
                <!--peixe_dulc container-->
        <?php endwhile;
                else : endif; ?>
        <?php wp_reset_query();
                wp_reset_postdata(); ?>


        <?php include(TEMPLATEPATH . "/inc/orcamento.php") ?>

    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>