# IIIF + Archive.org + Annotations — Dedicated Session Prompt

*Save this for a focused IIIF session. Paste into a new chat after reading BUILDPLAN + CHANGELOG + DATA_MODEL.*

---

## Context

SCVHistory.com is a Craft CMS 5 digital archive. We have finalized:
- Yearbook, Photograph, and Annotation entry types (see DATA_MODEL.md)
- Controlled taxonomies: subjectTags, placeType, groupType, confidenceLevel, conflict, etc.
- IIIF fields on media entries: iiifManifestUrl, iiifHostedOnArchiveOrg, iiifArchiveOrgIdentifier
- Large files hosted on Archive.org; Craft owns all metadata, rights, entity links, and presentation logic
- Import pipeline: entity-first extraction via Claude API, then article import with auto-linked relations

## The Question

How should we model IIIF integration, Web Annotations, and bounding-box tagging given:

1. **Manifests as derived outputs** — confirmed: Manifests generated on-the-fly from Craft entities, not stored. Build the Craft template at templates/iiif/manifest.twig that outputs IIIF Presentation API 3.0 JSON-LD. What does this template need to query from Craft, and what is the minimal viable Manifest structure for yearbooks vs. photographs?

2. **Yearbook entity linking** — how do we connect individual IIIF Canvas pages (yearbook pages) to yearbookStudents (Person entries) and subjectTags taxonomy terms so annotations appear as clickable overlays inside the Mirador 3 viewer?

3. **Photograph bounding-box annotations** — how do we model the Annotation entry type fields (annotationTarget, annotationRegion xywh, annotatedPerson, recognitionConfidence, recognitionMethod, annotationConfirmed) so they generate valid IIIF Web Annotations with correct @context and motivation values?

4. **Archive.org reference pattern** — we store iiifArchiveOrgIdentifier (e.g. "hart-high-yearbook-1965"). How do we construct all needed URLs from this single identifier: base image, IIIF tiles, OCR text download, Manifest URL? What edge cases exist with Archive.org's IIIF implementation?

5. **OCR entity extraction pipeline** — Archive.org generates OCR text (djvu.xml format). Walk through the exact pipeline: download OCR → parse page-by-page → send to Claude API for entity extraction → create Annotation records with page coordinates. What does the Claude API prompt look like and how do we map OCR coordinates to IIIF canvas coordinates?

6. **Taxonomy inside annotations** — how do we enforce controlled vocabulary (subjectTags, confidenceLevel) inside Annotation records? Should annotations carry their own taxonomy assignments or inherit from the parent Yearbook/Photograph entry?

7. **Mirador 3 embed** — what is the minimal Craft template code to embed Mirador 3, point it at an Archive.org Manifest, and inject our custom Annotations from Craft?

8. **WCAG inside IIIF** — how do we populate Manifest label, summary, metadata, and requiredStatement fields from Craft entry data to meet WCAG 2.2 AA requirements for screen readers?

9. **Open-source repeatability** — how do we package the IIIF Manifest generator template and Annotation pipeline so other archives can use them with their own Archive.org collections and Craft installs?

## Goal

Clean, performant, academically rigorous IIIF layer that enhances the core data model without complicating it. Full editorial control. Native Craft integration. Museum-grade reader experience.

