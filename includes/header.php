<?php
if (!isset($base_path)) {
    $base_path = '../';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Thomas Lapierre, étudiant en BTS SIO option SISR, passionné par le réseau, l'administration système et la cybersécurité.">
    <meta property="og:title" content="Thomas Lapierre - Portfolio">
    <meta property="og:description" content="Découvrez mon univers, mes projets et mes expériences en IT et Réseau.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://synologynasthomas.synology.me/">
    <meta property="og:image" content="https://synologynasthomas.synology.me/assets/images/da/PP.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/styles.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@450&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $base_path; ?>assets/images/da/PP.jpg" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $base_path; ?>index.php">
                    <img src="<?php echo $base_path; ?>assets/images/da/PP.jpg" alt="Logo Thomas" height="50" loading="lazy">
                </a>            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>a-propos">À propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Projets</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-perso">Projets Perso</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-scolaires">Projets Scolaires</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>projets-entreprise">Projets Entreprise</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Voir-Plus</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>evenements">Événements</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_path; ?>veille">Veille Technologique</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $base_path; ?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>