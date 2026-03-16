/* ============================================ */
/* Portfolio Modern Script — Thomas Lapierre    */
/* v3 : Lenis · Transitions · Light Mode ·      */
/*      Confetti · Skills · Cursor · Counters   */
/* ============================================ */

/* ─────────────────────────────────────────── */
/* THEME — apply stored preference immediately */
/* ─────────────────────────────────────────── */
(function () {
    const saved = localStorage.getItem("theme");
    if (saved) document.documentElement.dataset.theme = saved;
})();

document.addEventListener("DOMContentLoaded", () => {

    const isTouchDevice = window.matchMedia("(pointer: coarse)").matches;

    /* ─────────────────────────── */
    /* 1. Page Loader              */
    /* ─────────────────────────── */
    const loader = document.getElementById("page-loader");
    if (loader) {
        const hide = () => loader.classList.add("hidden");
        if (document.readyState === "complete") { setTimeout(hide, 350); }
        else { window.addEventListener("load", () => setTimeout(hide, 350)); }
        setTimeout(hide, 2000); // Fallback
    }

    /* ─────────────────────────── */
    /* 2. Lenis Smooth Scroll      */
    /* ─────────────────────────── */
    let lenis = null;
    if (typeof Lenis !== "undefined") {
        lenis = new Lenis({
            duration: 1.25,
            easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
            smoothTouch: false,
        });

        // Stop initially if welcome screen is present (index.php)
        if (document.getElementById("welcomeScreen")) {
            lenis.stop();
        }

        // Expose globally so scroll.js + hideWelcome can access it
        window._lenis = lenis;

        // Connect with GSAP ScrollTrigger (if loaded)
        if (typeof ScrollTrigger !== "undefined") {
            lenis.on("scroll", ScrollTrigger.update);
            gsap.ticker.add(time => lenis.raf(time * 1000));
            gsap.ticker.lagSmoothing(0);
        } else {
            // Plain RAF loop
            (function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            })();
        }
    }

    /* ─────────────────────────── */
    /* 3. Page Transitions         */
    /* ─────────────────────────── */
    const overlay = document.createElement("div");
    overlay.id = "page-transition";
    document.body.appendChild(overlay);

    // Slide out on load (reveal current page)
    if (typeof gsap !== "undefined") {
        gsap.set(overlay, { y: 0 });
        gsap.to(overlay, { y: "-100%", duration: 0.65, ease: "power3.inOut", delay: 0.05 });
    }

    // Intercept internal navigation links
    document.addEventListener("click", e => {
        const link = e.target.closest("a[href]");
        if (!link) return;
        const href = link.getAttribute("href") || "";
        // Skip: external, blank, anchor, mailto, tel, javascript
        if (
            href.startsWith("http") ||
            href.startsWith("//") ||
            href.startsWith("#") ||
            href.startsWith("mailto") ||
            href.startsWith("tel") ||
            href.startsWith("javascript") ||
            link.target === "_blank" ||
            link.download
        ) return;

        e.preventDefault();
        overlay.style.pointerEvents = "all";
        if (typeof gsap !== "undefined") {
            gsap.fromTo(overlay,
                { y: "100%" },
                {
                    y: "0%",
                    duration: 0.5,
                    ease: "power3.inOut",
                    onComplete: () => { window.location.href = href; }
                }
            );
        } else {
            window.location.href = href;
        }
    });

    /* ─────────────────────────── */
    /* 4. Dark / Light Mode Toggle */
    /* ─────────────────────────── */
    const toggleBtn = document.getElementById("theme-toggle");
    const sunIcon   = document.getElementById("theme-icon-sun");
    const moonIcon  = document.getElementById("theme-icon-moon");

    function applyTheme(theme) {
        document.documentElement.dataset.theme = theme;
        localStorage.setItem("theme", theme);
        if (sunIcon && moonIcon) {
            sunIcon.style.display  = theme === "light" ? "none"  : "block";
            moonIcon.style.display = theme === "light" ? "block" : "none";
        }
    }

    // Init icons based on stored theme
    const currentTheme = document.documentElement.dataset.theme || "dark";
    if (sunIcon && moonIcon) {
        sunIcon.style.display  = currentTheme === "light" ? "none"  : "block";
        moonIcon.style.display = currentTheme === "light" ? "block" : "none";
    }

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            const next = document.documentElement.dataset.theme === "light" ? "dark" : "light";
            applyTheme(next);
        });
    }

    /* ─────────────────────────── */
    /* 5. Scroll Progress Bar      */
    /* ─────────────────────────── */
    const progressBar = document.getElementById("scroll-progress");
    if (progressBar) {
        const updateProgress = () => {
            const scrolled = window.scrollY;
            const total    = document.documentElement.scrollHeight - window.innerHeight;
            progressBar.style.width = total > 0 ? (scrolled / total * 100) + "%" : "0%";
        };
        window.addEventListener("scroll", updateProgress, { passive: true });
        // Also hook into Lenis if available
        if (lenis) lenis.on("scroll", updateProgress);
    }

    /* ─────────────────────────── */
    /* 6. Navbar Effects           */
    /* ─────────────────────────── */
    const navbar = document.querySelector(".navbar");
    if (navbar) {
        const updateNav = () => navbar.classList.toggle("scrolled", window.scrollY > 50);
        window.addEventListener("scroll", updateNav, { passive: true });
        if (lenis) lenis.on("scroll", ({ scroll }) => navbar.classList.toggle("scrolled", scroll > 50));
        updateNav();
    }

    // Active nav link
    const pathStr = window.location.pathname;
    document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
        const href = (link.getAttribute("href") || "").replace(/^\.\//, "");
        if (!href || href === "#") return;
        const linkSlug = href.split("/").pop().replace(".php", "");
        const pathSlug = pathStr.split("/").pop().replace(".php", "");
        if (linkSlug && pathSlug && linkSlug === pathSlug) link.classList.add("active");
        else if ((href === "" || href === "index.php") && (pathSlug === "" || pathSlug === "index")) link.classList.add("active");
    });

    /* ─────────────────────────── */
    /* 7. Custom Cursor            */
    /* ─────────────────────────── */
    if (!isTouchDevice) {
        const dot  = document.createElement("div");
        const ring = document.createElement("div");
        dot.className  = "cursor-dot";
        ring.className = "cursor-ring";
        document.body.appendChild(dot);
        document.body.appendChild(ring);

        let mx = 0, my = 0, rx = 0, ry = 0;

        document.addEventListener("mousemove", e => {
            mx = e.clientX; my = e.clientY;
            dot.style.left = mx + "px";
            dot.style.top  = my + "px";
        }, { passive: true });

        (function animRing() {
            rx += (mx - rx) * 0.13;
            ry += (my - ry) * 0.13;
            ring.style.left = rx + "px";
            ring.style.top  = ry + "px";
            requestAnimationFrame(animRing);
        })();

        document.addEventListener("mouseover", e => {
            if (e.target.closest("a, button, [role='button'], .card, .tool-item, .hero-tag, .stat-card, input, select, textarea, .navbar-brand, .theme-toggle, label")) {
                dot.classList.add("cursor-hover");
                ring.classList.add("cursor-hover");
            }
        });
        document.addEventListener("mouseout", e => {
            if (e.target.closest("a, button, [role='button'], .card, .tool-item, .hero-tag, .stat-card, input, select, textarea, .navbar-brand, .theme-toggle, label")) {
                dot.classList.remove("cursor-hover");
                ring.classList.remove("cursor-hover");
            }
        });
    }

    /* ─────────────────────────── */
    /* 8. Mouse Glow               */
    /* ─────────────────────────── */
    if (!isTouchDevice) {
        const glow = document.createElement("div");
        glow.className = "mouse-glow";
        document.body.appendChild(glow);
        window.addEventListener("mousemove", e => {
            if (typeof gsap !== "undefined") {
                gsap.to(glow, { x: e.clientX, y: e.clientY, duration: 1.3, ease: "power2.out" });
            }
        }, { passive: true });
    }

    /* ─────────────────────────── */
    /* 9. Scroll Reveal             */
    /* ─────────────────────────── */
    const revealObs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                revealObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.07, rootMargin: "0px 0px -40px 0px" });

    document.querySelectorAll(".hidden, .fade-in, .project-block").forEach(el => revealObs.observe(el));

    /* ─────────────────────────── */
    /* 10. Animated Counters       */
    /* ─────────────────────────── */
    function animCounter(el) {
        const target = parseInt(el.dataset.target, 10);
        const suffix = el.dataset.suffix || "";
        const dur    = 1800;
        const t0     = performance.now();
        const step   = now => {
            const p = Math.min((now - t0) / dur, 1);
            el.textContent = Math.round((1 - Math.pow(1 - p, 3)) * target) + suffix;
            if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    }
    const counterObs = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { animCounter(e.target); counterObs.unobserve(e.target); } });
    }, { threshold: 0.5 });
    document.querySelectorAll("[data-counter]").forEach(el => counterObs.observe(el));

    /* ─────────────────────────── */
    /* 11. Skills Bars Animation   */
    /* ─────────────────────────── */
    const skillObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const item = e.target;
                item.classList.add("visible");
                const fill  = item.querySelector(".skill-bar-fill");
                const pctEl = item.querySelector(".skill-pct");
                if (fill) {
                    const pct = parseInt(fill.dataset.pct, 10);
                    setTimeout(() => {
                        fill.style.width = pct + "%";
                        // Animate percentage text
                        if (pctEl) {
                            let cur = 0;
                            const t0 = performance.now();
                            const step = now => {
                                const p = Math.min((now - t0) / 1300, 1);
                                cur = Math.round((1 - Math.pow(1 - p, 3)) * pct);
                                pctEl.textContent = cur + "%";
                                if (p < 1) requestAnimationFrame(step);
                            };
                            requestAnimationFrame(step);
                        }
                    }, 120);
                }
                skillObs.unobserve(item);
            }
        });
    }, { threshold: 0.2 });
    document.querySelectorAll(".skill-item").forEach(el => skillObs.observe(el));

    /* ─────────────────────────── */
    /* 12. Card 3D Tilt            */
    /* ─────────────────────────── */
    if (!isTouchDevice) {
        document.querySelectorAll(".tilt-card").forEach(card => {
            const max = parseFloat(card.dataset.tilt || "7");
            card.addEventListener("mousemove", e => {
                const { left, top, width, height } = card.getBoundingClientRect();
                const rotX = ((e.clientY - top  - height / 2) / (height / 2)) * -max;
                const rotY = ((e.clientX - left - width  / 2) / (width  / 2)) *  max;
                card.style.transform = `perspective(900px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(6px)`;
            });
            card.addEventListener("mouseleave", () => {
                card.style.transition = "transform 0.6s var(--ease-smooth)";
                card.style.transform  = "perspective(900px) rotateX(0) rotateY(0) translateZ(0)";
                setTimeout(() => card.style.transition = "", 600);
            });
        });
    }

    /* ─────────────────────────── */
    /* 13. Magnetic Buttons        */
    /* ─────────────────────────── */
    if (!isTouchDevice) {
        document.querySelectorAll(".magnetic-btn").forEach(btn => {
            btn.addEventListener("mousemove", e => {
                const { left, top, width, height } = btn.getBoundingClientRect();
                btn.style.transform = `translate(${(e.clientX - left - width/2) * 0.28}px, ${(e.clientY - top - height/2) * 0.28}px)`;
            });
            btn.addEventListener("mouseleave", () => {
                btn.style.transition = "transform 0.55s var(--ease-spring)";
                btn.style.transform  = "";
                setTimeout(() => btn.style.transition = "", 550);
            });
        });
    }

    /* ─────────────────────────── */
    /* 14. Typewriter Effect       */
    /* ─────────────────────────── */
    const typeEl = document.querySelector(".typewriter-text");
    if (typeEl) {
        const phrases = [
            "Administrateur Système & Réseau.",
            "Passionné par la Cybersécurité.",
            "Alternant chez Micro-Méga.",
            "Créateur de solutions IT innovantes."
        ];
        let pi = 0, ci = 0, del = false, paused = false;

        function type() {
            if (paused) return;
            const cur = phrases[pi];
            if (del) {
                ci--;
                typeEl.textContent = cur.slice(0, ci);
                if (ci === 0) { del = false; pi = (pi + 1) % phrases.length; setTimeout(type, 420); return; }
                setTimeout(type, 36);
            } else {
                ci++;
                typeEl.textContent = cur.slice(0, ci);
                if (ci === cur.length) {
                    paused = true;
                    setTimeout(() => { paused = false; del = true; type(); }, 2700);
                    return;
                }
                setTimeout(type, 60);
            }
        }
        setTimeout(type, 1400);
    }

    /* ─────────────────────────── */
    /* 15. Confetti on Contact     */
    /* ─────────────────────────── */
    function launchConfetti() {
        if (typeof confetti === "undefined") return;
        confetti({ particleCount: 120, spread: 80, origin: { y: 0.6 }, colors: ["#ff4231", "#ff8a7a", "#ffffff", "#22c55e"] });
        setTimeout(() => confetti({ particleCount: 60, spread: 50, origin: { y: 0.55, x: 0.3 }, colors: ["#ff4231", "#ff8a7a"] }), 200);
        setTimeout(() => confetti({ particleCount: 60, spread: 50, origin: { y: 0.55, x: 0.7 }, colors: ["#ffffff", "#22c55e"] }), 400);
    }

    document.querySelectorAll("a[href*='contact'], a[href*='mailto']").forEach(a => {
        a.addEventListener("click", launchConfetti);
    });

    /* ─────────────────────────── */
    /* 16. GSAP Animations         */
    /* ─────────────────────────── */
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Hero entrance
        const heroItems = document.querySelectorAll(".hero-content > *");
        if (heroItems.length) {
            gsap.from(heroItems, { opacity: 0, y: 45, duration: 1.1, stagger: 0.16, ease: "power4.out", delay: 0.15 });
        }

        // Scroll-triggered hidden sections
        gsap.utils.toArray(".hidden").forEach(el => {
            gsap.to(el, {
                scrollTrigger: { trigger: el, start: "top 88%", toggleActions: "play none none none" },
                opacity: 1, y: 0, duration: 0.9, ease: "power3.out"
            });
        });

        // Stat cards pop
        gsap.utils.toArray(".stat-card").forEach((c, i) => {
            gsap.from(c, {
                scrollTrigger: { trigger: c, start: "top 92%" },
                scale: 0.85, opacity: 0, duration: 0.55, ease: "back.out(1.7)", delay: i * 0.08
            });
        });
    }

    /* ─────────────────────────── */
    /* 17. Carousels               */
    /* ─────────────────────────── */
    document.querySelectorAll(".carousel").forEach(c => {
        if (typeof bootstrap !== "undefined") new bootstrap.Carousel(c, { interval: 5000, wrap: true, keyboard: true });
    });

    /* ─────────────────────────── */
    /* 18. Dropdown fix            */
    /* ─────────────────────────── */
    document.querySelectorAll(".dropdown-toggle").forEach(t => {
        t.addEventListener("click", function (e) {
            e.stopPropagation();
            const p = this.closest(".dropdown");
            const open = p.classList.contains("show");
            document.querySelectorAll(".dropdown.show").forEach(d => {
                d.classList.remove("show");
                d.querySelector(".dropdown-menu")?.classList.remove("show");
            });
            if (!open) { p.classList.add("show"); this.nextElementSibling?.classList.add("show"); }
        });
    });
    document.addEventListener("click", e => {
        if (!e.target.closest(".dropdown")) {
            document.querySelectorAll(".dropdown.show").forEach(d => {
                d.classList.remove("show");
                d.querySelector(".dropdown-menu")?.classList.remove("show");
            });
        }
    });

    /* ─────────────────────────── */
    /* 19. Mobile navbar auto-close */
    /* ─────────────────────────── */
    const navbarCollapse = document.getElementById("navbarNav");
    const navbarToggler  = document.querySelector(".navbar-toggler");
    if (navbarCollapse && navbarToggler) {
        // Close menu when clicking any nav link or dropdown item on mobile
        navbarCollapse.querySelectorAll(
            ".nav-link:not(.dropdown-toggle), .dropdown-item"
        ).forEach(link => {
            link.addEventListener("click", () => {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                    navbarToggler.click();
                }
            });
        });
    }

}); // end DOMContentLoaded

/* ─────────────────────────────────────────── */
/* Welcome Screen Hide Function                */
/* ─────────────────────────────────────────── */
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
                if (window._lenis) window._lenis.start();
            }
        });
    } else {
        welcome.classList.add("hidden");
        document.body.style.overflow = "auto";
        if (window._lenis) window._lenis.start();
    }

    const first = document.getElementById("a-propos");
    if (first) setTimeout(() => {
        if (window._lenis) window._lenis.scrollTo(first, { duration: 1.5 });
        else first.scrollIntoView({ behavior: "smooth" });
    }, 700);
}
