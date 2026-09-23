const THEME_KEY = 'theme';

function applyTheme(theme) {
    document.documentElement.classList.toggle('dark', theme === 'dark');
    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
    });
}

function currentTheme() {
    const stored = localStorage.getItem(THEME_KEY);

    if (stored === 'dark' || stored === 'light') {
        return stored;
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

function setupTheme() {
    applyTheme(currentTheme());

    document.querySelectorAll('[data-theme-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const next = currentTheme() === 'dark' ? 'light' : 'dark';
            localStorage.setItem(THEME_KEY, next);
            applyTheme(next);
        });
    });
}

function setupMobileMenu() {
    const toggle = document.querySelector('[data-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');
    const openIcon = toggle?.querySelector('[data-menu-icon-open]');
    const closeIcon = toggle?.querySelector('[data-menu-icon-close]');

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener('click', () => {
        const open = menu.classList.toggle('hidden') === false;
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        openIcon?.classList.toggle('hidden', open);
        closeIcon?.classList.toggle('hidden', !open);
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            toggle.setAttribute('aria-expanded', 'false');
            openIcon?.classList.remove('hidden');
            closeIcon?.classList.add('hidden');
        });
    });

    menu.querySelectorAll('[data-mobile-submenu-toggle]').forEach((submenuToggle) => {
        const panelId = submenuToggle.getAttribute('aria-controls');
        const panel = panelId ? document.getElementById(panelId) : null;
        const chevron = submenuToggle.querySelector('[data-submenu-chevron]');

        if (!panel) {
            return;
        }

        submenuToggle.addEventListener('click', () => {
            const open = panel.classList.toggle('hidden') === false;
            submenuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            chevron?.classList.toggle('rotate-180', open);
        });
    });
}

function setupSubmenus() {
    const submenus = [...document.querySelectorAll('[data-submenu]')];

    const closeSubmenus = (except = null) => {
        submenus.forEach((submenu) => {
            if (submenu === except) {
                return;
            }

            submenu.querySelector('[data-submenu-panel]')?.classList.add('hidden');
            submenu.querySelector('[data-submenu-toggle]')?.setAttribute('aria-expanded', 'false');
            submenu.querySelector('[data-submenu-chevron]')?.classList.remove('rotate-180');
        });
    };

    submenus.forEach((submenu) => {
        const toggle = submenu.querySelector('[data-submenu-toggle]');
        const panel = submenu.querySelector('[data-submenu-panel]');
        const chevron = submenu.querySelector('[data-submenu-chevron]');

        if (!toggle || !panel) {
            return;
        }

        toggle.addEventListener('click', () => {
            const willOpen = panel.classList.contains('hidden');
            closeSubmenus(submenu);
            panel.classList.toggle('hidden', !willOpen);
            toggle.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
            chevron?.classList.toggle('rotate-180', willOpen);
        });
    });

    document.addEventListener('click', (event) => {
        if (!event.target.closest('[data-submenu]')) {
            closeSubmenus();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeSubmenus();
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    setupTheme();
    setupMobileMenu();
    setupSubmenus();
});
