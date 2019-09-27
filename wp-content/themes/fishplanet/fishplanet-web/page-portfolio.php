<?php
// Template Name: Portfólio
?>
<!-- teste -->

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <section class="container animar-interna">

            <ul class="rslides">
                <?php if (have_rows('quote_portfolio')) : while (have_rows('quote_portfolio')) : the_row(); ?>
                        <li>
                            <blockquote class="quote-cliente">
                                <p><?php the_sub_field('texto-cliente'); ?></p>

                                <cite><?php the_sub_field('nome-cliente'); ?></cite>
                            </blockquote>
                            <!--"quote-cliente-->
                        </li>
                    <?php endwhile;
                            else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </ul>
            <!--rslides-->



        </section>
        <!--container-->

        <section class="fotos-portfolio animar-interna">
            <div class="container">
            <?php include(TEMPLATEPATH . "/inc/portfolio-cliente.php") ?>
            </div>
        </section>

        <script>
            $(function() {
                $(".rslides").responsiveSlides();
            });
        </script>
        <script>
            $(function() {
                $(".rslides-portfolio").responsiveSlides();
            });
        </script>

    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>