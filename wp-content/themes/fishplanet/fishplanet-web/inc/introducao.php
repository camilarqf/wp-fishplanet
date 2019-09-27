  <!--pegar os tamanhos de imagem definidos no functions.php para responsivo-->

        <?php
                $imagem_id = get_field('background_titulo');
                $background_large = wp_get_attachment_image_src($imagem_id, 'large');
                $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
                ?>

        <style type="text/css">
             .introducao-interna-bg {
                background: url('<?php echo $background_large[0] ?>') no-repeat center;
                background-size: cover;
            }

            @media only screen and (max-width: 767px) {
                .introducao-interna-bg {
                    background: url('<?php echo $background_medium[0] ?>') no-repeat center;
                    background-size: cover;
                }
            }
        </style>


<section class="introducao-interna introducao-interna-bg">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('subtitulo'); ?></p>
    </div>
</section>
