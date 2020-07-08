<footer class="footer">
    <!--FOOTER CTA-->
    <div class="footer_cta">
        <div class="container">
            <!--HEADER-->
            <div class="footer_cta_header">
                <p>Quer ficar por dentro de nossas novidades?</p>
                <hr>
            </div>
            <!--CONTENT-->
            <div class="footer_cta_content">
                <p>Deixe o seu nome e o seu melhor e-mail nos campos abaixo e vamos lhe informar sobre todos os nossos lançamentos!</p>
                <div class="footer_cta_content_form">
                    <?php echo do_shortcode( '[contact-form-7 id="109" title="CTA Form"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <!--COPYRIGHT-->
    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_content">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/logo-footer.jpg" alt="Simão Acessórios" class="img-fluid">
                <p>Todos os direitos reservados</p>
            </div>
        </div>
    </div>
    <!--DEVELOPER-->
    <div class="footer_developer">
        <div class="container">
            <p>Desenvolvido por <a href="http://goognet.com.br" title="Especializados em Marketing Digital">Goognet Solução Digital</a></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>