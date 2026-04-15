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


---

## Phase 8 — Data Model Refinements

Priority: Get the data model right before content migration scales up. Changes now cost hours. Changes later cost weeks.

### New Entry Types to Add

**Photograph**
Currently photos are assets only. A Photograph entry type makes the photo collection first-class searchable records.
Fields needed: donor code, date taken, photographer, depicted persons (relation), depicted places (relation), depicted organizations (relation), caption, archival filename, original condition, copyright status, archive source.
Why: Leon has 200+ donor prefixes. This is one of the archive's most valuable assets and deserves its own section.

**Document**
Primary source documents — deeds, letters, newspaper clippings, maps, census records, court records.
Fields needed: document type, date, source institution, transcription (body), related persons, related places, related organizations, Archive.org URL, copyright/access status.
Why: This is what separates a historical archive from a history website. Primary sources are the academic credibility core.

**Landmark**
Designated or significant sites — separate from Place.
Fields needed: CHL number, CHL URL, designation date, designation body, current status, preservation notes, related place, related organizations.
Why: CHL fields already exist on Place entries — this signals they need their own section. A landmark is a legal/cultural designation, not just a location.

**Oral History**
Audio and video recordings with transcripts.
Fields needed: interviewee (relation to Person), interviewer, date recorded, duration, topics (taxonomy), transcript (body), media URL, Archive.org URL, collection it belongs to.
Why: Directly tied to SCVTV's archive. Huge academic credibility signal. Preserves voices that would otherwise be lost.

### Taxonomy Additions

**Subject tags**
Thematic taxonomy cutting across eras and content types.
Suggested terms: Gold Rush, Water History, Indigenous History, Railroads, Oil Industry, Film Industry, Agriculture, Architecture, Military History, Politics, Law Enforcement, Education, Religion, Commerce.
Why: Researchers think thematically, not chronologically. "Show me everything about the oil industry" is a common research question.

**Record type** (for Document entries)
Deed, Letter, Map, Newspaper clipping, Court record, Census record, Government document, Photograph, Telegram, Diary.

**Confidence level**
Editorial certainty taxonomy applied to dates, attributions, identifications.
Terms: Confirmed (primary source), Probable (strong secondary evidence), Uncertain (limited evidence), Disputed (conflicting sources).
Why: Scholarly honesty. No other regional archive does this. Huge credibility signal.

**Tataviam and Indigenous taxonomy**
Indigenous history deserves dedicated taxonomy — not folded into general era tags.
Terms: specific villages, tribal bands, cultural practices, significant sites, language terms.
Why: Respectful, accurate treatment of the valley's first peoples. Ideally developed in consultation with Tataviam descendants or representatives.

### Relationship Fixes

**Bidirectional article relationships**
Currently articlesAbout on Person is a one-way reverse lookup. Add explicit subjectPersons, subjectOrganizations, subjectPlaces fields on Article entries that mirror back. Faster queries, cleaner data, easier templating.

**Specific year field**
Keep historicalPeriod decade buckets for filtering but add an optional specificYear plain text field on all entry types. Enables precise date queries alongside era browsing.

**Military Profile merge into Person**
Military Profile is an extension of Person, not a separate entity. A soldier is a person. Merge military fields into Person as a conditional field group triggered by a hasMilitaryService toggle. Eliminates the risk of orphaned Military Profile records with no Person connection.
Note: Requires migration script to merge existing Military Profile records into Person records before deprecating the section.

### Living Project Plan Page

- [ ] Build /about/project page on the Craft site — fetches and renders BUILDPLAN.md from GitHub raw URL, displays as a beautifully designed public page
- [ ] Page auto-updates whenever BUILDPLAN.md is pushed to GitHub — always current
- [ ] Include the data map visualization on this page
- [ ] Add "About This Project" to site navigation
- [ ] This page serves as: public transparency document, CSUN pitch, community update, press reference

### Data Map Page

- [ ] Build /about/data-map page — interactive visualization of how all entry types connect
- [ ] Updates as new entry types are added
- [ ] Explains the knowledge graph concept to non-technical visitors
- [ ] Links each entry type to example records


---

## Immediate Actions (Do This Week — Outside the CMS)

These are not code tasks. They cost nothing and have long-term impact.

