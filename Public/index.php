<?php
include 'Models/Navbar.php';
include 'Models/ItemPortafolio.php';
include 'Models/ItemModal.php';

?>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Pagina modular con PHP</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Oscar David Alvarez Martínez</p>
    </div>
</header>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portafolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <?php
            // Llamar a la función para renderizar items del portafolio
            renderPortfolioItem('assets/img/portfolio/cabin.png', '#portfolioModal1');
            renderPortfolioModal(
                'portfolioModal1',
                'SITIOS WEB',
                'assets/img/portfolio/cabin.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            renderPortfolioItem('assets/img/portfolio/cake.png', '#portfolioModal2');
            renderPortfolioModal(
                'portfolioModal2',
                'APLICACIONES MOVILES',
                'assets/img/portfolio/cake.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            renderPortfolioItem('assets/img/portfolio/circus.png', '#portfolioModal3');
            renderPortfolioModal(
                'portfolioModal3',
                'PLATAFORMAS DE E-COMMERCE',
                'assets/img/portfolio/circus.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            renderPortfolioItem('assets/img/portfolio/game.png', '#portfolioModal4');
            renderPortfolioModal(
                'portfolioModal4',
                'APLICACIONES WEB',
                'assets/img/portfolio/game.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            renderPortfolioItem('assets/img/portfolio/safe.png', '#portfolioModal5');
            renderPortfolioModal(
                'portfolioModal5',
                'APLICACIONES MOVILES',
                'assets/img/portfolio/safe.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            renderPortfolioItem('assets/img/portfolio/submarine.png', '#portfolioModal6');
            renderPortfolioModal(
                'portfolioModal6',
                'SITIOS WEB',
                'assets/img/portfolio/submarine.png',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            );
            ?>
        </div>
    </div>
</section>
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">sobre mi</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class=" ms-auto">
                <p class="lead">Hola, soy Óscar Álvarez.

                    Soy un apasionado desarrollador web con experiencia en la creación de aplicaciones y sitios web
                    interactivos. Me especializo en el desarrollo frontend utilizando tecnologías modernas como React,
                    CSS y HTML5 para crear interfaces atractivas y funcionales. Además, tengo experiencia en el
                    desarrollo backend con PHP, trabajando en aplicaciones modulares y escalables.

                    Mi enfoque se basa en la combinación de diseño atractivo y funcionalidad robusta, siempre buscando
                    mejorar la experiencia del usuario y adaptarme a las últimas tendencias tecnológicas. En mi tiempo
                    libre, disfruto de explorar nuevas tecnologías y experimentar con técnicas innovadoras para mejorar
                    mis habilidades y conocimientos.</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="assets/img/curriculum.jpg" download="curriculum.jpg">
                <i class="fas fa-download me-2"></i>
                Descargar Curriculum
            </a>
        </div>
    </div>
</section>
<?php
include 'Models/Contact.php';
include 'Models/Footer.php';
?>