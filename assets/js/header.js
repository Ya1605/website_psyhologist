(function() {
    const header = document.getElementById('header');
    if (!header) return;
 
    /* ---------- Бургер ---------- */
    const burger = header.querySelector('.header__burger');

    const setOpen = (open) => {
        header.classList.toggle('is-open', open);
        burger.setAttribute('aria-expanded', String(open));
        burger.setAttribute('aria-label', open ? 'Закрити меню' : 'Відкрити меню');

    };
    if (burger) {
        burger.addEventListener('click', () => {
            setOpen(!header.classList.contains('is-open'));
        });
    
        
        // закрити меню по кліку на пункт
        
        header.querySelectorAll('.header__menu a').forEach((link) => {
            link.addEventListener('click', () => setOpen(false));
        });
                // закрити по Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') setOpen(false);
        });

        // скинути стан при переході на десктоп
        window.matchMedia('(min-width: 901px)').addEventListener('change', (e) => {
            if (e.matches) setOpen(false);
        });
    }

    /* ---------- Підсвічування пункту меню за прокруткою ---------- */
    const links = header.querySelectorAll('.header__menu a[href*="#"]');
    const sections = [];

    links.forEach((link) => {
        if (!link.hash) return;
        const section = document.querySelector(link.hash);
        if (section) sections.push({ link, section });
    });

    if (sections.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    links.forEach((l) => l.classList.remove('is-active'));
                    const match = sections.find((s) => s.section === entry.target);
                    if (match) match.link.classList.add('is-active');
                });
            },
            { rootMargin: '-40% 0px -55% 0px' }
        );

        sections.forEach((s) => observer.observe(s.section));
    }
})();
    

