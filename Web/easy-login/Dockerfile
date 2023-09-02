FROM php:8.0-apache

RUN useradd -m <user>

COPY . /var/www/html

RUN chown -R root:root /var/www && \
    chmod -R 555 /var/www

USER <user>
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
EXPOSE 80
