<footer class="mt-24 border-t border-ink-100 bg-white dark:border-white/10 dark:bg-ink-900">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 sm:px-6 md:grid-cols-3">
        <div>
            <p class="text-lg font-semibold">{{ config('app.name', 'Laravel') }}</p>
            <p class="mt-2 max-w-xs text-sm text-ink-700/80 dark:text-ink-100/70">
                A modern Laravel starter with a considered colour system, accessible navigation and responsive layouts.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-ink-700/70 dark:text-ink-100/60">Pages</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="{{ route('home') }}">Home</a></li>
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="{{ route('features') }}">Features</a></li>
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="{{ route('about') }}">About</a></li>
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-ink-700/70 dark:text-ink-100/60">Resources</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="https://laravel.com/docs">Laravel docs</a></li>
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="https://tailwindcss.com/docs">Tailwind CSS docs</a></li>
                <li><a class="hover:text-brand-600 dark:hover:text-brand-300" href="https://vitejs.dev">Vite</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-ink-100 py-5 text-center text-xs text-ink-700/70 dark:border-white/10 dark:text-ink-100/60">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
    </div>
</footer>
