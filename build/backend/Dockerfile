FROM ubuntu:16.04
MAINTAINER Kalob Taulien <kalob@kalob.io>
LABEL Description="Kalob.io Learn PHP Stack" \
      License="N/A" \
      Usage="Refer to the Makefile" \
      Version="1.0"

ENV TERM=xterm-256color

RUN apt-get update
RUN apt-get install -y python-software-properties software-properties-common
RUN apt-get update && apt-get -qq upgrade

RUN apt-get install -y --force-yes \
      php-dev \
      php-geoip \
      php-imagick \
      php-mbstring \
      php-mcrypt \
      php-mysql \
      php-xdebug \
      build-essential \
      imagemagick \
      ca-certificates \
      apache2 \
      libapache2-mod-php \
      libapache2-mod-php7.0 \
      php7.0 \
      php7.0-cli \
      php7.0-dev \
      php7.0-bcmath \
      php7.0-bz2 \
      php7.0-mysql \
      php7.0-mbstring \
      php7.0-mcrypt \
      php7.0-gd \
      php-imagick \
      php7.0-curl \
      php7.0-intl \
      php7.0-common \
      php7.0-json \
      php7.0-opcache \
      php7.0-recode \
      php7.0-soap \
      php7.0-xml \
      php7.0-zip \
      php7.0-opcache \
      php7.0-readline \
      php7.0-fpm \
      php-apcu \
      php-gettext \
      default-jre \
      git \
      rsyslog \
      curl  \
      wget \
      vim \
      nano

# Enable colors in docker container
RUN sed -i "s/#force_color_prompt=yes/force_color_prompt=yes/g" $HOME/.bashrc

# Enable rewrite
RUN a2enmod rewrite


# Change file permissions to www-data so apache can run these files.
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
EXPOSE 3306

# Update the default apache site with the config we created.
ADD local-apache-config.conf /etc/apache2/sites-enabled/000-default.conf

# Enable new apache config
RUN service apache2 start 

# Add the entry script. Lets the container stay open.
ADD entry.sh /opt/
RUN chmod 755 /opt/entry.sh

# CMD to try and start apache
CMD ["service", "apache2", "start"]
