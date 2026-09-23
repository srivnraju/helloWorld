@extends('layouts.app')

@section('title', config('app.name', 'SVKM') . ' — Learn, lead and inspire')
@section('description', 'Explore a vibrant SVKM learning community designed around academic excellence, personal growth and future-ready experiences.')

@section('content')
    <section class="relative isolate overflow-hidden bg-brand-950 text-white">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_78%_28%,rgba(49,109,245,0.4),transparent_28rem)]"></div>
        <div class="pointer-events-none absolute -left-32 top-28 size-96 rounded-full border-[4rem] border-white/5"></div>

        <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-4 py-20 sm:px-6 lg:grid-cols-[1.08fr_0.92fr] lg:py-28">
            <div>
                <p class="eyebrow border-white/15 bg-white/10 text-accent-300">
                    <span class="size-1.5 rounded-full bg-accent-400"></span>
                    Purposeful education. Limitless possibility.
                </p>

                <h1 class="mt-7 max-w-3xl text-5xl font-extrabold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
                    Learn boldly.
                    <span class="block bg-gradient-to-r from-accent-300 via-accent-400 to-rose-400 bg-clip-text text-transparent">Lead with purpose.</span>
                </h1>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-white/70">
                    Discover an education that brings knowledge, creativity and character together — in a community
                    where every learner is encouraged to question, create and grow.
                </p>

                <div class="mt-9 flex flex-wrap gap-3">
                    <a href="{{ route('features') }}" class="btn btn-accent">
                        Explore programmes
                        <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 14 0m-5-5 5 5-5 5" />
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn border border-white/20 bg-white/10 text-white hover:bg-white/15">Begin your journey</a>
                </div>

                <div class="mt-12 flex flex-wrap gap-x-8 gap-y-4 text-sm text-white/60">
                    <span class="inline-flex items-center gap-2"><span class="size-2 rounded-full bg-accent-400"></span>Student-centred learning</span>
                    <span class="inline-flex items-center gap-2"><span class="size-2 rounded-full bg-rose-400"></span>Future-ready curriculum</span>
                </div>
            </div>

            <div class="relative mx-auto w-full max-w-lg">
                <div class="absolute -inset-6 rounded-[2.5rem] bg-gradient-to-br from-brand-400/25 via-transparent to-accent-400/15 blur-2xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/15 bg-white/10 p-4 shadow-2xl backdrop-blur">
                    <div class="rounded-[1.5rem] bg-white p-6 text-ink-900 shadow-xl dark:bg-ink-900 dark:text-white">
                        <div class="flex items-center justify-between">
                            <span class="rounded-full bg-brand-50 px-3 py-1 text-xs font-bold text-brand-700 dark:bg-brand-500/15 dark:text-brand-200">Your SVKM journey</span>
                            <span class="flex size-9 items-center justify-center rounded-xl bg-accent-400 text-brand-950">
                                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 19.5V9.75L12 4l8 5.75V19.5M2.5 20h19M8 20v-6h8v6" />
                                </svg>
                            </span>
                        </div>

                        <div class="mt-7 space-y-4">
                            <div class="rounded-2xl bg-brand-950 p-5 text-white">
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-accent-300">01 · Discover</p>
                                <p class="mt-2 text-lg font-bold">Find the path that feels like yours.</p>
                                <p class="mt-2 text-sm leading-6 text-white/65">Explore programmes built around curiosity, collaboration and meaningful practice.</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-2xl bg-brand-50 p-4 dark:bg-white/5">
                                    <p class="text-2xl font-extrabold text-brand-700 dark:text-brand-300">02</p>
                                    <p class="mt-1 text-sm font-bold">Experience</p>
                                    <p class="mt-1 text-xs leading-5 text-ink-700/60 dark:text-white/55">Learn by doing.</p>
                                </div>
                                <div class="rounded-2xl bg-accent-400/15 p-4">
                                    <p class="text-2xl font-extrabold text-accent-600 dark:text-accent-300">03</p>
                                    <p class="mt-1 text-sm font-bold">Transform</p>
                                    <p class="mt-1 text-xs leading-5 text-ink-700/60 dark:text-white/55">Step forward with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative border-t border-white/10 bg-white/5">
            <dl class="mx-auto grid max-w-7xl gap-px px-4 sm:grid-cols-3 sm:px-6">
                @foreach ($stats as $stat)
                    <div class="px-6 py-6 sm:border-l sm:border-white/10 first:sm:border-l-0">
                        <dt class="text-xs font-bold uppercase tracking-[0.16em] text-white/45">{{ $stat['label'] }}</dt>
                        <dd class="mt-2 text-lg font-bold text-white">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-24 sm:px-6">
        <div class="grid items-end gap-6 lg:grid-cols-[1fr_auto]">
            <div>
                <p class="eyebrow">The SVKM experience</p>
                <h2 class="section-title mt-5">Education designed for the whole person.</h2>
                <p class="mt-4 max-w-2xl text-lg leading-8 text-ink-700/75 dark:text-white/65">
                    Strong academics are only the beginning. Every experience is shaped to help learners build
                    perspective, confidence and the courage to make a difference.
                </p>
            </div>
            <a href="{{ route('features') }}" class="hidden items-center gap-2 text-sm font-bold text-brand-600 hover:text-brand-700 sm:inline-flex dark:text-brand-300">
                Explore academics
                <span aria-hidden="true">→</span>
            </a>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ($highlights as $highlight)
                <article class="card group">
                    <span class="flex size-12 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-50 to-brand-100 text-xl transition group-hover:scale-105 dark:from-brand-500/20 dark:to-brand-400/10">
                        {{ $highlight['icon'] }}
                    </span>
                    <h3 class="mt-5 text-xl font-bold text-brand-950 dark:text-white">{{ $highlight['title'] }}</h3>
                    <p class="mt-3 text-sm leading-6 text-ink-700/70 dark:text-white/60">{{ $highlight['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 pb-24 sm:px-6">
        <div class="relative isolate overflow-hidden rounded-[2rem] bg-gradient-to-r from-brand-800 via-brand-700 to-brand-600 px-6 py-14 text-white sm:px-12 lg:flex lg:items-center lg:justify-between lg:gap-12">
            <div class="pointer-events-none absolute -right-16 -top-24 size-72 rounded-full border-[2.5rem] border-white/5"></div>
            <div class="relative max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent-300">Your next chapter</p>
                <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">A place to discover what you are capable of.</h2>
                <p class="mt-4 leading-7 text-white/70">Speak with our team, explore your options and take the first step towards an inspiring learning journey.</p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-accent relative mt-8 shrink-0 lg:mt-0">Talk to admissions</a>
        </div>
    </section>
@endsection
