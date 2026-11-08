{{-- ============================================================
    PROJECTS (grid / list of work with descriptions)
    Currently an empty dashboard - add new cards below when ready.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Projects')

@section('content')
    <section class="py-16 sm:py-20">
        <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">What I've Built</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Projects</h1>
        <p class="mt-3 max-w-2xl text-slate-400">A collection of my personal and academic work.</p>

        {{-- ===== Projects grid ===== --}}
        <div class="mt-10 grid gap-5 sm:grid-cols-2">

            {{-- ===== Empty state: shown while the dashboard has no projects ===== --}}
            <div class="sm:col-span-2 flex flex-col items-center gap-4 rounded-2xl border border-dashed border-white/15 bg-white/[0.03] px-6 py-16 text-center">
                <svg class="h-14 w-14 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"/></svg>
                <h2 class="text-lg font-semibold text-slate-300">No projects yet</h2>
                <p class="max-w-sm text-sm text-slate-500">This dashboard is empty for now. Check back soon, or follow me on GitHub to see what I'm working on.</p>
                <a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex items-center gap-2 rounded-xl bg-sky-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-sky-400">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"/></svg>
                    Visit my GitHub
                </a>
            </div>

            {{-- ===== Add new project cards here ===== --}}
            {{-- Copy the block below for each new project and update the
                 title, description, tags, and GitHub link.
            <a href="[github-repo-url]" target="_blank" rel="noopener noreferrer"
               class="group flex flex-col rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                <h2 class="text-lg font-semibold text-white group-hover:text-sky-300">Project Title</h2>
                <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-400">Short description of the project and what it does.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Laravel</span>
                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Tailwind CSS</span>
                </div>
            </a>
            --}}
        </div>
    </section>
@endsection
