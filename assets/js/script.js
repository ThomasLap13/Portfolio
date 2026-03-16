/* ============================================ */
/* Portfolio Modern Script — Thomas Lapierre    */
/* ============================================ */

document.addEventListener("DOMContentLoaded", () => {

    const isTouchDevice = window.matchMedia("(pointer: coarse)").matches;

    /* ─────────────────────────────── */
    /* 1. Page Loader                  */
    /* ─────────────────────────────── */
    const loader = document.getElementById("page-loader");
    if (loader) {
        window.addEventListener("load", () => {
            setTimeout(() => loader.classList.add("hidden"), 400);
        });
        // Fallback
        setTimeout(() => loader.classList.add("hidden"), 2000);
    }

    /* ─────────────────────────────── */
    /* 2. Custom Cursor                */
    /* ─────────────────────────────── */
    if (!isTouchDevice) {
        const dot = document.createElement("div");
        dot.className = "cursor-dot";
        const ring = document.createElement("div");
        ring.className = "cursor-ring";
        document.body.appendChild(dot);
        document.body.appendChild(ring);

        let mouseX = 0, mouseY = 0, ringX = 0, ringY = 0;

        document.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.left = mouseX + "px";
            dot.style.top  = mouseY + "px";
        }, { passive: true });

        (function animateRing() {
            ringX += (mouseX - ringX) * 0.13;
            ringY += (mouseY - ringY) * 0.13;
            ring.style.left = ringX + "px";
            ring.style.top  = ringY + "px";
            requestAnimationFrame(animateRing);
        })();

        // Hover state on interactive elements
        const hoverSel = "a, button, [role='button'], .card, .tool-item, .hero-tag, input, select, textarea, .navbar-brand, label";
        document.addEventListener("mouseover", (e) => {
            if (e.target.closest(hoverSel)) {
                dot.classList.add("cursor-hover");
                ring.classList.add("cursor-hover");
            }
        });
        document.addEventListener("mouseout", (e) => {
            if (e.target.closest(hoverSel)) {
                dot.classList.remove("cursor-hover");
                ring.classList.remove("cursor-hover");
            }
        });
    }

    /* ─────────────────────────────── */
    /* 3. Scroll Progress Bar          */
    /* ─────────────────────────────── */
    const progressBar = document.getElementById("scroll-progress");
    if (progressBar) {
        window.addEventListener("scroll", () => {
            const scrolled = window.scrollY;
            const total    = document.documentElement.scrollHeight - window.innerHeight;
            progressBar.style.width = total > 0 ? (scrolled / total * 100) + "%" : "0%";
        }, { passive: true });
    }

    /* ─────────────────────────────── */
    /* 4. Navbar Effects               */
    /* ─────────────────────────────── */
    const navbar = document.querySelector(".navbar");
    if (navbar) {
        const updateNavbar = () => navbar.classList.toggle("scrolled", window.scrollY > 50);
        window.addEventListener("scroll", updateNavbar, { passive: true });
        updateNavbar();
    }

    // Active nav link detection
    const path = window.location.pathname;
    document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
        const href = link.getAttribute("href") || "";
        if (!href || href === "#") return;
        const clean = href.replace(/^\.\//, "").replace(/\/$/, "");
        const pathClean = path.replace(/\/$/, "").split("/").pop() || "index.php";
        if (clean && pathClean.includes(clean.split("/").pop())) {
            link.classList.add("active");
        }
    });

    /* ─────────────────────────────── */
    /* 5. Scroll Reveal (Observer)     */
    /* ─────────────────────────────── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.07, rootMargin: "0px 0px -40px 0px" });

    document.querySelectorAll(".hidden, .fade-in, .project-block").forEach(el => {
        revealObserver.observe(el);
    });

    /* ─────────────────────────────── */
    /* 6. Animated Counters            */
    /* ─────────────────────────────── */
    function animateCounter(el) {
        const target   = parseInt(el.dataset.target, 10);
        const suffix   = el.dataset.suffix || "";
        const duration = 1800;
        const startTime = performance.now();

        function step(now) {
            const elapsed  = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased    = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            el.textContent = Math.round(eased * target) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll("[data-counter]").forEach(el => counterObserver.observe(el));

    /* ─────────────────────────────── */
    /* 7. Card 3D Tilt Effect          */
    /* ─────────────────────────────── */
    if (!isTouchDevice) {
        document.querySelectorAll(".tilt-card").forEach(card => {
            const maxTilt = parseFloat(card.dataset.tilt || "8");

            card.addEventListener("mousemove", (e) => {
                const { left, top, width, height } = card.getBoundingClientRect();
                const x = e.clientX - left;
                const y = e.clientY - top;
                const rotX = ((y / height) - 0.5) * -maxTilt * 2;
                const rotY = ((x / width)  - 0.5) *  maxTilt * 2;
                card.style.transform = `perspective(900px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(6px)`;
            });

            card.addEventListener("mouseleave", () => {
                card.style.transition = "transform 0.6s var(--ease-smooth)";
                card.style.transform  = "perspective(900px) rotateX(0) rotateY(0) translateZ(0)";
                setTimeout(() => card.style.transition = "", 600);
            });
        });
    }

    /* ─────────────────────────────── */
    /* 8. Magnetic Buttons             */
    /* ─────────────────────────────── */
    if (!isTouchDevice) {
        document.querySelectorAll(".magnetic-btn").forEach(btn => {
            btn.addEventListener("mousemove", (e) => {
                const { left, top, width, height } = btn.getBoundingClientRect();
                const x = e.clientX - left - width  / 2;
                const y = e.clientY - top  - height / 2;
                btn.style.transform = `translate(${x * 0.28}px, ${y * 0.28}px)`;
            });
            btn.addEventListener("mouseleave", () => {
                btn.style.transition = "transform 0.55s var(--ease-spring)";
                btn.style.transform  = "";
                setTimeout(() => btn.style.transition = "", 550);
            });
        });
    }

    /* ─────────────────────────────── */
    /* 9. Typewriter Effect            */
    /* ─────────────────────────────── */
    const typeEl = document.querySelector(".typewriter-text");
    if (typeEl) {
        let phrases = ["Administrateur Système & Réseau.", "Passionné par la Cybersécurité.", "Alternant chez Micro-Méga.", "Créateur de solutions IT."];
        try {
            if (typeEl.dataset.phrases) phrases = JSON.parse(typeEl.dataset.phrases);
        } catch (e) {}

        let pIdx = 0, cIdx = 0, isDeleting = false, paused = false;

        function type() {
            if (paused) return;
            const cur = phrases[pIdx];
            if (isDeleting) {
                cIdx--;
                typeEl.textContent = cur.slice(0, cIdx);
                if (cIdx === 0) {
                    isDeleting = false;
                    pIdx = (pIdx + 1) % phrases.length;
                    setTimeout(type, 450);
                    return;
                }
                setTimeout(type, 38);
            } else {
                cIdx++;
                typeEl.textContent = cur.slice(0, cIdx);
                if (cIdx === cur.length) {
                    paused = true;
                    setTimeout(() => { paused = false; isDeleting = true; type(); }, 2600);
                    return;
                }
                setTimeout(type, 62);
            }
        }
        setTimeout(type, 1300);
    }

    /* ─────────────────────────────── */
    /* 10. Mouse Glow                  */
    /* ─────────────────────────────── */
    if (!isTouchDevice) {
        const glow = document.createElement("div");
        glow.className = "mouse-glow";
        document.body.appendChild(glow);
        window.addEventListener("mousemove", (e) => {
            if (typeof gsap !== "undefined") {
                gsap.to(glow, { x: e.clientX, y: e.clientY, duration: 1.3, ease: "power2.out" });
            }
        }, { passive: true });
    }

    /* ─────────────────────────────── */
    /* 11. GSAP Animations             */
    /* ─────────────────────────────── */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Hero content entrance
        const heroItems = document.querySelectorAll(".hero-content > *");
        if (heroItems.length) {
            gsap.from(heroItems, {
                opacity: 0,
                y: 45,
                duration: 1.1,
                stagger: 0.17,
                ease: "power4.out",
                delay: 0.2
            });
        }

        // Scroll-animated hidden elements
        gsap.utils.toArray(".hidden").forEach(el => {
            gsap.to(el, {
                scrollTrigger: { trigger: el, start: "top 88%", toggleActions: "play none none none" },
                opacity: 1,
                y: 0,
                duration: 0.9,
                ease: "power3.out"
            });
        });

        // Stats number pop
        gsap.utils.toArray(".stat-card").forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: { trigger: card, start: "top 90%" },
                scale: 0.88,
                opacity: 0,
                duration: 0.6,
                ease: "back.out(1.7)",
                delay: i * 0.1
            });
        });
    }

    /* ─────────────────────────────── */
    /* 12. Carousels                   */
    /* ─────────────────────────────── */
    document.querySelectorAll(".carousel").forEach(c => {
        if (typeof bootstrap !== "undefined") {
            new bootstrap.Carousel(c, { interval: 5000, wrap: true, keyboard: true });
        }
    });

    /* ─────────────────────────────── */
    /* 13. Dropdown fix                */
    /* ─────────────────────────────── */
    document.querySelectorAll(".dropdown-toggle").forEach(toggle => {
        toggle.addEventListener("click", function(e) {
            e.stopPropagation();
            const parent = this.closest(".dropdown");
            const isOpen = parent.classList.contains("show");
            document.querySelectorAll(".dropdown.show").forEach(el => {
                el.classList.remove("show");
                el.querySelector(".dropdown-menu")?.classList.remove("show");
            });
            if (!isOpen) {
                parent.classList.add("show");
                this.nextElementSibling?.classList.add("show");
            }
        });
    });
    document.addEventListener("click", e => {
        if (!e.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown.show").forEach(el => {
                el.classList.remove("show");
                el.querySelector(".dropdown-menu")?.classList.remove("show");
            });
        }
    });
});

/* ─────────────────────────────── */
/* Welcome screen hide             */
/* ─────────────────────────────── */
function hideWelcome() {
    const welcome = document.getElementById("welcomeScreen");
    if (!welcome) return;

    if (typeof gsap !== "undefined") {
        gsap.to(welcome, {
            y: "-100vh",
            opacity: 0,
            duration: 1.1,
            ease: "expo.inOut",
            onComplete: () => {
                welcome.style.display = "none";
                document.body.style.overflow = "auto";
            }
        });
    } else {
        welcome.classList.add("hidden");
        document.body.style.overflow = "auto";
    }

    const first = document.getElementById("a-propos");
    if (first) setTimeout(() => first.scrollIntoView({ behavior: "smooth" }), 650);
}
