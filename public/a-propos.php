<?php
include '../includes/header.php';
?>

<head>
    <title>À propos - Thomas Lapierre</title>
</head>

<main>
    <div class="container mt-5 mb-5">
        <div class="text-center mb-5 fade-in">
            <h1 class="display-4 fw-bold">À propos de moi</h1>
            <p class="lead text-muted">Découvrez mon parcours et ma passion pour l'informatique.</p>
        </div>

        <!-- Ma Filière -->
        <section class="mb-5 fade-in">
            <div class="glass-card p-5">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="mb-4"><i class="fas fa-graduation-cap text-primary me-3"></i>Ma Filière : BTS SIO</h2>
                        <hr class="w-25 mx-auto mb-4 opacity-25">
                        <p class="lead text-light-50">
                            Je suis actuellement étudiant en <strong>BTS SIO (Services Informatiques aux Organisations)</strong> au Lycée Saint-Bénigne à Dijon. 
                            Cette formation polyvalente couvre l'ensemble du cycle de vie des services informatiques, de la conception à la maintenance, en passant par le développement et la cybersécurité.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Options SISR & SLAM -->
        <div class="row g-4 mb-5">
            <!-- SISR -->
            <div class="col-lg-6 fade-in">
                <div class="glass-card h-100 p-4 glass-card-hover">
                    <div class="text-center mb-4">
                        <img src="../assets/images/formations/sisr.jpg" class="img-fluid rounded-4 shadow-lg mb-3" alt="Option SISR" style="height: 250px; object-fit: cover; width: 100%;">
                        <h3 class="text-primary"><i class="fas fa-network-wired me-2"></i>Option SISR</h3>
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill mb-2">Solutions d'Infrastructure, Systèmes et Réseaux</span>
                    </div>
                    <p class="text-light-50 text-justify">
                        Cette option forme des experts en administration des systèmes et des réseaux. Elle met l'accent sur :
                    </p>
                    <ul class="list-unstyled text-light-50">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Installation et configuration de serveurs</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gestion des réseaux et de la sécurité</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Maintenance et supervision des équipements</li>
                    </ul>
                </div>
            </div>

            <!-- SLAM -->
            <div class="col-lg-6 fade-in">
                <div class="glass-card h-100 p-4 glass-card-hover">
                    <div class="text-center mb-4">
                        <img src="../assets/images/formations/slam.jpg" class="img-fluid rounded-4 shadow-lg mb-3" alt="Option SLAM" style="height: 250px; object-fit: cover; width: 100%;">
                        <h3 class="text-purple"><i class="fas fa-code me-2"></i>Option SLAM</h3>
                        <span class="badge bg-purple-subtle text-purple border border-purple-subtle rounded-pill mb-2">Solutions Logicielles et Applications Métiers</span>
                    </div>
                    <p class="text-light-50 text-justify">
                        Cette option est dédiée au développement d'applications. Elle permet de maîtriser :
                    </p>
                    <ul class="list-unstyled text-light-50">
                        <li class="mb-2"><i class="fas fa-check text-purple me-2"></i>Conception et développement d'applications</li>
                        <li class="mb-2"><i class="fas fa-check text-purple me-2"></i>Gestion de bases de données</li>
                        <li class="mb-2"><i class="fas fa-check text-purple me-2"></i>Intégration de services et API</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mon Choix -->
        <section class="mb-5 fade-in">
            <div class="glass-card p-5 border-start border-5 border-primary">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-3"><i class="fas fa-user-check text-primary me-2"></i>Mon Choix : SISR</h3>
                        <p class="text-light-50">
                            J'ai choisi l'option <strong>SISR</strong> car elle correspond parfaitement à mon profil et à mon alternance. 
                            Travailler sur des infrastructures réelles, résoudre des problématiques réseaux complexes et assurer la sécurité des données sont des défis qui me passionnent au quotidien.
                        </p>
                        <p class="text-light-50 mb-0">
                            Cette spécialisation me permet d'allier théorie et pratique, renforçant ainsi mes compétences pour devenir un administrateur système et réseau qualifié.
                        </p>
                    </div>
                    <div class="col-md-4 text-center d-none d-md-block">
                        <i class="fas fa-server fa-6x text-primary opacity-50"></i>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
include '../includes/footer.php';
?>
