<?php
$contato = get_page_by_title('contato');
$peixes = get_page_by_title('peixes');
?>
<section class="container orcamento">
    <h2 class="subtitulo-interno">Orçamento</h2>
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

        <label for="espec">Especificações</label>
        <textarea name="espec" id="espec"></textarea>

        <button id="enviar" name="enviar" type="submit" class="btn btn-azul">Enviar</button>
    </form>



    <div class="contato-orcamento">
        <div class="grid-8">
            <h3>Dados</h3>
            <ul>
                <li><?php the_field('telefone', $contato); ?></li>
                <li><?php the_field('email', $contato); ?></li>
            </ul>

            <h3>Monte seu Aquário</h3>
            <p>Escolha suas especificações:</p>
        </div>

        <div class="lista-espec grid-8">
            <?php the_field('orcamento-lista', $peixes); ?>
        </div>
        <!--lista-espec grid-8-->
    </div>
    <!--contato-orcamento-->
</section>
<!--container orcamento-->