<?php
$base_path = './';
include '../includes/header.php';
?>

<div class="container my-5">
    <div class="text-center mb-5 fade-in">
        <h1 class="display-4 fw-bold text-gradient">Événements</h1>
        <p class="lead text-muted">Participation à des salons et visites techniques</p>
    </div>


    <!-- Audace d'Entreprendre 2025 Block -->
    <div class="project-block fade-in mb-5">
        <div class="d-flex align-items-center mb-4">
            <div class="p-3 rounded-circle bg-warning bg-opacity-10 me-3">
                <i class="fas fa-rocket fa-2x text-warning"></i>
            </div>
            <div>
                <h3 class="mb-0 fw-bold">L'audace d'entreprendre 2025</h3>
                <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 rounded-pill mt-2">2025</span>
                <a href="https://dijon2025.audace-entreprendre.fr/le-programme/" target="_blank" class="btn btn-sm btn-outline-warning ms-2 rounded-pill">
                    <i class="fas fa-external-link-alt me-1"></i> Programme
                </a>
            </div>
        </div>
        
        <!-- Generated Image Placeholder -->
        <div class="mb-4">
             <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace-2025/audace2025.jpeg" class="img-fluid rounded-4 shadow-lg w-100" alt="L'audace d'entreprendre 2025" style="max-height: 400px; object-fit: cover;">
        </div>


        <div class="accordion custom-accordion" id="accordionAudace2025">
            <div class="accordion-item border-0 mb-3 bg-transparent">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fas fa-bolt me-2 text-warning"></i> 1. « Passe à la vitesse start‑up avec la French Tech BFC » (14h20‑14h40, Bubble 4)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionAudace2025">
                    <div class="accordion-body bg-light bg-opacity-10 rounded-4 mt-2 p-4 glass-card">
                        Cette conférence te plonge dans l’écosystème French Tech Bourgogne‑Franche‑Comté, qui soutient les projets innovants (numérique, SaaS, IA, etc.). Pour un étudiant BTS SIO qui envisage de lancer une solution tech (plateforme, outil dev, service cloud), c’est l’occasion de comprendre les réseaux, aides et dispositifs d’accompagnement locaux (incubation, mise en relation, mentors, financements précoces).
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0 mb-3 bg-transparent">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fas fa-robot me-2 text-warning"></i> 2. « Comment le secteur bancaire mobilise les technologies de l’IA… » (16h25‑16h45, Bubble 3)
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAudace2025">
                    <div class="accordion-body bg-light bg-opacity-10 rounded-4 mt-2 p-4 glass-card">
                        Cette conférence montre comment les banques utilisent concrètement l’IA aujourd’hui (analyse de données, scoring, relation client, automatisation) et quels projets arrivent demain. Pour toi, c’est doublement intéressant : vision très concrète d’usages IA en production et idées de compétences à développer (data, API, sécurité, conformité) pour être aligné avec les besoins réels du marché.
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0 mb-3 bg-transparent">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fas fa-lightbulb me-2 text-warning"></i> 3. « Plongez dans l’IA : entreprendre et innover à Dijon » (16h25‑16h55, Bubble 5)
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAudace2025">
                    <div class="accordion-body bg-light bg-opacity-10 rounded-4 mt-2 p-4 glass-card">
                        Cet atelier est centré sur l’IA comme levier direct d’innovation et de création d’entreprise sur le territoire dijonnais. Avec ton profil dev / infra, tu peux y puiser des idées de projets (outils IA pour PME, automatisation, services aux collectivités, etc.) et repérer les acteurs locaux (labs, structures d’accompagnement) avec lesquels collaborer.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <hr class="my-5 opacity-25">

    <!-- InCyber Block -->
    <div class="project-block fade-in mb-5">
        <div class="d-flex align-items-center mb-4">
            <div class="p-3 rounded-circle bg-primary bg-opacity-10 me-3">
                <i class="fas fa-shield-alt fa-2x text-primary"></i>
            </div>
            <div>
                <h3 class="mb-0 fw-bold">Forum InCyber Lille</h3>
                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill mt-2">Mars 2025</span>
            </div>
        </div>
        
        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="text-primary mb-3">L'InCyber de Lille</h5>
            <p class="text-muted">
                L'InCyber de Lille est l'un des plus grands salons dédiés à la cybersécurité en Europe. L'édition 2025 a rassemblé des experts en cybersécurité, des fournisseurs de solutions, des institutions publiques et privées, ainsi que des passionnés du monde entier pour discuter des défis de la sécurité numérique et des innovations dans le domaine.
            </p>
        </div>

        <!-- Carousel COD -->
        <h5 class="text-white mb-3 ms-2"></h5>
        <div id="carouselCOD" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/incyber.jpeg" class="d-block w-100" alt="COD 1" style="max-height: 550px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/police.jpeg" class="d-block w-100" alt="COD 2" style="max-height: 550px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCOD" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCOD" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="text-primary mb-3">Découverte de différents stands</h5>
            <p class="text-muted mb-3">
                Lors du salon InCyber de Lille, j'ai eu l'opportunité de visiter plusieurs stands, chacun présentant des innovations et des solutions uniques en matière de cybersécurité. Voici quelques points forts :
            </p>
            <ul class="list-unstyled text-muted">
                <li class="mb-2"><strong>Stand Orange :</strong> Présentation de solutions de cybersécurité complètes, incluant la protection des réseaux, des mobiles, et des données cloud. Ils ont souligné l'importance d'une double barrière de sécurité et la surveillance des flux de données.</li>
                <li class="mb-2"><strong>Stand FREE :</strong> Démonstration d'outils puissants comme l'EDR (Endpoint Detection and Response) et le SIEM (Security Information and Event Management) pour la gestion et l'analyse des logs.</li>
                <li class="mb-2"><strong>Stand Google :</strong> Focus sur l'intégration de l'IA dans les solutions de cybersécurité, avec des discussions sur l'avenir de la protection des données.</li>
                <li class="mb-2"><strong>Stand Cloudflare :</strong> Présentation de leur approche cloud pour la protection des applications et des sites web, avec une analyse approfondie des logs.</li>
                <li class="mb-2"><strong>Stand Cisco :</strong> Exploration des solutions de sécurité réseau et des stratégies de protection contre les menaces émergentes.</li>
                <li class="mb-2"><strong>Stand Gendarmerie :</strong> Sensibilisation aux enjeux de la cybercriminalité et présentation de leurs services d'enquête et de prévention.</li>
                <li class="mb-2"><strong>Stand Microsoft :</strong> Démonstration de l'utilisation de l'IA pour améliorer les capacités de détection et de réponse aux menaces, avec un accent sur la protection des données.</li>
                <li><strong>Stand Airbus :</strong> Présentation de solutions de surveillance et de protection pour les infrastructures critiques, avec un focus sur la sécurité des équipements réseau.</li>
            </ul>
        </div>

        <!-- Carousel HornetSecurity -->
        <h5 class="text-white mb-3 ms-2">HornetSecurity</h5>
        <div id="carouselHornet" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/hornet1.jpeg" class="d-block w-100" alt="HornetSecurity 1" style="max-height: 550px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/hornet2.jpeg" class="d-block w-100" alt="HornetSecurity 2" style="max-height: 550px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHornet" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHornet" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="text-primary mb-3">Intérêts pour un futur professionnel de l'informatique</h5>
            <ul class="list-unstyled text-muted">
                <li class="mb-3"><strong>Découverte des tendances technologiques :</strong> L'InCyber met en avant les dernières avancées en matière de cybersécurité, de l'intelligence artificielle à la protection des données, des éléments essentiels dans l'informatique et la sécurité numérique.</li>
                <li class="mb-3"><strong>Réseau :</strong> L'événement permet de rencontrer des professionnels de l'industrie, des experts en cybersécurité aux grandes entreprises, favorisant ainsi des échanges précieux pour enrichir son réseau.</li>
                <li class="mb-3"><strong>Inspirations techniques :</strong> Les démonstrations et ateliers offrent des idées novatrices qui peuvent être appliquées dans différents domaines de l'informatique, comme l'intelligence artificielle, la réalité virtuelle, ou l'optimisation des systèmes.</li>
                <li><strong>Compétences en demande :</strong> Observer les projets présentés à l'InCyber permet d'identifier les compétences recherchées par les entreprises, que ce soit en programmation, en design, ou en gestion de projet.</li>
            </ul>
        </div>
    </div>

    <hr class="my-5 opacity-25">

    <!-- Audace d'Entreprendre Block -->
    <div class="project-block fade-in mb-5">
        <div class="d-flex align-items-center mb-4">
            <div class="p-3 rounded-circle bg-success bg-opacity-10 me-3">
                <i class="fas fa-lightbulb fa-2x text-success"></i>
            </div>
            <div>
                <h3 class="mb-0 fw-bold">L'Audace d'Entreprendre</h3>
                <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill mt-2">Octobre 2024</span>
            </div>
        </div>
        
        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="text-success mb-3">Salon de l'Audace d'Entreprendre</h5>
            <p class="text-muted">
                Le Salon de l'Audace d'Entreprendre s'est tenu le 1er octobre 2024 au Zénith de Dijon. Un événement phare dédié à l'innovation, à l'entrepreneuriat, et au partage d'idées novatrices.
            </p>
        </div>

        <div id="carouselAudace" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace.jpg" class="d-block w-100" alt="Zenith" style="max-height: 550px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Zenith</h5>
                        <p class="mb-0">Le Salon de l'Audace d'Entreprendre s'est tenu le 1er octobre 2024 au Zénith de Dijon.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace1.jpg" class="d-block w-100" alt="Plateau" style="max-height: 550px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Plateau</h5>
                        <p class="mb-0">Durant le salon, plusieurs interviews ont eu lieu sur scène à côté des stands découverte de projet.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace2.jpg" class="d-block w-100" alt="Scene" style="max-height: 550px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Scene</h5>
                        <p class="mb-0">Le plateau central a été le théâtre d'interviews captivantes avec des entrepreneurs visionnaires.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAudace" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAudace" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>

    <hr class="my-5 opacity-25">

    <!-- PGW Block -->
    <div class="project-block fade-in">
        <div class="d-flex align-items-center mb-4">
            <div class="p-3 rounded-circle bg-purple bg-opacity-10 me-3" style="background-color: rgba(111, 66, 193, 0.1);">
                <i class="fas fa-gamepad fa-2x text-purple" style="color: #6f42c1;"></i>
            </div>
            <div>
                <h3 class="mb-0 fw-bold">Paris Games Week</h3>
                <span class="badge bg-opacity-10 text-purple border border-opacity-25 rounded-pill mt-2" style="background-color: rgba(111, 66, 193, 0.1); color: #6f42c1; border-color: #6f42c1;">Novembre 2024</span>
            </div>
        </div>
        
        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="mb-3" style="color: #6f42c1;">PGW</h5>
            <p class="text-muted">
                La Paris Games Week, souvent abrégée PGW, est l'un des plus grands salons dédiés aux jeux vidéo en France et en Europe. L'édition 2024 a rassemblé des développeurs, des éditeurs, des professionnels de l'industrie, et des passionnés du monde entier.
            </p>
        </div>

        <!-- Carousel Grande Scene -->
        <h5 class="text-white mb-3 ms-2">Grande Scene</h5>
        <div id="carouselPGWScene" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/grande-scene.jpg" class="d-block w-100" alt="Grande Scene" style="max-height: 550px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/xbox-scene.jpg" class="d-block w-100" alt="Xbox Scene" style="max-height: 550px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPGWScene" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPGWScene" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="mb-3" style="color: #6f42c1;">Intérêts pour un futur professionnel de l'informatique</h5>
            <ul class="list-unstyled text-muted">
                <li class="mb-3"><strong>Découverte des tendances technologiques :</strong> La PGW met en avant les dernières avancées en matière de développement logiciel, de graphisme, et de performances matérielles, des éléments essentiels dans l'informatique et les jeux vidéo.</li>
                <li class="mb-3"><strong>Réseau :</strong> L'événement permet de rencontrer des professionnels de l'industrie, des développeurs indépendants aux grandes entreprises, favorisant ainsi des échanges précieux pour enrichir son réseau.</li>
                <li class="mb-3"><strong>Inspirations techniques :</strong> Les démonstrations et ateliers offrent des idées novatrices qui peuvent être appliquées dans différents domaines de l'informatique, comme l'intelligence artificielle, la réalité virtuelle, ou l'optimisation des systèmes.</li>
                <li><strong>Compétences en demande :</strong> Observer les projets présentés à la PGW permet d'identifier les compétences recherchées par les entreprises, que ce soit en programmation, en design, ou en gestion de projet.</li>
            </ul>
        </div>

        <div class="card glass-card-hover p-4 mb-4 border-0">
            <h5 class="mb-3" style="color: #6f42c1;">Découverte du Cybertruck</h5>
            <p class="text-muted mb-0">
                Durant le salon, j'ai pu apercevoir le Cybertruck pour la première fois, et c'était impressionnant, comme en témoignent les images !
            </p>
        </div>

        <!-- Carousel Cybertruck -->
        <h5 class="text-white mb-3 ms-2">Cybertruck</h5>
        <div id="carouselCybertruck" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-1.jpg" class="d-block w-100" alt="Cybertruck 1" style="max-height: 550px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-2.jpg" class="d-block w-100" alt="Cybertruck 2" style="max-height: 550px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-3.jpg" class="d-block w-100" alt="Cybertruck 3" style="max-height: 550px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCybertruck" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCybertruck" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
