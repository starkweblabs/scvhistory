# SCVHistory.com — Master Build Plan

This file is public. It lives at github.com/starkweblabs/scvhistory.
Do not put sensitive data, credentials, or private content here.

---

## Session Start — Paste This Into Every New Chat

You are working on SCVHistory.com, a Craft CMS 5 digital archive project for Santa Clarita Valley history. Before doing anything else, fetch and read these three files from GitHub: https://raw.githubusercontent.com/starkweblabs/scvhistory/main/BUILDPLAN.md and https://raw.githubusercontent.com/starkweblabs/scvhistory/main/CHANGELOG.md and https://raw.githubusercontent.com/starkweblabs/scvhistory/main/ERRORLOG.md. After reading all three, summarize what was last completed, current status, and what's next. Then ask what we're working on today.

---

## How to Update These Files

Adding to the queue: Tell Claude what to add — it generates an updated BUILDPLAN.md to download and commit.
Logging a bug: Tell Claude the error — it updates ERRORLOG.md.
End of every session: Paste Claude's CHANGELOG entry at the top of CHANGELOG.md, download any updated files, commit and push.

MAC:
git add BUILDPLAN.md CHANGELOG.md ERRORLOG.md
git commit -m "docs: session log YYYY-MM-DD"
git push

---

## Project North Star
World-class digital archive of SCV history. Launch: 2027 (30th anniversary). Audience: general public, students, researchers, CSUN post-grads. Goal: award-winning design, academic credibility, community adoption.

---

## Environments

Local (DDEV): https://scvhistory.ddev.site — Code only
Cloudways: phpstack-676057-6346692.cloudwaysapps.com — Content + live testing
Git: github.com/starkweblabs/scvhistory main — Source of truth

Workflow rule: Code = local to git to Cloudways. Content = directly to Cloudways.
Auto-deploy: GitHub Action (.github/workflows/deploy.yml) SSHes into Cloudways on every push to main.

Cloudways Git Fix (if needed):
git config --global --add safe.directory /mnt/BLOCKSTORAGE/home/676057.cloudwaysapps.com/ufppzhwvbk/public_html

---

## Design System
Navy #1a2744, Gold #b8860b, Cream #faf6ef, Warm Gray #6b6560
Headings: Cormorant Garamond, Body/UI: Inter
CSS/JS: served via templates/assets/ as Twig templates (Mutagen workaround)
Content-type headers set in .twig files: {% header 'Content-Type: text/css' %}

---

## Entry Types (Craft CMS)

| Section | Handle | Type | Template |
|---|---|---|---|
| Persons | persons | Channel | persons/_entry — LIVE |
| Organizations | organizations | Channel | organizations/_entry — LIVE |
| Places | places | Channel | places/_entry — NOT BUILT |
| Groups | groups | Channel | _entries/groups — NOT BUILT |
| Events | events | Channel | _entries/events — NOT BUILT |
| Articles | articles | Channel | _entries/articles — NOT BUILT |
| Collections | collections | Structure | _entries/collections — NOT BUILT |
| Obituaries | obituaries | Channel | _entries/obituaries — NOT BUILT |
| Military Profiles | militaryProfiles | Channel | _entries/militaryProfiles — NOT BUILT |

---

## Phase 1 — Core Templates (Current)

Priority: Get all main content types rendering on Cloudways.

### Content Status
Persons: 33 — Local YES (untitled locally), Cloudways YES
Organizations: 14 — Local NO, Cloudways YES
Places: 0 — Local NO, Cloudways NO
Groups: 0 — Local NO, Cloudways NO

### Template Status
_layouts/base.twig — LIVE
_partials/cite-article.twig — LIVE
_partials/search-form.twig — LIVE
persons/_entry.twig — LIVE
persons/index.twig — LIVE
organizations/_entry.twig — LIVE
organizations/index.twig — NOT BUILT
places/_entry.twig — NOT BUILT
places/index.twig — NOT BUILT
Homepage — NOT BUILT
Search results — NOT BUILT

### Queue (in order)
- [ ] Pull Cloudways DB to DDEV local — fixes untitled entries, enables real local development
- [ ] Fix images on Cloudways — featuredImage field empty on org entries
- [ ] Build organizations/index.twig
- [ ] Run places_import_v2.php on Cloudways
- [ ] Build places/_entry.twig and places/index.twig
- [ ] Upgrade persons/index.twig — last-name alpha sort + sidebar filters
- [ ] Wire Acosta parent/child on Cloudways
- [ ] Build Search results page (whole-archive scope, tabbed by content type)
- [ ] Build Homepage with Recently Added strip (4-6 cards)
- [ ] Build "What's New" page — Site Updates (admin posts) + Recently Added (auto-query)
- [ ] Build "Live Tech Updates" page — public log of build progress
- [ ] Add "What's New" link to footer nav
- [ ] Sort out SEOmatic trial licensing
- [ ] README.md in repo

