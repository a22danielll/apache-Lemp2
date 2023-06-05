FROM debian

RUN apt update && apt install wget curl lsb-release apt-transport-https ca-certificates software-properties-common -y 

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg

RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

RUN apt update && apt install -y php8.2-fpm 

RUN apt install -y php8.2-zip php8.2-curl php8.2-xml php8.2-intl php8.2-mbstring php8.2-gd php8.2-mysql

RUN mkdir /run/php

CMD ["/usr/sbin/php-fpm8.2", "-F"]