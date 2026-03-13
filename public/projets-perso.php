<?php
$base_path = './';
include '../includes/header.php';
?>

<head>
    <title>Projets Perso - Thomas Portfolio</title>
</head>

<main>
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Projets Personnels</h1>
            <p class="lead text-muted">Mes initiatives et créations en dehors du cadre scolaire et professionnel.</p>
        </div>

        <!-- SlapIA -->
        <section class="mb-5" id="slapia">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="<?php echo $base_path; ?>assets/images/projets/perso/SlapIA/slapia_logo.png" alt="SlapIA Logo" height="40" class="me-3">
                        <h2 class="mb-0">SlapIA</h2>
                    </div>
                    
                    <div id="carouselSlapIA" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselSlapIA" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselSlapIA" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/SlapIA/slapia_mockup.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="SlapIA Mockup">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Plateforme de Formation</h5>
                                    <p class="mb-0">Maîtrisez l'IA et l'IT avec nos parcours structurés.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/SlapIA/slapia_logo.png" class="d-block w-100" style="height: 500px; object-fit: contain; background: #000;" alt="SlapIA Branding">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
                                    <h5>Branding & Identité</h5>
                                    <p class="mb-0">Une approche moderne de l'apprentissage technologique.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlapIA" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlapIA" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-3 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">L'excellence en formation IA & IT</h4>
                        <p class="text-muted mb-4">
                            <strong>SlapIA</strong> est plus qu'une simple plateforme de cours : c'est un écosystème complet conçu pour transformer des débutants en experts de l'IA et de l'automatisation. Le projet repose sur une architecture moderne utilisant <strong>Notion comme CMS Headless</strong> et un moteur d'automatisation puissant propulsé par <strong>n8n</strong>.
                        </p>
                        
                        <!-- Nouveau : Détails de la Formation -->
                        <div class="row g-4 mb-5">
                            <div class="col-md-4">
                                <div class="glass-card p-3 h-100 border-top border-primary border-3">
                                    <h5 class="text-white mb-3 small fw-bold text-uppercase tracking-wider">Niveau 1 : Fondations</h5>
                                    <p class="small text-muted mb-3">Maîtrise du Prompting avancé (ChatGPT, Claude) et structuration des connaissances avec Notion.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">Prompting</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">Notion</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="glass-card p-3 h-100 border-top border-info border-3">
                                    <h5 class="text-white mb-3 small fw-bold text-uppercase tracking-wider">Niveau 2 : Agents IA</h5>
                                    <p class="small text-muted mb-3">Création d'agents intelligents autonomes et automatisation des processus métiers redondants.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">AI Agents</span>
                                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Logic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="glass-card p-3 h-100 border-top border-purple border-3">
                                    <h5 class="text-white mb-3 small fw-bold text-uppercase tracking-wider">Niveau 3 : Workflows</h5>
                                    <p class="small text-muted mb-3">Construction de flux complexes End-to-End avec n8n et Make, connexion via APIs REST.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-25">n8n</span>
                                        <span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-25">Webhooks</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stack Technique SlapIA -->
                        <div class="card p-4 border-0 bg-dark bg-opacity-25 mb-4 rounded-4">
                            <h5 class="text-white mb-4"><i class="fas fa-microchip me-2 text-primary"></i>Coulisses Techniques</h5>
                            <div class="row g-3">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="text-center p-3">
                                        <i class="fab fa-php fa-2x text-primary mb-2"></i>
                                        <h6 class="text-white small">PHP Vanilla</h6>
                                        <p class="x-small text-muted">Architecture propre, sans framework lourd.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="text-center p-3">
                                        <i class="fas fa-database fa-2x text-primary mb-2"></i>
                                        <h6 class="text-white small">Notion CMS</h6>
                                        <p class="x-small text-muted">Base de données en temps réel via API.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="text-center p-3">
                                        <i class="fas fa-project-diagram fa-2x text-primary mb-2"></i>
                                        <h6 class="text-white small">n8n Logic</h6>
                                        <p class="x-small text-muted">Agents conversationnels et mails automatisés.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="text-center p-3">
                                        <i class="fas fa-bolt fa-2x text-primary mb-2"></i>
                                        <h6 class="text-white small">Gemini Flash</h6>
                                        <p class="x-small text-muted">Intelligence ultra-rapide pour le support.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="p-4 rounded-4 border border-secondary border-opacity-25 h-100 bg-primary bg-opacity-10 border-primary">
                                    <h6 class="text-white mb-3"><i class="fas fa-users-viewfinder me-2 text-primary"></i>Méthodologie SlapIA</h6>
                                    <ul class="small text-muted list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>Pratique Immédiate</strong> : Exercices concrets dès le jour 1.</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>Accompagnement VIP</strong> : Mentorat privé et visio quotidienne.</li>
                                        <li><i class="fas fa-check-circle text-primary me-2"></i><strong>Support Technique</strong> : Aide directe sur vos blocages réels.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 rounded-4 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white mb-3"><i class="fas fa-envelope-open-text me-2 text-primary"></i>Automatisation Client</h6>
                                    <p class="small text-muted">Gestion autonome du cycle client via n8n : Emails de confirmation, notifications d'équipe, formulaires de satisfaction et publication automatique d'avis sur le site.</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="https://www.slapia.com" target="_blank" class="btn btn-custom px-4 py-2">
                                <i class="fas fa-external-link-alt me-2"></i> Visiter SlapIA.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- Thomas Editor -->
        <section class="mb-5" id="thomas-editor">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-film fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Thomas Editor</h2>
                    </div>
                    
                    <div id="carouselThomasEditor" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselThomasEditor" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselThomasEditor" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselThomasEditor" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Thomas-Editor/Editor.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Thomas Editor 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Montage Vidéo</h5>
                                    <p class="mb-0">Thomas Editor propose des services de montage vidéo abordables pour tous vos projets.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Thomas-Editor/Editor1.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Thomas Editor 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Créativité</h5>
                                    <p class="mb-0">Des montages dynamiques et adaptés à votre audience.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Thomas-Editor/Editor2.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Thomas Editor 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Qualité Pro</h5>
                                    <p class="mb-0">Un rendu professionnel pour mettre en valeur votre contenu.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselThomasEditor" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselThomasEditor" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-3 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Service de Montage Vidéo Freelance</h4>
                        <p class="text-muted mb-4">
                            <strong>Thomas Editor</strong> est mon activité de freelance où je mets ma passion pour la vidéo au service des créateurs. Je gère l'intégralité du processus de post-production, de l'importation des rushs à l'export final.
                        </p>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-cut me-2 text-primary"></i>Montage Dynamique</h6>
                                    <p class="small text-muted mb-0">Rythme soutenu, transitions fluides et storytelling impactant pour captiver l'audience.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-palette me-2 text-primary"></i>Étalonnage</h6>
                                    <p class="small text-muted mb-0">Correction colorimétrique et création de looks cinématographiques ou vibrants.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-magic me-2 text-primary"></i>Motion Design</h6>
                                    <p class="small text-muted mb-0">Intégration de titres animés, sous-titres et effets visuels pour enrichir le contenu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25">

        <!-- Game-Réduction -->
        <section class="mb-5" id="game-reduction">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-gamepad fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Game-Réduction</h2>
                    </div>

                    <div id="carouselGameReduction" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselGameReduction" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselGameReduction" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Game-Réduction/GR-DA.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Game Réduction 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Économies</h5>
                                    <p class="mb-0">Une initiative visant à vous aider à économiser sur vos achats numériques.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Game-Réduction/GR-DA1.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Game Réduction 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Bons Plans</h5>
                                    <p class="mb-0">Accédez aux meilleures offres et réductions du moment.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGameReduction" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselGameReduction" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

        <hr class="my-5 opacity-25">

        <!-- TechHardware -->
        <section class="mb-5" id="tech-hardware">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-microchip fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">TechHardware</h2>
                    </div>

                    <div id="carouselTechHardware" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselTechHardware" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselTechHardware" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Tech-Hardware/Tech-Hardware-DA.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="TechHardware 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Conseils PC</h5>
                                    <p class="mb-0">Votre solution pour obtenir des conseils personnalisés sur l'achat de PC.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/projets/perso/Tech-Hardware/PC.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="TechHardware 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Optimisation</h5>
                                    <p class="mb-0">Tirez le meilleur parti de votre matériel informatique.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTechHardware" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTechHardware" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
</main>

<?php
include '../includes/footer.php';
?>