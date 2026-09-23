@extends('layouts.app')

@section('title', 'Admissions enquiry — ' . config('app.name', 'SVKM'))
@section('description', 'Connect with SVKM and take the first step towards the right learning journey.')

@section('content')
    <x-page-header
        eyebrow="Admissions & enquiries"
        title="Let us help you find your next step"
        subtitle="Share a little about what you are looking for and our team will help you explore the SVKM experience." />

    <section class="mx-auto grid max-w-7xl gap-10 px-4 py-24 sm:px-6 lg:grid-cols-[0.75fr_1.25fr]">
        <aside>
            <p class="eyebrow">Start a conversation</p>
            <h2 class="section-title mt-5">We are here to guide you.</h2>
            <p class="mt-4 leading-7 text-ink-700/70 dark:text-white/60">Whether you are exploring programmes, admissions or campus life, send us your questions and we will point you in the right direction.</p>

            <div class="mt-8 space-y-4">
                @foreach ([
                    ['icon' => '01', 'title' => 'Tell us your interests', 'copy' => 'Share the programme or area you would like to explore.'],
                    ['icon' => '02', 'title' => 'Hear from our team', 'copy' => 'Receive clear guidance on options and next steps.'],
                    ['icon' => '03', 'title' => 'Plan your journey', 'copy' => 'Move forward with confidence and the information you need.'],
                ] as $item)
                    <div class="flex gap-4 rounded-2xl border border-ink-100 bg-white p-4 dark:border-white/10 dark:bg-ink-900">
                        <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-xs font-extrabold text-brand-700 dark:bg-brand-500/15 dark:text-brand-200">{{ $item['icon'] }}</span>
                        <div>
                            <h3 class="font-bold text-brand-950 dark:text-white">{{ $item['title'] }}</h3>
                            <p class="mt-1 text-sm leading-6 text-ink-700/65 dark:text-white/55">{{ $item['copy'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </aside>

        <div>
            @if (session('status'))
                <div role="status" class="mb-6 rounded-2xl border border-accent-400/40 bg-accent-400/10 px-5 py-4 text-sm font-bold text-accent-600 dark:text-accent-300">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6 rounded-[2rem] border border-ink-100 bg-white p-6 shadow-xl shadow-brand-950/5 dark:border-white/10 dark:bg-ink-900 sm:p-8">
                @csrf

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block text-sm font-bold">Your name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Enter your full name" required
                               @class(['input-control', 'border-rose-500' => $errors->has('name')])>
                        @error('name')
                            <p class="mt-1.5 text-sm font-medium text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-bold">Email address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required
                               @class(['input-control', 'border-rose-500' => $errors->has('email')])>
                        @error('email')
                            <p class="mt-1.5 text-sm font-medium text-rose-600 dark:text-rose-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-bold">How can we help?</label>
                    <textarea id="message" name="message" rows="6" placeholder="Tell us which programme or aspect of SVKM you would like to know more about." required
                              @class(['input-control resize-y', 'border-rose-500' => $errors->has('message')])>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1.5 text-sm font-medium text-rose-600 dark:text-rose-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-xs leading-5 text-ink-700/55 dark:text-white/45">By submitting, you agree to be contacted about your enquiry.</p>
                    <button type="submit" class="btn btn-primary shrink-0">Send enquiry</button>
                </div>
            </form>
        </div>
    </section>
@endsection
