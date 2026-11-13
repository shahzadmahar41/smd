# Copilot instructions

## Project shape

This is a small, procedural PHP application backed by MySQL through `mysqli`. `conn.php` opens the `smd` database on localhost and is included by `insert.php`; the connection script also prints a connection-status message. The contact fields referenced by the insert script are `name`, `phno`, and `email`.

The root-level `get.php`, `update.php`, and `delete.php` files are currently empty. Check their implementation before assuming any CRUD behavior exists there. No database schema or setup instructions are checked in.

## Validation

There is no build system or automated test suite configured in the repository. PHP's CLI syntax checker is the available per-file check:

```powershell
php -l insert.php
```

Replace `insert.php` with the PHP file being changed to check one file. To check all root-level PHP files:

```powershell
Get-ChildItem -Filter *.php | ForEach-Object { php -l $_.FullName }
```

## Existing implementation conventions

- Keep the current plain-PHP, procedural structure and use `mysqli` for database access.
- Put shared database connection setup in `conn.php`; endpoint scripts include it when they need a connection.
- Contact data is referred to with the field names `name`, `phno`, and `email`. Confirm the actual database schema before changing queries or adding fields.
