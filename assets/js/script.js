document.addEventListener("DOMContentLoaded", () => {
    // 1. Apparition progressive des éléments (IntersectionObserver)
    const elements = document.querySelectorAll(".hidden, .fade-in");
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => observer.observe(element));

    // 2. Gestion des dropdowns (si nécessaire, sinon Bootstrap gère ça)
    document.querySelectorAll(".dropdown-toggle").forEach(dropdown => {
        dropdown.addEventListener("click", function (event) {
            event.stopPropagation();
            const parentDropdown = this.closest(".dropdown");
            const isOpen = parentDropdown.classList.contains("show");

            document.querySelectorAll(".dropdown").forEach(el => {
                el.classList.remove("show");
                el.querySelector(".dropdown-menu").classList.remove("show");
            });

            if (!isOpen) {
                parentDropdown.classList.add("show");
                this.nextElementSibling.classList.add("show");
            }
        });
    });

    document.addEventListener("click", event => {
        if (!event.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown").forEach(el => {
                el.classList.remove("show");
                el.querySelector(".dropdown-menu").classList.remove("show");
            });
        }
    });

    // 3. Initialisation explicite des carousels (Robustesse)
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        // Vérifie si Bootstrap est chargé
        if (typeof bootstrap !== 'undefined') {
            new bootstrap.Carousel(carousel, {
                interval: 5000,
                wrap: true,
                keyboard: true
            });
        }
    });
});

// Fonction pour masquer l'écran de bienvenue
function hideWelcome() {
    const section = document.getElementById("hidden");
    const welcomeScreen = document.getElementById("welcomeScreen");

    if (!section || !welcomeScreen) return;

    section.classList.remove("hidden");
    welcomeScreen.style.opacity = "0";
    setTimeout(() => {
        welcomeScreen.style.display = "none";
    }, 800);

    section.scrollIntoView({ behavior: "smooth" });
}
