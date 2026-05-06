# forge-sec-scanner-core

`forge-sec-scanner-core` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for scanner simulation kernel, using seeded input scenarios and deterministic summary checks.

## Project Rationale

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Forge Sec Scanner Core Review Notes

Start with `policy width` and `trust boundary`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## Feature Set

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/forge-sec-scanner-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Architecture

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The PHP code keeps the review rule close to the tests.

## Usage

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Test Command

The same command runs the local verification path. The highest-scoring domain case is `recovery` at 224, which lands in `ship`. The most cautious case is `baseline` at 122, which lands in `watch`.

## Next Improvements

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
