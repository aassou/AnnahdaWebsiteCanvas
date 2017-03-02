<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!--header id="header" class="transparent-header full-header" data-sticky-class="not-dark"-->
<header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="/home" class="standard-logo" data-dark-logo="/images/logo-square.png"><img src="/images/logo-square.png" alt="Groupe Annahda"></a>
                <a href="/home" class="retina-logo" data-dark-logo="/images/logo-square.png"><img src="/images/logo-square.png" alt="Groupe Annahda"></a>
            </div><!-- #logo end -->
            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark">
                <ul>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/home" title="Français"><img src="/images/icons/flags/french.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/de/" title="Deutsch"><img src="/images/icons/flags/german.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/nl/" title="Nederlands"><img src="/images/icons/flags/netherlands.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/es/" title="Español"><img src="/images/icons/flags/spain.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/home"><div>Accueil</div></a>
                    </li>
                    <li <?= ($currentPage == "portfolio.php" || $currentPage == "portfolio-single-gallery.php") ? 'class="current"' : '' ?> >
                        <a href="/projects"><div>Nos Projets</div></a>
                    </li>
                    <!--li ><a href="#"><div>Notre Offre</div></a></li-->
                    <li <?= ($currentPage == "about.php") ? 'class="current"' : '' ?>>
                        <a href="/about"><div>A propos du groupe</div></a>
                    </li>
                    <li <?= ($currentPage == "contact.php") ? 'class="current"' : '' ?>>
                        <a href="/contact"><div>Contact</div></a>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>