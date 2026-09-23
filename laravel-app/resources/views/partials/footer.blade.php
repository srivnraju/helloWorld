<footer class="bg-brand-950 text-white">
    <div class="h-1 bg-gradient-to-r from-accent-400 via-rose-400 to-brand-400"></div>
    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.35fr_0.65fr_0.65fr]">
        <div>
            <div class="flex items-center gap-3">
                <span class="flex size-11 items-center justify-center rounded-2xl bg-brand-600 text-sm font-extrabold shadow-lg shadow-black/15">SV</span>
                <div>
                    <p class="text-xl font-extrabold tracking-tight">{{ config('app.name', 'SVKM') }}</p>
                    <p class="text-[0.65rem] font-semibold uppercase tracking-[0.18em] text-white/45">Learn · Lead · Inspire</p>
                </div>
            </div>
            <p class="mt-5 max-w-md text-sm leading-7 text-white/55">
                Purposeful learning experiences that help students build knowledge, confidence and the character to create positive change.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-accent mt-6">Make an enquiry</a>
        </div>

        <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent-300">Explore</p>
            <ul class="mt-5 space-y-3 text-sm text-white/60">
                <li><a class="transition hover:text-white" href="{{ route('home') }}">Home</a></li>
                <li><a class="transition hover:text-white" href="{{ route('features') }}#programmes">Programmes</a></li>
                <li><a class="transition hover:text-white" href="{{ route('features') }}#experience">Learning experience</a></li>
                <li><a class="transition hover:text-white" href="{{ route('about') }}">About SVKM</a></li>
            </ul>
        </div>

        <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent-300">Connect</p>
            <ul class="mt-5 space-y-3 text-sm text-white/60">
                <li><a class="transition hover:text-white" href="{{ route('contact') }}">Admissions</a></li>
                <li><a class="transition hover:text-white" href="{{ route('about') }}#community">Student life</a></li>
                <li><a class="transition hover:text-white" href="{{ route('contact') }}">Contact us</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-5 text-xs text-white/40 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'SVKM') }}. All rights reserved.</p>
            <p>Designed for curious minds and confident futures.</p>
        </div>
    </div>
</footer>
