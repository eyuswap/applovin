#!/bin/bash
# UPDATE UBUNTU
sudo apt-get update -y
sudo apt-get upgrade -y
# MENGHAPUS DATA
rm -rf /root/virtualhost.sh
rm -rf /etc/hosts
rm -rf /var/www/applovin.com/index.php
# MEMBUAT VIRTUAL HOST
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/virtualhost.sh -O /root/virtualhost.sh
chmod +x /root/virtualhost.sh
/root/virtualhost.sh
# DOWNLOAD HOST, SCRIPT PHP, DAN PROFILE FIREFOX
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/hosts -O /etc/hosts
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/index.php -O /var/www/applovin.com/index.php
# UPDATE CRONTAB
touch /var/spool/cron/root
/usr/bin/crontab /var/spool/cron/root
crontab -l | { cat; echo "@reboot /root/run-update.sh && sleep $(((RANDOM%18000)+10)) && screen -d -m -S /root/running.sh && sleep $(((RANDOM%3720)+120)) && /sbin/shutdown -r now"; } | crontab -
/etc/init.d/cron restart
/etc/init.d/cron start
# SELESAI
