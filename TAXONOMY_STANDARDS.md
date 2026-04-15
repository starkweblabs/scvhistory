# SCVHistory.com — Taxonomy Standards

This document governs how taxonomies are created, maintained, and governed across the SCVHistory.com archive.
It feeds directly into the public /about/taxonomy-standards page.
Last updated: 2026-04-15

---

## Foundational Principles

### User-Centered and Asset-Driven

Primary audiences: general public, K-12 students, CSUN researchers, genealogists, Leon's long-time readers.
Design taxonomies around real questions users ask:
- "What happened in Newhall in the 1920s?"
- "Show me everything about oil-industry people."
- "Who are all the politicians from Santa Clarita?"

Best practice: Run a card-sorting exercise with Leon and 3-5 power users before finalizing terms.
Review annually with a sample of actual user search queries from Algolia analytics.

### Controlled Vocabulary vs. Folksonomy

Controlled (preferred for historical work): Pre-approved terms with scope notes, hierarchies, and sources.
Ensures consistency — prevents "oil industry" vs. "oil-industry" vs. "petroleum" fragmentation.

Hybrid approach (recommended for SCVHistory):
- Core controlled terms: editorially approved, locked
- Community tags: submitted via contributor portal, enter editorial review queue
- Approved community terms promoted to controlled vocabulary over time

Pure folksonomy creates noise. Pure control stifles discovery. The hybrid respects both.

### Hierarchical and Faceted Structure

Use broader/narrower relationships where Craft Categories support them.
Enable faceted navigation: era + neighborhood + subjectTags — users slice data progressively.

Example hierarchy:
Historical Era (broad) → Historical Period (decades) → specificYear (granular)

---

## Recommended Standards — Map to These

Leverage established authorities for interoperability and academic credibility.
Store URIs alongside terms for future Linked Open Data / GraphQL API readiness.

| Category | Recommended Standard | How to Apply | Notes |
|---|---|---|---|
| Historical Era | Getty AAT Chronologies + LCSH temporal headings | Keep 9 SCV eras as top-level; add AAT terms as aliases | Avoid Eurocentric bias — consult Tataviam reps for pre-1769 terms (PNAAM) |
| Historical Period | LCSH chronological subdivisions + ISO 8601 | Decade buckets + specificYear for precision | Handle fuzzy dates with confidenceLevel |
| Neighborhood / Place Type | Getty TGN + local SCV names | placeType + neighborhood; store TGN IDs where available | Audit missing neighborhoods with Leon |
| Subject Tags | LCSH + Getty AAT (topical) + FAST | Map subjectTags list to LCSH/AAT URIs | Add scope notes; review annually for outdated language |
| Org / Group Subtypes | AAT + Nomenclature 4.0 (AASLH) | orgSubtype and groupType | Ranchos = Organization; cultural groups need Indigenous consultation |
| Confidence Level | Custom (4 levels) + DACS alignment | Already in model | Document in editorial standards page |
| Disaster / Conflict / Water | LCSH + AAT | New taxonomies match well | Conditional fields keep UI clean |

Sources to cite in documentation:
- Getty Vocabularies (AAT/TGN/ULAN): vocab.getty.edu
- LCSH (Library of Congress Subject Headings): id.loc.gov
- Nomenclature 4.0 (AASLH): aaslh.org
- CCO (Cataloging Cultural Objects)
- DACS (Describing Archives: A Content Standard)
- CARE Principles for Indigenous Data Governance: gida-global.org
- PNAAM (Protocols for Native American Archival Materials): fnarchivesresources.org

---

## Implementation in Craft CMS

### Creating Taxonomy Terms

For every term in every taxonomy, add in Craft CP:
- Title: human-readable label
- Slug: lowercase-hyphenated
- Description field: scope note (what the term means, what it includes/excludes)

Add two additional fields to every Category field layout:
- `termSource`: Plain Text — "LCSH", "AAT", "Local-SCV", "Tataviam-consulted"
- `termUri`: URL — e.g. https://id.loc.gov/authorities/subjects/sh85012345

