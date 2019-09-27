<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <style>
            .qualidade-sobre:after {
                background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/linhas.png");
            }
        </style> 

        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <section class="container animar-interna">
            <div class="missao-sobre grid-10">
                <h2 class="subtitulo-interno"><?php the_field("titulo_missao"); ?></h2>
                <p><?php the_field("texto_missao"); ?></p>
            </div>
            <!--missao-sobre grid-10-->

            <div class="valores-sobre grid-6">
                <h2 class="subtitulo-interno"><?php the_field("titulo_valores"); ?></h2>
                <?php the_field("texto_valores"); ?>
            </div>
            <!--valores-sobre grid-6-->
        </section>
        <!--container-->
        <section class="container equipe">
            <img src="<?php the_field('imagem_equipe') ?>" class="grid-16" alt="equipe fishplanet">
        </section>
        <!--container equipe-->


        <?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>


    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>