@props(['eyebrow' => null, 'title', 'subtitle' => null])

<section class="border-b border-ink-100 bg-gradient-to-b from-brand-50 to-transparent dark:border-white/10 dark:from-brand-950/60">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        @if ($eyebrow)
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600 dark:text-brand-300">{{ $eyebrow }}</p>
        @endif

        <h1 class="mt-3 max-w-3xl text-3xl font-bold tracking-tight sm:text-4xl">{{ $title }}</h1>

        @if ($subtitle)
            <p class="mt-4 max-w-2xl text-lg text-ink-700/80 dark:text-ink-100/70">{{ $subtitle }}</p>
        @endif
    </div>
</section>
