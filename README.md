# Plasticode Boilerplate 0.2

Basic site, built on [Plasticode](https://github.com/kapxapot/plasticode).

## Installation

0. Prerequisites: `PHP 7.2+`, `DB` (e.g. MySQL).

1. Load the source code.

2. Create `.env` file from `.env.example`.

Fill in the database settings (host, db name, user, password) and other settings (e.g., `ROOT_PATH`).

3. Run `composer update`.

This will install and update all required PHP libraries (Plasticode first of all).

4. Run `vendor/bin/phinx migrate`.

This will create the tables in the DB and create a default admin user with login "admin" and password "admin" (you can change the password in the Admin UI (`/admin`) after the installation is finished).
