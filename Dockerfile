FROM baculaweb/bacula-web:v9.8.0

COPY ./docker/config.php /var/www/html/application/config/config.php
