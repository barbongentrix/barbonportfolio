{{-- ============================================================
    SKILLS (dashboard of skills and technologies)
    Currently empty - add skill bars below when ready.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Skills')

@section('content')
    <section class="py-16 sm:py-20">
        <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">What I Can Do</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Skills</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Technologies and abilities I am developing, organized by category.</p>

        {{-- ===== Skills grid ===== --}}
        <div class="mt-10 grid gap-5 sm:grid-cols-2">

            {{-- ===== Empty state: shown while the dashboard has no skills ===== --}}
            <div class="sm:col-span-2 flex flex-col items-center gap-4 rounded-2xl border border-dashed border-white/15 bg-white/[0.03] px-6 py-16 text-center">
                <svg class="h-14 w-14 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m10.5 6h9.75m-9.75 0a3 3 0 0 1-3-3M15.75 6v10.5m-5.25 0h10.5m-10.5 0a3 3 0 0 0-3 0m3-13.5a3 3 0 0 0-3 0"/></svg>
                <h2 class="text-lg font-semibold text-slate-300">No skills yet</h2>
                <p class="max-w-sm text-sm text-slate-500">This dashboard is empty for now. Skills and technologies will appear here as soon as they are added.</p>
            </div>

            {{-- ===== Add new skill cards below ===== --}}
            {{-- Copy the block below for each skill category and update the
                 name, icon, and skill bars (level 0-100%).
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sky-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/></svg>
                    </span>
                    <h2 class="text-lg font-semibold text-white">Category Name</h2>
                </div>
                <div class="mt-5 space-y-4">
                    <div>
                        <div class="mb-1.5 flex items-center justify-between text-sm">
                            <span class="text-slate-300">Skill Name</span>
                            <span class="text-xs text-slate-500">Level</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-800">
                            <div class="h-2 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500" style="width: 80%"></div>
                        </div>
                    </div>
                    {{-- duplicate the inner <div> block above for more skills --}}
                </div>
            </div>
            --}}
        </div>
    </section>
@endsection
