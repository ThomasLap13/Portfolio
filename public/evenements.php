<?php
$base_path = '../';
include $base_path . 'includes/header.php';
?>

<div class="container my-5 pt-5">
    <div class="text-center mb-5 hidden">
        <h1 class="display-3 fw-bold mb-3">Événements <span class="text-primary">&</span> Salons</h1>
        <p class="lead text-muted fs-4">Immersion technique, innovation et rencontres professionnelles.</p>
    </div>

    <!-- Audace d'Entreprendre 2025 Block -->
    <div class="project-block hidden mb-5">
        <div class="card p-0 overflow-hidden border-0 shadow-lg">
            <div class="row g-0">
                <div class="col-lg-12 position-relative">
                    <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace-2025/audace2025.jpeg" class="img-fluid w-100" alt="L'audace d'entreprendre 2025" style="max-height: 450px; width: 100%; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-gradient-dark-to-top">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div>
                                <h2 class="display-5 fw-bold text-white mb-0">Audace d'Entreprendre 2025</h2>
                                <span class="badge bg-primary px-3 py-2 rounded-pill mt-2">Édition Dijonnaise</span>
                            </div>
                            <a href="https://dijon2025.audace-entreprendre.fr/le-programme/" target="_blank" class="btn btn-custom rounded-pill">
                                <i class="fas fa-external-link-alt me-2"></i> Voir le Programme
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-4 p-lg-5">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <h4 class="mb-4 text-primary"><i class="fas fa-microchip me-2"></i>Conférences Clés</h4>
                        <div class="accordion custom-accordion" id="accordionAudace2025">
                            <div class="accordion-item border-0 mb-3 bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <i class="fas fa-bolt me-2 text-primary"></i> 1. Vitesse Start‑up - French Tech BFC
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionAudace2025">
                                    <div class="accordion-body bg-white bg-opacity-5 rounded-4 mt-2 p-4">
                                        Exploration de l’écosystème French Tech BFC, crucial pour un étudiant BTS SIO souhaitant lancer une solution SaaS ou Cloud. Compréhension des leviers d'incubation, mentors et financements précoces.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        <i class="fas fa-robot me-2 text-primary"></i> 2. L'IA dans le secteur bancaire
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAudace2025">
                                    <div class="accordion-body bg-white bg-opacity-5 rounded-4 mt-2 p-4">
                                        Mobilisation concrète de l’IA (scoring, automatisation) et impact sur l'infrastructure. Focus sur les besoins en data, API et cybersécurité pour les systèmes financiers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        <i class="fas fa-lightbulb me-2 text-primary"></i> 3. Entreprendre et innover à Dijon
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionAudace2025">
                                    <div class="accordion-body bg-white bg-opacity-5 rounded-4 mt-2 p-4">
                                        Atelier sur l’IA comme levier d’innovation locale. Idéal pour repérer des projets d’automatisation et de services Cloud adaptés aux PME du territoire.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-primary bg-opacity-10 border-0 p-4 h-100">
                            <h5 class="fw-bold text-primary mb-3">En résumé</h5>
                            <p class="small text-muted mb-0">
                                Une journée riche en inspirations entrepreneuriales, mettant en lumière le rôle central de l'IA et de l'innovation numérique dans le développement économique régional.
                            </p>
                            <hr class="border-primary opacity-25">
                            <ul class="list-unstyled small mb-0">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Réseautage</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>IA de production</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i>Ecosystème BFC</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="min-height: 80px;"></div>

    <!-- InCyber Block -->
    <div class="project-block hidden mb-5">
        <div class="row align-items-center mb-4">
            <div class="col-auto">
                <div class="p-3 rounded-4 bg-primary bg-opacity-10">
                    <i class="fas fa-shield-alt fa-3x text-primary"></i>
                </div>
            </div>
            <div class="col">
                <h2 class="display-5 fw-bold mb-0">Forum InCyber Lille</h2>
                <span class="badge bg-primary px-3 py-2 rounded-pill mt-2">Mars 2025 • Le Mans Challenge</span>
            </div>
        </div>
        
        <div class="row g-4 mb-4">
            <div class="col-lg-7">
                <div id="carouselCOD" class="carousel slide shadow-lg rounded-4 overflow-hidden h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/incyber.jpeg" class="d-block w-100 h-100 carousel-img-standard" alt="InCyber 1">
                        </div>
                        <div class="carousel-item h-100">
                            <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/police.jpeg" class="d-block w-100 h-100 carousel-img-standard" alt="InCyber 2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCOD" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCOD" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card p-4 h-100">
                    <h4 class="text-primary mb-3">L'Europe de la Cyber</h4>
                    <p class="text-muted fs-5">
                        L'un des plus grands salons dédiés à la cybersécurité en Europe. Une immersion totale entre défense et attaque numérique.
                    </p>
                    <div class="mt-auto">
                        <h6 class="fw-bold mb-2">Expertises rencontrées :</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-white bg-opacity-10 border border-white border-opacity-25 rounded-pill px-3 py-2">SOC / SIEM</span>
                            <span class="badge bg-white bg-opacity-10 border border-white border-opacity-25 rounded-pill px-3 py-2">EDR / XDR</span>
                            <span class="badge bg-white bg-opacity-10 border border-white border-opacity-25 rounded-pill px-3 py-2">Blue Team</span>
                            <span class="badge bg-white bg-opacity-10 border border-white border-opacity-25 rounded-pill px-3 py-2">Forensics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card p-4 h-100">
                    <h5 class="text-primary mb-3"><i class="fas fa-store me-2"></i>Incursions sur les stands</h5>
                    <div class="row g-3">
                        <div class="col-12 px-2 py-1"><div class="p-3 bg-white bg-opacity-5 rounded-4 border-start border-primary border-4"><strong>Stand Orange & Cisco :</strong> Présentation de solutions de cybersécurité complètes (protection réseaux, mobiles, données cloud). Réflexion sur la double barrière de sécurité physique et virtuelle.</div></div>
                        <div class="col-12 px-2 py-1"><div class="p-3 bg-white bg-opacity-5 rounded-4 border-start border-primary border-4"><strong>Stand Free Pro :</strong> Démonstration d'outils performants comme l'EDR (Endpoint Detection and Response) et le SIEM (Security Information and Event Management) pour la gestion avancée des logs.</div></div>
                        <div class="col-12 px-2 py-1"><div class="p-3 bg-white bg-opacity-5 rounded-4 border-start border-primary border-4"><strong>Stands Google & Cloudflare :</strong> Focus sur l'intégration massive de l'IA dans la cybersécurité et l'approche Cloud pour la protection des applications web.</div></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div id="carouselHornet" class="carousel slide shadow-lg rounded-4 overflow-hidden mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/hornet1.jpeg" class="d-block w-100 carousel-img-standard" alt="Hornet" style="height: 250px;">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $base_path; ?>assets/images/Conférences/Incyber/hornet2.jpeg" class="d-block w-100 carousel-img-standard" alt="Hornet" style="height: 250px;">
                        </div>
                    </div>
                </div>
                <div class="card p-4">
                    <h5 class="text-primary mb-3"><i class="fas fa-graduation-cap me-2"></i>Vision Professionnelle</h5>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2"><strong>Tendances :</strong> Intelligence Artificielle appliquée à la détection proactive de menaces.</li>
                        <li class="mb-2"><strong>Réseautage :</strong> Echanges directs avec des experts SOC d'entreprises globales (Airbus, Gendarmerie Cyber).</li>
                        <li><strong>Inspiration :</strong> Découverte des compétences en programmation et design demandées par le secteur cyber.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5 opacity-10">

    <!-- Audace d'Entreprendre 2024 -->
    <div class="project-block hidden mb-5">
        <div class="row align-items-center mb-4">
            <div class="col-auto">
                <div class="p-3 rounded-4 bg-success bg-opacity-10">
                    <i class="fas fa-lightbulb fa-3x text-success"></i>
                </div>
            </div>
            <div class="col">
                <h2 class="display-6 fw-bold mb-0">L'Audace d'Entreprendre</h2>
                <span class="badge bg-success px-3 py-2 rounded-pill mt-2">Octobre 2024 • Zénith de Dijon</span>
            </div>
        </div>

        <div class="card border-0 overflow-hidden mb-4 bg-transparent">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 p-4 d-flex flex-column justify-content-center">
                        <p class="fs-5 text-muted mb-0 italic">
                            "Un événement phare dédié à l'innovation and au partage d'idées novatrices, transformant le Zénith de Dijon en hub entrepreneurial."
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselAudace" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace.jpg" class="d-block w-100 carousel-img-standard" alt="Zenith" style="height: 300px;">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace1.jpg" class="d-block w-100 carousel-img-standard" alt="Plateau" style="height: 300px;">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $base_path; ?>assets/images/Conférences/Audace/Audace2.jpg" class="d-block w-100 carousel-img-standard" alt="Scene" style="height: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PGW Block -->
    <div class="project-block hidden mb-5">
        <div class="card p-0 overflow-hidden border-0 bg-transparent">
             <div class="row align-items-center mb-4 g-0">
                <div class="col-auto me-3">
                    <div class="p-3 rounded-4" style="background-color: rgba(111, 66, 193, 0.1);">
                        <i class="fas fa-gamepad fa-3x" style="color: #6f42c1;"></i>
                    </div>
                </div>
                <div class="col">
                    <h2 class="display-5 fw-bold mb-0" style="color: #6f42c1;">Paris Games Week</h2>
                    <span class="badge px-3 py-2 rounded-pill mt-2" style="background-color: rgba(111, 66, 193, 0.1); color: #6f42c1; border: 1px solid rgba(111, 66, 193, 0.25);">Novembre 2024</span>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                     <div id="carouselPGWScene" class="carousel slide shadow-lg rounded-4 overflow-hidden h-100" data-bs-ride="carousel">
                        <div class="carousel-inner h-100">
                            <div class="carousel-item active h-100">
                                <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/grande-scene.jpg" class="d-block w-100 h-100 carousel-img-standard" alt="PGW 1">
                            </div>
                            <div class="carousel-item h-100">
                                <img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/xbox-scene.jpg" class="d-block w-100 h-100 carousel-img-standard" alt="PGW 2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4 h-100">
                        <h4 style="color: #6f42c1;" class="mb-3">Divertissement & High-Tech</h4>
                        <p class="text-muted small">
                            L'un des plus grands salons dédiés aux jeux vidéo en Europe. Focus sur les performances matérielles and le développement graphique poussé.
                        </p>
                        <div class="mt-4">
                             <div class="p-3 bg-white bg-opacity-5 rounded-4 mb-3 border border-white border-opacity-10">
                                <h6 class="fw-bold"><i class="fas fa-truck-pickup me-2"></i>Inédit !</h6>
                                <p class="small text-muted mb-0">Découverte exclusive du Tesla Cybertruck sur place.</p>
                             </div>
                             <div id="carouselCybertruck" class="carousel slide rounded-3 overflow-hidden" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-1.jpg" class="d-block w-100 carousel-img-standard" style="height: 150px;"></div>
                                    <div class="carousel-item"><img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-2.jpg" class="d-block w-100 carousel-img-standard" style="height: 150px;"></div>
                                    <div class="carousel-item"><img src="<?php echo $base_path; ?>assets/images/Conférences/PGW/cyber-3.jpg" class="d-block w-100 carousel-img-standard" style="height: 150px;"></div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card p-4 mt-4">
                <h5 style="color: #6f42c1;" class="mb-3">Ce que retient un profil IT :</h5>
                <div class="row g-3 text-muted small">
                    <div class="col-md-6 border-start border-purple ps-3" style="border-left: 3px solid #6f42c1 !important;"><strong>Optimisation logicielle:</strong> Observation des performances graphiques and moteurs de rendu de dernière génération.</div>
                    <div class="col-md-6 border-start border-purple ps-3" style="border-left: 3px solid #6f42c1 !important;"><strong>Network Gaming:</strong> Compréhension des enjeux de latence and d'infrastructures serveurs massives.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once $base_path . 'includes/footer.php'; ?>
