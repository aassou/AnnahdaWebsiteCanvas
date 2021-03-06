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
        <a href="portfolio.php" class="button button-full button-dark center tright bottommargin-lg">
            <div class="container clearfix">
                Voire tous les projets du Groupe Annahda. <strong>Cliquez ici</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
    </div>
</section>