- [ ] **ISSN application** — submit at loc.gov/issn. Takes 20 minutes, costs nothing, takes a few weeks to process. Required for academic database listing. Do this now.
- [ ] **Tataviam consultation** — Leon likely has existing community relationships. Reach out before building the Indigenous taxonomy, not after. Respectful, academically correct, and strengthens the CSUN partnership angle significantly.
- [ ] **Schema.org metadata decision** — confirm which Schema.org types to use for each entry type (Person, Place, Organization, Event, Article) and add to every template as we build them. Not a retrofit — build it in now.

---

## Phase 9 — Community, Education & Sustainability

Priority: Make the archive grow beyond what one person can maintain, and ensure it outlives any single individual.

### Contributor Portal
- [ ] Structured submission workflow for descendants, local historians, and community members
- [ ] Form fields for: type of contribution (correction, addition, photo, document), subject entry, description, source, contributor name and contact
- [ ] Review queue in Craft CP — Leon or an editor approves before anything goes live
- [ ] Contributor credit system — approved contributors listed on the entry they improved
- [ ] Why: This is how the archive scales. Leon cannot add everything alone. A structured portal is the difference between a personal project and a community resource.

### Teacher Resources Section
- [ ] Lesson plans organized by grade level and California history standards
- [ ] Primary source packets (documents + photographs + context)
- [ ] Classroom guides tied to specific eras and topics
- [ ] Downloadable PDFs formatted for classroom use
- [ ] Why: Fastest path to school adoption. Gives CSUN education faculty a concrete partnership reason. Makes the archive a curriculum resource, not just a reference.

### Media Kit Page
- [ ] Press-quality photos of the site, Leon, and key archival images
- [ ] Approved descriptions of the project in 50, 100, and 200 word versions
- [ ] Usage guidelines for reproducing content
- [ ] Press contact information
- [ ] Links to any existing coverage
- [ ] Why: One well-placed LA Times or KCRW story changes everything. Make it easy for journalists to cover the archive correctly.

### Annual Report Page
- [ ] Published yearly — what was added, visitor numbers, preservation milestones, partnerships
- [ ] Lives as a page on the site, not a PDF download
- [ ] First edition covers the rebuild itself — the 2027 launch is the story
- [ ] Why: Shows funders, partners, and the community the archive is alive and growing. Pairs with the Live Tech Updates page.

### Oral History — Move Up in Priority
- [ ] URGENT: People who remember pre-incorporation SCV, the old ranches, oil fields, early film industry are in their 70s, 80s, and 90s. Every year without recording is permanent loss.
- [ ] Move Oral History entry type from Phase 6 to Phase 3 alongside the API work
- [ ] Minimum viable version: audio file + transcript + interviewee Person record + date + topics
- [ ] SCVTV already has recording infrastructure — this is a workflow problem, not a technical one
- [ ] Why: Irreplaceable. Cannot be reconstructed. Most urgent preservation gap in the entire project.

### Sustainability & Institutional Permanence
- [ ] **Endowment or funding model** — the archive needs a structure that outlives any single person. Options: SCVTV 501(c)(3) fiscal sponsorship (already exists), university partnership with CSUN, community foundation relationship, grant funding through NEH or California Humanities.
- [ ] **Preservation redundancy partnerships** — Archive.org is one backup. Pursue relationships with Huntington Library, California State Library, or UCLA digital preservation programs. Academic institutions actively seek regional collections to partner with.
- [ ] **Editorial succession plan** — document Leon's methodology, source relationships, and editorial standards so the archive can continue if his direct involvement changes.
- [ ] **Advisory board formation** — even two or three CSUN history or digital humanities faculty changes perception from personal project to institutional resource. Reach out early — faculty partnerships take time.


---

## Phase 10 — Membership, Community Stack & Forum

Priority: Build after Phase 1-3 are complete and the core archive is solid. Flarum forum comes last — nail the site first.

### Recommended Plugin Stack (Add to Craft Now)

These plugins should be evaluated and installed during active development — not at launch.

| Plugin | Purpose | Priority |
|---|---|---|
| Craft Scout | Algolia integration built for Craft — makes search setup dramatically faster | High |
| Craft Blitz | Static page caching — makes site extremely fast without changing templates | High |
| Sprig | Reactive Twig components without writing JavaScript — for save button, karma toggle, filters | High |
| Craft Webhooks | Trigger external services (Flarum notifications, Algolia reindex) when entries are saved | Medium |
| Craft Embedded Assets | Clean Archive.org, YouTube, Vimeo embeds in entry bodies | Medium |

