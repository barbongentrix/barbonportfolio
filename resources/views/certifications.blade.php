{{-- ============================================================
    CERTIFICATIONS (dashboard of certificates and trainings)
    Currently empty - add new cards below when ready.
    ============================================================ --}}
@extends('layouts.app')

@section('title', 'Gentrix Jay Barbon | Certifications')

@section('content')
    <section class="py-16 sm:py-20">
        <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">Credentials</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Certifications</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Certified courses, trainings, and workshops I have completed.</p>

        {{-- ===== Certifications grid ===== --}}
        <div class="mt-10 grid gap-5 sm:grid-cols-2">

            {{-- ===== Empty state: shown while the dashboard has no certifications ===== --}}
            <div class="sm:col-span-2 flex flex-col items-center gap-4 rounded-2xl border border-dashed border-white/15 bg-white/[0.03] px-6 py-16 text-center">
                <svg class="h-14 w-14 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.503-1.125 1.125-1.125h.872m5.688 1.125h-2.27m5.688-2.25c-.278 0-.553.046-.812.135M18.544 6.844 15.54 3.84a4.125 4.125 0 0 0-2.635-1.175 60.66 60.66 0 0 0-1.764-.002 4.125 4.125 0 0 0-2.635 1.175l-3.004 3.004a4.125 4.125 0 0 0 1.429 6.759c.167.04.343.06.522.06 3.193 0 5.198 1.358 5.198 1.358m-7.276-1.361a3.125 3.125 0 0 1-2.439-2.439"/></svg>
                <h2 class="text-lg font-semibold text-slate-300">No certifications yet</h2>
                <p class="max-w-sm text-sm text-slate-500">This dashboard is empty for now. Certificates and trainings will appear here as soon as they are completed.</p>
            </div>

            {{-- ===== Add new certification cards here ===== --}}
            {{-- Copy the block below for each new certification and update the
                 title, issuer, year, and link to the certificate.
            <a href="[certificate-url]" target="_blank" rel="noopener noreferrer"
               class="group flex flex-col rounded-2xl border border-white/10 bg-white/5 p-6 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                <h2 class="text-lg font-semibold text-white group-hover:text-sky-300">Certification Title</h2>
                <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-400">Issued by the organization and what skill it covers.</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Year</span>
                    <span class="text-xs font-semibold text-sky-400">View certificate</span>
                </div>
            </a>
            --}}
        </div>
    </section>
@endsection
