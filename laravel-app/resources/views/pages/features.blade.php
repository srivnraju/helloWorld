@extends('layouts.app')

@section('title', 'Features — ' . config('app.name', 'Laravel'))
@section('description', 'Design system, navigation, dark mode and responsive layouts included out of the box.')

@section('content')
    <x-page-header
        eyebrow="Features"
        title="A design system, not just a page"
        subtitle="Reusable colour tokens, components and layout pieces that stay consistent across every screen." />

    <section class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <article class="card">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-accent-500/10 text-lg">{{ $feature['icon'] }}</span>
                    <h2 class="mt-4 text-lg font-semibold">{{ $feature['title'] }}</h2>
                    <p class="mt-2 text-sm text-ink-700/80 dark:text-ink-100/70">{{ $feature['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="mx-auto mt-20 max-w-6xl px-4 sm:px-6">
        <h2 class="text-2xl font-semibold tracking-tight">Colour palette</h2>
        <p class="mt-2 text-ink-700/80 dark:text-ink-100/70">
            Brand and accent scales are defined once as CSS variables and reused everywhere.
        </p>

        <div class="mt-6 grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
            @foreach ($palette as $swatch)
                <div class="overflow-hidden rounded-xl border border-ink-100 dark:border-white/10">
                    <div class="h-20 {{ $swatch['class'] }}"></div>
                    <div class="bg-white px-3 py-2 text-xs dark:bg-ink-900">
                        <p class="font-semibold">{{ $swatch['name'] }}</p>
                        <p class="text-ink-700/70 dark:text-ink-100/60">{{ $swatch['hex'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
