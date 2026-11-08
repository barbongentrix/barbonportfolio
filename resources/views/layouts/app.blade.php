{{-- ============================================================
    Main layout: every page in the portfolio extends this file.
    Contains the Tailwind stylesheet, navigation bar, and footer.
    ============================================================ --}}
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gentrix Jay B. Barbon - Personal Portfolio">
    <title>@yield('title', 'Gentrix Jay Barbon | Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-200 font-sans antialiased selection:bg-sky-500/30">

    {{-- ===== Navigation Bar ===== --}}
    <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/80 backdrop-blur-md">
        <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4 sm:px-6">
            {{-- Brand / Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-sky-500 to-indigo-600 font-bold text-white">GB</span>
                <span class="hidden text-sm font-semibold tracking-wide text-gray-100 sm:block">Gentrix Jay Barbon</span>
            </a>

            {{-- Desktop nav links --}}
            <ul class="hidden items-center gap-1 md:flex">
                <li><a href="{{ route('home') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition {{ $page === 'home' ? 'bg-sky-500/15 text-sky-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">Home</a></li>
                <li><a href="{{ route('education') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition {{ $page === 'education' ? 'bg-sky-500/15 text-sky-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">Education</a></li>
                <li><a href="{{ route('skills') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition {{ $page === 'skills' ? 'bg-sky-500/15 text-sky-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">Skills</a></li>
                <li><a href="{{ route('certifications') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition {{ $page === 'certifications' ? 'bg-sky-500/15 text-sky-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">Certifications</a></li>
                <li><a href="{{ route('projects') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition {{ $page === 'projects' ? 'bg-sky-500/15 text-sky-300' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">Projects</a></li>
                <li><a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer" class="ml-2 flex items-center gap-2 rounded-lg bg-sky-500 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-400">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"/></svg>
                    GitHub
                </a></li>
            </ul>

            {{-- Mobile menu button --}}
            <button id="mobile-menu-btn" class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 text-slate-300 md:hidden" aria-label="Toggle navigation">
                <svg id="icon-open" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="icon-close" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </nav>

        {{-- Mobile nav links --}}
        <div id="mobile-menu" class="hidden border-t border-white/10 px-4 pb-4 md:hidden">
            <a href="{{ route('home') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/5">Home</a>
            <a href="{{ route('education') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/5">Education</a>
            <a href="{{ route('skills') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/5">Skills</a>
            <a href="{{ route('certifications') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/5">Certifications</a>
            <a href="{{ route('projects') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-slate-200 hover:bg-white/5">Projects</a>
            <a href="https://github.com/barbongentrix" target="_blank" rel="noopener noreferrer" class="mt-2 flex items-center justify-center gap-2 rounded-lg bg-sky-500 px-4 py-3 text-sm font-semibold text-white">GitHub Profile</a>
        </div>
    </header>

    {{-- ===== Page Content ===== --}}
    <main class="mx-auto max-w-5xl px-4 sm:px-6">
        @yield('content')
    </main>

    {{-- ===== Footer ===== --}}
    <footer class="mt-20 border-t border-white/10 py-8">
        <div class="mx-auto flex max-w-5xl flex-col items-center gap-2 px-4 text-center">
            <p class="text-sm text-slate-400">&copy; {{ date('Y') }} Gentrix Jay B. Barbon &middot; BSIT 4</p>
            <p class="text-xs text-slate-500">Built with Laravel Blade &amp; Tailwind CSS</p>
        </div>
    </footer>

    {{-- Mobile menu toggle script --}}
    <script>
        const btn  = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>
