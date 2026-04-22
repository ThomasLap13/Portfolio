<?php
$base_path = './';
$page_title = 'Veille Technologique — Thomas Lapierre';
include '../includes/header.php';
?>

<main>
    <section class="container mt-5">
        <div class="text-center mb-5 fade-in">
            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-2 mb-3 d-inline-block" style="letter-spacing:1.5px;font-size:.75rem;">POWERED BY NOTION & N8N</span>
            <h1 class="display-4 fw-bold text-gradient mb-3">Veille Technologique</h1>
            <p class="lead text-muted mx-auto" style="max-width:550px;">Une sélection d'articles et de ressources pour rester à la pointe.</p>
        </div>
        
<?php
// Notion API configuration from environment variables (Docker)
$token = getenv('NOTION_TOKEN');
$database_id = getenv('NOTION_DATABASE_ID');

// Date Filter Logic - Par semaine
$selectedWeek = isset($_GET['week']) ? intval($_GET['week']) : 0; // 0 = semaine actuelle

// Calculer les dates de début et fin de la semaine sélectionnée
// On considère que la semaine commence le lundi
$today = new DateTime();
$dayOfWeek = $today->format('N'); // 1 (lundi) à 7 (dimanche)

// Début de la semaine actuelle (lundi)
$startOfCurrentWeek = clone $today;
$startOfCurrentWeek->modify('-' . ($dayOfWeek - 1) . ' days');

// Appliquer le décalage de semaine
$startDate = clone $startOfCurrentWeek;
$startDate->modify('-' . $selectedWeek . ' weeks');

$endDate = clone $startDate;
$endDate->modify('+6 days'); // Fin de la semaine (dimanche)

// Formater pour l'API Notion
$startDateStr = $startDate->format('Y-m-d');
$endDateStr = $endDate->format('Y-m-d');

