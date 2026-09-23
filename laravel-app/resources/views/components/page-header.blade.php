@props(['eyebrow' => null, 'title', 'subtitle' => null])

<section class="relative isolate overflow-hidden bg-gradient-to-br from-brand-950 via-brand-900 to-brand-700 text-white">
    <div class="pointer-events-none absolute -right-24 -top-24 size-80 rounded-full border-[3rem] border-white/5"></div>
    <div class="pointer-events-none absolute -bottom-24 left-1/4 size-64 rounded-full bg-accent-400/15 blur-3xl"></div>
    <div class="absolute inset-x-0 bottom-0 h-1 bg-gradient-to-r from-accent-400 via-rose-400 to-brand-400"></div>

    <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:py-20">
        @if ($eyebrow)
            <p class="eyebrow border-white/15 bg-white/10 text-accent-300">{{ $eyebrow }}</p>
        @endif

        <h1 class="mt-5 max-w-4xl text-4xl font-extrabold tracking-tight sm:text-5xl">{{ $title }}</h1>

        @if ($subtitle)
            <p class="mt-5 max-w-2xl text-lg leading-8 text-white/70">{{ $subtitle }}</p>
        @endif
    </div>
</section>
