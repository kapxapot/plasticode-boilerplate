# Plasticode Boilerplate 0.2

Basic site built on [Plasticode](https://github.com/kapxapot/plasticode).

## Installation

0. Prerequisites: `PHP 7.2+`, `DB` (e.g. MySQL).

1. Load the source code.

2. Create a new MySQL database with `utf8_general_ci` encoding.

3. Create `.env` file from `.env.example`.

Fill in the database settings (host, db name, user, password).

Customize the path. For example, if the site's path on the local server will be `/boilerplate`, you should set:

- ROOT_PATH="**/boilerplate**"
- PLASTICODE_PUBLIC_PATH="/**boilerplate**/vendor/kapxapot/plasticode/public/"
- SITE_PUBLIC_PATH="/**boilerplate**/public/"

4. Add redirect to your web server.

In case of Apache you should add to `.htaccess`:

```
RewriteEngine On
RewriteBase /
RewriteRule ^boilerplate boilerplate/public/ [L,QSA,NC]
```

5. Run `composer install` in the project's root folder.

This will install and update all required PHP libraries (Plasticode first of all).

6. Run `vendor/bin/phinx migrate` in the project's root folder.

This will create the tables in the DB and create a default admin user with login "admin" and password "admin" (you can change the password in the Admin UI (`/admin`) after the installation is finished).

7. Open the browser and navigate to your site (http://localhost/boilerplate).