// Calculer le libellé du bouton
$currentWeekLabel = $startDate->format('d/m') . ' - ' . $endDate->format('d/m/Y');
if ($selectedWeek == 0) {
    $currentWeekLabel = 'Cette semaine (' . $currentWeekLabel . ')';
}
?>
        <!-- Filtre par semaine aligné à droite -->
        <div class="d-flex justify-content-end mb-4 fade-in" style="position: relative; z-index: 1000;">
            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle bg-dark bg-opacity-50 border-secondary" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-calendar-week me-2"></i><?php echo $currentWeekLabel; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-dark border-secondary shadow-lg" aria-labelledby="filterDropdown" style="max-height: 400px; overflow-y: auto; z-index: 1050;">
                    <?php
                    // Générer les options pour les 12 dernières semaines
                    for ($i = 0; $i <= 11; $i++) {
                        $weekStart = clone $startOfCurrentWeek;
                        $weekStart->modify('-' . $i . ' weeks');
                        $weekEnd = clone $weekStart;
                        $weekEnd->modify('+6 days');
                        
                        // Formater le label
                        if ($i == 0) {
                            $label = 'Cette semaine';
                        } elseif ($i == 1) {
                            $label = 'Semaine dernière';
                        } else {
                            $label = 'Il y a ' . $i . ' semaines';
                        }
                        $dateRange = $weekStart->format('d/m') . ' - ' . $weekEnd->format('d/m/Y');
                        
                        // Vérifier si c'est l'option active
                        $isActive = ($selectedWeek == $i) ? 'active bg-primary' : '';
                        
                        echo '<li>';
                        echo '<a class="dropdown-item text-white ' . $isActive . '" href="?week=' . $i . '">';
                        echo '<div class="d-flex flex-column">';
                        echo '<span class="fw-bold">' . $label . '</span>';
                        echo '<small class="text-muted">' . $dateRange . '</small>';
                        echo '</div>';
                        echo '</a>';
                        echo '</li>';
                        
                        // Ajouter un séparateur après la semaine actuelle
                        if ($i == 0) {
                            echo '<li><hr class="dropdown-divider border-secondary"></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

<?php
// Maintenant faire l'appel API
$filter = [
    "filter" => [
        "and" => [
            [
                "property" => "Date",
                "date" => [
                    "on_or_after" => $startDateStr
                ]
            ],
            [
                "property" => "Date",
                "date" => [
                    "on_or_before" => $endDateStr
                ]
            ]
        ]
    ]
];

$url = "https://api.notion.com/v1/databases/$database_id/query";
$headers = [
    "Authorization: Bearer $token",
    "Notion-Version: 2022-06-28",
    "Content-Type: application/json"
];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($filter));
$result = curl_exec($ch);
curl_close($ch);
?>

        <div class="row g-4 fade-in">
<?php
$data = json_decode($result, true);

// Tri décroissant par date (plus récent d'abord)
if (!empty($data['results'])) {
    usort($data['results'], function($a, $b) {
        $dateA = $a['properties']['Date']['date']['start'] ?? '';
        $dateB = $b['properties']['Date']['date']['start'] ?? '';
        return strtotime($dateB) <=> strtotime($dateA);
    });

    foreach ($data['results'] as $item) {
        $props = $item['properties'];
        $titre          = $props['Titre']['title'][0]['plain_text'] ?? '';
        $resume         = $props['Résumé']['rich_text'][0]['plain_text'] ?? '';
        $interet_pro    = $props['Intérêt Pro']['rich_text'][0]['plain_text'] ?? '';
        $interet_perso  = $props['Intérêt Perso']['rich_text'][0]['plain_text'] ?? '';
        $utilisation    = $props['Utilisation Possible']['rich_text'][0]['plain_text'] ?? '';
        $appreciation   = $props['Appréciation Fiabilité']['rich_text'][0]['plain_text'] ?? '';
        $lien   = $props['Lien']['url'] ?? '';
        $date   = $props['Date']['date']['start'] ?? '';
        $image  = $props['Image']['rich_text'][0]['plain_text'] ?? '';

        // --- AJOUT : FALLBACK MICROLINK ---
        // Si pas d'image dans Notion, mais qu'on a un lien, on demande à Microlink
        if (empty($image) && !empty($lien)) {
            // Cette URL va chercher l'image principale ou faire une capture d'écran
            $image = "https://api.microlink.io/?url=" . urlencode($lien) . "&embed=image.url";
        }
        // ----------------------------------

        echo '<div class="col-md-6 col-lg-4">';
        echo '<div class="card glass-card-hover h-100 border-0 overflow-hidden">';
        // Image cliquable vers article
        if ($image && $lien) {
            echo '<a href="' . htmlspecialchars($lien) . '" target="_blank" rel="noopener noreferrer" class="overflow-hidden d-block">';
            echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top transition-transform" alt="Illustration de la veille" style="height: 200px; object-fit: cover;" loading="lazy">';
            echo '</a>';
        } elseif ($image) {
            echo '<div class="overflow-hidden">';
            echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top transition-transform" alt="Illustration de la veille" style="height: 200px; object-fit: cover;" loading="lazy">';
            echo '</div>';
        }
        echo '<div class="card-body d-flex flex-column p-4">';
        echo '<h5 class="card-title fw-bold mb-2">' . htmlspecialchars($titre) . '</h5>';
        if ($date) {
            echo '<h6 class="card-subtitle mb-3 text-primary small"><i class="far fa-calendar-alt me-1"></i>' . htmlspecialchars(date('d/m/Y', strtotime($date))) . '</h6>';
        }
        echo '<hr class="w-100 border-secondary opacity-25">';
        
        echo '<div class="card-text small flex-grow-1 text-muted">';
        if ($resume)        echo '<p class="mb-2">' . htmlspecialchars($resume) . '</p>';
        
        // Modal Trigger - Replacement for collapse
        echo '<button class="btn btn-sm btn-outline-light w-100 mt-3 mb-2 article-details-btn" type="button" 
                data-bs-toggle="modal" 
                data-bs-target="#articleModal" 
                data-titre="' . htmlspecialchars($titre) . '" 
                data-date="' . htmlspecialchars(date('d/m/Y', strtotime($date))) . '" 
                data-resume="' . htmlspecialchars($resume) . '" 
                data-pro="' . htmlspecialchars($interet_pro) . '" 
                data-perso="' . htmlspecialchars($interet_perso) . '" 
                data-util="' . htmlspecialchars($utilisation) . '" 
                data-fiabilite="' . htmlspecialchars($appreciation) . '" 
                data-lien="' . htmlspecialchars($lien) . '"
                data-image="' . htmlspecialchars($image) . '">';
        echo '<i class="fas fa-expand-arrows-alt me-2"></i>Voir les détails</button>';
        echo '</div>'; // End card-text

        if ($lien) {
            echo '<a href="' . htmlspecialchars($lien) . '" target="_blank" rel="noopener noreferrer" class="btn btn-custom mt-3 w-100"><i class="fas fa-external-link-alt me-2"></i>Lire l\'article</a>';
        }

        echo '</div></div></div>';
    }
} else {
    echo '<div class="col-12"><div class="alert alert-danger text-center glass-card border-danger" role="alert">';
    echo '<i class="fas fa-exclamation-triangle me-2"></i>Aucune veille trouvée. Vérifier la connexion API Notion.';
    echo '</div></div>';
}
?>
        </div>
    </section>
</main>

<!-- Modern Modal for Article Details -->
<div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content glass-card border-secondary border-opacity-25 shadow-2xl">
            <div class="modal-header border-bottom border-secondary border-opacity-25 p-4">
                <h5 class="modal-title fw-bold" id="articleModalLabel">Détails de l\'article</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-lg-5" id="modal-img-container">
                        <img id="modal-image" src="" alt="" class="img-fluid rounded-4 shadow-sm w-100" style="height: 300px; object-fit: cover;">
                    </div>
                    <div class="col-lg-7">
                        <h6 id="modal-date" class="text-primary small mb-2"></h6>
                        <h3 id="modal-title" class="fw-bold mb-4"></h3>
                        <div id="modal-content" class="modal-info-scroll" style="max-height: 400px; overflow-y: auto; padding-right: 15px;">
                            <div class="mb-3">
                                <h6 class="text-white-50 small text-uppercase mb-2"><i class="fas fa-align-left me-2"></i>Résumé</h6>
                                <p id="modal-resume" class="text-light"></p>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6" id="modal-pro-container">
                                    <h6 class="text-primary small text-uppercase mb-2"><i class="fas fa-briefcase me-2"></i>Intérêt Pro</h6>
                                    <p id="modal-pro" class="small text-muted"></p>
                                </div>
                                <div class="col-md-6" id="modal-perso-container">
                                    <h6 class="text-primary small text-uppercase mb-2"><i class="fas fa-user-light me-2"></i>Intérêt Perso</h6>
                                    <p id="modal-perso" class="small text-muted"></p>
                                </div>
                                <div class="col-md-6" id="modal-util-container">
                                    <h6 class="text-primary small text-uppercase mb-2"><i class="fas fa-tools me-2"></i>Mise en œuvre</h6>
                                    <p id="modal-util" class="small text-muted"></p>
                                </div>
                                <div class="col-md-6" id="modal-fiabilite-container">
                                    <h6 class="text-primary small text-uppercase mb-2"><i class="fas fa-shield-alt me-2"></i>Fiabilité</h6>
                                    <p id="modal-fiabilite" class="small text-muted"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top border-secondary border-opacity-25 p-4 d-flex gap-3">
                <button type="button" class="btn btn-outline-light px-4" data-bs-dismiss="modal">Fermer</button>
                <a id="modal-link" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-custom px-4 flex-grow-1">
                    <i class="fas fa-external-link-alt me-2"></i>Lire l'article complet
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.modal-info-scroll::-webkit-scrollbar {
    width: 4px;
}
.modal-info-scroll::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
}
.modal-info-scroll::-webkit-scrollbar-thumb {
    background: rgba(var(--bs-primary-rgb), 0.5);
    border-radius: 10px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const articleModal = document.getElementById('articleModal');
    if (articleModal) {
        articleModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            
            // Extract info from data-bs-* attributes
            const titre = button.getAttribute('data-titre');
            const date = button.getAttribute('data-date');
            const resume = button.getAttribute('data-resume');
            const pro = button.getAttribute('data-pro');
            const perso = button.getAttribute('data-perso');
            const util = button.getAttribute('data-util');
            const fiabilite = button.getAttribute('data-fiabilite');
            const lien = button.getAttribute('data-lien');
            const image = button.getAttribute('data-image');

            // Update modal content
            articleModal.querySelector('#modal-title').textContent = titre;
            articleModal.querySelector('#modal-date').innerHTML = '<i class="far fa-calendar-alt me-1"></i> ' + date;
            articleModal.querySelector('#modal-resume').textContent = resume;
            
            // Handle optional fields
            const setField = (id, containerId, value) => {
                const el = articleModal.querySelector('#' + id);
                const container = articleModal.querySelector('#' + containerId);
                if (value && value.trim() !== '') {
                    el.textContent = value;
                    container.style.display = 'block';
                } else {
                    container.style.display = 'none';
                }
            };

            setField('modal-pro', 'modal-pro-container', pro);
            setField('modal-perso', 'modal-perso-container', perso);
            setField('modal-util', 'modal-util-container', util);
            setField('modal-fiabilite', 'modal-fiabilite-container', fiabilite);

            // Handle link
            const linkBtn = articleModal.querySelector('#modal-link');
            if (lien) {
                linkBtn.href = lien;
                linkBtn.style.display = 'inline-block';
            } else {
                linkBtn.style.display = 'none';
            }

            // Handle image
            const modalImg = articleModal.querySelector('#modal-image');
            const imgContainer = articleModal.querySelector('#modal-img-container');
            if (image) {
                modalImg.src = image;
                modalImg.alt = titre;
                imgContainer.style.display = 'block';
            } else {
                imgContainer.style.display = 'none';
            }
        });
    }
});
</script>

<div style="min-height: 100px;"></div>

<?php
include '../includes/footer.php';
?>
