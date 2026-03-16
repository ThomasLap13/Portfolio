document.addEventListener("DOMContentLoaded", function () {
    const welcomeScreen = document.getElementById("welcomeScreen");
    if (!welcomeScreen) return;

    let isFadingOut = false;
    let isHidden    = false;
    let lastScrollY = window.scrollY;

    function startFadeOut() {
        if (!isFadingOut && !isHidden) {
            isFadingOut = true;
            welcomeScreen.style.transition = "opacity 0.5s ease-out";
            welcomeScreen.style.opacity    = "0";

            setTimeout(() => {
                welcomeScreen.style.display = "none";
                document.body.style.overflow = "auto";
                // Start Lenis if available
                if (window._lenis) window._lenis.start();
                isHidden    = true;
                isFadingOut = false;
            }, 500);
        }
    }

    function handleScroll() {
        const currentScrollY = window.scrollY;
        if (currentScrollY > lastScrollY && !isHidden) {
            startFadeOut();
        } else if (currentScrollY === 0 && isHidden) {
            welcomeScreen.style.display = "flex";
            setTimeout(() => {
                welcomeScreen.style.opacity = "1";
                document.body.style.overflow = "hidden";
                if (window._lenis) window._lenis.stop();
                isHidden = false;
            }, 10);
        }
        lastScrollY = currentScrollY;
    }

    // Block scroll initially (Lenis-aware)
    if (window._lenis) {
        window._lenis.stop();
    } else {
        document.body.style.overflow = "hidden";
    }

    document.addEventListener("wheel",     startFadeOut, { passive: true });
    document.addEventListener("touchmove", startFadeOut, { passive: true });
    window.addEventListener("scroll",      handleScroll, { passive: true });
});