---

## Phase 2 — Archive.org Migration + Large File Strategy

Priority: Preserve legacy site permanently and reduce Cloudways hosting load.

- [ ] Complete mirror of legacy scvhistory.com to Cloudways
- [ ] Strip non-essential code from mirror
- [ ] Push clean static version to Archive.org as permanent record
- [ ] Craft site becomes live canonical URL at scvhistory.com
- [ ] Implement Archive.org CDN strategy — high-res photos, PDFs, audio reference Archive.org URLs. Craft asset fields support external URLs.
- [ ] Document Archive.org item structure and URL pattern for team reference
- [ ] Build Twig helper for generating Archive.org embed URLs from asset records

---

## Phase 3 — API + Flutter App

Priority: Make the archive connectable to academic institutions and a mobile app.

- [ ] Enable and configure Craft GraphQL API (already installed — visible in CP)
- [ ] Document public GraphQL endpoints — this is the foundation for both the Flutter app and academic integrations
- [ ] Build /api documentation page on the site
- [ ] Add COinS metadata to all entry templates — invisible structured citations that Zotero, Mendeley, and other reference managers pick up automatically
- [ ] Investigate IIIF image protocol — standard for academic image sharing, allows other institutions to embed SCV photos
- [ ] Build Flutter app against GraphQL API — browse entries, search, save articles, read offline. Flutter queries Craft GraphQL natively.
- [ ] CSUN partnership page — explains the archive as a model digital humanities project, how to cite, how to contribute
- [ ] Explore data export formats (CSV, JSON) for bulk researcher access

---

## Phase 4 — Search + Popularity + Discovery

Priority: Make finding things fast, accurate, and genuinely useful.

- [ ] Implement Algolia search — best-in-class, generous free tier, works with Craft. Instant results, typo tolerance, faceted filtering by era/neighborhood/content type. Far superior to Craft native search.
- [ ] Add view counter field to all entry types — lightweight Ajax increment on page load, stored as Number field in Craft
- [ ] Build "Most Viewed" queries — populate popular entries on homepage, index pages, and sidebar
- [ ] Track search term frequency — log what people search for, informs content priorities
- [ ] Build contextual discovery prompts on every entry:
    - "Explore this era" on era tags
    - "Find related people" on place and org entries
    - "Read the primary source" linking to Archive.org documents
    - "Share this record" using native Web Share API
- [ ] DECISION NEEDED: AI assistant feature — "Ask about this record" powered by Claude API. Users ask questions about entry content. Strong CSUN differentiator. Evaluate cost and scope.

---

## Phase 5 — Accessibility + ElevenLabs TTS

Priority: Real accessibility baked in, not retrofitted. Professional voice quality.

- [ ] Accessibility standards added to every template build checklist NOW — semantic HTML, ARIA labels, keyboard navigation, focus management, color contrast ratios. Not a retrofit — built in from the start.
- [ ] Replace browser speechSynthesis TTS with ElevenLabs API — better voice quality, same Listen button UI. API key in .env, Twig template passes text to endpoint, returns audio stream. Evaluate per-character pricing for archive scale.
- [ ] Full keyboard navigation audit
- [ ] Screen reader testing (VoiceOver, NVDA)
- [ ] WCAG 2.1 AA compliance — required for academic credibility and public funding eligibility
- [ ] Print stylesheet — dedicated print CSS for archival-quality printed pages

---

## Phase 6 — User Accounts + Community

Priority: Community ownership and long-term sustainability.

- [ ] User accounts — saved articles, reading history, personal collections (Craft has native user system)
- [ ] Timeline visualization — interactive era-based timeline for homepage and dedicated page
- [ ] Photo submission workflow — community members submit photos with metadata
- [ ] Corrections/additions form — flag errors or contribute information
- [ ] Oral history section — audio recordings and transcripts, ties into SCVTV archive
- [ ] Newsletter integration — announce new content additions
- [ ] Spanish language support — bilingual content appropriate given SCV history
- [ ] Dark mode
- [ ] GitHub Issues + Project board for public task tracking

---

## Open Technical Questions
- [ ] Confirm articleOrganizations field handle on Articles section for org reverse-lookup
- [ ] Algolia vs Meilisearch — Algolia recommended for ease, Meilisearch for self-hosted/open source
- [ ] ElevenLabs pricing — confirm per-character cost at archive scale before committing
- [ ] AI assistant feature — evaluate Claude API cost and scope for "Ask about this record"
- [ ] IIIF — evaluate server requirements

