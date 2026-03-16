<?php
if (!isset($base_path)) {
    $base_path = '../';
}
?>
<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="Portfolio de Thomas Lapierre — BTS SIO SISR, Administrateur Réseau & Système, passionné par la cybersécurité et l'infrastructure IT.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Thomas Lapierre">
    <meta name="keywords" content="Thomas Lapierre, BTS SIO SISR, Administrateur réseau, Cybersécurité, Azure, Docker, Linux, Portfolio">

    <!-- Open Graph -->
    <meta property="og:title" content="Thomas Lapierre — Portfolio IT">
    <meta property="og:description" content="Administrateur Système & Réseau · BTS SIO SISR · Dijon">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://synologynasthomas.synology.me/">
    <meta property="og:image" content="https://www.slapia.com/assets/img/Thomas-Lapierre.jpg">
    <meta property="og:locale" content="fr_FR">

    <!-- Structured Data (Person) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Thomas Lapierre",
      "url": "https://synologynasthomas.synology.me/",
      "image": "https://www.slapia.com/assets/img/Thomas-Lapierre.jpg",
      "jobTitle": "Administrateur Système & Réseau (en formation)",
      "description": "Étudiant BTS SIO SISR, alternant chez Micro-Méga, passionné par l'infrastructure IT et la cybersécurité.",
      "address": { "@type": "PostalAddress", "addressLocality": "Dijon", "addressCountry": "FR" },
      "sameAs": [
        "https://www.linkedin.com/in/lapierre-thomas/",
        "https://github.com/ThomasLap13",
        "https://linktr.ee/thomas.lapierre"
      ]
    }
    </script>

    <!-- PWA -->
    <link rel="manifest" href="<?php echo $base_path; ?>manifest.json">
    <meta name="theme-color" content="#0b1a12">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Theme flash prevention (must be inline + first) -->
    <script>
        (function(){var t=localStorage.getItem("theme");if(t)document.documentElement.dataset.theme=t;})();
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/styles.css">

    <link rel="shortcut icon" href="https://www.slapia.com/assets/img/Thomas-Lapierre.jpg" type="image/x-icon">
</head>

<body>
    <!-- Page Loader -->
    <div id="page-loader">
        <div class="loader-content">
            <div class="loader-ring"></div>
            <div class="loader-text">Chargement</div>
        </div>
    </div>

    <!-- Scroll Progress Bar -->
    <div id="scroll-progress"></div>

    <!-- Background Blobs -->
    <div class="bg-blobs">
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
    </div>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base_path; ?>">
                    <img src="https://www.slapia.com/assets/img/Thomas-Lapierre.jpg" alt="Thomas Lapierre" height="44" loading="lazy" class="rounded-circle">
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>a-propos">À propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navDropProjects" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projets</a>
                            <ul class="dropdown-menu" aria-labelledby="navDropProjects">
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-perso"><i class="fas fa-user me-2 text-primary opacity-75"></i>Projets Perso</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-scolaires"><i class="fas fa-graduation-cap me-2 text-primary opacity-75"></i>Projets Scolaires</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-entreprise"><i class="fas fa-building me-2 text-primary opacity-75"></i>Projets Entreprise</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>evenements">Événements</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>veille">Veille Tech</a></li>

                        <!-- CV Download -->
                        <li class="nav-item ms-lg-1">
                            <a href="<?php echo $base_path; ?>assets/docs/cv.pdf" download class="btn-cv">
                                <i class="fas fa-download"></i> CV
                            </a>
                        </li>

                        <!-- Dark/Light Toggle -->
                        <li class="nav-item ms-lg-1">
                            <button id="theme-toggle" class="theme-toggle" aria-label="Changer le thème">
                                <i id="theme-icon-sun"  class="fas fa-sun"></i>
                                <i id="theme-icon-moon" class="fas fa-moon" style="display:none;"></i>
                            </button>
                        </li>

                        <!-- CTA Contact -->
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-custom btn-sm magnetic-btn" href="<?php echo $base_path; ?>contact">
                                Me contacter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
