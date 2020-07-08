<?php
/**
*Template Name: Produto - Diversos
**/
?>

<?php get_header('pages'); ?>
<!--MAIN-->
<main class="main">
    <!--IMAGE-->
    <div class="main_img"></div>
    <section id="produtos" class="main_product">
        <!--HEADER-->
        <header class="main_product_header">
            <div class="container">
                <h1>Conheça a nossa <br><span>Categoria de Diversos</span></h1>
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
                        <div class="main_product_content_product">
                            <!--CARD-->
                            <?php
                                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                                        $arg_produtos= [
                                            'posts_per_page' => 9,
                                            'post_type' => 'produtos',
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'categorias',
                                                    'field' => 'slug',
                                                    'terms' => 'diversos'
                                                ]
                                            ],
                                            'paged' => $paged,
                                        ];
                                    ?>
                            <?php
                                    // the query
                                    $the_query = new WP_Query( $arg_produtos); ?>

                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php get_template_part('template-parts/content', 'products'); ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                            <p><?php _e( 'Não existem produtos cadastrados no momento.' ); ?></p>
                            <?php endif; ?>
                        </div>
                        <!--PAGINATION-->

                        <div class="pagination mt-4">
                            <div class="container">
                                <nav>

                                    <?php
                                            $big = 999999999; // need an unlikely integer

                                            $pages = pagination(
                                                [
                                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                                    'format' => '?paged=%#%',
                                                    'current' => max( 1, get_query_var('paged') ),
                                                    'total' => $the_query->max_num_pages,
                                                    'prev_text' => '<',
                                                    'next_text' => '>',
                                                    'type' => 'array',
                                                ]
                                            );

                                            if( is_array( $pages ) ) {

                                                echo '<ul class="pagination justify-content-center">';
                                                foreach ( $pages as $page ) {
                                                    echo "<li class='page-item'>$page</li>";
                                                }
                                                echo '</ul>';
                                            }
                                            ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>