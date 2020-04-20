#!/bin/bash
# UPDATE UBUNTU
sudo apt-get update -y
sudo apt-get upgrade -y
# MENGHAPUS DATA
rm -rf /etc/hosts
rm -rf /root/index.php
# DOWNLOAD HOST, SCRIPT PHP
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/hosts -O /etc/hosts
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/no-firefox/index.php -O /root/index.php
# UPDATE CRONTAB
touch /var/spool/cron/root
/usr/bin/crontab /var/spool/cron/root
crontab -l | { cat; echo "@reboot /root/run-update.sh && sleep $(((RANDOM%7200)+60)) && screen -d -m -S php /root/php.sh && screen -d -m -S php /root/php.sh && screen -d -m -S php /root/php.sh && screen -d -m -S php /root/php.sh && screen -d -m -S php /root/php.sh && sleep $(((RANDOM%3720)+600)) && /sbin/shutdown -r now"; } | crontab -
/etc/init.d/cron restart
/etc/init.d/cron start
# SELESAI
