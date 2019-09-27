<?php

$contato = get_page_by_title('contato');

?>

<style>
    .quebra {
        background: url("<?php the_field('imagem_footer', $contato); ?>") no-repeat center;
    }
</style>

<section class="quebra">
    <div class="container">
        <blockquote class="quote_externo">
            <p><?php the_field('quote_footer', $contato); ?></p>
            <cite><?php the_field('cite_footer', $contato); ?></cite>
        </blockquote>
        <!--quote-externo-->
    </div>
    <!--container-->
</section>
<!--quebra-->

<footer class="footer">
    <div class="container">
        <div class="nossa_historia grid-8">

            <h3>Nossa História</h3>
            <p><?php the_field('texto_historia', $contato); ?>
            </p>

        </div>
        <!--nossa_historia grid-8-->

        <div class="contato grid-4">
            <h3>Contato</h3>
            <ul>
                <li>- <?php the_field('email', $contato); ?></li>
                <li> - <?php the_field('telefone', $contato); ?></li>
                <li> - <?php the_field('cidade', $contato); ?></li>
            </ul>
        </div>
        <!--contato grid-4-->

        <div class="redes_sociais grid-4">
        <h3>Redes sociais</h3>
            <?php include(TEMPLATEPATH . "/inc/redes-sociais.php") ?>
        </div>
        <!--redes_sociais grid-4-->


    </div>
    <!--container-->
    <div class="copy">
        <div class="container">
            <p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Alguns direitos reservados </p>
        </div>
        <!--container-->
    </div>
    <!--copy-->
</footer>
<!--footer-->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145821990-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-145821990-1');
</script>

<?php wp_footer(); ?>

</body>

</html>