<?php
$base_path = './';
$page_title = 'Thomas Lapierre — Portfolio';
include './includes/header.php';

$dateNaissance = "2006-06-13";
$diff = date_diff(date_create($dateNaissance), date_create(date("Y-m-d")));
$age = $diff->y;
?>

<main>

    <!-- ══════════════════════════════════ -->
    <!-- HERO                               -->
    <!-- ══════════════════════════════════ -->
    <div class="welcome-screen" id="welcomeScreen">
        <div class="container">
            <div class="hero-content">

                <div class="hero-badge mb-4">
                    <span class="pulse-dot"></span>
                    Disponible · Alternance &amp; Opportunités
                </div>

                <h1 class="hero-title fw-bold mb-3">
                    Thomas <span class="text-primary">Lapierre</span>
                </h1>

                <div class="hero-subtitle-wrap mb-4">
                    <span class="typewriter-text"></span><span class="typewriter-cursor"></span>
                </div>

                <div class="hero-tags mb-4">
                    <span class="hero-tag"><i class="fas fa-server me-1"></i> Sysadmin</span>
                    <span class="hero-tag"><i class="fas fa-network-wired me-1"></i> Réseau</span>
                    <span class="hero-tag"><i class="fas fa-shield-alt me-1"></i> Cybersécurité</span>
                    <span class="hero-tag"><i class="fab fa-docker me-1"></i> Docker</span>
                    <span class="hero-tag"><i class="fas fa-cloud me-1"></i> Azure</span>
                </div>

                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn-custom btn-lg magnetic-btn" onclick="hideWelcome()">
                        <i class="fas fa-compass me-2"></i> Explorer le portfolio
                    </button>
                    <a href="<?php echo $base_path; ?>contact" class="btn btn-outline-light btn-lg rounded-pill px-4">
                        Me contacter
                    </a>
                </div>

            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator">
            <div class="scroll-indicator-line"></div>
            <span class="scroll-indicator-bounce">Scroll</span>
        </div>
    </div>

    <!-- Spacer (triggers reveal after welcome) -->
    <div id="spacer-1" style="min-height: 120px;"></div>

    <!-- ══════════════════════════════════ -->
    <!-- À PROPOS                           -->
    <!-- ══════════════════════════════════ -->
    <section class="container mt-5 hidden" id="a-propos">
        <h2 class="section-title">L'Essentiel</h2>

        <div class="row g-4 align-items-stretch">

            <!-- Card identité -->
            <div class="col-lg-7">
                <div class="card p-4 p-lg-5 h-100 tilt-card">
                    <div class="row align-items-center gy-4">
                        <div class="col-md-4 text-center">
                            <div class="profile-img-wrap d-inline-block">
                                <img src="https://www.slapia.com/assets/img/Thomas-Lapierre.jpg"
                                     alt="Thomas Lapierre"
                                     class="rounded-circle shadow-lg"
                                     style="width:150px;height:150px;object-fit:cover;"
                                     loading="lazy">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p class="text-primary small fw-bold text-uppercase mb-1 tracking-wide" style="letter-spacing:2px;">Bonjour, c'est</p>
                            <h3 class="h3 fw-bold mb-2">Thomas Lapierre</h3>
                            <div class="quote-block mb-3">
                                "Transformer une infrastructure chaotique en un système fiable, documenté et sécurisé — c'est ça qui me motive."
                            </div>
                            <p class="text-muted mb-3">
                                <?php echo $age; ?> ans · Étudiant <strong>BTS SIO (SISR)</strong> à Dijon.<br>
                                Mon univers ? L'administration système, le réseau et la sécurité informatique.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-tag"><i class="fab fa-linux me-1"></i>Linux</span>
                                <span class="skill-tag"><i class="fab fa-windows me-1"></i>Windows Server</span>
                                <span class="skill-tag"><i class="fas fa-shield-alt me-1"></i>Cyber</span>
                                <span class="skill-tag"><i class="fab fa-docker me-1"></i>Docker</span>
                                <span class="skill-tag"><i class="fas fa-cloud me-1"></i>Azure</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card formation -->
            <div class="col-lg-5">
                <div class="card p-4 h-100">
                    <h5 class="mb-4 text-primary"><i class="fas fa-graduation-cap me-2"></i>Formations</h5>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="d-flex align-items-center gap-3 mb-1">
                                <img src="<?php echo $base_path; ?>assets/images/formations/saint-benigne.jpg"
                                     class="rounded-circle" style="width:42px;height:42px;object-fit:cover;" loading="lazy">
                                <div>
                                    <h6 class="mb-0 fw-bold">BTS SIO — option SISR</h6>
                                    <small class="text-muted">St-Bénigne · Dijon · 2024–2026</small>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo $base_path; ?>assets/images/formations/saint-joseph.jpg"
                                     class="rounded-circle" style="width:42px;height:42px;object-fit:cover;" loading="lazy">
                                <div>
                                    <h6 class="mb-0 fw-bold">BAC PRO SN</h6>
                                    <small class="text-muted">St-Joseph · Besançon · 2022–2024</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <a href="<?php echo $base_path; ?>a-propos" class="btn btn-outline-light btn-sm rounded-pill w-100">
                            <i class="fas fa-arrow-right me-2"></i>En savoir plus sur mon parcours
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════ -->
    <!-- STATS COUNTERS                     -->
    <!-- ══════════════════════════════════ -->
    <section class="container mt-5 hidden">
        <div class="stats-grid">
            <div class="stat-card stagger-1">
                <i class="fas fa-briefcase stat-icon"></i>
                <span class="stat-number" data-counter data-target="3" data-suffix="+">0</span>
                <span class="stat-label">Expériences</span>
            </div>
            <div class="stat-card stagger-2">
                <i class="fas fa-code stat-icon"></i>
                <span class="stat-number" data-counter data-target="10" data-suffix="+">0</span>
                <span class="stat-label">Projets réalisés</span>
            </div>
            <div class="stat-card stagger-3">
                <i class="fas fa-ticket-alt stat-icon"></i>
                <span class="stat-number" data-counter data-target="20" data-suffix="+">0</span>
                <span class="stat-label">Tickets / semaine</span>
            </div>
            <div class="stat-card stagger-4">
                <i class="fas fa-server stat-icon"></i>
                <span class="stat-number" data-counter data-target="2" data-suffix=" To">0</span>
                <span class="stat-label">Espace libéré NAS</span>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════ -->
    <!-- COMPÉTENCES                        -->
    <!-- ══════════════════════════════════ -->
    <section class="container mt-5 hidden">
        <h2 class="section-title">Compétences</h2>

        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <div class="card p-4 h-100">
                    <h5 class="text-primary mb-4"><i class="fas fa-layer-group me-2"></i>Stack technique</h5>
                    <p class="text-muted small mb-4">
                        Formé sur des environnements réels en alternance chez Micro-Méga, mes compétences couvrent l'ensemble de la chaîne système &amp; réseau — du câble au cloud.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="skill-tag"><i class="fab fa-windows me-1"></i>Windows Server</span>
                        <span class="skill-tag"><i class="fab fa-linux me-1"></i>Linux Debian</span>
                        <span class="skill-tag"><i class="fas fa-network-wired me-1"></i>Cisco</span>
                        <span class="skill-tag"><i class="fas fa-cloud me-1"></i>Azure</span>
                        <span class="skill-tag"><i class="fab fa-docker me-1"></i>Docker</span>
                        <span class="skill-tag"><i class="fas fa-shield-alt me-1"></i>Cybersécurité</span>
                        <span class="skill-tag"><i class="fas fa-robot me-1"></i>n8n</span>
                        <span class="skill-tag"><i class="fab fa-php me-1"></i>PHP</span>
                        <span class="skill-tag"><i class="fas fa-terminal me-1"></i>PowerShell</span>
                        <span class="skill-tag"><i class="fab fa-git-alt me-1"></i>Git / CI-CD</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fab fa-windows text-primary"></i>Windows Server / AD</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="90"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fas fa-network-wired text-primary"></i>Réseau / Cisco IOS</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="78"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fab fa-linux text-primary"></i>Linux (Debian / Ubuntu)</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="82"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fas fa-cloud text-primary"></i>Azure / Entra ID</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="72"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fas fa-shield-alt text-primary"></i>Cybersécurité</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="75"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fab fa-docker text-primary"></i>Docker / Conteneurisation</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="67"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fas fa-terminal text-primary"></i>PowerShell / Scripting</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="71"></div></div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span class="skill-name"><i class="fas fa-robot text-primary"></i>n8n / Automatisation IA</span>
                            <span class="skill-pct">0%</span>
                        </div>
                        <div class="skill-bar-track"><div class="skill-bar-fill" data-pct="80"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════ -->
    <!-- TECH STACK MARQUEE                 -->
    <!-- ══════════════════════════════════ -->
    <div class="mt-5 mb-5 hidden" id="tech-stack">
        <div class="tools-marquee">
            <div class="marquee-content">
                <div class="tool-item"><i class="fab fa-windows"></i>Windows Server</div>
                <div class="tool-item"><i class="fab fa-linux"></i>Linux (Debian)</div>
                <div class="tool-item"><i class="fas fa-network-wired"></i>Cisco IOS</div>
                <div class="tool-item"><i class="fab fa-docker"></i>Docker</div>
                <div class="tool-item"><i class="fas fa-shield-alt"></i>Cybersécurité</div>
                <div class="tool-item"><i class="fas fa-cloud"></i>Azure</div>
                <div class="tool-item"><i class="fas fa-database"></i>SQL Server</div>
                <div class="tool-item"><i class="fab fa-php"></i>PHP / MySQL</div>
                <div class="tool-item"><i class="fas fa-robot"></i>n8n / IA</div>
                <div class="tool-item"><i class="fab fa-git-alt"></i>Git / CI-CD</div>
                <!-- Duplicate for seamless loop -->
                <div class="tool-item"><i class="fab fa-windows"></i>Windows Server</div>
                <div class="tool-item"><i class="fab fa-linux"></i>Linux (Debian)</div>
                <div class="tool-item"><i class="fas fa-network-wired"></i>Cisco IOS</div>
                <div class="tool-item"><i class="fab fa-docker"></i>Docker</div>
                <div class="tool-item"><i class="fas fa-shield-alt"></i>Cybersécurité</div>
                <div class="tool-item"><i class="fas fa-cloud"></i>Azure</div>
                <div class="tool-item"><i class="fas fa-database"></i>SQL Server</div>
                <div class="tool-item"><i class="fab fa-php"></i>PHP / MySQL</div>
                <div class="tool-item"><i class="fas fa-robot"></i>n8n / IA</div>
                <div class="tool-item"><i class="fab fa-git-alt"></i>Git / CI-CD</div>
            </div>
        </div>
    </div>

    <!-- ══════════════════════════════════ -->
    <!-- NAVIGATION BENTO                   -->
    <!-- ══════════════════════════════════ -->
    <section class="container mt-5 mb-5 hidden" id="navigation">
        <h2 class="section-title">Explorer</h2>

        <div class="bento-grid">

            <!-- Projets — grande carte -->
            <div class="card bento-large glass-card-hover" style="cursor:pointer;">
                <img src="<?php echo $base_path; ?>assets/images/da/projets.jpg"
                     class="card-img w-100 h-100"
                     alt="Projets"
                     style="object-fit:cover;opacity:0.28;position:absolute;inset:0;"
                     loading="lazy">
                <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                    <span class="text-primary small fw-bold text-uppercase mb-2" style="letter-spacing:2px;">Réalisations</span>
                    <h3 class="h2 fw-bold text-white mb-2">Mes Projets</h3>
                    <p class="text-white text-opacity-65 mb-4 small">Découvrez mes créations personnelles, scolaires et professionnelles.</p>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="<?php echo $base_path; ?>projets-perso"     class="btn btn-sm btn-outline-light rounded-pill">Perso</a>
                        <a href="<?php echo $base_path; ?>projets-scolaires" class="btn btn-sm btn-outline-light rounded-pill">Scolaire</a>
                        <a href="<?php echo $base_path; ?>projets-entreprise" class="btn btn-sm btn-custom rounded-pill">Entreprise</a>
                    </div>
                </div>
            </div>

            <!-- Événements -->
            <div class="card bento-wide glass-card-hover">
                <img src="<?php echo $base_path; ?>assets/images/da/evenements.jpg"
                     class="card-img w-100 h-100"
                     alt="Événements"
                     style="object-fit:cover;opacity:0.18;position:absolute;inset:0;"
                     loading="lazy">
                <div class="card-body d-flex flex-column justify-content-center p-4" style="position:relative;z-index:1;">
                    <i class="fas fa-calendar-star text-primary fs-2 mb-3"></i>
                    <h4 class="fw-bold mb-1">Événements & Salons</h4>
                    <p class="text-muted small mb-3">InCyber, Paris Games Week, Audace d'Entreprendre…</p>
                    <a href="<?php echo $base_path; ?>evenements" class="btn btn-outline-light btn-sm rounded-pill mt-auto" style="width:fit-content;">
                        Découvrir <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Veille -->
            <div class="card glass-card-hover">
                <img src="<?php echo $base_path; ?>assets/images/da/veilles.jpg"
                     class="card-img w-100 h-100"
                     alt="Veille"
                     style="object-fit:cover;opacity:0.18;position:absolute;inset:0;"
                     loading="lazy">
                <div class="card-body p-4 text-center d-flex flex-column justify-content-center" style="position:relative;z-index:1;">
                    <i class="fas fa-newspaper text-primary fs-2 mb-3"></i>
                    <h5 class="fw-bold mb-2">Veille Techno</h5>
                    <p class="text-muted small mb-3">Powered by Notion &amp; n8n</p>
                    <a href="<?php echo $base_path; ?>veille" class="btn btn-custom btn-sm rounded-pill w-100">Lire</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="card glass-card-hover">
                <img src="<?php echo $base_path; ?>assets/images/da/contact.jpg"
                     class="card-img w-100 h-100"
                     alt="Contact"
                     style="object-fit:cover;opacity:0.15;position:absolute;inset:0;"
                     loading="lazy">
                <div class="card-body p-4 d-flex flex-column justify-content-center" style="position:relative;z-index:1;">
                    <i class="fas fa-paper-plane text-primary fs-2 mb-3"></i>
                    <h5 class="fw-bold mb-1">Contact</h5>
                    <p class="text-muted small mb-3">Un projet ? Parlons-en directement.</p>
                    <a href="<?php echo $base_path; ?>contact" class="btn btn-outline-light btn-sm rounded-pill w-100">Discuter</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════ -->
    <!-- EXPÉRIENCES                        -->
    <!-- ══════════════════════════════════ -->
    <section class="container mt-5 mb-5 hidden">
        <h2 class="section-title">Expériences</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 glass-card-hover tilt-card">
                    <div class="position-relative overflow-hidden" style="border-radius:20px 20px 0 0;">
                        <img src="<?php echo $base_path; ?>assets/images/stage-alternance/mm.jpg"
                             class="card-img-top" alt="Micro-Mega"
                             style="height:180px;object-fit:cover;"
                             loading="lazy">
                        <div class="position-absolute inset-0" style="background:linear-gradient(to top,rgba(0,0,0,0.7),transparent);"></div>
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-primary shadow-sm">Alternance</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Micro-Méga <small class="text-muted">(Groupe Coltene)</small></h5>
                        <p class="text-primary small mb-3">Administrateur réseau · 2024–2026</p>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Infrastructure & Matériel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Active Directory & GPO</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Migration Entra ID / Azure AD</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Formation IA (Copilot / Gemini)</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-top border-secondary border-opacity-25 p-3 text-center">
                        <a href="<?php echo $base_path; ?>projets-entreprise" class="btn btn-custom btn-sm rounded-pill w-100">
                            <i class="fas fa-arrow-right me-2"></i>Voir les projets
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 glass-card-hover tilt-card">
                    <div class="position-relative overflow-hidden" style="border-radius:20px 20px 0 0;">
                        <img src="<?php echo $base_path; ?>assets/images/stage-alternance/adeo.jpg"
                             class="card-img-top" alt="Adeo"
                             style="height:180px;object-fit:cover;"
                             loading="lazy">
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-secondary shadow-sm">Stage</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Adeo Informatique</h5>
                        <p class="text-muted small mb-3">Support & Solutions PME</p>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Masterisation postes</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i>Maintenance sur site</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 glass-card-hover tilt-card">
                    <div class="position-relative overflow-hidden" style="border-radius:20px 20px 0 0;">
                        <img src="<?php echo $base_path; ?>assets/images/stage-alternance/safran.jpg"
                             class="card-img-top" alt="Safran"
                             style="height:180px;object-fit:cover;" loading="lazy">
                        <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-secondary shadow-sm">Stage</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">Safran</h5>
                        <p class="text-muted small mb-3">Immersion industrielle</p>
                        <p class="small text-muted mb-0">Découverte des processus critiques et des technologies aéronautiques industrielles.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<script src="<?php echo $base_path; ?>assets/js/scroll.js"></script>

<?php include './includes/footer.php'; ?>
