<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div id="logo">
                <a href="index.php" class="standard-logo" data-dark-logo="images/logo-little.png"><img src="/images/logo-little.png" alt="Groupe Annahda"></a>
                <a href="index.php" class="retina-logo" data-dark-logo="images/logo-little.png"><img src="/images/logo-little.png" alt="Groupe Annahda"></a>
            </div>
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
                        <a href="/de/home"><div>Startseite</div></a>
                    </li>
                    <li <?= ($currentPage == "portfolio.php" || $currentPage == "portfolio-single-gallery.php") ? 'class="current"' : '' ?> >
                        <a href="/de/projects"><div>Unsere Projekte</div></a>
                    </li>
                    <li <?= ($currentPage == "about.php") ? 'class="current"' : '' ?>>
                        <a href="/de/about"><div>Über Annahda</div></a>
                    </li>
                    <li <?= ($currentPage == "contact.php") ? 'class="current"' : '' ?>>
                        <a href="/de/contact"><div>Kontakt</div></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>