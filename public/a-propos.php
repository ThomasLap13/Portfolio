<?php
$base_path = './';
include '../includes/header.php';
?>

<head>
    <title>À propos — Thomas Lapierre</title>
</head>

<main>
    <div class="container mt-5 mb-5">

        <!-- Page Header -->
        <div class="text-center mb-5 fade-in">
            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-2 mb-3 d-inline-block" style="letter-spacing:1.5px;font-size:.75rem;">MON PARCOURS</span>
            <h1 class="display-4 fw-bold text-gradient mb-3">À propos de moi</h1>
            <p class="lead text-muted mx-auto" style="max-width:550px;">Découvrez ma formation, mes choix et ma passion pour l'informatique.</p>
        </div>

        <!-- Ma Filière -->
        <section class="mb-5 fade-in">
            <div class="card p-5">
                <div class="text-center">
                    <h2 class="mb-4 fw-bold"><i class="fas fa-graduation-cap text-primary me-3"></i>Ma Filière : BTS SIO</h2>
                    <hr class="w-25 mx-auto mb-4 opacity-15">
                    <p class="lead text-muted mx-auto" style="max-width:750px;">
                        Je suis étudiant en <strong class="text-white">BTS SIO (Services Informatiques aux Organisations)</strong> au Lycée Saint-Bénigne à Dijon.
                        Cette formation polyvalente couvre l'ensemble du cycle de vie des services informatiques, de la conception à la maintenance, en passant par le développement et la cybersécurité.
                    </p>
                </div>
            </div>
        </section>

        <!-- Options SISR & SLAM -->
        <div class="row g-4 mb-5">

            <div class="col-lg-6 fade-in stagger-1">
                <div class="card h-100 p-4 glass-card-hover tilt-card">
                    <div class="text-center mb-4">
                        <img src="<?php echo $base_path; ?>assets/images/formations/sisr.jpg"
                             class="img-fluid rounded-4 shadow-lg mb-3" alt="Option SISR"
                             style="height:200px;object-fit:cover;width:100%;">
                        <h3 class="text-primary fw-bold"><i class="fas fa-network-wired me-2"></i>Option SISR</h3>
                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-20 rounded-pill mb-3 px-3 py-2" style="font-size:.75rem;">
                            Solutions d'Infrastructure, Systèmes et Réseaux
                        </span>
                    </div>
                    <p class="text-muted small">Cette option forme des experts en administration des systèmes et des réseaux. Elle met l'accent sur :</p>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Installation et configuration de serveurs</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Gestion des réseaux et de la sécurité</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Maintenance et supervision des équipements</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 fade-in stagger-2">
                <div class="card h-100 p-4 glass-card-hover tilt-card">
                    <div class="text-center mb-4">
                        <img src="<?php echo $base_path; ?>assets/images/formations/slam.jpg"
                             class="img-fluid rounded-4 shadow-lg mb-3" alt="Option SLAM"
                             style="height:200px;object-fit:cover;width:100%;">
                        <h3 class="fw-bold" style="color:#8b5cf6;"><i class="fas fa-code me-2"></i>Option SLAM</h3>
                        <span class="badge rounded-pill mb-3 px-3 py-2" style="background:rgba(139,92,246,.12);color:#a78bfa;border:1px solid rgba(139,92,246,.25);font-size:.75rem;">
                            Solutions Logicielles et Applications Métiers
                        </span>
                    </div>
                    <p class="text-muted small">Cette option est dédiée au développement d'applications. Elle permet de maîtriser :</p>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color:#8b5cf6;"></i>Conception et développement d'applications</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color:#8b5cf6;"></i>Gestion de bases de données</li>
                        <li><i class="fas fa-check-circle me-2" style="color:#8b5cf6;"></i>Intégration de services et API</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mon Choix SISR -->
        <section class="mb-5 fade-in">
            <div class="card p-5" style="border-left:4px solid var(--primary);border-top-left-radius:0;border-bottom-left-radius:0;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-3 fw-bold"><i class="fas fa-user-check text-primary me-2"></i>Mon Choix : SISR</h3>
                        <p class="text-muted mb-3">
                            J'ai choisi l'option <strong class="text-white">SISR</strong> car elle correspond parfaitement à mon profil et à mon alternance.
                            Travailler sur des infrastructures réelles, résoudre des problématiques réseaux complexes et assurer la sécurité des données sont des défis qui me passionnent au quotidien.
                        </p>
                        <p class="text-muted mb-0">
                            Cette spécialisation me permet d'allier théorie et pratique, renforçant ainsi mes compétences pour devenir un administrateur système et réseau qualifié.
                        </p>
                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <i class="fas fa-server fa-6x text-primary" style="opacity:.12;"></i>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php include '../includes/footer.php'; ?>
