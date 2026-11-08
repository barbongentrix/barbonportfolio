# Barbon Portfolio

A personal portfolio website built with **Laravel** (Blade templating) and **Tailwind CSS**, developed by **Gentrix Jay B. Barbon** (BSIT 4) as part of the IPA Midterm activity.

## Description

This project is a **single-page scrollable portfolio**. Every section — from basic information to projects — lives on the home screen (`/`), reached by smooth-scrolling through anchor navigation: Basic Information, Educational Background, Skills, Certifications, Projects, and GitHub repository links. Each page is rendered using Laravel Blade templates styled with Tailwind CSS via Vite.

> **Note:** No database, migrations, or models are used — the portfolio is purely static Blade views, following the activity's technical constraints.

## Features / Sections

- **Basic Information** — Name, profile picture, contact details, and a short bio
- **Educational Background** — Timeline of schools attended, degrees, and years
- **Projects** — Dashboard grid of personal and academic work (empty for now)
- **GitHub Repository Links** — Clickable cards linking to the source code

## Page Sections (single scrollable screen at `/`)

| Section          | Anchor               | Description                       |
| ---------------- | -------------------- | --------------------------------- |
| Home             | `/#home`             | Basic info + bio + contact         |
| Education        | `/#education`        | Educational background timeline    |
| Skills           | `/#skills`           | Coding skills used in this system  |
| Certifications   | `/#certifications`   | Certificate cards with images       |
| Projects         | `/#projects`         | Projects dashboard with screenshots |
| GitHub Repos     | `/#github`           | Clickable repository links          |

Old URLs (`/education`, `/skills`, `/certifications`, `/projects`) redirect to their section anchors.

## Tech Stack

- Laravel (latest stable)
- Blade templating engine (single-page layout with view partials)
- Tailwind CSS (via Vite)
- Git for version control

## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm

## Installation

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Build the Tailwind CSS assets
npm run build

# Start the development server
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.

## Deployment (Vercel)

This project is ready to deploy on [Vercel](https://vercel.com) using the community PHP runtime:

1. Import your GitHub repository (`barbongentrix/barbonportfolio`) into Vercel.
2. Set **Environment Variables** in the Vercel project settings:
   - `APP_KEY` — a base64 key: run `php artisan key:generate --show` locally and paste the value
   - `APP_URL` — optional, your Vercel domain
3. Deploy. The build command in `vercel.json` runs `composer install`, `npm ci`, and `npm run build` automatically.

Files that enable the deployment:

| File | Purpose |
| ---- | ------- |
| `vercel.json` | PHP runtime, build command, routing (serves `/images` and `/build` as static, everything else through the app) and serverless environment variables |
| `api/index.php` | Serverless entry point (Vercel requires the app under `/api`) |
| `bootstrap/app.php` | Redirects storage to the writable `/tmp/storage` directory on Vercel (the server filesystem is read-only) |
| `config/app.php` | Empty `APP_URL` fallback so generated asset links use the real domain |

> **Note on the "Database: None" constraint:** the app uses the `cookie` session driver and `file` cache — no database, migrations, or models are needed in production either.

## AI Prompt Documentation

All prompts used with the development agent (OpenCode / Big Pickle) are documented in [`PROMPT_LOG.md`](PROMPT_LOG.md), following the activity's prompt log format.

## Author

- **Name:** Gentrix Jay B. Barbon
- **Contact:** 09156426499
- **GitHub:** [@barbongentrix](https://github.com/barbongentrix)
