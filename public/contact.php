<?php
$base_path = './';
include '../includes/header.php';
?>

<head>
    <title>Contact - Thomas Lapierre</title>
</head>

<main>
    <section class="container mt-5 mb-5">
        <div class="text-center mb-5 fade-in">
            <h1 class="display-4 fw-bold text-gradient">Contactez-moi</h1>
            <p class="lead text-muted">Une question ? Un projet ? N'hésitez pas à me contacter.</p>
        </div>

        <div class="row g-4 justify-content-center align-items-stretch fade-in">
            <!-- Carte d'introduction -->
            <div class="col-lg-5">
                <div class="card glass-card-hover h-100 p-4 border-0">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <div class="mb-4">
                            <div class="d-inline-block p-4 rounded-circle bg-primary bg-opacity-10">
                                <i class="fas fa-paper-plane fa-3x text-primary"></i>
                            </div>
                        </div>
                        <h3 class="card-title mb-3">Restons en contact</h3>
                        <p class="card-text text-muted">
                            Je suis toujours ouvert aux opportunités de collaboration, aux questions sur mon parcours ou simplement pour échanger sur la tech.
                        </p>
                        <p class="card-text text-muted">
                            Basé à <strong>Besançon</strong> et <strong>Dijon</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carte des liens -->
            <div class="col-lg-6">
                <div class="card glass-card-hover h-100 p-4 border-0">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-address-card me-2 text-primary"></i>Mes Réseaux</h3>
                        
                        <div class="d-grid gap-3">
                            <!-- LinkedIn Badge Wrapper -->
                            <div class="p-3 rounded-3 border border-secondary border-opacity-25" style="background: rgba(255,255,255,0.02);">
                                <h5 class="mb-3"><i class="fab fa-linkedin text-primary me-2"></i>LinkedIn</h5>
                                <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="large" data-theme="dark" data-type="HORIZONTAL" data-vanity="lapierre-thomas" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://fr.linkedin.com/in/lapierre-thomas?trk=profile-badge"></a></div>
                            </div>

                            <!-- Autres liens -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="https://linktr.ee/thomas.lapierre" target="_blank" class="btn btn-outline-light w-100 p-3 h-100 d-flex align-items-center justify-content-center hover-scale">
                                        <i class="fas fa-link me-2"></i> Linktree
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://github.com/ThomasLap13" target="_blank" class="btn btn-outline-light w-100 p-3 h-100 d-flex align-items-center justify-content-center hover-scale">
                                        <i class="fab fa-github me-2"></i> GitHub
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mt-3 text-center">
                                <a href="mailto:thomas25.lapierre@outlook.com" class="btn btn-custom w-100 py-3">
                                    <i class="fas fa-envelope me-2"></i> Envoyer un email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include '../includes/footer.php';
?>