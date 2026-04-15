# SCVHistory.com — Changelog

> Sessions logged newest-first. Paste new entries at the top.

## 2026-04-14

- Received full project handoff document
- Confirmed `php craft eval` does not exist in Craft 5 — use `php craft exec`
- Confirmed Craft 5 sections API is `Craft::$app->entries` not `Craft::$app->sections`
- Built `organizations/_entry.twig` covering all 23 org fields
- Decided: local = code only, Cloudways = content + testing
- Created session management system: BUILDPLAN, CHANGELOG, ERRORLOG, SESSION_START
- SCVTalk moved to backlog — not an active workstream
- **Next:** Push org entry template to Cloudways, build organizations/index.twig

## 2026-04-14

- Absorbed full project handoff document
- Built organizations/_entry.twig covering all 23 org fields — pushed to GitHub
- Confirmed php craft exec is correct (not php craft eval — does not exist in Craft 5)
- Confirmed Craft 5 uses Craft::$app->entries not Craft::$app->sections
- Established session management system: BUILDPLAN.md, CHANGELOG.md, ERRORLOG.md, SESSION_START.md
- Repo made public to enable GitHub raw file fetching
- Settled workflow: local = code only, Cloudways = content + testing, no content sync needed
- SCVTalk moved to backlog
- Set up Cloudways git pull — use Pull button in Cloudways panel (Deployment via GIT)
- Attempted auto-deploy webhook — blocked by Nginx permissions, abandoned in favor of manual Pull button
- Removed deploy.php from web directory
- Next: Use Cloudways Pull button after each git push. Build organizations/index.twig
