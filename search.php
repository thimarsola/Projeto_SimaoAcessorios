<?php get_header('pages'); ?>
        <!--MAIN-->
        <main class="main">
            <!--IMAGE-->
            <div class="main_img"></div>
            <section id="produtos" class="main_product">
                <!--HEADER-->
                <header class="main_product_header">
                    <div class="container">
                        <h1>Conheça a nossa <br><span>Linha de Produtos</span></h1>
                        <hr>
                        <p>Conheça abaixo toda a nossa linha de produtos</p>
                    </div>
                </header>
                <!--CONTENT-->
                <div class="main_product_content">
                    <div class="container">
                        <div class="row">
                            <!--FILTER-->
                            <div class="col-lg-3 mb-5">
                                <!--SEARCH FORM-->
                                <?php get_sidebar('busca'); ?>
                            </div>
                            <!--PRODUCTS-->
                            <div class="col-lg-9 mb-4">

                                <?php
                                if (is_search()):
                                    $totalResults = $wp_query->found_posts;

                                    echo "<p>" . sprintf(__('%s resultado(s) para "%s"','Simão Acessórios'), $totalResults, get_search_query
                                        ()) . "</p>";
                                endif;
                                ?>

                                <div class="main_product_content_product">
                                    <!--CARD-->
                                    <?php
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                            ?>
                                            <?php
                                            get_template_part('template-parts/content', 'products');
                                            ?>
                                        <?php endwhile; ?>
                                    <?php else:
                                        get_404_template();
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>