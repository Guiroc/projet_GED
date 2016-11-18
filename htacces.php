RewriteEngine on
RewriteCond {REQUES_FILENAME} !-d
RewriteCond {REQUES_FILENAME} !-f
RewriteRule ^([a-zA-Z0-9\-\_\/].*)$ index.php=$1