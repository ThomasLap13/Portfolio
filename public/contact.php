<?php
$base_path = './';
$page_title = 'Contact — Thomas Lapierre';
include '../includes/header.php';
?>

<main>
    <section class="container mt-5 mb-5">

        <!-- Page Header -->
        <div class="text-center mb-5 fade-in">
            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-2 mb-3 d-inline-block" style="letter-spacing:1.5px;font-size:.75rem;">RESTONS EN CONTACT</span>
            <h1 class="display-4 fw-bold text-gradient mb-3">Contactez-moi</h1>
            <p class="lead text-muted mx-auto" style="max-width:500px;">Une question, un projet ou juste envie d'échanger sur la tech ? Je réponds rapidement.</p>
        </div>

        <div class="row g-4 justify-content-center align-items-stretch fade-in">

            <!-- Intro -->
            <div class="col-lg-5">
                <div class="card h-100 p-4 glass-card-hover tilt-card">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mx-auto mb-4" style="width:80px;height:80px;">
                            <i class="fas fa-paper-plane fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Thomas Lapierre</h3>
                        <p class="text-muted mb-2">
                            Toujours ouvert aux opportunités de collaboration, aux questions sur mon parcours ou pour échanger sur la tech.
                        </p>
                        <p class="text-muted mb-4">
                            Basé à <strong>Besançon</strong> &amp; <strong>Dijon</strong>.
                        </p>
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <span class="skill-tag"><i class="fas fa-network-wired me-1"></i>Sysadmin</span>
                            <span class="skill-tag"><i class="fas fa-shield-alt me-1"></i>Cybersécurité</span>
                            <span class="skill-tag"><i class="fas fa-cloud me-1"></i>Cloud</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <div class="col-lg-6">
                <div class="card h-100 p-4 glass-card-hover">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4"><i class="fas fa-address-card me-2 text-primary"></i>Mes Réseaux</h3>

                        <div class="d-grid gap-3">

                            <!-- LinkedIn Badge -->
                            <div class="p-3 rounded-3" style="background:rgba(255,255,255,.03);border:1px solid var(--glass-border);">
                                <h5 class="mb-3"><i class="fab fa-linkedin text-primary me-2"></i>LinkedIn</h5>
                                <div class="badge-base LI-profile-badge" data-locale="fr_FR" data-size="large" data-theme="dark" data-type="HORIZONTAL" data-vanity="lapierre-thomas" data-version="v1">
                                    <a class="badge-base__link LI-simple-link" href="https://fr.linkedin.com/in/lapierre-thomas?trk=profile-badge"></a>
                                </div>
                            </div>

                            <!-- Other links -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="https://linktr.ee/thomas.lapierre" target="_blank" rel="noopener noreferrer"
                                       class="btn btn-outline-light w-100 p-3 h-100 d-flex align-items-center justify-content-center gap-2 rounded-3">
                                        <i class="fas fa-link text-primary"></i> Linktree
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://github.com/ThomasLap13" target="_blank" rel="noopener noreferrer"
                                       class="btn btn-outline-light w-100 p-3 h-100 d-flex align-items-center justify-content-center gap-2 rounded-3">
                                        <i class="fab fa-github"></i> GitHub
                                    </a>
                                </div>
                            </div>

                            <a href="mailto:thomas25.lapierre@outlook.com" class="btn btn-custom w-100 py-3 magnetic-btn">
                                <i class="fas fa-envelope me-2"></i> Envoyer un email
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
