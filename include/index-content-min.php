<section id="content">
    <div class="content-wrap">
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
                    <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>">
                        <?= $image ?>
                    </a>
                    <div class="portfolio-overlay">
                        <a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>" class="left-icon"><i class="icon-line-plus"></i></a>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="portfolio-single-gallery.php?idProjet=<?= $projet->id() ?>"><?= $projet->name() ?></a></h3>
                </div>
            </article>
            <?php
            }
            ?>
        </div>
        <script type="text/javascript">

            jQuery(window).load(function(){

                var $container = $('#portfolio');

                $container.isotope({
                    transitionDuration: '0.65s',
                    masonry: {
                        columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
                    }
                });

                $('#page-menu a').click(function(){
                    $('#page-menu li').removeClass('current');
                    $(this).parent('li').addClass('current');
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector });
                    return false;
                });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

            });
        </script>
        <div class="clear"></div>
        <a href="portfolio.php" class="button button-full button-dark center tright bottommargin-lg">
            <div class="container clearfix">
                Voire tous les projets du Groupe Annahda. <strong>Cliquez ici</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <div class="section parallax dark nobottommargin" style="background-image: url('http://hholdinggroup.com/wp-content/uploads/2013/03/hholdinggroup2.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">
            <div class="heading-block center">
                <h3>Société Iaaza de construction</h3>
            </div>
            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide">
                            <!--div class="testi-image">
                                <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                            </div-->
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
        </div>
    </div>
</section>