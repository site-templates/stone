@props([
    'brand' => 'stone',
    'menuNote' => 'Stone is a calm, senior studio of fifteen — we take products from first sketch to shipped, and we finish what we start.',
])
<!--
    The site-wide top bar, kept deliberately bare: the wordmark on the left,
    then the light/dark switch and the circled menu button. The hamburger
    opens Stone's signature fullscreen menu — a paper sheet with a note about
    the studio and the big numbered links. It rests transparent over each
    page's opening section; once you scroll, main.js sets data-scrolled and
    site.css fades in the paper-glass background and hairline.
-->
<header id="header" class="fixed inset-x-0 top-0 z-50">
    <div class="mx-auto flex h-16 w-full max-w-6xl items-center justify-between px-6 sm:h-[4.5rem]">

        <!-- href="/" always points to your site's root, in preview and when published -->
        <a href="/" aria-label="Homepage" class="shrink-0 font-sans text-2xl/none font-bold tracking-tight text-ink lowercase">{{ $brand }}<span class="text-accent">.</span></a>

        <div class="flex items-center gap-2 sm:gap-3">

            <!-- Light/dark switch — the moon shows by day, the sun by night -->
            <button
                type="button"
                data-theme-toggle
                aria-label="Toggle dark mode"
                class="flex size-11 cursor-pointer items-center justify-center rounded-full text-ink transition-colors duration-200 hover:bg-raised">
                <svg viewBox="0 0 24 24" class="size-5 fill-current dark:hidden" aria-hidden="true">
                    <path d="M10 6C10 10.4183 13.5817 14 18 14C19.4386 14 20.7885 13.6203 21.9549 12.9556C21.4738 18.0302 17.2005 22 12 22C6.47715 22 2 17.5228 2 12C2 6.79948 5.9698 2.52616 11.0444 2.04507C10.3797 3.21152 10 4.56142 10 6ZM4 12C4 16.4183 7.58172 20 12 20C14.9654 20 17.5757 18.3788 18.9571 15.9546C18.6407 15.9848 18.3214 16 18 16C12.4772 16 8 11.5228 8 6C8 5.67863 8.01524 5.35933 8.04536 5.04293C5.62119 6.42426 4 9.03458 4 12Z"/>
                </svg>
                <svg viewBox="0 0 24 24" class="hidden size-5 fill-current dark:block" aria-hidden="true">
                    <path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"/>
                </svg>
            </button>

            <!-- The menu button — opens the fullscreen menu below -->
            <button
                type="button"
                data-menu-toggle
                aria-expanded="false"
                aria-label="Open menu"
                class="flex size-11 cursor-pointer items-center justify-center rounded-full border border-line bg-panel/60 text-ink transition-colors duration-200 hover:border-faint">
                <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true">
                    <path d="M19 8H5V10H19V8ZM19 14H5V16H19V14Z"/>
                </svg>
            </button>

        </div>
    </div>

    <!--
        The fullscreen menu. The note on the left is editable from the Layout
        tab; the numbered links are plain markup — add or reorder pages here.
    -->
    <div data-menu class="fixed inset-0 z-10 flex flex-col overflow-y-auto bg-canvas" role="dialog" aria-modal="true" aria-label="Site menu">

        <!-- The sheet's own top row mirrors the bar, so nothing appears to move -->
        <div class="mx-auto flex h-16 w-full max-w-6xl shrink-0 items-center justify-between px-6 sm:h-[4.5rem]">

            <a href="/" aria-label="Homepage" class="shrink-0 font-sans text-2xl/none font-bold tracking-tight text-ink lowercase">{{ $brand }}<span class="text-accent">.</span></a>

            <div class="flex items-center gap-2 sm:gap-3">
                <button
                    type="button"
                    data-theme-toggle
                    aria-label="Toggle dark mode"
                    class="flex size-11 cursor-pointer items-center justify-center rounded-full text-ink transition-colors duration-200 hover:bg-raised">
                    <svg viewBox="0 0 24 24" class="size-5 fill-current dark:hidden" aria-hidden="true">
                        <path d="M10 6C10 10.4183 13.5817 14 18 14C19.4386 14 20.7885 13.6203 21.9549 12.9556C21.4738 18.0302 17.2005 22 12 22C6.47715 22 2 17.5228 2 12C2 6.79948 5.9698 2.52616 11.0444 2.04507C10.3797 3.21152 10 4.56142 10 6ZM4 12C4 16.4183 7.58172 20 12 20C14.9654 20 17.5757 18.3788 18.9571 15.9546C18.6407 15.9848 18.3214 16 18 16C12.4772 16 8 11.5228 8 6C8 5.67863 8.01524 5.35933 8.04536 5.04293C5.62119 6.42426 4 9.03458 4 12Z"/>
                    </svg>
                    <svg viewBox="0 0 24 24" class="hidden size-5 fill-current dark:block" aria-hidden="true">
                        <path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"/>
                    </svg>
                </button>

                <button
                    type="button"
                    data-menu-close
                    aria-label="Close menu"
                    class="flex size-11 cursor-pointer items-center justify-center rounded-full border border-line bg-panel/60 text-ink transition-colors duration-200 hover:border-faint">
                    <svg viewBox="0 0 24 24" class="size-5 fill-current" aria-hidden="true">
                        <path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"/>
                    </svg>
                </button>
            </div>
        </div>

        <div data-menu-body class="mx-auto grid w-full max-w-6xl flex-1 content-start gap-12 px-6 pt-6 pb-16 lg:grid-cols-2 lg:content-center lg:gap-16 lg:pt-0 lg:pb-[4.5rem]">

            <!-- A quiet word about the studio, beside the links -->
            <div class="hidden items-center justify-center rounded-3xl bg-raised/70 px-10 py-12 lg:flex">
                <p class="max-w-sm font-display text-2xl/relaxed italic text-pretty text-muted">{{ $menuNote }}</p>
            </div>

            <!-- The numbered links -->
            <nav aria-label="Main">
                <ul role="list" class="flex flex-col divide-y divide-line">
                    <li>
                        <a href="/" class="group flex items-center gap-6 py-6 text-3xl font-medium tracking-tight text-ink sm:gap-8 sm:py-8 sm:text-4xl">
                            <span class="font-mono text-xs text-faint transition-colors duration-200 group-hover:text-accent group-aria-[current=page]:text-accent">01</span>
                            <span class="flex-1 transition-colors duration-200 group-hover:text-accent">Home</span>
                            <svg viewBox="0 0 24 24" class="size-6 fill-faint transition-all duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:fill-accent sm:size-7" aria-hidden="true">
                                <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="group flex items-center gap-6 py-6 text-3xl font-medium tracking-tight text-ink sm:gap-8 sm:py-8 sm:text-4xl">
                            <span class="font-mono text-xs text-faint transition-colors duration-200 group-hover:text-accent group-aria-[current=page]:text-accent">02</span>
                            <span class="flex-1 transition-colors duration-200 group-hover:text-accent">About</span>
                            <svg viewBox="0 0 24 24" class="size-6 fill-faint transition-all duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:fill-accent sm:size-7" aria-hidden="true">
                                <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/pricing" class="group flex items-center gap-6 py-6 text-3xl font-medium tracking-tight text-ink sm:gap-8 sm:py-8 sm:text-4xl">
                            <span class="font-mono text-xs text-faint transition-colors duration-200 group-hover:text-accent group-aria-[current=page]:text-accent">03</span>
                            <span class="flex-1 transition-colors duration-200 group-hover:text-accent">Pricing</span>
                            <svg viewBox="0 0 24 24" class="size-6 fill-faint transition-all duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:fill-accent sm:size-7" aria-hidden="true">
                                <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="group flex items-center gap-6 py-6 text-3xl font-medium tracking-tight text-ink sm:gap-8 sm:py-8 sm:text-4xl">
                            <span class="font-mono text-xs text-faint transition-colors duration-200 group-hover:text-accent group-aria-[current=page]:text-accent">04</span>
                            <span class="flex-1 transition-colors duration-200 group-hover:text-accent">Contact</span>
                            <svg viewBox="0 0 24 24" class="size-6 fill-faint transition-all duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:fill-accent sm:size-7" aria-hidden="true">
                                <path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>
