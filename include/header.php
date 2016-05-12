<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.php" class="standard-logo" data-dark-logo="images/logo-little.png"><img src="images/logo-little.png" alt="Groupe Annahda"></a>
                <a href="index.php" class="retina-logo" data-dark-logo="images/logo-little.png"><img src="images/logo-little.png" alt="Groupe Annahda"></a>
            </div><!-- #logo end -->
            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark">
                <ul>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="index.php"><div>Accueil</div></a>
                    </li>
                    <li <?= ($currentPage == "portfolio.php" || $currentPage == "portfolio-single-gallery.php") ? 'class="current"' : '' ?> >
                        <a href="portfolio.php"><div>Nos Projets</div></a>
                    </li>
                    <!--li ><a href="#"><div>Notre Offre</div></a></li-->
                    <li <?= ($currentPage == "about.php") ? 'class="current"' : '' ?>>
                        <a href="about.php"><div>A propos du groupe</div></a>
                    </li>
                    <li <?= ($currentPage == "contact.php") ? 'class="current"' : '' ?>>
                        <a href="contact.php"><div>Contact</div></a>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>