# SCVHistory.com — Changelog

> Sessions logged newest-first. Paste new entries at the top.

## 2026-04-14 (Session 2)

- Built organizations/_entry.twig covering all 23 org fields — pushed to GitHub
- Confirmed php craft exec is correct (not php craft eval)
- Confirmed Craft 5 uses Craft::$app->entries not Craft::$app->sections
- Established session management system: BUILDPLAN.md, CHANGELOG.md, ERRORLOG.md, SESSION_START.md
- Repo made public to enable GitHub raw file fetching at session start
- Settled workflow: local = code only, Cloudways = content + testing
- SCVTalk moved to backlog
- Set up GitHub Action auto-deploy (deploy.yml) — SSHes to Cloudways on every push to main
- Cloudways Pull button available as manual fallback (Deployment via GIT panel)
- Uploaded full prior session terminal history — BUILDPLAN updated to reflect real project state
- **Next:** Pull org entry template to Cloudways, test against live content, build organizations/index.twig

## 2026-04-13 (Session 1 — reconstructed from terminal history)

- Craft CMS 5 project initialized on DDEV and Cloudways
- base.twig layout built with navy header, footer, nav
- cite-article.twig partial built (Chicago/MLA/APA tabs + copy button)
- search-form.twig partial built
- CSS/JS Mutagen workaround discovered and implemented: assets moved to templates/assets/ as Twig files with content-type headers
- layout.css built: sticky navy header, 2-col article layout, responsive grid, lightbox, footer
- main.css built: typography, sidebar cards, person cards, tags, utility bar, TTS controls
- persons/_entry.twig built — all fields including family relationships, organizations, events, articles
- persons/index.twig built — era filter sidebar + person grid
- 33 Person records imported via persons_v3_batch1/2/3.php on DDEV
- Person titles corrected after import used full legal names instead of WP short names
- featuredImage field volume source fixed and added to Organization entry type layout
- Organization titleFormat fixed
- PRIMARY_SITE_URL updated to https:// in .env
- orgs_import_v2.php created and committed
- project-config/write run and committed after schema changes
- **Note:** Acosta parent/child relationship wired locally only — needs Cloudways
