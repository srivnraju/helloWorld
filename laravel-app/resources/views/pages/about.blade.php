@extends('layouts.app')

@section('title', 'About — ' . config('app.name', 'Laravel'))
@section('description', 'Why this starter exists and the principles behind its interface.')

@section('content')
    <x-page-header
        eyebrow="About"
        title="Opinionated where it helps, flexible everywhere else"
        subtitle="The interface follows a few simple rules so new pages look like they belong without extra effort." />

    <section class="mx-auto grid max-w-6xl gap-10 px-4 sm:px-6 lg:grid-cols-2">
        <div class="space-y-4 text-ink-700/85 dark:text-ink-100/75">
            <p>
                The original scaffold shipped a single page with default styling. This version adds a shared layout, a
                persistent navigation menu, and a colour system built on a small set of tokens.
            </p>
            <p>
                Light and dark themes are both first-class: the theme is stored in <code>localStorage</code> and applied
                before first paint, so there is no flash of the wrong theme on load.
            </p>
            <p>
                Components live in Blade partials and CSS component classes, which keeps markup readable and makes
                restyling a matter of editing a handful of variables.
            </p>
        </div>

        <ol class="space-y-4">
            @foreach ($principles as $index => $principle)
                <li class="flex gap-4 rounded-2xl border border-ink-100 bg-white p-5 dark:border-white/10 dark:bg-ink-900">
                    <span class="flex size-8 shrink-0 items-center justify-center rounded-full bg-brand-600 text-sm font-semibold text-white">
                        {{ $index + 1 }}
                    </span>
                    <div>
                        <h2 class="font-semibold">{{ $principle['title'] }}</h2>
                        <p class="mt-1 text-sm text-ink-700/80 dark:text-ink-100/70">{{ $principle['description'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </section>
@endsection
