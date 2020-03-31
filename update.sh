#!/bin/bash
# UPDATE UBUNTU
sudo apt update
# MENGHAPUS DATA
rm -rf /opt/firefox/updated
rm -rf /opt/firefox/updates
rm -rf /root/virtualhost.sh
rm -rf /etc/hosts
rm -rf /var/www/applovin.com/index.php
rm -rf /var/www/applovin.com/proxy.txt
rm -rf /root/.mozilla
# MEMBUAT VIRTUAL HOST
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/virtualhost.sh -O /root/virtualhost.sh
chmod +x /root/virtualhost.sh
/root/virtualhost.sh
# DOWNLOAD HOST, SCRIPT PHP, DAN PROFILE FIREFOX
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/hosts -O /etc/hosts
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/index.php -O /var/www/applovin.com/index.php
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/proxy.txt -O /var/www/applovin.com/proxy.txt
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/profiles.tar.gz -O /root/profiles.tar.gz
# EXTRACT DATA PROFILE
tar xvf profiles.tar.gz
# HAPUS PROFILE FILE
rm -rf /root/profiles.tar.gz
# UPDATE CRONTAB
touch /var/spool/cron/root
/usr/bin/crontab /var/spool/cron/root
crontab -l | { cat; echo "@reboot /root/update.sh && sleep $(((RANDOM%120)+5)) && screen -d -m -S FF1 firefox -headless -p MusafirSenja1 -no-remote && sleep $(((RANDOM%3600)+300)) && /sbin/shutdown -r now"; } | crontab -
/etc/init.d/cron restart
/etc/init.d/cron start
# SELESAI
