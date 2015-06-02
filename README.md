Stores l10n
================

Web App providing the folllowing features:
* Monitor the state of translation of Firefox web content on Google Play and Apple Appstore
* Public JSON API allowing to extract formatted translations to feed the stores APIs to update Firefox listing copy


Installation
================
1. Clone the repo
2. install dependencies with ```composer install --no-dev```
3. Checkout the translations in a ```locales``` folder  at the root of the cloned repo (```svn co https://svn.mozilla.org/projects/l10n-misc/trunk/googleplay locales```)
4. Point a virtual host to the ```web``` directory
5. copy web/.htaccess-dist to web/.htaccess and change the path of RewriteBase if you installed in a subfolder
6. Set up a cron job to update the svn repository every 15mn
