{{-- ============================================================
    HOME / Basic Information
    Name, profile picture, contact details, short bio,
    and GitHub repository links.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Home')

@section('content')
    {{-- ===== Hero: profile picture, name, and short bio ===== --}}
    <section class="flex flex-col items-center gap-10 py-16 sm:py-24 md:flex-row md:items-center md:gap-14">
        {{-- Profile picture --}}
        <div class="relative shrink-0">
            <div class="absolute -inset-3 rounded-full bg-gradient-to-tr from-sky-500/40 via-indigo-500/20 to-transparent blur-xl"></div>
            <img src="{{ asset('images/profile.svg') }}" alt="Profile picture of Gentrix Jay B. Barbon"
                 class="relative h-40 w-40 rounded-full border-4 border-white/10 shadow-2xl sm:h-56 sm:w-56">
        </div>

        {{-- Name, role, and bio --}}
        <div class="text-center md:text-left">
            <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-sky-400">BSIT 4 &middot; Portfolio</p>
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Gentrix Jay B. Barbon</h1>
            <p class="mt-3 text-lg text-slate-400">Information Technology Student</p>

            @php
                // Short bio - edit this text anytime
                $bio = "I am Gentrix Jay B. Barbon, a Bachelor of Science in Information Technology student from Bangued, Philippines. I am passionate about learning web development and building useful applications with Laravel, one step at a time.";
            @endphp
            <p class="mt-6 max-w-xl leading-relaxed text-slate-300">{{ $bio }}</p>

            {{-- Contact details --}}
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3 md:justify-start">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                    <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                    09156426499
                </span>
                <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                    <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                    Bangued, Abra, Philippines
                </span>
            </div>

            {{-- CTA buttons --}}
            <div class="mt-8 flex flex-wrap justify-center gap-3 md:justify-start">
                <a href="#github-links" class="rounded-xl bg-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/25 transition hover:bg-sky-400">View My Projects</a>
                <a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-white/15 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:border-sky-400 hover:text-sky-300">GitHub Profile</a>
            </div>
        </div>
    </section>

    {{-- ===== GitHub Repository Links ===== --}}
    <section id="github-links" class="scroll-mt-24 py-6">
        <h2 class="text-2xl font-bold text-white sm:text-3xl">GitHub Repositories</h2>
        <p class="mt-2 text-slate-400">Browse the source code of my work.</p>

        <div class="mt-6 grid gap-4 sm:grid-cols-2">
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
