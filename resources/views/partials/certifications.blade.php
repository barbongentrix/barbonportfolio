{{-- ============================================================
    CERTIFICATIONS section - certificates and trainings.
    ============================================================ --}}
<section id="certifications" data-section="certifications" class="scroll-mt-20 py-14">
    {{-- Section header --}}
    <div class="flex items-center gap-4">
        <span class="bg-gradient-to-b from-sky-400 to-indigo-500 bg-clip-text text-sm font-bold text-transparent">03</span>
        <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Certifications</h2>
        <div class="h-px flex-1 bg-gradient-to-r from-sky-500/40 to-transparent"></div>
    </div>
    <p class="mt-2 text-slate-400">Certificate courses, trainings, and webinars I have completed. Click a card to view the full certificate.</p>

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
                <h3 class="font-semibold text-white group-hover:text-sky-300">Startup Now Cordillera: Exploring Programs, Funding, and Opportunities for Aspiring Startups</h3>
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
                <h3 class="font-semibold text-white group-hover:text-sky-300">Understanding Startups &amp; Getting Your Idea Ready for the Philippine Startup Challenge XI</h3>
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

    </div>
</section>
