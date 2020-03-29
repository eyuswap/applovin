#!/bin/bash
# UPDATE UBUNTU
sudo apt update
# MENGHAPUS DATA
rm -rf /opt/firefox/updated
rm -rf /opt/firefox/updates
rm -rf /root/virtualhost.sh
rm -rf /etc/hosts
rm -rf /root/index.php
rm -rf /root/.mozilla
# MEMBUAT VIRTUAL HOST
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/virtualhost.sh -O /root/virtualhost.sh
chmod +x /root/virtualhost.sh
/root/virtualhost.sh
# DOWNLOAD HOST, SCRIPT PHP, DAN PROFILE FIREFOX
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/host -O /etc/hosts
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/index.php -O /var/www/applovin.com/index.php
wget -q https://raw.githubusercontent.com/eyuswap/applovin/master/profiles.tar.gz -O /root/profiles.tar.gz
# EXTRACT DATA PROFILE
tar xvf profiles.tar.gz
# HAPUS PROFILE FILE
rm -rf /root/profiles.tar.gz
