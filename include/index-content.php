<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-5">
                    <div class="heading-block topmargin">
                        <h1>Bienvenue Chez<br>Groupe Annahda Lil Iaamar.</h1>
                    </div>
                    <p class="lead"></p>
                </div>
                <div class="col-lg-7">
                    <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                        <img src="images/hello.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                    </div>
                </div>
            </div>
        </div>
        <img src="/images/intro.png">
        <div class="container clearfix">
            <div class="row topmargin-lg bottommargin-sm">
                <div class="heading-block center">
                    <h2>Notre offre</h2>
                    <!--span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span-->
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-star"></i></a>
                        </div>
                        <h3>Haute Qualité</h3>
                        <p>Notre société vous garantit un logement de haute qualité pour vous et votre famille.</p>
                    </div>
                    <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-plus"></i></a>
                        </div>
                        <h3>Prix compétetifs</h3>
                        <p>Le groupe Annahda vous propose une gamme de biens immobiliers avec des prix compétitifs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                </div>
                <div class="col-md-4 col-sm-6 bottommargin">
                    <div class="feature-box topmargin" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-heart"></i></a>
                        </div>
                        <h3>Finition</h3>
                        <p>Avec notre société vous pouvez choisir votre propre finition selon vos besoins.</p>
                    </div>
                    <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-dollar"></i></a>
                        </div>
                        <h3>Facilités de paiement</h3>
                        <p>Payer par mois, par trimestre ou par semestre ? Avec nos facilités de paiement vous êtes libre à choisir.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix bottommargin-lg common-height">
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="7" data-refresh-interval="5" data-speed="4000"></span> ans</div>
                    <h3>d'expérience</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="22" data-refresh-interval="50" data-speed="4000"></span></div>
                    <h3>Projets</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="600" data-refresh-interval="25" data-speed="3500"></span></div>
                    <h3>Appartements et Locaux commerciaux</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                <div>
                    <div class="counter counter-lined"><span data-from="1" data-to="570" data-refresh-interval="100" data-speed="3000"></span></div>
                    <h3>Clients +</h3>
                </div>
            </div>
        </div>
        <div class="section topmargin nobottommargin nobottomborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3>Nos projets</h3>
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
                    $image = '<img src="images/logo_white.jpg" />'; 
                }
            ?>
            <article class="portfolio-item pf-media pf-icons">
                <div class="portfolio-image">
                    <a href="/project/<?= $projet->id() ?>">
                        <?= $image ?>
                    </a>
                    <div class="portfolio-overlay">
                        <a href="/project/<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="/project/<?= $projet->id() ?>">Résidence <?= $projet->name() ?></a></h3>
                </div>
            </article>
            <?php
            }
            ?>
        </div>
        <script type="text/javascript">jQuery(window).load(function(){var $container = $('#portfolio');$container.isotope({transitionDuration: '0.65s',masonry: {columnWidth: $container.find('.portfolio-item:not(.wide)')[0]}});$('#page-menu a').click(function(){$('#page-menu li').removeClass('current');$(this).parent('li').addClass('current');var selector = $(this).attr('data-filter');$container.isotope({ filter: selector });return false;});$(window).resize(function() {$container.isotope('layout');});});</script>
        <div class="clear"></div>
        <a href="/projects" class="button button-full button-dark center tright bottommargin-lg">
            <div class="container clearfix">
                Voire tous les projets du Groupe Annahda. <strong>Cliquez ici</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <!--div class="section parallax dark nobottommargin" style="background-image: url('images/holdinggroup2.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">
            <div class="heading-block center">
                <h3>Société Iaaza de construction</h3>
            </div>
            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <div class="testi-content">
                                <p>
                                    La dite société est fondée à la ville de Nador en 2014 par le Groupe
                                    Annahda Lil Iaamar, en vue d ́attaquer le grand marché
                                    de la construction au niveau National en respectant toujours
                                    le rapport Qualité/Prix.<br/><br/>
                                    De ce fait, nous vous invitons de faire confiance a notre honorable
                                    Établissement pour bien Construire votre avenir.
                                    En l ́occurrence: Le résultat, approuve la promesse !        
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
    </div>
</section>