@extends('layouts.app')

@section('title', 'About — ' . config('app.name', 'SVKM'))
@section('description', 'Meet the values, vision and learning community that shape the SVKM experience.')

@section('content')
    <x-page-header
        eyebrow="About SVKM"
        title="A learning community guided by purpose"
        subtitle="We believe education should expand what learners know, deepen who they are and strengthen what they can contribute." />

    <section id="story" class="mx-auto grid max-w-7xl scroll-mt-28 gap-12 px-4 py-24 sm:px-6 lg:grid-cols-2 lg:items-center">
        <div>
            <p class="eyebrow">Our story</p>
            <h2 class="section-title mt-5">Progress begins when opportunity meets belief.</h2>
            <div class="mt-6 space-y-4 text-lg leading-8 text-ink-700/75 dark:text-white/65">
                <p>SVKM is built around a simple conviction: every learner deserves an environment that sees their potential and helps them turn it into purposeful action.</p>
                <p>That means combining academic rigour with creative exploration, personal attention and the freedom to discover new interests across disciplines.</p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-primary mt-8">Connect with SVKM</a>
        </div>

        <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-brand-950 to-brand-700 p-8 text-white shadow-2xl shadow-brand-950/20 sm:p-10">
            <div class="absolute -right-16 -top-16 size-56 rounded-full border-[2rem] border-white/5"></div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent-300">Our aspiration</p>
            <blockquote class="relative mt-6 text-3xl font-extrabold leading-tight sm:text-4xl">“Help every learner become curious, capable and compassionate.”</blockquote>
            <div class="relative mt-10 h-1 w-20 rounded-full bg-accent-400"></div>
            <p class="relative mt-5 max-w-md text-sm leading-7 text-white/65">A vibrant education should prepare students not only for their next step, but for a lifetime of thoughtful growth.</p>
        </div>
    </section>

    <section id="values" class="scroll-mt-28 bg-white py-24 dark:bg-ink-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="max-w-3xl">
                <p class="eyebrow">Our values</p>
                <h2 class="section-title mt-5">The principles that shape every experience.</h2>
            </div>

            <ol class="mt-10 grid gap-6 md:grid-cols-2">
                @foreach ($principles as $index => $principle)
                    <li class="flex gap-5 rounded-3xl border border-ink-100 bg-ink-50 p-6 transition hover:border-brand-200 dark:border-white/10 dark:bg-ink-950">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-2xl bg-brand-600 text-sm font-extrabold text-white shadow-lg shadow-brand-600/20">
                            0{{ $index + 1 }}
                        </span>
                        <div>
                            <h3 class="text-lg font-bold text-brand-950 dark:text-white">{{ $principle['title'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-ink-700/70 dark:text-white/60">{{ $principle['description'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section id="community" class="mx-auto max-w-7xl scroll-mt-28 px-4 py-24 sm:px-6">
        <div class="grid gap-10 lg:grid-cols-[1fr_1.15fr] lg:items-center">
            <div>
                <p class="eyebrow">Our community</p>
                <h2 class="section-title mt-5">Belong, participate and grow together.</h2>
                <p class="mt-5 text-lg leading-8 text-ink-700/75 dark:text-white/65">Learning is richer when different perspectives meet. SVKM brings students, educators, families and mentors together in a culture of mutual respect and shared ambition.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-3">
                @foreach ([
                    ['title' => 'Students', 'copy' => 'Curious minds with diverse interests and ambitions.', 'tone' => 'bg-brand-600 text-white'],
                    ['title' => 'Educators', 'copy' => 'Mentors who challenge, guide and encourage discovery.', 'tone' => 'bg-accent-400 text-brand-950'],
                    ['title' => 'Families', 'copy' => 'Partners in building confident, grounded learners.', 'tone' => 'bg-rose-500 text-white'],
                ] as $community)
                    <article class="rounded-3xl p-6 {{ $community['tone'] }}">
                        <h3 class="text-xl font-extrabold">{{ $community['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 opacity-75">{{ $community['copy'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
