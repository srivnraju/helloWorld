@php
    $links = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'features', 'label' => 'Features'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-ink-100/80 bg-white/85 backdrop-blur dark:border-white/10 dark:bg-ink-950/85">
    <nav class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6" aria-label="Main">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5">
            <span class="flex size-9 items-center justify-center rounded-xl bg-gradient-to-br from-brand-500 to-accent-500 text-base font-bold text-white">
                {{ substr(config('app.name', 'Laravel'), 0, 1) }}
            </span>
            <span class="text-lg font-semibold tracking-tight">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <div class="hidden items-center gap-1 md:flex">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                   @class(['nav-link', 'nav-link-active' => request()->routeIs($link['route'])])
                   @if (request()->routeIs($link['route'])) aria-current="page" @endif>
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-2">
            <button type="button" data-theme-toggle aria-pressed="false" aria-label="Toggle dark mode"
                    class="rounded-lg border border-ink-100 p-2 text-ink-700 transition hover:border-brand-300 hover:text-brand-700 dark:border-white/10 dark:text-ink-100 dark:hover:border-brand-400 dark:hover:text-white">
                <svg class="size-5 dark:hidden" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 15.5A9.25 9.25 0 1 1 8.5 2.25 7.75 7.75 0 0 0 21.75 15.5Z" />
                </svg>
                <svg class="hidden size-5 dark:block" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="4.25" />
                    <path stroke-linecap="round" d="M12 2.75v2M12 19.25v2M2.75 12h2M19.25 12h2M5.5 5.5l1.4 1.4M17.1 17.1l1.4 1.4M18.5 5.5l-1.4 1.4M6.9 17.1l-1.4 1.4" />
                </svg>
            </button>

            <a href="{{ route('contact') }}" class="hidden btn btn-primary sm:inline-flex">Get started</a>

            <button type="button" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle navigation"
                    class="rounded-lg border border-ink-100 p-2 text-ink-700 md:hidden dark:border-white/10 dark:text-ink-100">
                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" data-mobile-menu class="hidden border-t border-ink-100 px-4 pb-4 pt-2 md:hidden dark:border-white/10">
        <div class="flex flex-col gap-1">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                   @class(['nav-link', 'nav-link-active' => request()->routeIs($link['route'])])>
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
