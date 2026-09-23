@extends('layouts.app')

@section('title', 'Academics — ' . config('app.name', 'SVKM'))
@section('description', 'Explore multidisciplinary programmes and a learning experience designed for curiosity, capability and confident futures.')

@section('content')
    <x-page-header
        eyebrow="Academics"
        title="Learning that connects ideas with impact"
        subtitle="Build strong foundations, explore across disciplines and turn knowledge into meaningful action through an engaging, future-facing education." />

    <section id="programmes" class="mx-auto max-w-7xl scroll-mt-28 px-4 py-24 sm:px-6">
        <div class="max-w-3xl">
            <p class="eyebrow">Programmes</p>
            <h2 class="section-title mt-5">Find the learning path that moves you forward.</h2>
            <p class="mt-4 text-lg leading-8 text-ink-700/75 dark:text-white/65">Every pathway blends academic depth with practical exploration, collaborative work and room to discover your individual strengths.</p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <article class="card group">
                    <div class="flex items-center justify-between">
                        <span class="flex size-12 items-center justify-center rounded-2xl bg-brand-50 text-xl dark:bg-brand-500/15">{{ $feature['icon'] }}</span>
                        <span class="text-sm font-bold text-brand-500 opacity-0 transition group-hover:opacity-100">Explore →</span>
                    </div>
                    <h2 class="mt-5 text-xl font-bold text-brand-950 dark:text-white">{{ $feature['title'] }}</h2>
                    <p class="mt-3 text-sm leading-6 text-ink-700/70 dark:text-white/60">{{ $feature['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section id="experience" class="scroll-mt-28 bg-brand-950 py-24 text-white">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[0.85fr_1.15fr] lg:items-center">
            <div>
                <p class="eyebrow border-white/15 bg-white/10 text-accent-300">Learning experience</p>
                <h2 class="mt-5 text-3xl font-extrabold tracking-tight sm:text-4xl">More than lectures. More than a qualification.</h2>
                <p class="mt-5 text-lg leading-8 text-white/65">Learning comes alive through discussion, experimentation, mentoring and opportunities to apply ideas in the world beyond the classroom.</p>
                <a href="{{ route('contact') }}" class="btn btn-accent mt-8">Ask about admissions</a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['number' => '01', 'title' => 'Question', 'copy' => 'Start with curiosity and learn to see familiar challenges in new ways.'],
                    ['number' => '02', 'title' => 'Create', 'copy' => 'Turn ideas into projects through hands-on, collaborative experiences.'],
                    ['number' => '03', 'title' => 'Connect', 'copy' => 'Learn with mentors, peers and perspectives from across disciplines.'],
                    ['number' => '04', 'title' => 'Contribute', 'copy' => 'Use knowledge with empathy, responsibility and a sense of purpose.'],
                ] as $step)
                    <article class="rounded-3xl border border-white/10 bg-white/5 p-6 transition hover:border-accent-400/40 hover:bg-white/10">
                        <p class="text-sm font-extrabold text-accent-300">{{ $step['number'] }}</p>
                        <h3 class="mt-5 text-xl font-bold">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 text-white/60">{{ $step['copy'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="outcomes" class="mx-auto max-w-7xl scroll-mt-28 px-4 py-24 sm:px-6">
        <div class="grid gap-8 rounded-[2rem] border border-ink-100 bg-white p-8 shadow-xl shadow-brand-950/5 dark:border-white/10 dark:bg-ink-900 sm:p-12 lg:grid-cols-[1fr_auto] lg:items-center">
            <div class="max-w-3xl">
                <p class="eyebrow">Student outcomes</p>
                <h2 class="section-title mt-5">Graduate with more than knowledge.</h2>
                <p class="mt-4 text-lg leading-8 text-ink-700/70 dark:text-white/60">Leave with the confidence to communicate, the capability to adapt and the character to lead thoughtfully in a changing world.</p>
                <div class="mt-7 flex flex-wrap gap-3">
                    @foreach (['Critical thinking', 'Creative confidence', 'Collaborative leadership', 'Real-world perspective'] as $outcome)
                        <span class="rounded-full border border-brand-100 bg-brand-50 px-4 py-2 text-sm font-bold text-brand-700 dark:border-brand-500/20 dark:bg-brand-500/10 dark:text-brand-200">{{ $outcome }}</span>
                    @endforeach
                </div>
            </div>
            <div class="flex size-32 items-center justify-center rounded-full bg-gradient-to-br from-accent-300 to-accent-500 text-brand-950 shadow-xl shadow-accent-500/20">
                <svg class="size-14" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 9.5 17 19 7.5" />
                    <circle cx="12" cy="12" r="9" />
                </svg>
            </div>
        </div>
    </section>
@endsection
