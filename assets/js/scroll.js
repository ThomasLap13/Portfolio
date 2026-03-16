/**
 * scroll.js — Welcome screen scroll trigger
 *
 * Simplifié : écoute un premier scroll/wheel/touchmove et délègue
 * immédiatement à hideWelcome() (défini dans script.js, chargé après).
 * Suppression du comportement "ré-afficher au retour en haut" (buggué +
 * mauvais UX) et suppression du conflit d'animation avec GSAP.
 */
document.addEventListener("DOMContentLoaded", function () {
    const welcomeScreen = document.getElementById("welcomeScreen");
    if (!welcomeScreen) return;

    // document.body.style.overflow = "hidden"; // Optionnel : laisser le CSS gérer l'overflow initial si besoin

    function triggerHide() {
        // Délègue à hideWelcome() si disponible (GSAP + animation complète)
        if (typeof hideWelcome === "function") {
            hideWelcome();
        } else {
            // Fallback minimal (si script.js non chargé — cas improbable)
            welcomeScreen.style.transition = "opacity 0.7s ease, transform 0.7s ease";
            welcomeScreen.style.opacity   = "0";
            welcomeScreen.style.transform = "translateY(-30px)";
            setTimeout(function () {
                welcomeScreen.style.display  = "none";
                document.body.style.overflow = "auto";
            }, 700);
        }
    }

    // once:true → les listeners se retirent automatiquement après le premier déclenchement
    document.addEventListener("wheel",     triggerHide, { passive: true, once: true });
    document.addEventListener("touchmove", triggerHide, { passive: true, once: true });
});
