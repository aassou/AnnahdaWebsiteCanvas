<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-5">
                    <div class="heading-block topmargin">
                        <h1>Bienvenido a <br> Grupo Annahda Lil Iaamar.</h1>
                    </div>
                    <p class="lead"></p>
                </div>
                <div class="col-lg-7">
                    <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                        <img src="../images/logo-fullwidth.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                        <!--img src="images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome"-->
                        <!--img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad"-->
                    </div>
                </div>
            </div>
        </div>
        <div class="section nobottommargin">
            <div class="container clear-bottommargin clearfix">
            <div class="col_one_third bottommargin-sm center">
                <img data-animate="fadeInLeft" src="../images/logo-fullwidth.jpg" alt="Mission">
            </div>
            <div class="col_two_third bottommargin-sm col_last">
                <div class="heading-block topmargin-sm">
                    <h3>Nuestra misión</h3>
                </div>
                <p>
                    Grupo Annahda LIL IAAMAR sigue, en su política de edificios, una estrategia, la transparencia, la calidad, la confianza, la honestidad y el conocimiento de la obra. Este grupo es el fruto del esfuerzo, experiencia y formación en el campo durante mucho tiempo.
                </p>
                <p>
                    El grupo de proyectos es aprobado por la tremenda calidad de Architectur de acuerdo con las normas de la meta del grupo principal estado allí, la condición básica para aplicar a la comercialización, a saber es: relación calidad / precio, y simplemente acompañen al ciudadano de su sueño de ser propietario de un negocio para darse cuenta en breve.
                </p>
                <!--a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a-->
            </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="row topmargin-lg bottommargin-sm">
                <div class="heading-block center">
                    <h2>Nuestra propuesta</h2>
                    <!--span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span-->
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-star"></i></a>
                        </div>
                        <h3>Calidad alta</h3>
                        <p>Nuestra empresa garantiza un alojamiento de alta calidad para usted y su familia.</p>
                    </div>
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-plus"></i></a>
                        </div>
                        <h3>Precios competitivos</h3>
                        <p>El grupo Annahda tiene una serie de propiedades con precios competitivos.</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-heart"></i></a>
                        </div>
                        <h3>Acabado</h3>
                        <p>Con nuestra empresa, puede elegir su propio acabado que se desee.</p>
                    </div>
                    <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-dollar"></i></a>
                        </div>
                        <h3>Opciones de pago</h3>
                        <p>Pagar mensual, trimestral o semi? Con nuestras opciones de pago que es libre de elegir.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix bottommargin-lg common-height">
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="7" data-refresh-interval="5" data-speed="4000"></span> años</div>
                    <h3>de experiencia</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="14" data-refresh-interval="50" data-speed="4000"></span></div>
                    <h3>Proyectos</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="275" data-refresh-interval="25" data-speed="3500"></span></div>
                    <h3>Clientes satisfechos</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="300" data-refresh-interval="100" data-speed="3000"></span></div>
                    <h3>Apartamentos y locales comerciales</h3>
                </div>
            </div>
        </div>
        <div class="section topmargin nobottommargin nobottomborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3>Nuestros Proyectos</h3>
                </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio-nomargin portfolio-notitle portfolio-full clearfix">
            <?php
            foreach ( $projets as $projet ) {
                $image = "";
                if ( $imageManager->getImageNumberByIdProjet($projet->id()) >= 1 ) {
                    $image = $imageManager->getFirstImageByIdProjet($projet->id());
                    $image = '<img src="'.$image->url().'" />';    
                }
                else {
                    $image = '<img src="/images/logo_white.jpg" />'; 
                }
            ?>
            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image">
                    <a href="/es/project/<?= $projet->id() ?>">
                        <?= $image ?>
                    </a>
                    <div class="portfolio-overlay">
                        <a href="/es/project/<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="/es/project/<?= $projet->id() ?>"><?= $projet->name() ?></a></h3>
                </div>
            </article>
            <?php
            }
            ?>
        </div>
        <script type="text/javascript">jQuery(window).load(function(){var $container = $('#portfolio');$container.isotope({transitionDuration: '0.65s',masonry: {columnWidth: $container.find('.portfolio-item:not(.wide)')[0]}});$('#page-menu a').click(function(){$('#page-menu li').removeClass('current');$(this).parent('li').addClass('current');var selector = $(this).attr('data-filter');$container.isotope({ filter: selector });return false;});$(window).resize(function() {$container.isotope('layout');});});</script>
        <div class="clear"></div>
        <a href="/es/projects" class="button button-full button-dark center tright bottommargin-lg">
            <div class="container clearfix">
                O todos los proyectos del Grupo Annahda. <Strong> Haga clic aquí</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <div class="section parallax dark nobottommargin" style="background-image: url('../images/holdinggroup2.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">
            <div class="heading-block center">
                <h3>Iaaza compañía de construcción</h3>
            </div>
            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <div class="testi-content">
                                <p>
                                    La citada empresa se encuentra en la ciudad de Nador en 2014 sobre la base del Grupo
                                    Annahda Lil Iaamar para tomar el gran mercado en el ataque
                                    La construcción a nivel nacional, respetando siempre
                                    la relación calidad / precio. <br/>
                                    Por lo tanto le invitamos a nuestro honorable confianza
                                    Institución de Inmobiliaria Construye tu futuro.
                                    En este caso: El resultado es una promesa!      
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>