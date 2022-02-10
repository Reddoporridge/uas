FROM php:7.4-apache
COPY index.php /var/www/html
COPY count.php /var/www/html
RUN chown www-data:www-data /var/www/html/index.php
RUN chmod 774 /var/www/html/index.php
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

