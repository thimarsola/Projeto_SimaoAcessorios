<?php get_header(); ?>
        <!--MAIN-->
        <main class="main">
            <!--FORM-->
            <section id="contato" class="main_contact">
                <div class="container">
                    <!--HEADER-->
                    <header class="main_contact_header">
                        <h1>Entre em Contato Conosco</h1>
                        <p>Quer conversar com um representante e ter o atendimento diferenciado em busca do melhor negócio Para você?</p>
                        <p>Preencha o formulário abaixo e vamos lhe direcionar para alguém que entende a sua necessidade!</p>
                    </header>
                    <!--CONTENT-->
                    <div class="main_contact_content">
                        <div class="main_contact_content_form">
                            <div class="main_contact_content_form_header">
                                <h2>
                                    <img src="<?php echo get_template_directory_uri() ?>/_cdn/img/vt-mail.svg" alt="Simão Acessórios">Envie um e-mail
                                </h2>
                            </div>

                            <!--FORM-->
                            <div class="main_contact_content_form_content">
                                <?php
                                    if (have_posts()) :
                                        while (have_posts()) : the_post();
                                            ?>
                                            <?php echo do_shortcode( '[contact-form-7 id="106" title="Single Form"]' ); ?>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <p>Não existem produtos cadastrados no momento.</p>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--INFORMATIONS-->
            <section class="main_informations">
                <div class="container">
                    <header class="main_informations_header">
                        <h1>Fale Conosco</h1>
                        <hr>
                    </header>
                    <!--CARD INFORMATIONS-->
                    <div class="main_informations_card">
                        <div class="row">
                            <!--CARD-->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                                <article class="main_informations_card_article">
                                    <!--HEADER-->
                                    <header class="main_informations_card_article_header">
                                        <h2>
                                            <img src="<?php echo get_template_directory_uri() ?>/_cdn/img/vt-mail.svg" alt="Simão Acessórios">
                                            Envie um e-mail
                                        </h2>
                                    </header>
                                    <!--CONTENT-->
                                    <div class="main_informations_card_article_content">
                                        <p>Nossos atendentes irão entrar em contato com você assim que possível.</p>
                                        <p><a href="mailto:simaoacessorios@yahoo.com.br">simaoacessorios@yahoo.com.br</a></p>
                                    </div>
                                </article>
                            </div>
                            <!--CARD-->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                                <article class="main_informations_card_article">
                                    <!--HEADER-->
                                    <header class="main_informations_card_article_header">
                                        <h2>
                                            <img src="<?php echo get_template_directory_uri() ?>/_cdn/img/vt-phone.svg" alt="Simão Acessórios">
                                            Por Telefone
                                        </h2>
                                    </header>
                                    <!--CONTENT-->
                                    <div class="main_informations_card_article_content">
                                        <p>Estamos disponíveis nos números abaixo no horário comercial.</p>
                                        <p><a href="tel:1143674065">(11) 4367-4065</a> | <a href="tel:1143685848">(11) 4368-5848</a></p>
                                    </div>
                                </article>
                            </div>
                            <!--CARD-->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                                <article class="main_informations_card_article">
                                    <!--HEADER-->
                                    <header class="main_informations_card_article_header">
                                        <h2>
                                            <img src="<?php echo get_template_directory_uri() ?>/_cdn/img/vt-whatsapp.svg" alt="Simão Acessórios">
                                            Por Whatsapp
                                        </h2>
                                    </header>
                                    <!--CONTENT-->
                                    <div class="main_informations_card_article_content">
                                        <p>Estamos disponíveis no número abaixo no horário comercial.</p>
                                        <p><a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511953284016">(11) 95328-4016</a></p>
                                    </div>
                                </article>
                            </div>
                            <!--CARD-->
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
                                <article class="main_informations_card_article">
                                    <!--HEADER-->
                                    <header class="main_informations_card_article_header">
                                        <h2>
                                            <img src="<?php echo get_template_directory_uri() ?>/_cdn/img/vt-place.svg" alt="Simão Acessórios">
                                            Pessoalmente
                                        </h2>
                                    </header>
                                    <!--CONTENT-->
                                    <div class="main_informations_card_article_content">
                                        <p>Estamos disponíveis no endereço abaixo no horário comercial.</p>
                                        <p><a href="https://goo.gl/maps/vcBV3QkueeF5ZbTe7" target="_blank">Rua Tibiriça, 338 - Vila Vivaldi - São Bernardo do Campo - SP</a></p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!--MAP-->
                    <div class="main_informations_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3946913652344!2d-46.56064318502034!3d-23.661839284633096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce431c6796a89d%3A0x810a2610615abec3!2sR.%20Tibiri%C3%A7%C3%A1%2C%20338%20-%20Rudge%20Ramos%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009616-020!5e0!3m2!1spt-BR!2sbr!4v1585583532550!5m2!1spt-BR!2sbr"></iframe>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>