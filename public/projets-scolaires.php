<?php
$base_path = './';
include '../includes/header.php';
?>

<head>
    <title>Projets Scolaires — Thomas Lapierre</title>
</head>

<main>
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5 fade-in">
            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-2 mb-3 d-inline-block" style="letter-spacing:1.5px;font-size:.75rem;">BTS SIO — SISR</span>
            <h1 class="display-4 fw-bold text-gradient mb-3">Projets Scolaires</h1>
            <p class="lead text-muted mx-auto" style="max-width:550px;">Travaux réalisés dans le cadre de mon BTS SIO.</p>
        </div>

        <!-- Veille N8N -->
        <section class="mb-5" id="veille-n8n">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-robot fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Automatisation Veille N8N</h2>
                    </div>

                    <div id="carouselVeilleN8N" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselVeilleN8N" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselVeilleN8N" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/n8n/N8N.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Workflow Automation N8N">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Workflow Global</h5>
                                    <p class="mb-0">Vue d'ensemble du processus d'automatisation.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/n8n/Notion.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Intégration Notion">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Intégration Notion</h5>
                                    <p class="mb-0">Connexion et insertion automatique des données.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselVeilleN8N" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselVeilleN8N" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-4 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Automatisation & Centralisation</h4>
                        <p class="text-muted">
                            Afin d'optimiser ma veille technologique, j'ai mis en place un système automatisé utilisant <strong>N8N</strong>. 
                            Ce workflow récupère des articles depuis diverses sources (RSS), les filtre selon des mots-clés pertinents, et les centralise automatiquement dans une base de données <strong>Notion</strong>.
                        </p>
                        <hr class="my-3 opacity-25">
                        <h6 class="text-primary mb-2">Aspects techniques :</h6>
                        <ul class="list-unstyled text-muted">
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Webhooks & API</strong> : Interconnexion entre les services.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Transformation de données</strong> : Formatage JSON pour compatibilité Notion.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Planification</strong> : Exécution automatique à intervalles réguliers (Cron).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- Portfolio (CI/CD) -->
        <section class="mb-5" id="portfolio-cicd">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-code-branch fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Portfolio (CI/CD)</h2>
                    </div>

                    <div id="carouselPortfolio" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselPortfolio" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/portfolio/repos.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Repository">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Gestion de Version</h5>
                                    <p class="mb-0">Utilisation de Git et Azure DevOps pour le suivi du projet.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/portfolio/dev.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Développement">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Développement Local</h5>
                                    <p class="mb-0">Environnement de développement avec WAMP et VS Code.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/portfolio/azur.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Azure">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Déploiement Azure</h5>
                                    <p class="mb-0">Hébergement et déploiement continu sur Azure Web Apps.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-3 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Déploiement Continu & Azure</h4>
                        <p class="text-muted mb-4">
                            Ce portfolio n'est pas qu'une vitrine, c'est aussi un exercice pratique de mise en œuvre d'une chaîne <strong>CI/CD</strong> (Intégration et Déploiement Continus).
                            <br>
                            L'objectif était de comprendre comment automatiser la mise en production d'un site web depuis un dépôt de code jusqu'à un serveur cloud.
                        </p>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fab fa-git-alt me-2 text-primary"></i>Git & GitHub</h6>
                                    <p class="small text-muted mb-0">Gestion de versions et collaboration (commits, branches, pull requests).</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-cogs me-2 text-primary"></i>Azure DevOps</h6>
                                    <p class="small text-muted mb-0">Planification des tâches (Kanban) et orchestration des pipelines de déploiement.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-cloud me-2 text-primary"></i>Azure Web Apps</h6>
                                    <p class="small text-muted mb-0">Hébergement PaaS (Platform as a Service) garantissant disponibilité et scalabilité.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- Quiz Moto -->
        <section class="mb-5" id="quiz-moto">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-motorcycle fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Site Quiz Moto</h2>
                    </div>

                    <div id="carouselQuizMoto" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselQuizMoto" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselQuizMoto" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/site moto/site-moto.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Site Quiz Moto">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Mode Classique</h5>
                                    <p class="mb-0">Devinez le modèle à partir de l'image.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/site moto/site-moto.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Site Quiz Moto 2">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Mode Progressif</h5>
                                    <p class="mb-0">L'image se dévoile petit à petit. Rapidité = Points !</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselQuizMoto" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselQuizMoto" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-4 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Développement Web Interactif (JS)</h4>
                        <p class="text-muted">
                            Un site web ludique conçu pour les passionnés de moto. Le but est de reconnaître différents modèles à travers plusieurs modes de jeu, testant ainsi la culture motarde des utilisateurs.
                        </p>
                        <hr class="my-3 opacity-25">
                        <h6 class="text-primary mb-2">Défis techniques relevés :</h6>
                        <ul class="list-unstyled text-muted">
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Manipulation du DOM</strong> : Affichage dynamique des questions et des images.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Gestion des événements</strong> : Détection des clics, validation des réponses.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Logique de jeu</strong> : Calcul des scores, gestion du chronomètre et des niveaux de difficulté.</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <a href="https://thomas-bikedle-gzh3gnh9cugnfgha.francecentral-01.azurewebsites.net/Accueil.html" class="btn btn-custom px-5 py-2" target="_blank">
                            <i class="fas fa-play me-2"></i>Jouer au Quiz
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- 7 Erreurs -->
        <section class="mb-5" id="7-erreurs">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-search fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Jeu des 7 Erreurs</h2>
                    </div>

                    <div id="carousel7Erreurs" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel7Erreurs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/scolaires/7 erreurs/7erreurs.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Jeu des 7 erreurs">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Interactivité</h5>
                                    <p class="mb-0">Projet axé sur la gestion des événements JavaScript et la manipulation du DOM.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel7Erreurs" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel7Erreurs" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-4 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Jeu d'Observation Interactif</h4>
                        <p class="text-muted">
                            Une version numérique du célèbre jeu des 7 erreurs. L'utilisateur doit identifier les différences entre deux images apparemment identiques en cliquant dessus.
                        </p>
                        <hr class="my-3 opacity-25">
                        <h6 class="text-primary mb-2">Points clés du développement :</h6>
                        <ul class="list-unstyled text-muted">
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Coordonnées</strong> : Mapping précis des zones d'erreurs sur l'image.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Feedback Visuel</strong> : Apparition de cercles (vert/rouge) au clic.</li>
                            <li><i class="fas fa-check text-primary me-2"></i><strong>Conditions de victoire</strong> : Détection de la fin de partie une fois les 7 erreurs trouvées.</li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <a href="https://thomas-bikedle-gzh3gnh9cugnfgha.francecentral-01.azurewebsites.net/Accueil.html" class="btn btn-custom px-5 py-2" target="_blank">
                            <i class="fas fa-play me-2"></i>Jouer au Quiz
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- OneNote -->
        <div class="text-center mt-5">
            <a href="https://groupesb.sharepoint.com/sites/BTSSIO2026/_layouts/15/Doc.aspx?sourcedoc={d19f7864-7ec3-4fc2-a84a-990667434dc3}&action=view&wd=target%28THOMAS%20LAPIERRE%2FB1.one%7C91607539-3a0d-4984-bd36-7cd4ce23aa8a%2F%29&wdorigin=717" class="btn btn-outline-light px-4 py-2" target="_blank">
                <i class="fas fa-book me-2"></i>Consulter mon OneNote de cours
            </a>
        </div>
    </div>
</main>

<?php
include '../includes/footer.php';
?>