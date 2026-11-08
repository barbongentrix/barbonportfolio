{{-- ============================================================
    HOME - single-page scrollable portfolio
    Sections: Basic Info (hero), Education, Skills,
    Certifications, Projects, and GitHub repository links.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Portfolio')

@section('content')
    {{-- Soft glow decorations behind the page content --}}
    <div class="pointer-events-none relative">
        <div class="absolute -top-20 left-1/2 -z-10 h-72 w-72 -translate-x-1/2 rounded-full bg-sky-600/10 blur-3xl sm:h-96 sm:w-96"></div>
    </div>

    @include('partials.hero')
    @include('partials.education')
    @include('partials.skills')
    @include('partials.certifications')
    @include('partials.projects')

    {{-- ===== Section 05: GitHub Repository Links ===== --}}
    <section id="github" data-section="github" class="scroll-mt-20 py-14">
        <div class="flex items-center gap-4">
            <span class="bg-gradient-to-b from-sky-400 to-indigo-500 bg-clip-text text-sm font-bold text-transparent">05</span>
            <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">GitHub Repositories</h2>
            <div class="h-px flex-1 bg-gradient-to-r from-sky-500/40 to-transparent"></div>
        </div>
        <p class="mt-2 text-slate-400">Browse the source code of my work.</p>

        <div class="mt-10 grid gap-4 sm:grid-cols-2">
            {{-- Repository card: this portfolio's source code --}}
            <a href="https://github.com/barbongentrix/barbonportfolio" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-sky-400 group-hover:text-sky-300">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"/></svg>
                </span>
                <div class="min-w-0">
                    <h3 class="font-semibold text-white group-hover:text-sky-300">barbonportfolio</h3>
                    <p class="truncate text-sm text-slate-400">This portfolio website, built with Laravel Blade and Tailwind CSS.</p>
                </div>
                <svg class="ml-auto h-5 w-5 shrink-0 text-slate-500 transition group-hover:translate-x-1 group-hover:text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
            </a>

            {{-- Repository card: main GitHub profile --}}
            <a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer"
               class="group flex items-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-slate-900 text-sky-400 group-hover:text-sky-300">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/></svg>
                </span>
                <div class="min-w-0">
                    <h3 class="font-semibold text-white group-hover:text-sky-300">@barbongentrix</h3>
                    <p class="truncate text-sm text-slate-400">My GitHub profile with all of my repositories.</p>
                </div>
                <svg class="ml-auto h-5 w-5 shrink-0 text-slate-500 transition group-hover:translate-x-1 group-hover:text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
            </a>
        </div>
    </section>
@endsection
