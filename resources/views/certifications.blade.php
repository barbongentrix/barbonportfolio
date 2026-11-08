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

            {{-- ===== DOST / iHub certificate card ===== --}}
            <a href="{{ asset('images/certificates/dost-startup-now-cordillera.jpg') }}" target="_blank" rel="noopener noreferrer"
               class="group flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                {{-- Certificate thumbnail --}}
                <div class="border-b border-white/10 bg-white">
                    <img src="{{ asset('images/certificates/dost-startup-now-cordillera.jpg') }}" alt="Certificate of Participation - Startup Now Cordillera"
                         class="h-56 w-full object-cover transition group-hover:scale-[1.02]">
                </div>
                {{-- Certificate details --}}
                <div class="flex flex-1 flex-col p-5">
                    <h2 class="font-semibold text-white group-hover:text-sky-300">Startup Now Cordillera: Exploring Programs, Funding, and Opportunities for Aspiring Startups</h2>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-400">Certificate of Participation for actively participating in the startup program held via Zoom.</p>
                    <div class="mt-4 flex flex-wrap items-center gap-2">
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">DOST &middot; iHub Innovation Hub</span>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Sep 2, 2026</span>
                    </div>
                    <span class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-sky-400">
                        View full certificate
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
                    </span>
                </div>
            </a>

            {{-- ===== DICT certificate card ===== --}}
            <a href="{{ asset('images/certificates/dict-startup-webinar.jpg') }}" target="_blank" rel="noopener noreferrer"
               class="group flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition hover:border-sky-400/50 hover:bg-sky-500/5">
                {{-- Certificate thumbnail --}}
                <div class="border-b border-white/10 bg-white">
                    <img src="{{ asset('images/certificates/dict-startup-webinar.jpg') }}" alt="Certificate of Participation - Understanding Startups webinar"
                         class="h-56 w-full object-cover transition group-hover:scale-[1.02]">
                </div>
                {{-- Certificate details --}}
                <div class="flex flex-1 flex-col p-5">
                    <h2 class="font-semibold text-white group-hover:text-sky-300">Understanding Startups &amp; Getting Your Idea Ready for the Philippine Startup Challenge XI</h2>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-400">Certificate of Participation in the DICT webinar series on understanding startups, refining innovative ideas, and preparing concepts for the competition.</p>
                    <div class="mt-4 flex flex-wrap items-center gap-2">
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">DICT Cordillera</span>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Sep 7, 2026</span>
                    </div>
                    <span class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-sky-400">
                        View full certificate
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
                    </span>
                </div>
            </a>

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
