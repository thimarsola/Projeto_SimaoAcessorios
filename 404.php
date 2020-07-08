<?php get_header('404'); ?>
<main class="main_error">
    <div class="container">
        <header class="main_error_header">
            <h1>404</h1>
            <div class="main_error_header_box">
                <p>Opps! Página não encontrada</p>
            </div>
        </header>

        <div class="main_error_content">
            <p>A página que você está procurando não existe. Você pode ter digitado o endereço errado ou a página pode ter sido removida.</p>
        </div>

        <div class="main_error_content_btn">
            <a href="<?php echo get_home_url(); ?>" class="btn btn-color1">Voltar para o início</a>
        </div>
    </div>
</main>
<?php get_footer('404'); ?>