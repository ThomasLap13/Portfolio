<?php
$base_path = './';
include './includes/header.php';
?>

<head>
    <title>Accueil - Thomas Portefolio</title>
</head>

<main>
    <div class="welcome-screen" id="welcomeScreen"> <!-- Accueil -->
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Bienvenue sur mon Portfolio</h1>
            <p class="lead mb-5">Thomas Lapierre, étudiant alternant IT passionné par le développement, le réseau et l'innovation.</p>
            <button class="btn-custom btn-lg" onclick="hideWelcome()">
                <i class="fas fa-arrow-down me-2"></i> Découvrir mon univers
            </button>
        </div>
    </div>

    <div class="container mt-5 hidden" id="spacer-1">
        <div style="min-height: 100px;"></div>
    </div>

    <div class="container mt-5 hidden" id="a-propos"> <!-- A Propos -->
        <h2 class="text-center section-title">À propos de moi</h2>
        
        <div class="row align-items-center mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="card p-5 border-0 shadow-lg">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <img src="./assets/images/da/PP.jpg" alt="Thomas Lapierre" class="img-fluid rounded-circle shadow-lg" style="width: 200px; height: 200px; object-fit: cover; border: 4px solid var(--primary-color);">
                        </div>
                        <div class="col-md-8">
                            <p class="fs-5 text-muted">
                                Bonjour, je m'appelle <strong class="text-white">Thomas Lapierre</strong>, j'ai 18 ans et je suis basé à Besançon.
                                <br><br>
                                Actuellement étudiant en <strong>BTS Services Informatiques aux Organisations (SIO)</strong> au Lycée Saint-Bénigne à Dijon, je me spécialise dans les solutions d'infrastructure, systèmes et réseaux (SISR).
                                <br><br>
                                Passionné par la tech depuis toujours, je combine mes études avec une alternance enrichissante qui me permet de mettre en pratique mes compétences en <strong>administration système, réseau et cybersécurité</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-5" data-bs-ride="carousel"> <!-- Etablissements -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/formations/saint-benigne.jpg" class="d-block w-100" alt="Lycée Saint-Bénigne">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BTS SIO</h5>
                        <p>Lycée Saint-Bénigne - Dijon</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/formations/saint-joseph.jpg" class="d-block w-100" alt="Lycée Saint-Joseph">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BAC PRO SN</h5>
                        <p>Lycée Saint-Joseph - Besançon</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/formations/victor-hugo.jpg" class="d-block w-100" alt="Collège Victor-Hugo">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Collège</h5>
                        <p>Victor-Hugo - Besançon</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container mt-5 hidden" id="offres"> <!-- Sommaire -->
        <h2 class="text-center section-title">Explorer mon Portfolio</h2>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/da/projets.jpg" class="card-img-top" alt="Projets" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><i class="fas fa-code me-2 text-primary"></i>Projets</h5>
                        <p class="card-text flex-grow-1">Découvrez mes réalisations professionnelles, personnelles et scolaires.</p>
                        <div class="d-flex justify-content-between mt-3 gap-2">
                            <a href="<?php echo $base_path; ?>projets-perso" class="btn btn-sm btn-outline-light flex-grow-1">Perso</a>
                            <a href="<?php echo $base_path; ?>projets-scolaires" class="btn btn-sm btn-outline-light flex-grow-1">Scolaire</a>
                        </div>
                         <a href="<?php echo $base_path; ?>projets-entreprise" class="btn btn-sm btn-custom mt-2 w-100">Entreprise</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/da/evenements.jpg" class="card-img-top" alt="evenements" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><i class="fas fa-calendar-alt me-2 text-primary"></i>Événements</h5>
                        <p class="card-text flex-grow-1">Retour sur les événements tech auxquels j'ai participé.</p>
                        <a href="<?php echo $base_path; ?>evenements" class="btn btn-custom mt-3">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/da/veilles.jpg" class="card-img-top" alt="veilles" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><i class="fas fa-newspaper me-2 text-primary"></i>Veille Techno</h5>
                        <p class="card-text flex-grow-1">Ma sélection d'articles et de ressources pour rester à jour.</p>
                        <a href="<?php echo $base_path; ?>veille" class="btn btn-custom mt-3">Lire</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/da/contact.jpg" class="card-img-top" alt="contact" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><i class="fas fa-envelope me-2 text-primary"></i>Contact</h5>
                        <p class="card-text flex-grow-1">Une question ? Un projet ? N'hésitez pas à me contacter.</p>
                        <a href="<?php echo $base_path; ?>contact" class="btn btn-custom mt-3">Me contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5 hidden"> <!-- Expériences -->
        <h2 class="text-center section-title">Mes Expériences</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 glass-card-hover">
                    <div class="position-relative">
                        <img src="./assets/images/stage-alternance/mm.jpg" class="card-img-top" alt="Micro-Mega" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3 badge bg-primary">En cours</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Alternance - Micro-Mega</h5>
                        <p class="card-text small mb-3">Administrateur réseau chez un leader des dispositifs médicaux dentaires.</p>
                        <ul class="list-unstyled text-start card-text small">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Installation et config matériel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Maintenance préventive</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Gestion utilisateurs (AD)</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Sécurisation réseaux</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/stage-alternance/adeo.jpg" class="card-img-top" alt="Adeo" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Stage - Adeo Informatique</h5>
                        <p class="card-text small mb-3">Stage de seconde en solutions informatiques pour PME.</p>
                        <ul class="list-unstyled text-start card-text small">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Masterisation de postes</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Intervention sur site client</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 glass-card-hover">
                    <img src="./assets/images/stage-alternance/safran.jpg" class="card-img-top" alt="Safran" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Stage - Safran</h5>
                        <p class="card-text small mb-3">Stage de troisième chez un leader de l'électronique et de la défense.</p>
                        <p class="card-text small">Découverte du monde de l'entreprise, des processus industriels et des technologies de pointe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="./assets/js/scroll.js"></script>

<?php
include './includes/footer.php';
?>