### Membership System (Craft Native)

Craft's native user system is the foundation. No third-party membership plugin needed for core functionality.

- [ ] Configure user registration and login
- [ ] Define user groups: Reader, Contributor, Verified Contributor, Community Historian, Legacy Member, Editor, Admin
- [ ] Add Karma field (Number) to User profile field layout
- [ ] Add custom profile fields: display name, biography, neighborhood, areas of historical interest
- [ ] Build user profile page template
- [ ] Build saved articles system using Craft native favorites — Ajax toggle on every entry
- [ ] Build reading history (optional, privacy-respecting)

### Karma & Reputation System

Points are awarded for contribution quality, not just activity.

| Action | Points |
|---|---|
| Photo submitted and approved | +50 |
| Correction accepted by editor | +25 |
| New entry contribution accepted | +100 |
| Forum post marked helpful | +5 |
| Article saved by 10+ users | +10 to original contributor |
| Account verified with real name | +20 |
| Oral history recording submitted | +75 |

### Membership Tiers

| Tier | Points | Privileges |
|---|---|---|
| Reader | 0 | Browse, save, cite |
| Contributor | 50 | Submit photos and corrections |
| Verified Contributor | 200 | Submit new entry drafts, forum badge |
| Community Historian | 500 | Early access to new sections, credited on entries |
| Legacy Member | 1000 | Advisory input, listed permanently on About page |

Legacy Member tier is intentionally meaningful — serious contributors become part of the archive's own history.

### Request a Correction System

Every entry gets a "Request a Correction" link. Structured, not just an email.

- [ ] Build correction request form — fields: entry URL (auto-populated), type of correction (factual error, missing information, wrong photo, broken link, other), description, source or evidence, submitter name and email (optional)
- [ ] Submissions create a draft in a dedicated Craft section (Corrections queue) visible to editors only
- [ ] Editor reviews, accepts or rejects, edits entry if accepted
- [ ] Submitter receives email notification of outcome if email provided
- [ ] Accepted corrections increment submitter karma if they have an account
- [ ] Accepted corrections logged publicly on the entry as "Revised [date] — community correction"
- [ ] Why: Shows intellectual honesty. Encourages community trust. Feeds the karma system.

### Push Notification System

- [ ] Web push notifications via browser Push API — no app required
- [ ] Notification triggers: new entry in a followed era or neighborhood, correction accepted, new oral history added, "On this day" daily digest
- [ ] User controls: opt in per notification type, manage from profile settings
- [ ] Mobile push via Flutter app when built — same notification service, different delivery channel
- [ ] Recommended service: OneSignal — free tier covers archive scale, has Craft webhook integration
- [ ] Why: Brings users back. Makes the archive feel alive. Researchers get alerted when relevant new content is added.

### Flarum Community Forum

Decision: Implement Flarum AFTER Phase 1-3 are complete and the core archive is solid.

- [ ] Deploy Flarum on subdomain: community.scvhistory.com
- [ ] Configure SSO bridge to Craft — one login for both systems
- [ ] Set up forum categories mirroring archive sections:
    - History Talk (general SCV history discussion)
    - Research Help (academics and researchers helping each other)
    - Corrections and Additions (feeds into editorial review queue)
    - Oral Histories (coordinating recording efforts)
    - Photo Identification (community helping identify unknown people in photos)
    - Site Feedback
- [ ] Karma from Flarum activity feeds back to Craft user profile
- [ ] Style Flarum to match SCVHistory design system (navy, gold, cream, Cormorant Garamond)
- [ ] Why Flarum over Discourse: lighter weight, better aesthetic fit, sufficient for archive community scale, well-documented Craft SSO integration

### Full Stack Architecture

```
Craft CMS (core)
├── Native user system (registration, login, profiles, groups)
├── Karma field on User profile
├── Saved articles (native favorites)
├── Correction request queue (dedicated section)
└── Submission portal (contributor workflow)

Flarum (community.scvhistory.com) — Phase 10
├── SSO bridge to Craft
├── Categories mirror archive sections
├── Karma feeds back to Craft

Push Notifications (OneSignal)
├── Web push (browser)
└── Mobile push (Flutter app)

Flutter App — Phase 3
├── Craft GraphQL API
├── Flarum API
├── Browse, save, submit, notify
└── Offline reading
```

