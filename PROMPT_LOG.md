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

### Task: 11 — Adding certificate images to the Certifications dashboard

* Prompt used: "Put these two certificate images in certifications with their titles." (DOST/iHub 'Startup Now Cordillera' and DICT 'Understanding Startups' certificates attached as JPG screenshots)
* Result/Output: Big Pickle cropped the phone status bar out of both screenshots, saved them under public/images/certificates/, and built two certificate cards with title, issuer, date chips, thumbnail preview, and a link to view the full-size image.

### Task: 12 — Adding the project screenshots to the Projects dashboard

* Prompt used: "Put these two screenshots in projects with the title 'QR CODE EVENT ATTENDANCE SYSTEM'."
* Result/Output: Big Pickle replaced the empty state with a featured full-width project card showing the login page and admin dashboard screenshots (each clickable to full size), a complete description of the system, and tech tags.

### Task: 13 — Single-page scrollable redesign

* Prompt used: "Improve the design and the theme, make it all in one scrollable screen only, but don't remove the navigation dashboard."
* Result/Output: Big Pickle converted every page into sections of one scrollable home screen using Blade partials (hero, education, skills, certifications, projects, GitHub repos) numbered 01-05, upgraded the design with gradient text, glow accents, numbered section headers, and kept the sticky navigation bar as anchor links with scroll-spy active highlighting and a closing mobile menu. Old page URLs now redirect to their section anchors.

### Task: 18 - Preparing the code for Vercel deployment

* Prompt used: "Fix all the codes that is required in deployment in vercel."
* Result/Output: Big Pickle made the app serverless-ready: added api/index.php (Vercel PHP lambda entry point), added vercel.json (vercel-php@0.7.4 runtime, build command that runs composer install + npm ci + npm run build, routing that serves /images and /build assets statically and sends everything else to the app, and production environment variables), updated bootstrap/app.php to move storage to the writable /tmp directory on Vercel with automatic directory creation, changed the APP_URL fallback in config/app.php to empty so asset links resolve to the real deployed domain, switched SESSION_DRIVER to cookie, CACHE_STORE to file and QUEUE_CONNECTION to sync (the Database: None constraint, since serverless has no database), applied the same no-database values in .env and .env.example, and documented the deployment steps and the required APP_KEY environment variable in the README.

### Task: 19 - Setting the real profile picture

* Prompt used: "Put this as the profile picture in home" (Data Center College of the Philippines student ID card image attached).
* Result/Output: Big Pickle copied the image to public/images/profile.jpg and redesigned the hero profile display from a circular avatar to a rounded portrait card so the full student ID is visible, and added a student number chip (2021-IT-0147) to the contact details.

### Task: 20 - Final Vercel deployment audit and fixes

* Prompt used: "Fix all the code that is required for deployment in vercel" (second audit pass).
* Result/Output: Big Pickle researched the vercel-php runtime source and the official Laravel example, then: confirmed composer install runs automatically inside the runtime build (removed the duplicate composer step), changed the runtime environment variables to point every Laravel bootstrap cache file (config, events, packages, routes, services) to the writable /tmp directory, added trusted proxy middleware so generated URLs keep https behind Vercel's edge, committed the compiled public/build assets so they are served statically without a remote build step, created a .vercelignore excluding vendor and node_modules from the upload, fixed the excludeFiles list to keep vendor inside the function bundle, and refreshed the README deployment guide.

### Task: 21 - Fixing the deployed site downloading instead of rendering

* Prompt used: "Fix it, when clicking the link of the website, its directing to download not into the website." (green build log attached)
* Result/Output: Big Pickle identified that Vercel was serving public/index.php as a static file with no content type (causing a download). Updated the routes in vercel.json so "/" and "/index.php" are sent through the api/index.php PHP function first, real static files (images, built CSS/JS) are still served from the filesystem, and everything else falls back to the app.
