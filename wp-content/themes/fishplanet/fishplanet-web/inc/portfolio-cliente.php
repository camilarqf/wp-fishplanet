<?php 
$portfolio = get_page_by_title('portfólio');
?>

<ul class="portfolio-lista rslides-portfolio">
    <?php if (have_rows('portfolio_cliente', $portfolio)) : while (have_rows('portfolio_cliente', $portfolio)) : the_row(); ?>
            <li>
                <div class="grid-8"><img src="<?php the_sub_field('foto_port_01'); ?>" alt="<?php the_sub_field('descricao_port_01'); ?>"></div>
                <div class="grid-8"><img src="<?php the_sub_field('foto_port_02'); ?>" alt="<?php the_sub_field('descricao_port_02'); ?>"></div>
                <div class="grid-16"><img src="<?php the_sub_field('foto_port_03'); ?>" alt="<?php the_sub_field('descricao_port_03'); ?>"></div>
            </li>
        <?php endwhile;
        else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</ul>