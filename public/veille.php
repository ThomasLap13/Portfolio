<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$base_path = './';
include '../includes/header.php';
?>

<head>
    <title>Veille Technologique - Thomas Lapierre</title>
</head>

<main>
    <section class="container mt-5">
        <div class="text-center mb-5 fade-in">
            <h1 class="display-4 fw-bold text-gradient">Veille Technologique</h1>
            <p class="lead text-muted">Une sélection d'articles et de ressources pour rester à jour.</p>
        </div>
        
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
        $image  = $props['Image']['url'] ?? '';

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
            echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top transition-transform" alt="Illustration de la veille" style="height: 200px; object-fit: cover;">';
            echo '</a>';
        } elseif ($image) {
            echo '<div class="overflow-hidden">';
            echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top transition-transform" alt="Illustration de la veille" style="height: 200px; object-fit: cover;">';
            echo '</div>';
        }
        echo '<div class="card-body d-flex flex-column p-4">';
        echo '<h5 class="card-title fw-bold mb-2 text-white">' . htmlspecialchars($titre) . '</h5>';
        if ($date) {
            echo '<h6 class="card-subtitle mb-3 text-primary small"><i class="far fa-calendar-alt me-1"></i>' . htmlspecialchars(date('d/m/Y', strtotime($date))) . '</h6>';
        }
        echo '<hr class="w-100 border-secondary opacity-25">';
        
        echo '<div class="card-text small flex-grow-1 text-muted">';
        if ($resume)        echo '<p class="mb-2">' . htmlspecialchars($resume) . '</p>';
        
        // Accordéon pour les détails supplémentaires pour ne pas surcharger la carte
        $id = uniqid('collapse');
        echo '<button class="btn btn-sm btn-outline-light w-100 mt-3 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#'.$id.'" aria-expanded="false">';
        echo '<i class="fas fa-info-circle me-2"></i>Voir détails</button>';
        echo '<div class="collapse mt-2" id="'.$id.'">';
        echo '<div class="p-3 rounded-3 bg-dark bg-opacity-50 border border-secondary border-opacity-25">';
        if ($interet_pro)   echo '<p class="mb-2"><strong class="text-primary">Intérêt Pro :</strong><br>' . htmlspecialchars($interet_pro) . '</p>';
        if ($interet_perso) echo '<p class="mb-2"><strong class="text-primary">Intérêt Perso :</strong><br>' . htmlspecialchars($interet_perso) . '</p>';
        if ($utilisation)   echo '<p class="mb-2"><strong class="text-primary">Mise en œuvre :</strong><br>' . htmlspecialchars($utilisation) . '</p>';
        if ($appreciation)  echo '<p class="mb-0"><strong class="text-primary">Fiabilité :</strong><br>' . htmlspecialchars($appreciation) . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>'; // End card-text

        if ($lien) {
            echo '<a href="' . htmlspecialchars($lien) . '" target="_blank" class="btn btn-custom mt-3 w-100"><i class="fas fa-external-link-alt me-2"></i>Lire l\'article</a>';
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

<div style="min-height: 100px;"></div>

<?php
include '../includes/footer.php';
?>
