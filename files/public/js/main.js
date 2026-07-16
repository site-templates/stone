/*
    Stone — the interaction layer.

    Everything here is a progressive enhancement: with JavaScript off, the nav
    links still work, nothing is hidden, and the site stays fully usable. The
    matching transitions live in resources/css/site.css.
*/

// Flag the document early so CSS only hides reveal targets when JS will
// actually reveal them. This file loads with defer, before first paint.
document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', function () {
    headerState();
    mobileMenu();
    revealOnScroll();
    markCurrentMenuItem();
    accordions();
});

/*
    The header rests transparent at the very top of the page; the moment
    content scrolls underneath it, data-scrolled fades in the paper glass,
    blur, and hairline (see #header rules in site.css).
*/
function headerState() {
    const header = document.getElementById('header');

    if (!header) {
        return;
    }

    function evaluate() {
        header.toggleAttribute('data-scrolled', window.scrollY > 8);
    }

    evaluate();
    window.addEventListener('scroll', evaluate, { passive: true });
}

/*
    The mobile menu: the hamburger toggles .menu-open on <html>, which slides
    the paper sheet down and locks scrolling. Closing on navigation keeps
    same-page anchors from leaving the sheet hanging open.
*/
function mobileMenu() {
    const button = document.querySelector('[data-mobile-toggle]');
    const panel = document.querySelector('[data-mobile-panel]');

    if (!button || !panel) {
        return;
    }

    button.addEventListener('click', function () {
        const open = document.documentElement.classList.toggle('menu-open');
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    panel.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            document.documentElement.classList.remove('menu-open');
            button.setAttribute('aria-expanded', 'false');
        });
    });
}

/*
    Scroll reveals. Elements tagged data-reveal start softened (see site.css)
    and settle into place as they enter the viewport. Each element animates
    once; --reveal-delay staggers siblings.
*/
function revealOnScroll() {
    const targets = document.querySelectorAll('[data-reveal]');

    if (!('IntersectionObserver' in window)) {
        targets.forEach(function (el) {
            el.classList.add('is-visible');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });

    targets.forEach(function (el) {
        // Anything already above the fold reveals immediately.
        if (el.getBoundingClientRect().top < window.innerHeight * 0.9) {
            el.classList.add('is-visible');
        } else {
            observer.observe(el);
        }
    });
}

/*
    aria-current tells screen readers which page you're on and lights up the
    active nav link (the nav styles target it).
*/
function markCurrentMenuItem() {
    document.querySelectorAll('#header a[href], [data-mobile-panel] a[href]').forEach(function (link) {
        const path = window.location.pathname;

        if (link.pathname !== '/' && (path === link.pathname || path.startsWith(link.pathname + '/'))) {
            link.setAttribute('aria-current', 'page');
        } else if (link.pathname === '/' && path === '/') {
            link.setAttribute('aria-current', 'page');
        }
    });
}

/*
    The expertise and FAQ accordions are native <details> elements grouped by
    a [data-accordion] wrapper — they work everywhere without this script.
    With it, opening one folds the others closed, so the list reads like a
    single instrument instead of a pile of open drawers.
*/
function accordions() {
    document.querySelectorAll('[data-accordion]').forEach(function (group) {
        const items = group.querySelectorAll('details');

        items.forEach(function (item) {
            item.addEventListener('toggle', function () {
                if (!item.open) {
                    return;
                }
                items.forEach(function (other) {
                    if (other !== item) {
                        other.open = false;
                    }
                });
            });
        });
    });
}
