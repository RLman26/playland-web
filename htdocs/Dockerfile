# Použij oficiální PHP image s Apache
FROM php:8.2-apache

# Povolit mod_rewrite
RUN a2enmod rewrite

# Nastav pracovní adresář
WORKDIR /var/www/html

# Zkopíruj všechny soubory do kontejneru
COPY . /var/www/html/

# Expose port 10000
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
