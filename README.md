# Plasticode Boilerplate 0.2

Basic site built on [Plasticode](https://github.com/kapxapot/plasticode).

## Installation

0. Prerequisites: `PHP 7.2+`, `DB` (e.g. MySQL).

1. Load the source code.

2. Create a new MySQL database with `utf8_general_ci` encoding.

3. Create `.env` file from `.env.example`.

Fill in the database settings (host, db name, user, password) and other settings (namely, `ROOT_PATH`, `PLASTICODE_PUBLIC_PATH` and `SITE_PUBLIC_PATH`).

4. Run `composer install` in the project's root folder.

This will install and update all required PHP libraries (Plasticode first of all).

5. Run `vendor/bin/phinx migrate` in the project's root folder.

This will create the tables in the DB and create a default admin user with login "admin" and password "admin" (you can change the password in the Admin UI (`/admin`) after the installation is finished).

6. Open the browser and navigate to your site.
