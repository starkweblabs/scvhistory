# SCVHistory.com — Master Build Plan

Upload BUILDPLAN.md + CHANGELOG.md + ERRORLOG.md at the start of every session.

---

## How to Update These Files

**Adding something to the build queue:**
Tell Claude what to add and it will generate an updated BUILDPLAN.md to download and commit.

**End of every session:**
1. Claude generates a CHANGELOG entry — paste it at the top of CHANGELOG.md in TextEdit
2. Download any updated BUILDPLAN.md or ERRORLOG.md Claude generated
3. Commit and push everything:

MAC:
git add BUILDPLAN.md CHANGELOG.md ERRORLOG.md
git commit -m "docs: session log YYYY-MM-DD"
git push

**Start of every session — paste this prompt into a new chat:**
You are working on SCVHistory.com, a Craft CMS 5 digital archive project for Santa Clarita Valley history. Before doing anything else, fetch and read these three files from GitHub: https://raw.githubusercontent.com/starkweblabs/scvhistory/main/BUILDPLAN.md and https://raw.githubusercontent.com/starkweblabs/scvhistory/main/CHANGELOG.md and https://raw.githubusercontent.com/starkweblabs/scvhistory/main/ERRORLOG.md. After reading all three, summarize what was last completed, current status, and what's next. Then ask what we're working on today.

---

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
Persons: 33 — Local YES (untitled), Cloudways YES (titled)
Organizations: 14 — Local NO, Cloudways YES (titled as of 2026-04-14)
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
persons/index.twig — LIVE (both)
organizations/_entry.twig — LIVE (both)
organizations/index.twig — NOT BUILT
places/_entry.twig — NOT BUILT
places/index.twig — NOT BUILT
Homepage — NOT BUILT
Search results — NOT BUILT

### Queue (in order)
- [ ] Pull Cloudways DB to DDEV local — fixes untitled entries locally, enables local design against real content
- [ ] Fix images on Cloudways — featuredImage field empty on org entries, needs investigation
- [ ] Build organizations/index.twig
- [ ] Run places_import_v2.php on Cloudways
- [ ] Build places/_entry.twig
- [ ] Build places/index.twig
- [ ] Upgrade persons/index.twig — last-name alpha sort + sidebar filters (neighborhood, org)
- [ ] Wire Acosta parent/child relationship on Cloudways (wired locally only)
- [ ] Build Search results page
- [ ] Build Homepage (include Recently Added strip — 4-6 cards, latest entries across all sections)
- [ ] Build "What's New" page — two streams: (1) Site Updates: simple Craft single section for admin notes; (2) Recently Added: auto-query last 15 entries across all sections ordered by dateUpdated
- [ ] Add "What's New" link to footer nav
- [ ] Set up "Live Tech Updates" page — public-facing log of build progress, decisions, and deployments. Pulls from a dedicated Craft single or channel. Admin posts brief notes; page auto-displays newest first. Separate from content updates — this is about the project itself.
- [ ] Sort out SEOmatic trial — two plugins installed as trials, need licensing decision
- [ ] README.md in repo — public explanation of project for GitHub visitors and CSUN audience

### Open Questions
- [ ] Confirm articleOrganizations field handle on Articles section for org reverse-lookup
- [ ] FacetWP-style filtering approach in Craft (no plugin equivalent yet)
- [ ] Why are images not showing on Cloudways — featuredImage empty on org entries

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
2026-04-14 — Local = code only, Cloudways = content + testing
2026-04-14 — Repo made public — enables GitHub raw file fetching for session start
2026-04-14 — Auto-deploy via GitHub Action (deploy.yml) using SSH password auth
2026-04-14 — CRAFT_ALLOW_ADMIN_CHANGES=true added to Cloudways .env to allow section config changes
2026-04-14 — Org section template path fixed to organizations/_entry
2026-04-14 — All 14 org titles fixed — were null due to circular titleFormat reference

## Key Technical Notes
- Use php craft exec not php craft eval (does not exist in Craft 5)
- Craft 5: use Craft::app->entries not Craft::app->sections
- Never edit config files via CLI append/cat — causes corruption
- CSS/JS must be in templates/assets/ not web/assets/ — Mutagen does not sync web/assets
- Content-type headers required in .twig asset files
- PRIMARY_SITE_URL must be https:// not http:// in .env
- CRAFT_ALLOW_ADMIN_CHANGES=true required in Cloudways .env to save section settings
- ddev craft clear-caches/all after template changes locally
- Git merge editor opens vim — type :wq to save and exit
- To open .md files in TextEdit: open -a TextEdit filename.md

## Import Scripts on Cloudways (public_html root)
- persons_import.php, persons_import_v2.php, persons_v3_batch1/2/3.php
- orgs_import.php, orgs_import_v2.php
- places_import.php, places_import_v2.php

## Backlog
- SCVTalk integration — separate blog/media property, revisit after SCVHistory launch
- GitHub Issues + Project board for public task tracking
- CSUN partnership pitch materials
