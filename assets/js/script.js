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
    // 4. Mouse Glow Effect
    const glow = document.createElement("div");
    glow.className = "mouse-glow";
    document.body.appendChild(glow);

    window.addEventListener("mousemove", (e) => {
        gsap.to(glow, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.8,
            ease: "power2.out"
        });
    });

    // 5. GSAP Animations on Scroll
    gsap.registerPlugin(ScrollTrigger);

    // Fade in sections
    gsap.utils.toArray('.hidden').forEach(section => {
        gsap.to(section, {
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power3.out"
        });
    });

    // Hero Entry Animation
    gsap.from(".hero-content > *", {
        opacity: 0,
        y: 30,
        duration: 1,
        stagger: 0.2,
        ease: "power4.out",
        delay: 0.5
    });
});

// Logic for screen welcome
function hideWelcome() {
    const welcomeScreen = document.getElementById("welcomeScreen");
    if (!welcomeScreen) return;

    gsap.to(welcomeScreen, {
        y: "-100vh",
        duration: 1.2,
        ease: "expo.inOut",
        onComplete: () => {
            welcomeScreen.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });

    const firstSection = document.getElementById("a-propos");
    if (firstSection) {
        firstSection.scrollIntoView({ behavior: "smooth" });
    }
}
