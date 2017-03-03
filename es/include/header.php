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
                <a href="/es/home" class="standard-logo" data-dark-logo="/images/logo-little.png"><img src="/images/logo-little.png" alt="Groupe Annahda"></a>
                <a href="/es/home" class="retina-logo" data-dark-logo="/images/logo-little.png"><img src="/images/logo-little.png" alt="Groupe Annahda"></a>
            </div><!-- #logo end -->
            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark">
                <ul>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/home" title="Français"><img src="/images/icons/flags/french.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/de/home" title="Deutsch"><img src="/images/icons/flags/german.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/nl/home" title="Nederlands"><img src="/images/icons/flags/netherlands.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/es/home" title="Español"><img src="/images/icons/flags/spain.png" /></a>
                    </li>
                    <li <?= ($currentPage == "index.php") ? 'class="current"' : '' ?> >
                        <a href="/es/home"><div>Inicio</div></a>
                    </li>
                    <li <?= ($currentPage == "portfolio.php" || $currentPage == "portfolio-single-gallery.php") ? 'class="current"' : '' ?> >
                        <a href="/es/projects"><div>Nuestros proyectos</div></a>
                    </li>
                    <!--li ><a href="#"><div>Notre Offre</div></a></li-->
                    <li <?= ($currentPage == "about.php") ? 'class="current"' : '' ?>>
                        <a href="/es/about"><div>Acerca de Annahda</div></a>
                    </li>
                    <li <?= ($currentPage == "contact.php") ? 'class="current"' : '' ?>>
                        <a href="/es/contact"><div>Contacto</div></a>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header>