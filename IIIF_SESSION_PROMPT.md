# IIIF + Archive.org + Annotations + LOD — Dedicated Session Prompt

*Save this for a focused IIIF session. Paste into a new chat after reading BUILDPLAN + CHANGELOG + DATA_MODEL.*
*This prompt supersedes the earlier IIIF_SESSION_PROMPT.md — use this version.*

---

## Context

SCVHistory.com is a Craft CMS 5 digital archive with:
- Finalized entry types: Yearbook, Photograph, Annotation (see DATA_MODEL.md)
- Controlled taxonomies with Wikidata/AAT URIs (see taxonomy-import/ JSON files)
- LOD alignment: Schema.org + Wikidata sameAs + Dublin Core on all entries
- IIIF fields on media entries: iiifManifestUrl, iiifHostedOnArchiveOrg, iiifArchiveOrgIdentifier
- Large files hosted on Archive.org; Craft owns all metadata, rights, entity links, presentation logic
- Import pipeline: entity-first Claude API extraction → Craft import with auto-linked relations
- Annotation entry type: annotationTarget, annotationRegion (xywh), annotatedPerson/Place/Org, recognitionConfidence, recognitionMethod, annotationConfirmed

## The Questions

**1. Manifests as derived outputs**
Confirmed architecture: IIIF Manifests generated on-the-fly from Craft entities, never stored.
Build the Craft template at templates/iiif/manifest.twig outputting IIIF Presentation API 3.0 JSON-LD.
What does this template need to query from Craft?
What is the minimal viable Manifest structure for yearbooks vs photographs?
How do we embed LOD triples (schema:Person, dcterms:creator, cc:license) inside the Manifest?

**2. Archive.org URL construction**
We store iiifArchiveOrgIdentifier (e.g. "hart-high-yearbook-1965").
Walk through all URLs constructable from this single identifier:
- Base image URL
- IIIF tile URL (per page)
- OCR text download (djvu.xml)
- Manifest URL
What edge cases exist with Archive.org IIIF implementation?

**3. Yearbook entity linking**
How do we link individual IIIF Canvas pages to:
- yearbookStudents (Person entries with sameAs Wikidata QIDs)
- subjectTags taxonomy terms (with AAT/LCSH URIs)
So annotations appear as clickable overlays in Mirador 3 with resolvable LOD links?

**4. Photograph bounding-box annotations**
How do Annotation entry fields (annotationTarget, annotationRegion, annotatedPerson, recognitionConfidence, annotationConfirmed) generate valid IIIF Web Annotations with:
- Correct @context and motivation values
- sameAs Wikidata QIDs on the annotated entity
- confidenceLevel taxonomy applied
- Cultural sensitivity: Indigenous content flagged, never auto-published

**5. OCR entity extraction pipeline**
Archive.org generates OCR (djvu.xml). Walk through exact pipeline:
- Download OCR
- Parse page by page
- Send to Claude API for entity extraction
- Create Annotation records with page coordinates
What does the Claude API prompt look like?
How do we map OCR coordinates to IIIF canvas coordinates?

**6. LOD inside annotations**
How do we enforce controlled vocabulary inside Annotation records?
Should annotations carry their own taxonomy assignments or inherit from parent entry?
How do we add sameAs and externalSource to the generated Web Annotation JSON?

**7. Mirador 3 embed**
Minimal Craft template code to:
- Embed Mirador 3
- Point at Archive.org Manifest
- Inject custom Craft Annotations
- Surface LOD links in the viewer UI

**8. JSON-LD in templates**
What does the Schema.org + Dublin Core JSON-LD block look like for:
- persons/_entry.twig (schema:Person + foaf:Person + sameAs Wikidata)
- photographs/_entry.twig (schema:ImageObject + dcterms)
- yearbooks/_entry.twig (schema:Book + IIIF reference)

**9. WCAG inside IIIF**
How do we populate Manifest label, summary, metadata, requiredStatement from Craft entry data for WCAG 2.2 AA screen reader compliance?

**10. Open-source repeatability**
What does the starter kit ship for IIIF/LOD?
- Craft Manifest generator template
- JSON-LD context file
- Wikidata reconciliation script
- Annotation pipeline scripts

## Goal

Clean, performant, academically rigorous IIIF + LOD layer.
Full editorial control. Native Craft integration.
Museum-grade reader experience.
Every annotation resolves to a real URI in the global knowledge graph.

