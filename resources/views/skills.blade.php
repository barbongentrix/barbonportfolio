{{-- ============================================================
    SKILLS (dashboard of skills and technologies)
    Skills used to code and build this very portfolio system.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Skills')

@section('content')
    <section class="py-16 sm:py-20">
        <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">What I Can Do</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Skills</h1>
        <p class="mt-3 max-w-2xl text-slate-400">The technologies I actually used to build this portfolio system, from backend to version control.</p>

        {{-- ===== Skills grid ===== --}}
        <div class="mt-10 grid gap-5 sm:grid-cols-2">

            {{-- ===== Backend Development card ===== --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-sky-400/40">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sky-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12.75h7.5m-7.5 0a3.75 3.75 0 1 0 7.5 3.75m1.5 4.5a10.5 10.5 0 1 1 0-21 10.5 10.5 0 0 1 0 21Z"/></svg>
                    </span>
                    <h2 class="text-lg font-semibold text-white">Backend Development</h2>
                </div>
                <div class="mt-5 space-y-4">
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Laravel Framework</span>
                            <span class="text-xs text-slate-500">Learning</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500" style="width: 70%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">PHP (XAMPP, Composer)</span>
                            <span class="text-xs text-slate-500">Learning</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500" style="width: 65%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Routing & Blade Templating</span>
                            <span class="text-xs text-slate-500">Beginner</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500" style="width: 55%"></div></div>
                    </div>
                </div>
            </div>

            {{-- ===== Frontend Development card ===== --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-indigo-400/40">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-indigo-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                    </span>
                    <h2 class="text-lg font-semibold text-white">Frontend Development</h2>
                </div>
                <div class="mt-5 space-y-4">
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Tailwind CSS Styling</span>
                            <span class="text-xs text-slate-500">Learning</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-indigo-500 to-fuchsia-500" style="width: 70%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">HTML / CSS</span>
                            <span class="text-xs text-slate-500">Intermediate</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-indigo-500 to-fuchsia-500" style="width: 75%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Responsive & Mobile-first Design</span>
                            <span class="text-xs text-slate-500">Beginner</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-indigo-500 to-fuchsia-500" style="width: 55%"></div></div>
                    </div>
                </div>
            </div>

            {{-- ===== Tools & Version Control card (spans full width) ===== --}}
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-emerald-400/40 sm:col-span-2">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-emerald-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/></svg>
                    </span>
                    <h2 class="text-lg font-semibold text-white">Tools &amp; Version Control</h2>
                </div>
                <div class="mt-5 grid gap-4 sm:grid-cols-3">
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Git &amp; GitHub Workflow</span>
                            <span class="text-xs text-slate-500">Learning</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500" style="width: 65%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">npm &amp; Vite Build Tool</span>
                            <span class="text-xs text-slate-500">Beginner</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500" style="width: 55%"></div></div>
                    </div>
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">AI-assisted Development</span>
                            <span class="text-xs text-slate-500">Learning</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800"><div class="h-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500" style="width: 60%"></div></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
