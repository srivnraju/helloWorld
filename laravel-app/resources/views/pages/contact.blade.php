@extends('layouts.app')

@section('title', 'Contact — ' . config('app.name', 'Laravel'))
@section('description', 'Send a message through a validated, accessible contact form.')

@section('content')
    <x-page-header
        eyebrow="Contact"
        title="Tell us what you are building"
        subtitle="A fully validated form with inline error messages and a success state." />

    <section class="mx-auto max-w-3xl px-4 sm:px-6">
        @if (session('status'))
            <div role="status" class="mb-6 rounded-xl border border-accent-500/40 bg-accent-500/10 px-4 py-3 text-sm font-medium text-accent-600 dark:text-accent-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="space-y-5 rounded-2xl border border-ink-100 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-ink-900">
            @csrf

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required
                           @class([
                               'mt-1.5 w-full rounded-lg border bg-white px-3 py-2 text-sm outline-none focus:border-brand-500 focus:ring-2 focus:ring-brand-500/30 dark:bg-ink-950',
                               'border-red-500' => $errors->has('name'),
                               'border-ink-100 dark:border-white/10' => ! $errors->has('name'),
                           ])>
                    @error('name')
                        <p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required
                           @class([
                               'mt-1.5 w-full rounded-lg border bg-white px-3 py-2 text-sm outline-none focus:border-brand-500 focus:ring-2 focus:ring-brand-500/30 dark:bg-ink-950',
                               'border-red-500' => $errors->has('email'),
                               'border-ink-100 dark:border-white/10' => ! $errors->has('email'),
                           ])>
                    @error('email')
                        <p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium">Message</label>
                <textarea id="message" name="message" rows="5" required
                          @class([
                              'mt-1.5 w-full rounded-lg border bg-white px-3 py-2 text-sm outline-none focus:border-brand-500 focus:ring-2 focus:ring-brand-500/30 dark:bg-ink-950',
                              'border-red-500' => $errors->has('message'),
                              'border-ink-100 dark:border-white/10' => ! $errors->has('message'),
                          ])>{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1.5 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full sm:w-auto">Send message</button>
        </form>
    </section>
@endsection