### Field Conditions

Conditional fields use Craft 5 layout editor field conditions.
Never nest conditional groups — add each dependent field individually, set condition on each.

### Auto-Tagging

Claude Layer 1 entity extraction suggests terms from controlled list only.
Never suggest terms not in the controlled vocabulary.
Editor always reviews and approves suggested tags before they are saved.

### Faceted Search

Every taxonomy must be configured as a facet in Algolia/Scout (Phase 4).
Limit top-level terms to fewer than 50 per taxonomy for UI sanity.

### Linked Data Readiness

Store `termUri` alongside every term from the start.
Future GraphQL export will include URIs for each taxonomy assignment.
This enables interoperability with Digital Public Library of America, Europeana, and institutional repositories.

---

## Cultural Sensitivity — Indigenous and Marginalized Communities

### Tataviam and Indigenous Content

Follow PNAAM (Protocols for Native American Archival Materials) for all Indigenous content.
Follow CARE Principles (Collective Benefit, Authority to Control, Responsibility, Ethics) for Indigenous data.

Specific rules:
- Use Tataviam preferred self-designation — never colonial or outsider labels
- Develop Indigenous taxonomy terms in consultation with Tataviam community representatives before finalizing
- For sensitive site locations (burial grounds, sacred sites): describe without publishing exact coordinates
- Link to living Tataviam Nation community on all relevant Group and Place entries
- isLivingPerson flag extended to cultural groups: suppress certain taxonomy tags for living community members where appropriate

### Evolving Language

Terms change over time. Historical terms that were acceptable become harmful.
Track term history — AAT does this well; mirror the approach locally.
Annual taxonomy audit includes review for outdated or harmful language.
Deprecated terms are retained in the database for historical accuracy but marked as deprecated, not used for new entries.

### Disambiguation

"Hart" = William S. Hart or Hart High School.
Use qualifiers: "Hart, William S. (actor)" vs. "Hart High School (Newhall)"
Entity linking Layer 2 tooltips handle disambiguation at the reader level.

---

## Governance

**Owner:** Leon Worden (founder) with future editorial board input.
**Process:** New terms require: justification, scope note, source citation, and Leon approval.
**Community suggestions:** Enter review queue via contributor portal. Reviewed within 30 days.
**Annual audit:** One session per year. Review for: deprecated terms, missing terms, harmful language, new community needs.
**Versioning:** Craft native entry revisions + "Last taxonomy review" date on global settings.
**Documentation:** Taxonomy decisions published on public /about/taxonomy-standards page and /about/data-map.

---

## Public-Facing Page Copy

*Use this copy for the public /about/taxonomy-standards page:*

---

SCVHistory.com uses structured, controlled vocabularies (taxonomies) to organize our archive.
These standards ensure consistency, discoverability, academic credibility, and cultural respect.

**Purpose**
Our taxonomies power search, On This Day, entity linking, IIIF annotations, and the open-source starter kit we are building for other local-history archives. They turn raw historical records into a rich, interconnected knowledge graph.

**Core Principles**
Controlled yet community-informed: All terms are editorially approved, but we welcome community suggestions through the contributor portal.
Interoperable: Where possible, we align with established standards (Library of Congress Subject Headings, Getty Art and Architecture Thesaurus, Nomenclature 4.0).
Culturally sensitive: Tataviam and Indigenous terms are developed in consultation with community representatives and follow the Protocols for Native American Archival Materials (PNAAM) and CARE Principles.
Transparent: Every term includes a scope note, source, and last-review date.
Versioned: Taxonomies are reviewed annually; deprecated terms are retained for historical accuracy.

**Governance**
Owner: Leon Worden (founder) with future editorial board input.
Process: New terms require justification, scope note, and source. Community suggestions are reviewed within 30 days.
Harmful language: We commit to regular audits and respectful updates.
Open source: The neutral core of every taxonomy ships with our public starter kit.

Last reviewed: April 15, 2026
Questions or suggestions? Use the Corrections / Additions form or email contact@scvhistory.com.

