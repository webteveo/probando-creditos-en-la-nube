# Sitio PHP tal cual, sobre Apache (respeta el .htaccess del proyecto)
FROM php:8.3-apache

RUN a2enmod rewrite headers expires deflate \
 && sed -ri 's!AllowOverride None!AllowOverride All!' /etc/apache2/apache2.conf \
 # Detrás del proxy HTTPS del hosting: que PHP vea $_SERVER['HTTPS'] = 'on'
 && printf 'SetEnvIf X-Forwarded-Proto "^https$" HTTPS=on\nServerName localhost\n' > /etc/apache2/conf-enabled/proxy-https.conf \
 && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html
COPY . .
RUN mkdir -p data/metrics && chown -R www-data:www-data data

# El hosting indica el puerto en $PORT (Render usa 10000); por defecto 80
CMD sed -i "s/Listen 80$/Listen ${PORT:-80}/" /etc/apache2/ports.conf \
 && sed -i "s/:80>/:${PORT:-80}>/" /etc/apache2/sites-enabled/000-default.conf \
 && exec apache2-foreground
