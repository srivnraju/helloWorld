@extends('layouts.app')

@section('title', config('app.name', 'Laravel') . ' — Build something people enjoy using')
@section('description', 'A Laravel starter with a refined colour system, responsive navigation and dark mode.')

@section('content')
    <section class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-x-0 -top-40 h-96 bg-gradient-to-br from-brand-200/60 via-accent-400/30 to-transparent blur-3xl dark:from-brand-800/40 dark:via-accent-600/20"></div>

        <div class="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:py-28">
            <p class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-brand-50 px-3 py-1 text-xs font-semibold text-brand-700 dark:border-brand-500/40 dark:bg-brand-500/10 dark:text-brand-200">
                <span class="size-1.5 rounded-full bg-accent-500"></span>
                Laravel {{ app()->version() }} · Tailwind CSS 4
            </p>

            <h1 class="mt-6 max-w-3xl text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                Build something people
                <span class="bg-gradient-to-r from-brand-600 to-accent-500 bg-clip-text text-transparent">enjoy using</span>.
            </h1>

            <p class="mt-6 max-w-2xl text-lg text-ink-700/85 dark:text-ink-100/75">
                A ready-to-extend foundation with a consistent colour palette, accessible navigation, dark mode and
                responsive layouts — so you can focus on your product instead of the plumbing.
            </p>

            <div class="mt-9 flex flex-wrap gap-3">
                <a href="{{ route('features') }}" class="btn btn-primary">Explore features</a>
                <a href="{{ route('contact') }}" class="btn btn-secondary">Talk to us</a>
            </div>

            <dl class="mt-16 grid gap-6 sm:grid-cols-3">
                @foreach ($stats as $stat)
                    <div class="rounded-2xl border border-ink-100 bg-white/70 p-6 dark:border-white/10 dark:bg-white/5">
                        <dt class="text-sm font-medium text-ink-700/70 dark:text-ink-100/60">{{ $stat['label'] }}</dt>
                        <dd class="mt-2 text-3xl font-semibold text-brand-700 dark:text-brand-300">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="flex items-end justify-between gap-4">
            <div>
                <h2 class="text-2xl font-semibold tracking-tight sm:text-3xl">Everything wired up</h2>
                <p class="mt-2 max-w-xl text-ink-700/80 dark:text-ink-100/70">
                    Each page shares one layout, one navigation menu and one design language.
                </p>
            </div>
            <a href="{{ route('features') }}" class="hidden text-sm font-semibold text-brand-600 hover:text-brand-700 sm:block dark:text-brand-300">
                See all features →
            </a>
        </div>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            @foreach ($highlights as $highlight)
                <article class="card">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-brand-50 text-lg dark:bg-brand-500/15">
                        {{ $highlight['icon'] }}
                    </span>
                    <h3 class="mt-4 text-lg font-semibold">{{ $highlight['title'] }}</h3>
                    <p class="mt-2 text-sm text-ink-700/80 dark:text-ink-100/70">{{ $highlight['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto mt-20 max-w-6xl px-4 sm:px-6">
        <div class="overflow-hidden rounded-3xl bg-gradient-to-r from-brand-700 to-brand-500 px-8 py-14 text-center text-white">
            <h2 class="text-2xl font-semibold sm:text-3xl">Ready to make it yours?</h2>
            <p class="mx-auto mt-3 max-w-xl text-white/85">
                Swap the copy, extend the palette in <code class="rounded bg-white/15 px-1.5 py-0.5">resources/css/app.css</code>
                and ship.
            </p>
            <a href="{{ route('contact') }}" class="btn mt-7 bg-white text-brand-700 hover:bg-brand-50">Get in touch</a>
        </div>
    </section>
@endsection
