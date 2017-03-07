<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-5">
                    <div class="heading-block topmargin">
                        <h1>Welkom bij <br> Groep Annahda Lil Iaamar.</h1>
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
                    <h3>Onze missie</h3>
                </div>
                <p>
                    Groep Annahda LIL IAAMAR, volgt in het gebouwenbeleid, een strategie, transparantie, kwaliteit, vertrouwen, eerlijkheid en kennis van het spel. Deze groep is de vrucht van de inspanningen, ervaring en opleiding in het veld voor een lange periode.
                </p>
                <p>
                    De groep projecten is goedgekeurd door de enorme kwaliteit van architectur volgens de normen van het doel van de staat hoofdgroep daar, de basisvoorwaarde toe te passen op marketing, te weten is: prijs / kwaliteit verhouding, en gewoon begeleiden de burger zijn droom om een ondernemer te realiseren binnenkort.
                </p>
                <!--a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a-->
            </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="row topmargin-lg bottommargin-sm">
                <div class="heading-block center">
                    <h2>Ons voorstel</h2>
                    <!--span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span-->
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-star"></i></a>
                        </div>
                        <h3>Hoge kwaliteit</h3>
                        <p>Ons bedrijf staat garant voor hoge kwaliteit accommodatie voor u en uw gezin.</p>
                    </div>
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-plus"></i></a>
                        </div>
                        <h3>Concurrerende prijzen</h3>
                        <p>De groep Annahda heeft een aantal eigenschappen met concurrerende prijzen.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-heart"></i></a>
                        </div>
                        <h3>Afwerking</h3>
                        <p>Met ons bedrijf, kunt u uw eigen afwerking te kiezen zoals gewenst.</p>
                    </div>
                    <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-dollar"></i></a>
                        </div>
                        <h3>Betalingsmogelijkheden</h3>
                        <p>Betaalt maandelijks, per kwartaal of semi? Met onze betalingsopties bent u vrij om te kiezen.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix bottommargin-lg common-height">
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="7" data-refresh-interval="5" data-speed="4000"></span> ans</div>
                    <h3> Ervaring</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="14" data-refresh-interval="50" data-speed="4000"></span></div>
                    <h3>Projecten</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="275" data-refresh-interval="25" data-speed="3500"></span></div>
                    <h3>Tevreden klanten</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="300" data-refresh-interval="100" data-speed="3000"></span></div>
                    <h3>Appartementen en commerciële ruimte</h3>
                </div>
            </div>
        </div>
        <div class="section topmargin nobottommargin nobottomborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3>Onze projecten</h3>
                </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio-nomargin portfolio-notitle portfolio-full clearfix">
            <?php
            foreach ( $projets as $projet ) {
                $image = "";
                if ( $imageManager->getImageNumberByIdProjet($projet->id()) >= 1 ) {
                    $image = $imageManager->getFirstImageByIdProjet($projet->id());
                    $image = '<img src="'.$image->url().'-/resize/276x260/" />';    
                }
                else {
                    $image = '<img src="images/logo_white.jpg" />'; 
                }
            ?>
            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image">
                    <a href="/nl/project/<?= $projet->id() ?>">
                        <?= $image ?>
                    </a>
                    <div class="portfolio-overlay">
                        <a href="/nl/project/<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="/nl/project/<?= $projet->id() ?>">Residentie <?= $projet->name() ?></a></h3>
                </div>
            </article>
            <?php
            }
            ?>
        </div>
        <script type="text/javascript">jQuery(window).load(function(){var $container = $('#portfolio');$container.isotope({transitionDuration: '0.65s',masonry: {columnWidth: $container.find('.portfolio-item:not(.wide)')[0]}});$('#page-menu a').click(function(){$('#page-menu li').removeClass('current');$(this).parent('li').addClass('current');var selector = $(this).attr('data-filter');$container.isotope({ filter: selector });return false;});$(window).resize(function() {$container.isotope('layout');});});</script>
        <div class="clear"></div>
        <a href="/nl/projects" class="button button-full button-dark center tright bottommargin-lg">
            <div class="container clearfix">
                Of alle Annahda Groep projecten. <Strong> Klik hier</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <div class="section parallax dark nobottommargin" style="background-image: url('../images/holdinggroup2.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">
            <div class="heading-block center">
                <h3>Bouw Iaaza</h3>
            </div>
            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <div class="testi-content">
                                <p>
                                    De genoemde onderneming is gevestigd in de stad Nador in 2014 op basis van de Groep
                                    Annahda Lil Iaamar naar de grote markt in de aanval
                                    Het bouwen op nationaal niveau, altijd met respect voor
                                    de prijs / kwaliteit verhouding. <br/>
                                    Daarom nodigen wij u uit om onze eervolle vertrouwen
                                    Instituut voor Real Estate Bouw je toekomst.
                                    In dit geval: Het resultaat is een belofte!   
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>