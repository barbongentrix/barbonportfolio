{{-- ============================================================
    HERO / Basic Information section
    Name, profile picture, contact details, short bio,
    and quick links to GitHub.
    ============================================================ --}}
<section id="home" data-section="home" class="scroll-mt-24 flex flex-col items-center gap-10 py-14 sm:py-20 md:flex-row md:items-center md:gap-14">
    {{-- Profile picture (student ID card) --}}
    <div class="relative shrink-0">
        <div class="absolute -inset-3 rounded-3xl bg-gradient-to-tr from-sky-500/40 via-indigo-500/20 to-transparent blur-xl"></div>
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile picture of Gentrix Jay B. Barbon - Data Center College of the Philippines student ID"
             class="relative w-56 rounded-3xl border border-white/10 shadow-2xl sm:w-72">
    </div>

    {{-- Name, role, and bio --}}
    <div class="text-center md:text-left">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-sky-400">BSIT 4 &middot; Portfolio</p>
        <h1 class="bg-gradient-to-r from-sky-400 via-indigo-400 to-fuchsia-400 bg-clip-text text-4xl font-bold tracking-tight text-transparent sm:text-5xl">Gentrix Jay B. Barbon</h1>
        <p class="mt-3 text-lg text-slate-400">Information Technology Student</p>

        {{-- Short bio - edit this text anytime --}}
        @php
            $bio = "I am Gentrix Jay B. Barbon, a Bachelor of Science in Information Technology student from Bangued, Philippines. I am passionate about learning web development and building useful applications with Laravel, one step at a time.";
        @endphp
        <p class="mt-6 max-w-xl leading-relaxed text-slate-300">{{ $bio }}</p>

        {{-- Quick facts --}}
        <div class="mt-6 flex flex-wrap items-center justify-center gap-3 md:justify-start">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg>
                09156426499
            </span>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                Bangued, Abra, Philippines
            </span>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/></svg>
                DCCP-Bangued
            </span>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-300">
                <svg class="h-4 w-4 text-sky-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
                2021-IT-0147
            </span>
        </div>

        {{-- CTA buttons --}}
        <div class="mt-8 flex flex-wrap justify-center gap-3 md:justify-start">
            <a href="#projects" class="rounded-xl bg-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/25 transition hover:bg-sky-400">View My Projects</a>
            <a href="#certifications" class="rounded-xl border border-white/15 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:border-sky-400 hover:text-sky-300">My Certifications</a>
            <a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-white/15 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:border-sky-400 hover:text-sky-300">GitHub Profile</a>
        </div>
    </div>
</section>
