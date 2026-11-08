# PROMPT_LOG.md

## AI Prompt Log — IPA Midterm Activity 1–3

**Agent used:** OpenCode (Big Pickle)
**Project:** Barbon Portfolio — Laravel + Blade + Tailwind CSS
**Objective:** Build a static Laravel portfolio, track changes with Git, and push to a public GitHub repository.

---

### Task: 1 — Setting up the Laravel project

* Prompt used: "Create a new Laravel project in my folder using the latest stable version, with no database, migrations, or models."
* Result/Output: Big Pickle ran `composer create-project laravel/laravel` and created the Laravel project skeleton (app, bootstrap, config, database, public, resources, routes, storage, tests, vendor).

### Task: 2 — Installing styling dependencies

* Prompt used: "Install the Node dependencies so Tailwind CSS can be compiled through Vite."
* Result/Output: Big Pickle ran `npm install` successfully (88 packages installed, 0 vulnerabilities).

### Task: 3 — Creating the main Blade layout

* Prompt used: "Create a main Blade layout file named layouts/app.blade.php with Tailwind CSS, a sticky navigation bar with links to Home, Education and Projects, a button to my GitHub, and a footer."
* Result/Output: Big Pickle generated the shared layout with a dark theme, responsive navigation, a mobile hamburger menu toggle script, and a centered footer.

### Task: 4 — Creating routes for the portfolio pages

* Prompt used: "Set up routes for the home page, the education page, and the projects page, each returning its own Blade view so every portfolio section is a distinct page."
* Result/Output: Big Pickle updated routes/web.php with three GET routes: `/`, `/education`, and `/projects`, each passing the current page name so the nav can highlight the active link.

### Task: 5 — Building the Basic Information (Home) page

* Prompt used: "Create a responsive Blade home page for my basic information: my name Gentrix Jay B. Barbon, a profile picture, my contact number 09156426499, my location Bangued, Abra, a short bio saying I am a BSIT student who loves web development, and a section with clickable GitHub repository links shown as styled cards."
* Result/Output: Big Pickle generated the hero section with a gradient ring around the profile image, contact chips with icons, CTA buttons, and a GitHub Repositories section with two clickable cards (barbonportfolio repo and @barbongentrix profile).

### Task: 6 — Adding the profile picture placeholder

* Prompt used: "Add a placeholder profile image in public/images so the site works immediately, and I will replace it with my real photo later."
* Result/Output: Big Pickle created an SVG placeholder avatar (gradient background with a silhouette) at public/images/profile.svg.

### Task: 7 — Building the Educational Background page

* Prompt used: "Create a responsive Blade component for my educational history using Tailwind CSS. It should be a vertical timeline with three entries: College — Data Center College of Bangued (BSIT), Bangued, Abra; Secondary — Little Flower High School; Elementary — Malamsit Elementary School. Include year chips and different accent colors per level."
* Result/Output: Big Pickle generated a vertical gradient timeline with icon markers, a level badge (College/Secondary/Elementary) on each card, degree text, and year chips to be filled in.

### Task: 8 — Building the Projects page (empty dashboard)

* Prompt used: "Create the projects page as an empty dashboard for now: show a clean empty state message saying there are no projects yet with a link to my GitHub profile, and include a commented-out template card in the Blade file so I can copy it to add project cards later."
* Result/Output: Big Pickle generated a projects grid with a dashed-border empty state (icon, heading, description, and a GitHub button), plus a ready-to-copy commented project card template with title, description, tech tags, and repo link.

### Task: 9 — Generating the README.md

* Prompt used: "Generate a README.md file describing my portfolio project: project description, features, pages, tech stack, requirements, installation steps (composer install, npm install, npm run build, php artisan serve), and my author details with my GitHub profile link."
* Result/Output: Big Pickle generated a complete Markdown README with a features table, routes table, tech stack, and installation instructions, and referenced PROMPT_LOG.md.

### Task: 10 — Version control and Git workflow

* Prompt used: "Initialize a git repository, stage everything, and make descriptive commits following my commit message standards like 'Initial commit: Set up Laravel Blade layout and basic info page'. Then connect my public GitHub repository https://github.com/barbongentrix/barbonportfolio.git as origin and push the main branch."
* Result/Output: Big Pickle initialized git, created the remote on GitHub, and made granular descriptive commits; the final push was done by the student (`git push -u origin main`).
