<?php
// Template Name: Home
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <style>
            .qualidade-sobre:after {
                background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/linhas.png");
            }

            .peixe_lista li img {

                height: 320px;
                weight: 300px;
            }

            .introducao{
                background: url("<?php the_field('imagem_principal'); ?>") no-repeat center;
            }
        </style>

        <section class="introducao ">
            <div class="container">
                <h1><?php the_field('titulo_principal'); ?></h1>
                <blockquote class="quote_externo">
                    <p><?php the_field('quote_principal'); ?></p>
                    <cite><?php the_field('cite_principal'); ?></cite>
                </blockquote>
                <!--quote-externo-->
                <a class="btn" href="fishplanet/peixes">Orçamento</a>
            </div>
            <!--container-->

        </section>
        <!--introducao-->

        <section class="container animar">
            <h2 class="subtitulo">Peixes</h2>
            <ul class="peixe_lista">
                <?php
                        // the query
                        $args = array(
                            'post_type' => 'peixes',
                            'order'   => 'ASC'
                        );
                        $the_query = new WP_Query($args);
                        ?>
                <?php if ($the_query->have_posts()) : ?>
                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="grid-8">
                            <div>
                                <img src="<?php the_field('foto_pxd01'); ?>" alt="<?php the_field('titulo_pxd01'); ?>">
                            </div>
                            <h3>Peixes <?php the_title(); ?></h3>
                        </li>
                <?php endwhile;
                        else : endif; ?>
                <?php wp_reset_query();
                        wp_reset_postdata(); ?>
            </ul>
            <!--peixe_lista-->
            <div class="call">
                <p>Clique aqui e conheça nosso catálogo</p>
                <a href="fishplanet/peixes" class="btn btn-azul">Peixes</a>
            </div>
            <!--call-->
        </section>

        <section class="portfolio">
            <div class="container">
                <h2 class="subtitulo subtitulo-azul">Portfólio</h2>
                <?php include(TEMPLATEPATH . "/inc/portfolio-cliente.php") ?>
                <div class="call">
                    <p>Clique aqui e conheça nossos projetos</p>
                    <a href="fishplanet/portfolio" class="btn">Portfólio</a>
                </div>
                <!--call-->
            </div>
            <!--container-->
        </section>
        <!--portfolio-->

        <?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>


    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>