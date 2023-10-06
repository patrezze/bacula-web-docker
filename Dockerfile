FROM php:apache

RUN apt-get update \
	&& apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql gettext \
  && rm -rf /var/lib/apt/lists/*

RUN cd /tmp \
  && curl -O -L https://www.bacula-web.org/files/bacula-web.org/downloads/bacula-web-latest.tgz \
  && tar -xzf bacula-web-latest.tgz -C /var/www/html --strip-components 1 \
  && rm /tmp/bacula-web-latest.tgz

COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/config.php /var/www/html/application/config/config.php
COPY ./docker/tsuru.yaml /tsuru.yaml

RUN chown -R www-data: /var/www/html \
  && chmod -R 755 /var/www/html \
  && chmod 775 /var/www/html/application/views/cache \
  && chmod 775 /var/www/html/application/assets/protected

CMD ["apachectl", "-D", "FOREGROUND"]