@php
    $menuGroups = [
        [
            'id' => 'academics',
            'label' => 'Academics',
            'active' => request()->routeIs('features'),
            'items' => [
                ['route' => 'features', 'anchor' => 'programmes', 'label' => 'Programmes', 'description' => 'Explore multidisciplinary learning pathways.'],
                ['route' => 'features', 'anchor' => 'experience', 'label' => 'Learning experience', 'description' => 'Discover project-led, future-ready education.'],
                ['route' => 'features', 'anchor' => 'outcomes', 'label' => 'Student outcomes', 'description' => 'Build confidence, capability and perspective.'],
            ],
        ],
        [
            'id' => 'community',
            'label' => 'Campus life',
            'active' => request()->routeIs('about'),
            'items' => [
                ['route' => 'about', 'anchor' => 'story', 'label' => 'Our story', 'description' => 'A community shaped by purpose and progress.'],
                ['route' => 'about', 'anchor' => 'values', 'label' => 'Values', 'description' => 'The principles behind every learning journey.'],
                ['route' => 'about', 'anchor' => 'community', 'label' => 'Community', 'description' => 'A welcoming network of learners and mentors.'],
            ],
        ],
    ];
@endphp

<header class="sticky top-0 z-40">
    <div class="hidden bg-brand-950 text-white lg:block">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-2 text-xs">
            <p class="font-medium tracking-wide text-white/70">Shri Vile Parle Kelavani Mandal</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('about') }}#community" class="transition hover:text-accent-300">Student life</a>
                <a href="{{ route('contact') }}" class="transition hover:text-accent-300">Enquire now</a>
                <span class="inline-flex items-center gap-2 text-white/70">
                    <span class="size-1.5 rounded-full bg-accent-400"></span>
                    Admissions open
                </span>
            </div>
        </div>
    </div>

    <div class="border-b border-ink-100/80 bg-white/95 shadow-sm shadow-brand-950/5 backdrop-blur-xl dark:border-white/10 dark:bg-ink-950/95">
        <nav class="mx-auto flex max-w-7xl items-center justify-between gap-5 px-4 py-3 sm:px-6" aria-label="Main navigation">
            <a href="{{ route('home') }}" class="group flex items-center gap-3" aria-label="SVKM home">
                <span class="relative flex size-11 items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-br from-brand-700 via-brand-600 to-brand-500 text-sm font-extrabold tracking-tight text-white shadow-lg shadow-brand-700/25">
                    <span class="absolute inset-x-0 bottom-0 h-1.5 bg-accent-400"></span>
                    SV
                </span>
                <span>
                    <span class="block text-lg font-extrabold leading-none tracking-tight text-brand-950 dark:text-white">SVKM</span>
                    <span class="mt-1 block text-[0.65rem] font-semibold uppercase tracking-[0.18em] text-ink-700/60 dark:text-white/50">Learn · Lead · Inspire</span>
                </span>
            </a>

            <div class="hidden items-center gap-1 lg:flex">
                <a href="{{ route('home') }}"
                   @class(['nav-link', 'nav-link-active' => request()->routeIs('home')])
                   @if (request()->routeIs('home')) aria-current="page" @endif>
                    Home
                </a>

                @foreach ($menuGroups as $group)
                    <div class="relative" data-submenu>
                        <button type="button"
                                data-submenu-toggle
                                aria-label="{{ $group['id'] === 'academics' ? 'Features and academics' : $group['label'] }}"
                                aria-expanded="false"
                                aria-controls="{{ $group['id'] }}-submenu"
                                @class(['nav-link gap-1.5', 'nav-link-active' => $group['active']])>
                            {{ $group['label'] }}
                            <svg class="size-4 transition duration-200" data-submenu-chevron fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="{{ $group['id'] }}-submenu"
                             data-submenu-panel
                             class="menu-panel hidden absolute left-1/2 top-full mt-3 w-80 -translate-x-1/2 overflow-hidden rounded-2xl border border-ink-100 bg-white p-2 shadow-2xl shadow-brand-950/15 dark:border-white/10 dark:bg-ink-900">
                            <div class="rounded-xl bg-gradient-to-br from-brand-950 to-brand-700 px-4 py-3 text-white">
                                <p class="text-[0.65rem] font-bold uppercase tracking-[0.18em] text-accent-300">{{ $group['label'] }}</p>
                                <p class="mt-1 text-sm text-white/75">Explore everything SVKM has to offer.</p>
                            </div>
                            <div class="mt-1">
                                @foreach ($group['items'] as $item)
                                    <a href="{{ route($item['route']) }}#{{ $item['anchor'] }}" class="submenu-link">
                                        <span>
                                            <span class="block font-semibold text-ink-900 dark:text-white">{{ $item['label'] }}</span>
                                            <span class="mt-0.5 block text-xs leading-5 text-ink-700/65 dark:text-white/55">{{ $item['description'] }}</span>
                                        </span>
                                        <svg class="mt-1 size-4 shrink-0 text-brand-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                                        </svg>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

                <a href="{{ route('contact') }}"
                   @class(['nav-link', 'nav-link-active' => request()->routeIs('contact')])
                   @if (request()->routeIs('contact')) aria-current="page" @endif>
                    Contact
                </a>
            </div>

            <div class="flex items-center gap-2">
                <button type="button" data-theme-toggle aria-pressed="false" aria-label="Toggle dark mode"
                        class="icon-button">
                    <svg class="size-5 dark:hidden" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 15.5A9.25 9.25 0 1 1 8.5 2.25 7.75 7.75 0 0 0 21.75 15.5Z" />
                    </svg>
                    <svg class="hidden size-5 dark:block" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <circle cx="12" cy="12" r="4.25" />
                        <path stroke-linecap="round" d="M12 2.75v2M12 19.25v2M2.75 12h2M19.25 12h2M5.5 5.5l1.4 1.4M17.1 17.1l1.4 1.4M18.5 5.5l-1.4 1.4M6.9 17.1l-1.4 1.4" />
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="hidden btn btn-primary sm:inline-flex">Apply now</a>

                <button type="button" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle navigation"
                        class="icon-button lg:hidden">
                    <svg data-menu-icon-open class="size-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                    <svg data-menu-icon-close class="hidden size-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                    </svg>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" data-mobile-menu class="hidden border-t border-ink-100 bg-white px-4 pb-5 pt-3 lg:hidden dark:border-white/10 dark:bg-ink-950">
            <div class="mx-auto flex max-w-7xl flex-col gap-1">
                <a href="{{ route('home') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('home')])>Home</a>

                @foreach ($menuGroups as $group)
                    <div>
                        <button type="button"
                                data-mobile-submenu-toggle
                                aria-label="{{ $group['id'] === 'academics' ? 'Features and academics' : $group['label'] }}"
                                aria-expanded="false"
                                aria-controls="mobile-{{ $group['id'] }}-submenu"
                                @class(['nav-link w-full justify-between', 'nav-link-active' => $group['active']])>
                            {{ $group['label'] }}
                            <svg class="size-4 transition duration-200" data-submenu-chevron fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                        <div id="mobile-{{ $group['id'] }}-submenu" data-mobile-submenu-panel class="hidden space-y-1 border-l-2 border-accent-400/70 py-2 pl-3">
                            @foreach ($group['items'] as $item)
                                <a href="{{ route($item['route']) }}#{{ $item['anchor'] }}" class="block rounded-xl px-3 py-2.5 text-sm text-ink-700 transition hover:bg-brand-50 hover:text-brand-700 dark:text-white/70 dark:hover:bg-white/5 dark:hover:text-white">
                                    <span class="font-semibold">{{ $item['label'] }}</span>
                                    <span class="mt-0.5 block text-xs opacity-70">{{ $item['description'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <a href="{{ route('contact') }}" @class(['nav-link', 'nav-link-active' => request()->routeIs('contact')])>Contact</a>
                <a href="{{ route('contact') }}" class="btn btn-primary mt-3 w-full">Start an application</a>
            </div>
        </div>
    </div>
</header>
