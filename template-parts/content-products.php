<article class="main_product_content_product_card">
    <!--CARD IMAGE-->
    <div class="main_product_content_product_card_image">
        <?php if( get_field('imagem_do_produto') ): ?>
            <img src="<?php the_field('imagem_do_produto'); ?>" alt="Simão Acessórios"/>
        <?php endif; ?>
    </div>
    <!--CARD CONTENT-->
    <div class="main_product_content_product_card_content">
        <!--HEADER-->
        <header class="main_product_content_product_card_content_header">
            <h2><?php the_title() ?></h2>
            <hr>
        </header>
        <!--CONTENT-->
        <div class="main_product_content_product_card_content_body">
            <p><strong>Referência:</strong> <?php the_field('codigo_do_produto'); ?></p>
            <p><strong>Cores disponíveis:</strong> <?php the_field('cor_do_produto'); ?></p>

            <a href="<?php the_permalink(); ?>" class="btn btn-color1 btn-block">Solicitar Orçamento</a>
        </div>
    </div>

</article>