<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <section class="container contato-form animar-interna">
            <form action="enviar.php" method="post" name="form" class="formphp grid-8">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="text">
                <label for="telefone">Telefone</label>
                <input id="telefone" name="telefone" type="text">

                <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                <input type="text" class="nao-aparece" name="leaveblank">
                <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                <input type="text" class="nao-aparece" name="dontchange" value="http://">

                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem"></textarea>

                <button id="enviar" name="enviar" type="submit" class="btn btn-azul">Enviar</button>
            </form>

            <div class="contato-dados grid-8">
                <div>
                    <h3>Dados</h3>
                    <ul>
                        <li><?php the_field('telefone'); ?></li>
                        <li><?php the_field('email'); ?></li>
                        <li><?php the_field('endereco'); ?></li>
                        <li><?php the_field('cidade'); ?></li>
                    </ul>

                </div>
            </div>

            <div class="redes_sociais redes-azul">
                <div class=" grid-8">
                    <h3>Redes sociais</h3>
                    <?php include(TEMPLATEPATH . "/inc/redes-sociais.php") ?>
                </div>

            </div>
            <!--redes_sociais grid-8-->

            <!--contato-orcamento-->
        </section>

        <section class="mapa container">
            <div class="grid-16"><a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('mapa'); ?>" alt="localização-mapa"></a></div>

        </section>

    <?php endwhile;
    else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>