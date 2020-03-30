touch /var/spool/cron/root
/usr/bin/crontab /var/spool/cron/root
crontab -l | { cat; echo "@reboot /root/update.sh && /root/crontab.sh && sleep $(((RANDOM%300)+30)) && screen -d -m -S FF1 firefox -headless -p MusafirSenja1 -no-remote && sleep $(((RANDOM%3600)+300)) && reboot"; } | crontab -
/etc/init.d/cron restart
/etc/init.d/cron start
