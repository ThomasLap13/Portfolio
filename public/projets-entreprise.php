<?php
include '../includes/header.php';
?>
<head>
    <title>Projets Entreprise - Thomas Portfolio</title>
</head>
<main>
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Projets Entreprise</h1>
            <p class="lead text-muted">Mes réalisations et missions effectuées chez Micro-Méga (Coltene).</p>
        </div>

        <!-- Tri du NAS -->
        <section class="mb-5" id="tri-nas">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-5 border-0 shadow-lg glass-card-hover">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="fas fa-server fa-2x text-primary"></i>
                            </div>
                            <h2 class="mb-0">Optimisation NAS & Sauvegarde</h2>
                        </div>
                        
                        <p class="lead">Nettoyage, réorganisation et sécurisation des données d'entreprise.</p>
                        <hr class="my-4 opacity-25">
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h4 class="text-primary mb-3">Le Défi</h4>
                                <p class="text-muted">
                                    L'entreprise faisait face à une saturation de son espace de stockage (NAS) et à une désorganisation des données accumulées sur plusieurs années. Les temps d'accès étaient lents et les sauvegardes prenaient trop de temps.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-primary mb-3">La Solution</h4>
                                <p class="text-muted">
                                    J'ai mené un audit complet des données, identifié les fichiers obsolètes et restructuré l'arborescence.
                                    <br>
                                    En parallèle, j'ai déployé une nouvelle stratégie de sauvegarde avec <strong>Veeam Backup</strong>.
                                </p>
                            </div>
                        </div>

                        <div class="mt-4 p-4 rounded-3" style="background: rgba(255,255,255,0.05);">
                            <h5 class="mb-3"><i class="fas fa-chart-line me-2 text-success"></i>Résultats Clés</h5>
                            <ul class="list-unstyled mb-0 row">
                                <li class="col-md-6 mb-2"><i class="fas fa-check text-success me-2"></i><strong>2 To</strong> d'espace libéré.</li>
                                <li class="col-md-6 mb-2"><i class="fas fa-check text-success me-2"></i>Accès aux fichiers <strong>30% plus rapide</strong>.</li>
                                <li class="col-md-6"><i class="fas fa-check text-success me-2"></i>Sauvegardes <strong>automatisées et sécurisées</strong>.</li>
                                <li class="col-md-6"><i class="fas fa-check text-success me-2"></i>Rétention étendue à <strong>30 jours</strong>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Active Directory -->
        <section class="mb-5" id="gestion-ad">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-5 border-0 shadow-lg glass-card-hover">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="fas fa-users-cog fa-2x text-primary"></i>
                            </div>
                            <h2 class="mb-0">Mise à Jour Active Directory</h2>
                        </div>

                        <p class="lead">Fiabilisation des données utilisateurs pour 110 comptes.</p>
                        <hr class="my-4 opacity-25">

                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <p class="text-muted">
                                    L'annuaire Active Directory contenait des informations obsolètes, ce qui compliquait la gestion des droits et l'annuaire interne.
                                    <br><br>
                                    J'ai piloté une campagne de mise à jour complète en coordination avec les RH et les chefs de service. Pour accélérer le processus et éviter les erreurs manuelles, j'ai développé des <strong>scripts PowerShell</strong> permettant de modifier les attributs utilisateurs en masse (Téléphone, Bureau, Service).
                                </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fab fa-windows fa-5x text-muted opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Poste DAO -->
        <section class="mb-5" id="montage-dao">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fas fa-desktop fa-2x text-primary me-3"></i>
                        <h2 class="mb-0">Poste de Travail DAO</h2>
                    </div>

                    <div id="carouselPC" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselPC" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/images/projets/entreprise/mm-composants.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Composants">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Composants Haute Performance</h5>
                                    <p class="mb-0">Sélection rigoureuse : i7-13700K, RTX 4060 Ti.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/projets/entreprise/mm-config.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Config">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Montage & Optimisation</h5>
                                    <p class="mb-0">Assemblage précis et configuration du BIOS.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/projets/entreprise/mm-cable.png" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Cable Management">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Cable Management</h5>
                                    <p class="mb-0">Flux d'air optimal et esthétique soignée.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPC" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPC" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Suivant</span>
                        </button>
                    </div>

                    <div class="card p-4 mb-3 border-0 glass-card-hover">
                        <h4 class="text-primary mb-3">Conception d'une Station de Travail DAO/CAO</h4>
                        <p class="text-muted mb-4">
                            Le bureau d'études avait besoin d'une machine capable de gérer des assemblages complexes sous <strong>SolidWorks</strong> sans ralentissement. J'ai conçu, assemblé et déployé cette station de travail sur mesure.
                        </p>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-microchip me-2 text-primary"></i>Puissance de Calcul</h6>
                                    <p class="small text-muted mb-0">Intel Core i7-13700K pour une fréquence élevée, essentielle pour la modélisation paramétrique.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-video me-2 text-primary"></i>Rendu Graphique</h6>
                                    <p class="small text-muted mb-0">NVIDIA RTX 4060 Ti pour fluidifier l'affichage et accélérer les rendus RealView.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded-3 border border-secondary border-opacity-25 h-100">
                                    <h6 class="text-white"><i class="fas fa-memory me-2 text-primary"></i>Réactivité</h6>
                                    <p class="small text-muted mb-0">32 Go DDR5 & SSD NVMe Gen4 pour des chargements instantanés des gros projets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gestion Tickets -->
        <section class="mb-5" id="gestion-tickets">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-5 border-0 shadow-lg glass-card-hover">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="fas fa-ticket-alt fa-2x text-primary"></i>
                            </div>
                            <h2 class="mb-0">Support Utilisateur (ServiceNow)</h2>
                        </div>
                        
                        <p class="lead">Gestion quotidienne des incidents et demandes (20+ tickets/semaine).</p>
                        <hr class="my-4 opacity-25">
                        
                        <p class="text-muted">
                            En tant que point de contact privilégié pour les utilisateurs, j'assure le support niveau 1 et 2. J'utilise <strong>ServiceNow</strong> pour suivre, prioriser et résoudre les incidents.
                            <br><br>
                            J'ai mis en place des procédures de diagnostic standardisées qui ont permis de réduire le temps de résolution moyen de <strong>30%</strong>. J'accompagne également les utilisateurs dans la prise en main des nouveaux outils (Microsoft 365, Teams).
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Migration Entra ID -->
        <section class="mb-5" id="migration-entra">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-5 border-0 shadow-lg glass-card-hover">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="fas fa-cloud fa-2x text-primary"></i>
                            </div>
                            <h2 class="mb-0">Migration Entra ID (Azure AD)</h2>
                        </div>
                        
                        <p class="lead">Modernisation de la gestion des identités vers le Cloud.</p>
                        <hr class="my-4 opacity-25">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted">
                                    Participation active au projet de migration des identités vers <strong>Microsoft Entra ID</strong> (anciennement Azure AD).
                                    <br>
                                    L'objectif était de faciliter l'accès aux ressources cloud (SaaS) tout en renforçant la sécurité.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Migration de 90% des comptes.</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Configuration de <strong>Azure AD Connect</strong> (Synchro Hybride).</li>
                                    <li><i class="fas fa-check-circle text-primary me-2"></i>Déploiement du <strong>MFA</strong> (Multi-Factor Authentication).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Automatisation IA -->
        <section class="mb-5" id="automatisation-ia">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-5 border-0 shadow-lg glass-card-hover">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="fas fa-robot fa-2x text-primary"></i>
                            </div>
                            <h2 class="mb-0">Automatisation & IA</h2>
                        </div>
                        
                        <p class="lead">Intégration de l'IA pour l'efficacité opérationnelle.</p>
                        <hr class="my-4 opacity-25">
                        
                        <p class="text-muted">
                            Veille et test des nouvelles solutions d'IA comme <strong>Microsoft Copilot</strong> pour assister les équipes dans leurs tâches quotidiennes (rédaction de mails, résumés de réunions, génération de code).
                            <br><br>
                            J'ai également développé des scripts d'automatisation (Python/PowerShell) pour la gestion des stocks IT et le reporting des tickets, libérant ainsi du temps pour des tâches à plus forte valeur ajoutée.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php
include '../includes/footer.php';
?>
