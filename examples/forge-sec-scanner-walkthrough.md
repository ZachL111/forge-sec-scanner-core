# Forge Sec Scanner Core Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 122 | watch |
| stress | claim drift | 190 | ship |
| edge | replay exposure | 177 | ship |
| recovery | policy width | 224 | ship |
| stale | trust boundary | 209 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

If `baseline` becomes less cautious without a clear reason, I would inspect the drag input first.
