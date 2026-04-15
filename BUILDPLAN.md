# SCVHistory.com — Master Build Plan

Upload BUILDPLAN.md + CHANGELOG.md + ERRORLOG.md at the start of every session.

## Project North Star
World-class digital archive of SCV history. Launch: 2027 (30th anniversary). Audience: general public, students, researchers, CSUN post-grads.

## Environments

Local (DDEV): https://scvhistory.ddev.site — Code only
Cloudways: phpstack-676057-6346692.cloudwaysapps.com — Content + live testing
Git: github.com/starkweblabs/scvhistory main — Source of truth

Workflow rule: Code = local to git to Cloudways. Content = directly to Cloudways.

Cloudways Git Fix:
git config --global --add safe.directory /mnt/BLOCKSTORAGE/home/676057.cloudwaysapps.com/ufppzhwvbk/public_html

## Design System
Navy #1a2744, Gold #b8860b, Cream #faf6ef, Warm Gray #6b6560
Headings: Cormorant Garamond, Body/UI: Inter

## Workstream 1 — Craft CMS Build

### Content Status
Persons: 33 — Local YES, Cloudways YES
Organizations: 14 — Local NO, Cloudways YES
Places: 0 — Local NO, Cloudways NO
Groups: 0 — Local NO, Cloudways NO

### Template Status
_layouts/base.twig — LIVE
persons/_entry.twig — LIVE
persons/index.twig — NOT BUILT
organizations/_entry.twig — BUILT LOCALLY, needs Cloudways push and test
organizations/index.twig — NOT BUILT
places/_entry.twig — NOT BUILT
places/index.twig — NOT BUILT
Homepage — NOT BUILT
Search results — NOT BUILT

### Queue (in order)
- [ ] Push organizations/_entry.twig to Cloudways via git
- [ ] Test org entry template on Cloudways
- [ ] Build organizations/index.twig
- [ ] Run places_import_v2.php on Cloudways
- [ ] Build places/_entry.twig
- [ ] Build places/index.twig
- [ ] Upgrade persons/index.twig — alpha sort + sidebar filters
- [ ] Wire Acosta parent/child on Cloudways
- [ ] Build Search results page
- [ ] Build Homepage
- [ ] Public changelog section on site

### Open Questions
- [ ] Confirm articleOrganizations field handle on Articles section
- [ ] FacetWP-style filtering approach in Craft
- [ ] SEO/Meta plugin for Craft

## Workstream 2 — Archive.org Legacy Mirror
- [ ] Mirror legacy site to Cloudways (in progress)
- [ ] Strip non-essential code
- [ ] Push static version to Archive.org
- [ ] Craft site becomes canonical URL

## Decisions Log
2025 — Pivoted WordPress to Craft CMS 5 — Better structured content
2025 — CSS/JS via templates/assets/ — Mutagen workaround
2026-04-14 — Local = code only, Cloudways = content + testing — Eliminates double work
2026-04-14 — Build all templates first, migrate content after — Clean workflow

## Key Technical Notes
- Use php craft exec not php craft eval (does not exist in Craft 5)
- Craft 5: use Craft::app->entries not Craft::app->sections
- Never edit config files via CLI append/cat — causes corruption
- Never assume a file or field exists unless confirmed

## Backlog
- SCVTalk integration — separate blog/media property, revisit after SCVHistory launch
