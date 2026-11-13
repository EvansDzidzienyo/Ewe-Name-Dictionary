# Ewe Name Dictionary

A small PHP application for looking up a limited set of Ewe names and the meanings recorded for them in this project.

## Current scope

- Searches a fixed list of 14 names.
- Accepts case-insensitive name input.
- Validates submitted input on the server (3–20 letters).
- Escapes user-provided text before rendering it in HTML.
- Displays a clear message when a name is not in the current list.

The meanings are retained from the original project. They have **not** been independently checked against an authoritative Ewe language source, so this repository should be treated as a small demonstration rather than a comprehensive or authoritative dictionary.

## Technology

- PHP 8+
- HTML
- CSS

There is no database dependency in the current implementation.

## Run locally

1. Install PHP 8+ or XAMPP.
2. Clone this repository into your local web server's document root (for XAMPP, this is usually the `htdocs` directory).
3. Start Apache.
4. Open `http://localhost/Ewe-Name-Dictionary/second.php` in your browser.

You can also run PHP's built-in development server from the repository directory:

```bash
php -S localhost:8000
```

Then visit `http://localhost:8000/second.php`.

## Run tests

```bash
php tests/name_lookup_test.php
php -l second.php
php -l name_lookup.php
```

GitHub Actions runs the syntax checks and lookup tests on pushes and pull requests.

## Project structure

- `second.php` — form, request validation, and result display.
- `name_lookup.php` — fixed name-to-meaning lookup function.
- `tests/name_lookup_test.php` — basic lookup tests.
- `page.css`, `inputs.css` — page styling.

## Limitations and possible next steps

- The list is small and manually maintained.
- Name meanings, spelling variants, tone/diacritics, and contextual interpretations need review by fluent Ewe speakers or reliable linguistic references.
- The application does not currently support user contributions, search suggestions, or a database.
- A future expansion should add documented sources and a review process for each entry before describing the project as a reliable dictionary.