---

## Decisions Log
2025 — Pivoted WordPress to Craft CMS 5 — Better structured content
2025 — CSS/JS via templates/assets/ Twig files — Mutagen workaround
2026-04-13 — 33 Person records imported, titles corrected
2026-04-13 — persons/index.twig built with era filter and person grid
2026-04-14 — Local = code only, Cloudways = content + testing
2026-04-14 — Repo made public — BUILDPLAN and CHANGELOG are public transparency assets
2026-04-14 — Auto-deploy via GitHub Action using SSH password auth
2026-04-14 — CRAFT_ALLOW_ADMIN_CHANGES=true added to Cloudways .env
2026-04-14 — Org section template path fixed to organizations/_entry
2026-04-14 — All 14 org titles fixed — were null due to circular titleFormat reference

---

## Key Technical Notes
- Use php craft exec not php craft eval (does not exist in Craft 5)
- Craft 5: use Craft::app->entries not Craft::app->sections
- Never edit config files via CLI append/cat — causes corruption
- CSS/JS must be in templates/assets/ not web/assets/ — Mutagen does not sync web/assets
- Content-type headers required in .twig asset files
- PRIMARY_SITE_URL must be https:// in .env
- CRAFT_ALLOW_ADMIN_CHANGES=true required in Cloudways .env to save section settings
- ddev craft clear-caches/all after template changes locally
- Git merge editor opens vim — type :wq to save and exit
- To open .md files in TextEdit: open -a TextEdit filename.md

---

## Import Scripts on Cloudways (public_html root)
persons_import.php, persons_import_v2.php, persons_v3_batch1/2/3.php
orgs_import.php, orgs_import_v2.php
places_import.php, places_import_v2.php

---

## Phase 7 — Legitimacy & Authority

Priority: Make SCVHistory.com a genuinely authoritative academic resource, not just a website.

### Legal & Identification
- [ ] Apply for ISSN through Library of Congress — free, qualifies SCVHistory.com as a citable serial publication, essential for academic databases
- [ ] Register DOIs through CrossRef for major articles and collections — small annual fee, makes individual articles permanently citable in academic papers
- [ ] Publish Creative Commons license — CC BY-NC-SA recommended. Free to use with attribution, non-commercial, share-alike. Removes legal uncertainty for researchers and schools.
- [ ] Permanent URLs policy — document that entry slugs are permanent. Configure Craft redirects for any that change. Researchers cite URLs — a broken link destroys credibility years later.

### Metadata & Discoverability
- [ ] Implement Schema.org structured data on all entry templates — Person, Place, Organization, HistoricalEvent types. Google treats this as authoritative structured data. Major SEO and credibility signal.
- [ ] Implement Dublin Core metadata in page head — standard academic metadata format, picked up by academic databases and reference managers
- [ ] Sitemap configuration in SEOmatic — ensure all entry types are indexed correctly
- [ ] robots.txt — allow academic crawlers, configure correctly

### Editorial Standards
- [ ] Write and publish Editorial Standards page — how content is verified, sourced, and corrected. Leon's journalism background makes this credible. Transforms the site from a website into a reference source.
- [ ] Write and publish Corrections Policy page — how errors are reported and corrected, with public correction log
- [ ] Add primary source citations to every entry — linked citations to original documents, newspapers, deeds, census records. Where documents live on Archive.org, link directly.
- [ ] Confidence scoring on historical claims — surface uncertainty levels on entries. "Date approximate — based on census records" vs "Date confirmed — primary source." No other regional archive does this.
- [ ] Version history on entries — surface "Last revised" date on all entries. Craft tracks revisions natively. Shows intellectual honesty.

### Institutional Credibility
- [ ] Advisory board page — even two or three CSUN history faculty listed as advisors transforms perception. Formal advisory board signals institutional legitimacy.
- [ ] Leon Worden credentials page — byline, journalism awards, Signal history, SCVTV role. The archive's credibility is inseparable from his credibility.
- [ ] About page expansion — mission statement, history of the archive, founding date evidence (1997 internal file evidence vs 2000 domain registration)
- [ ] Press and citations page — track where SCVHistory.com has been cited, quoted, or referenced

### Knowledge Graph & Intelligence
- [ ] Visual relationship map on each entry — shows how the entry connects to the rest of the archive. People to places to organizations to events. No other regional archive has this.
- [ ] Confidence scoring system — field on each entry for editorial confidence level with sourcing notes
- [ ] Change detection on legacy content — as Archive.org mirrors grow, flag when source documents change or disappear. Protects the archive's citations.
- [ ] "On this day in SCV history" feature — daily auto-generated content based on event dates, birth dates, death dates in the archive

