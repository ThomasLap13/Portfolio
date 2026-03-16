<?php
$base_path = './';
include './includes/header.php';

$dateNaissance = "2006-06-13";
$aujourdhui = date("Y-m-d");
$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
$age = $diff->y;
?>

<head>
    <title>Accueil - Thomas Portefolio</title>
</head>

<main>
    <div class="welcome-screen" id="welcomeScreen"> <!-- Accueil -->
        <div class="container">
            <div class="hero-content">
                <span class="badge bg-primary px-3 py-2 rounded-pill mb-3">Disponible pour de nouveaux défis</span>
                <h1 class="display-1 fw-bold mb-4">Thomas <span class="text-primary">Lapierre</span></h1>
                <p class="lead mb-5 fs-4 text-muted">Administrateur Système & Réseau en devenir. Passionné par l'innovation technique et la cybersécurité.</p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn-custom btn-lg" onclick="hideWelcome()">
                        <i class="fas fa-arrow-down me-2"></i> Explorer
                    </button>
                    <a href="<?php echo $base_path; ?>contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Me contacter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 hidden" id="spacer-1">
        <div style="min-height: 100px;"></div>
    </div>

    <div class="container mt-5 hidden" id="a-propos"> <!-- A Propos -->
        <h2 class="section-title">L'Essentiel</h2>
        
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-5 h-100">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <img src="./assets/images/da/PP.jpg" alt="Thomas Lapierre" class="img-fluid rounded-4 shadow-lg mb-3" style="width: 180px; height: 180px; object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <h3 class="h4 mb-3">Bonjour, c'est Thomas.</h3>
                            <p class="fs-5 text-muted mb-0">
                                J'ai <?php echo $age; ?> ans et je suis étudiant en <strong>BTS SIO (SISR)</strong> à Dijon. 
                                Mon univers ? L'administration système, le réseau et la sécurité informatique.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4 h-100 bg-primary bg-opacity-10">
                    <h5 class="mb-3 text-primary"><i class="fas fa-graduation-cap me-2"></i>Formation</h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <img src="./assets/images/formations/saint-benigne.jpg" class="rounded-circle" style="width:50px; height:50px; object-fit:cover;">
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">BTS SIO (SISR)</h6>
                            <small class="text-muted">St-Bénigne, Dijon</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="./assets/images/formations/saint-joseph.jpg" class="rounded-circle" style="width:50px; height:50px; object-fit:cover;">
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">BAC PRO SN</h6>
                            <small class="text-muted">St-Joseph, Besançon</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tools Slider -->
    <div class="mt-5 mb-5 hidden" id="tech-stack">
        <div class="tools-marquee">
            <div class="marquee-content">
                <!-- Items repeated twice for seamless loop -->
                <div class="tool-item"><i class="fab fa-windows"></i> Windows Server</div>
                <div class="tool-item"><i class="fab fa-linux"></i> Linux (Debian)</div>
                <div class="tool-item"><i class="fas fa-network-wired"></i> Cisco IOS</div>
                <div class="tool-item"><i class="fab fa-docker"></i> Docker</div>
                <div class="tool-item"><i class="fas fa-shield-alt"></i> Cybersécurité</div>
                <div class="tool-item"><i class="fas fa-cloud"></i> Azure</div>
                <div class="tool-item"><i class="fas fa-database"></i> SQL Server</div>
                <div class="tool-item"><i class="fab fa-php"></i> PHP / MySQL</div>
                <div class="tool-item"><i class="fab fa-windows"></i> Windows Server</div>
                <div class="tool-item"><i class="fab fa-linux"></i> Linux (Debian)</div>
                <div class="tool-item"><i class="fas fa-network-wired"></i> Cisco IOS</div>
                <div class="tool-item"><i class="fab fa-docker"></i> Docker</div>
                <div class="tool-item"><i class="fas fa-shield-alt"></i> Cybersécurité</div>
                <div class="tool-item"><i class="fas fa-cloud"></i> Azure</div>
                <div class="tool-item"><i class="fas fa-database"></i> SQL Server</div>
                <div class="tool-item"><i class="fab fa-php"></i> PHP / MySQL</div>
            </div>
        </div>
    </div>

    <div style="min-height: 100px;"></div>

    <div class="container mt-5 hidden" id="offres"> <!-- Sommaire Bento -->
        <h2 class="section-title">Navigation</h2>
        
        <div class="bento-grid">
            <div class="card bento-large glass-card-hover group">
                <img src="./assets/images/da/projets.jpg" class="card-img" alt="Projets" style="height: 100%; object-fit: cover; opacity: 0.3;">
                <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                    <h3 class="h2 fw-bold text-white mb-2">Mes Projets</h3>
                    <p class="text-white text-opacity-75 mb-4">Découvrez mes réalisations techniques.</p>
                    <div class="d-flex gap-2">
                        <a href="<?php echo $base_path; ?>projets-perso" class="btn btn-sm btn-light rounded-pill">Perso</a>
                        <a href="<?php echo $base_path; ?>projets-scolaires" class="btn btn-sm btn-light rounded-pill">Scolaire</a>
                        <a href="<?php echo $base_path; ?>projets-entreprise" class="btn btn-sm btn-custom rounded-pill">Entreprise</a>
                    </div>
                </div>
            </div>

            <div class="card bento-wide glass-card-hover">
                <div class="card-body d-flex flex-column justify-content-center p-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-calendar-alt text-primary fs-3 me-3"></i>
                        <h4 class="mb-0">Événements</h4>
                    </div>
                    <p class="text-muted small">Conférences et rencontres tech.</p>
                    <a href="<?php echo $base_path; ?>evenements" class="btn btn-outline-light btn-sm rounded-pill mt-auto w-fit">En savoir plus</a>
                </div>
            </div>

            <div class="card glass-card-hover">
                <div class="card-body p-4 text-center">
                    <i class="fas fa-newspaper text-primary fs-2 mb-3"></i>
                    <h5>Veille</h5>
                    <a href="<?php echo $base_path; ?>veille" class="btn btn-custom btn-sm rounded-pill w-100 mt-2">Lire</a>
                </div>
            </div>

            <div class="card glass-card-hover bg-gradient-dark">
                <div class="card-body p-4">
                    <i class="fas fa-envelope text-primary fs-3 mb-3"></i>
                    <h5>Contact</h5>
                    <p class="small text-muted mb-3">Un projet ? Parlons-en.</p>
                    <a href="<?php echo $base_path; ?>contact" class="btn btn-sm btn-outline-light rounded-pill w-100">Discuter</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5 hidden"> <!-- Expériences -->
        <h2 class="section-title">Parcours</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card glass-card-hover border-primary border-opacity-25">
                    <div class="position-relative">
                        <img src="./assets/images/stage-alternance/mm.jpg" class="card-img-top" alt="Micro-Mega" style="height: 180px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-primary shadow-sm">Alternance</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Micro-Mega</h5>
                        <p class="text-primary small mb-3">Administrateur réseau</p>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Infrastructure & Matériel</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Active Directory & GPO</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Cybersécurité réseau</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass-card-hover">
                    <div class="position-relative">
                        <img src="./assets/images/stage-alternance/adeo.jpg" class="card-img-top" alt="Adeo" style="height: 180px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-secondary shadow-sm">Stage</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Adeo Informatique</h5>
                        <p class="text-muted small mb-3">Support & Solutions PME</p>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Masterisation postes</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Maintenance sur site</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card glass-card-hover">
                    <div class="position-relative">
                        <img src="./assets/images/stage-alternance/safran.jpg" class="card-img-top" alt="Safran" style="height: 180px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-secondary shadow-sm">Stage</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Safran</h5>
                        <p class="text-muted small mb-3">Immersion industrielle</p>
                        <p class="small text-muted mb-0">Découverte des processus critiques et des technologies aéronautiques.</p>
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
