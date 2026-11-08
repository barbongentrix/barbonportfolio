{{-- ============================================================
    EDUCATIONAL BACKGROUND
    Schools attended, years, and certifications.
    (Add or adjust the "years" text in each card as needed.)
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Education')

@section('content')
    <section class="py-16 sm:py-20">
        <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">My Journey</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Educational Background</h1>
        <p class="mt-3 text-slate-400">The schools and institutions that shaped my education.</p>

        {{-- ===== Vertical timeline ===== --}}
        <div class="relative mt-12">
            {{-- Timeline line --}}
            <div class="absolute bottom-0 left-[19px] top-2 w-px bg-gradient-to-b from-sky-500 via-indigo-500/50 to-transparent sm:left-[23px]"></div>

            {{-- College --}}
            <article class="relative mb-8 flex gap-4 sm:gap-6">
                <div class="z-10 mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-sky-500/40 bg-slate-900 sm:h-12 sm:w-12">
                    {{-- Graduation cap icon --}}
                    <svg class="h-5 w-5 text-sky-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/></svg>
                </div>
                <a href="https://github.com/barbongentrix/barbonportfolio" target="_blank" rel="noopener noreferrer"
                   class="group w-full rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:border-sky-400/40 hover:bg-sky-500/5">
                    <div class="flex flex-wrap items-center gap-3">
                        <h2 class="text-lg font-semibold text-white group-hover:text-sky-300">Data Center College of Bangued</h2>
                        <span class="rounded-full bg-sky-500/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-sky-300">College</span>
                    </div>
                    <p class="mt-1 text-sm text-slate-400">Bachelor of Science in Information Technology (BSIT) &middot; Bangued, Abra, Philippines</p>
                    <p class="mt-3 inline-flex items-center gap-2 text-xs text-slate-500">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5"/></svg>
                        Years attended: Up to Present
                    </p>
                </a>
            </article>

            {{-- Secondary / High school --}}
            <article class="relative mb-8 flex gap-4 sm:gap-6">
                <div class="z-10 mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-indigo-500/40 bg-slate-900 sm:h-12 sm:w-12">
                    <svg class="h-5 w-5 text-indigo-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.05.184-7.5.552V21M3 21h18M12 6.75h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m7.5-.75a4.5 4.5 0 0 1-9 0m9 0a4.5 4.5 0 0 0-9 0Z"/></svg>
                </div>
                <div class="w-full rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:border-indigo-400/40">
                    <div class="flex flex-wrap items-center gap-3">
                        <h2 class="text-lg font-semibold text-white">Little Flower High School</h2>
                        <span class="rounded-full bg-indigo-500/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-indigo-300">Secondary</span>
                    </div>
                    <p class="mt-1 text-sm text-slate-400">High School Diploma &middot; Philippines</p>
                    <p class="mt-3 inline-flex items-center gap-2 text-xs text-slate-500">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5"/></svg>
                        Year graduated: 2020
                    </p>
                </div>
            </article>

            {{-- Elementary --}}
            <article class="relative flex gap-4 sm:gap-6">
                <div class="z-10 mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-emerald-500/40 bg-slate-900 sm:h-12 sm:w-12">
                    <svg class="h-5 w-5 text-emerald-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/></svg>
                </div>
                <div class="w-full rounded-2xl border border-white/10 bg-white/5 p-5 transition hover:border-emerald-400/40">
                    <div class="flex flex-wrap items-center gap-3">
                        <h2 class="text-lg font-semibold text-white">Malamsit Elementary School</h2>
                        <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-emerald-300">Elementary</span>
                    </div>
                    <p class="mt-1 text-sm text-slate-400">Elementary Diploma &middot; Philippines</p>
                    <p class="mt-3 inline-flex items-center gap-2 text-xs text-slate-500">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5"/></svg>
                        Year graduated: 2016
                    </p>
                </div>
            </article>
        </div>
    </section>
@endsection
