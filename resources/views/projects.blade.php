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

            {{-- ===== Featured project: QR Code Event Attendance System ===== --}}
            <div class="flex flex-col overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition hover:border-sky-400/50 sm:col-span-2">
                {{-- Screenshot previews --}}
                <div class="grid gap-px border-b border-white/10 bg-white/10 sm:grid-cols-2">
                    <a href="{{ asset('images/projects/qr-attendance-login.jpg') }}" target="_blank" rel="noopener noreferrer" class="group/shot overflow-hidden bg-white">
                        <img src="{{ asset('images/projects/qr-attendance-login.jpg') }}" alt="QR Code Event Attendance System - Login page"
                             class="h-56 w-full bg-white object-cover object-top transition group-hover/shot:scale-[1.02] sm:h-64">
                    </a>
                    <a href="{{ asset('images/projects/qr-attendance-dashboard.jpg') }}" target="_blank" rel="noopener noreferrer" class="group/shot overflow-hidden bg-white">
                        <img src="{{ asset('images/projects/qr-attendance-dashboard.jpg') }}" alt="QR Code Event Attendance System - Admin dashboard"
                             class="h-56 w-full bg-white object-cover object-top transition group-hover/shot:scale-[1.02] sm:h-64">
                    </a>
                </div>
                {{-- Project details --}}
                <div class="flex flex-1 flex-col p-6">
                    <h2 class="text-lg font-semibold text-white sm:text-xl">QR Code Event Attendance System</h2>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-400">
                        A web-based event attendance system for DCCP-Bangued designed for S.Y. 2025-2026. Students are registered and monitored through QR code scanning, with an admin dashboard that tracks registered students, present and absent attendees per event, and live recent-attendance records. The system covers the full administration flow: student records, event records, QR scanning, account and user management, backup &amp; restore, audit logs, and settings.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Web-based System</span>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">QR Code Scanning</span>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Admin Dashboard</span>
                        <span class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300">Academic Project</span>
                    </div>
                </div>
            </div>

            {{-- ===== Add new project cards here ===== !!}
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
