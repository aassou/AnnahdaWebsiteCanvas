<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.php" class="standard-logo" data-dark-logo="images/logo-little.png"><img src="../images/logo-little.png" alt="Groupe Annahda"></a>
                <a href="index.php" class="retina-logo" data-dark-logo="images/logo-little.png"><img src="../images/logo-little.png" alt="Groupe Annahda"></a>
            </div><!-- #logo end -->
            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark">
                <ul>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="http://costetics.esy.es/index.php" title="Français"><img src="../images/icons/flags/french.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="http://costetics.esy.es/de/index.php" title="Deutsch"><img src="../images/icons/flags/german.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="http://costetics.esy.es/nl/index.php" title="Nederlands"><img src="../images/icons/flags/netherlands.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="http://costetics.esy.es/es/index.php" title="Español"><img src="../images/icons/flags/spain.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="index.php"><div>Home</div></a>
                    </li>
                    <li <?= ($currentPage == "portfolio.php" || $currentPage == "portfolio-single-gallery.php") ? 'class="current"' : '' ?> >
                        <a href="portfolio.php"><div>Onze projecten</div></a>
                    </li>
                    <!--li ><a href="#"><div>Notre Offre</div></a></li-->
                    <li <?= ($currentPage == "about.php") ? 'class="current"' : '' ?>>
                        <a href="about.php"><div>Over Annahda</div></a>
                    </li>
                    <li <?= ($currentPage == "contact.php") ? 'class="current"' : '' ?>>
                        <a href="contact.php"><div>Contact</div></a>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>