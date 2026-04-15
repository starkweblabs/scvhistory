# SCVHistory.com — Master Build Plan

Upload BUILDPLAN.md + CHANGELOG.md + ERRORLOG.md at the start of every session.

## Project North Star
World-class digital archive of SCV history. Launch: 2027 (30th anniversary). Audience: general public, students, researchers, CSUN post-grads.

## Environments

Local (DDEV): https://scvhistory.ddev.site — Code only
Cloudways: phpstack-676057-6346692.cloudwaysapps.com — Content + live testing
Git: github.com/starkweblabs/scvhistory main — Source of truth

Workflow rule: Code = local to git to Cloudways. Content = directly to Cloudways.
Auto-deploy: GitHub Action (.github/workflows/deploy.yml) SSHes into Cloudways on every push to main.

Cloudways Git Fix (if needed):
git config --global --add safe.directory /mnt/BLOCKSTORAGE/home/676057.cloudwaysapps.com/ufppzhwvbk/public_html

## Design System
Navy #1a2744, Gold #b8860b, Cream #faf6ef, Warm Gray #6b6560
Headings: Cormorant Garamond, Body/UI: Inter
CSS/JS: served via templates/assets/ as Twig templates (Mutagen workaround)
Content-type headers set in .twig files: {% header 'Content-Type: text/css' %}

## Workstream 1 — Craft CMS Build

### Content Status
Persons: 33 — Local YES, Cloudways YES
Organizations: 14 — Local NO, Cloudways YES
Places: 0 — Local NO, Cloudways NO
Groups: 0 — Local NO, Cloudways NO

### Template Status
_layouts/base.twig — LIVE (both)
_partials/cite-article.twig — LIVE (both)
_partials/search-form.twig — LIVE (both)
templates/assets/css/main.css + main.twig — LIVE (both)
templates/assets/css/layout.css + layout.twig — LIVE (both)
templates/assets/js/main.js + main.twig — LIVE (both)
persons/_entry.twig — LIVE (both)
persons/index.twig — LIVE (both) — era filter + person grid
organizations/_entry.twig — BUILT locally, pushed to GitHub, needs Cloudways pull + test
organizations/index.twig — NOT BUILT
places/_entry.twig — NOT BUILT
places/index.twig — NOT BUILT
Homepage — NOT BUILT
Search results — NOT BUILT

### Queue (in order)
- [ ] Pull organizations/_entry.twig to Cloudways (Cloudways panel > Deployment via GIT > Pull)
- [ ] Test org entry template on Cloudways against live org content
- [ ] Build organizations/index.twig
- [ ] Run places_import_v2.php on Cloudways
- [ ] Build places/_entry.twig
- [ ] Build places/index.twig
- [ ] Upgrade persons/index.twig — last-name alpha sort + sidebar filters (neighborhood, org)
- [ ] Wire Acosta parent/child relationship on Cloudways (wired locally only)
- [ ] Build Search results page
- [ ] Build Homepage (include Recently Added strip — 4-6 cards, latest entries across all sections)
- [ ] Build "What's New" page — two streams: (1) Site Updates: simple Craft single section for admin notes; (2) Recently Added: auto-query last 15 entries across all sections ordered by dateUpdated
- [ ] Add "Recently Added" strip to Homepage (4-6 cards, same query as What's New)
- [ ] Add "What's New" link to footer nav

### Open Questions
- [ ] Confirm articleOrganizations field handle on Articles section for org reverse-lookup
- [ ] FacetWP-style filtering approach in Craft (no plugin equivalent yet)
- [ ] SEO/Meta plugin for Craft (SEOmatic appears to be installed — confirm)

## Workstream 2 — Archive.org Legacy Mirror
- [ ] Mirror legacy site to Cloudways (in progress)
- [ ] Strip non-essential code
- [ ] Push static version to Archive.org
- [ ] Craft site becomes canonical URL

## Decisions Log
2025 — Pivoted WordPress to Craft CMS 5 — Better structured content
2025 — CSS/JS via templates/assets/ Twig files — Mutagen workaround (web/assets not synced)
2026-04-13 — 33 Person records imported via persons_v3_batch1/2/3.php on DDEV
2026-04-13 — Person titles corrected to WP short names after import used full legal names
2026-04-13 — persons/index.twig built with era filter and person grid
2026-04-14 — Local = code only, Cloudways = content + testing — eliminates double work
2026-04-14 — Build all templates first, migrate content to Cloudways after
2026-04-14 — Repo made public — enables GitHub raw file fetching for session start
2026-04-14 — Auto-deploy via GitHub Action (deploy.yml) using SSH password auth
2026-04-14 — Cloudways Pull button used for manual deploys when needed

## Key Technical Notes
- Use php craft exec not php craft eval (does not exist in Craft 5)
- Craft 5: use Craft::app->entries not Craft::app->sections
- Never edit config files via CLI append/cat — causes corruption
- Never assume a file or field exists unless confirmed
- CSS/JS must be in templates/assets/ not web/assets/ — Mutagen does not sync web/assets
- Content-type headers required in .twig asset files
- PRIMARY_SITE_URL must be https:// not http:// in .env
- ddev craft clear-caches/all after template changes locally
- Git merge editor opens vim — type :wq to save and exit

## Import Scripts on Cloudways (public_html root)
- persons_import.php, persons_import_v2.php, persons_v3_batch1/2/3.php
- orgs_import.php, orgs_import_v2.php
- places_import.php, places_import_v2.php

## Backlog
- SCVTalk integration — separate blog/media property, revisit after SCVHistory launch
