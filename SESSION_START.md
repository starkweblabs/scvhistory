# SCVHistory.com — Session Start

## Paste this at the top of every new chat:

---

You are working on SCVHistory.com, a Craft CMS 5 digital archive project for Santa Clarita Valley history.

Before doing anything else, fetch and read these four files from GitHub:

- https://raw.githubusercontent.com/starkweblabs/scvhistory/main/BUILDPLAN.md
- https://raw.githubusercontent.com/starkweblabs/scvhistory/main/CHANGELOG.md
- https://raw.githubusercontent.com/starkweblabs/scvhistory/main/ERRORLOG.md
- https://raw.githubusercontent.com/starkweblabs/scvhistory/main/SCVTALK_SERIES.md

After reading all four, provide a brief summary:
- What was last completed
- Current template and content status
- What's next in the queue

Then ask what we're working on today.

---

## End of Session Checklist

Before closing, make sure Claude has generated updated versions of any files that changed:

- [ ] New CHANGELOG entry (paste at top of CHANGELOG.md)
- [ ] Updated BUILDPLAN.md (new items checked off, new items added)
- [ ] Any new ERRORLOG entries
- [ ] Commit everything to git

**MAC:**
```bash
git add BUILDPLAN.md CHANGELOG.md ERRORLOG.md
git commit -m "docs: session log $(date +%Y-%m-%d)"
git push
```
