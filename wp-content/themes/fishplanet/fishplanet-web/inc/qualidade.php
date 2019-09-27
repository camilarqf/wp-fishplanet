<?php

$sobre = get_page_by_title('sobre');

?>


<section class="qualidade-sobre container">
    <h2 class="subtitulo-interno">Qualidade</h2>
    <img src="<?php the_field('logo_qualidade', $sobre); ?>" alt="logo fishplanet">
    <ul>
        <?php if (have_rows('lista_qualidade', $sobre)) : while (have_rows('lista_qualidade', $sobre)) : the_row(); ?>
                <li class="grid-1-3">
                    <h3><?php the_sub_field('titulo_qualidade'); ?></h3>
                    <p><?php the_sub_field('texto_qualidade'); ?></p>
                </li>
        <?php endwhile;
        else : endif; ?>
    </ul>
</section>
<!--qualidade-sobre container-->

<?php if (!is_page('sobre')) { ?>
    <div class="call">
        <p>Conheça mais sobre a gente</p>
        <a href="sobre.html" class="btn btn-azul">Sobre</a>
    </div>
    <!--call-->
    </section>
    <!--container-->

<?php } ?>