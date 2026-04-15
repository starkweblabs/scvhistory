# SCVHistory.com — Error Log

## Open Errors
None.

## Resolved Errors

| Date | Context | Error | Resolution |
|---|---|---|---|
| 2026-04-14 | DDEV/Cloudways | `php craft eval` unknown command | Use `php craft exec` |
| 2026-04-14 | DDEV field lookup | `craft\console\Application::sections` unknown property | Use `Craft::$app->entries` in Craft 5 |
| 2025 | WordPress | functions.php corruption | Never edit config via CLI append/cat |

## Patterns to Avoid
- Never use `php craft eval`
- Never use `Craft::$app->sections` in Craft 5
- Never edit config files via CLI append/cat
- Never assume a file exists unless confirmed
