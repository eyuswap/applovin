#!/bin/bash
#Localhost 127.0.0.1
sudo mkdir /var/www/applovin.com
# Block Host Tracking
sudo mkdir /var/www/s2s.adjust.com
sudo mkdir /var/www/0c3-a.tlnk.io
sudo mkdir /var/www/impression.appsflyer.com
sudo mkdir /var/www/track.tenjin.io
sudo mkdir /var/www/imp.control.kochava.com
sudo mkdir /var/www/app.adjust.com
sudo mkdir /var/www/adtrack.appcpi.net
sudo mkdir /var/www/view.adjust.com
sudo mkdir /var/www/rt.applovin.com
sudo mkdir /var/www/control.kochava.com
sudo mkdir /var/www/1234.measurementapi.com
sudo mkdir /var/www/branchster.app.link
sudo mkdir /var/www/tracking.app.link
sudo mkdir /var/www/c.singular.net
sudo mkdir /var/www/i.sng.link
sudo mkdir /var/www/app.appsflyer.com
sudo mkdir /var/www/a.localytics.com
sudo mkdir /var/www/app-adforce.jp
sudo mkdir /var/www/click.adzcore.com
sudo chown -R $USER:$USER /var/www/applovin.com
sudo chown -R $USER:$USER /var/www/s2s.adjust.com
sudo chown -R $USER:$USER /var/www/0c3-a.tlnk.io
sudo chown -R $USER:$USER /var/www/impression.appsflyer.com
sudo chown -R $USER:$USER /var/www/track.tenjin.io
sudo chown -R $USER:$USER /var/www/imp.control.kochava.com
sudo chown -R $USER:$USER /var/www/app.adjust.com
sudo chown -R $USER:$USER /var/www/adtrack.appcpi.net
sudo chown -R $USER:$USER /var/www/view.adjust.com
sudo chown -R $USER:$USER /var/www/rt.applovin.com
sudo chown -R $USER:$USER /var/www/control.kochava.com
sudo chown -R $USER:$USER /var/www/1234.measurementapi.com
sudo chown -R $USER:$USER /var/www/branchster.app.link
sudo chown -R $USER:$USER /var/www/tracking.app.link
sudo chown -R $USER:$USER /var/www/c.singular.net
sudo chown -R $USER:$USER /var/www/i.sng.link
sudo chown -R $USER:$USER /var/www/app.appsflyer.com
sudo chown -R $USER:$USER /var/www/a.localytics.com
sudo chown -R $USER:$USER /var/www/app-adforce.jp
sudo chown -R $USER:$USER /var/www/click.adzcore.com
sudo chmod -R 755 /var/www
cd /etc/apache2/sites-available
cat > applovin.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@applovin.com
ServerName applovin.com
ServerAlias www.applovin.com
DocumentRoot /var/www/applovin.com
</VirtualHost>
EOF
cat > s2s.adjust.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@s2s.adjust.com
ServerName s2s.adjust.com
ServerAlias s2s.adjust.com
DocumentRoot /var/www/s2s.adjust.com
</VirtualHost>
EOF
cat > 0c3-a.tlnk.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@0c3-a.tlnk.io
ServerName 0c3-a.tlnk.io
ServerAlias www.0c3-a.tlnk.io
DocumentRoot /var/www/0c3-a.tlnk.io
</VirtualHost>
EOF
cat > impression.appsflyer.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@impression.appsflyer.com
ServerName impression.appsflyer.com
ServerAlias www.impression.appsflyer.com
DocumentRoot /var/www/impression.appsflyer.com
</VirtualHost>
EOF
cat > track.tenjin.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@track.tenjin.io
ServerName track.tenjin.io
ServerAlias www.track.tenjin.io
DocumentRoot /var/www/track.tenjin.io
</VirtualHost>
EOF
cat > imp.control.kochava.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@imp.control.kochava.com
ServerName imp.control.kochava.com
ServerAlias www.imp.control.kochava.com
DocumentRoot /var/www/imp.control.kochava.com
</VirtualHost>
EOF
cat > app.adjust.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@app.adjust.com
ServerName app.adjust.com
ServerAlias www.app.adjust.com
DocumentRoot /var/www/app.adjust.com
</VirtualHost>
EOF
cat > adtrack.appcpi.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@adtrack.appcpi.net
ServerName adtrack.appcpi.net
ServerAlias www.adtrack.appcpi.net
DocumentRoot /var/www/adtrack.appcpi.net
</VirtualHost>
EOF
cat > view.adjust.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@adtrack.appcpi.net
ServerName adtrack.appcpi.net
ServerAlias www.adtrack.appcpi.net
DocumentRoot /var/www/adtrack.appcpi.net
</VirtualHost>
EOF
cat > rt.applovin.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@rt.applovin.com
ServerName rt.applovin.com
ServerAlias www.rt.applovin.com
DocumentRoot /var/www/rt.applovin.com
</VirtualHost>
EOF
cat > control.kochava.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@control.kochava.com
ServerName control.kochava.com
ServerAlias www.control.kochava.com
DocumentRoot /var/www/control.kochava.com
</VirtualHost>
EOF
cat > 1234.measurementapi.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@1234.measurementapi.com
ServerName 1234.measurementapi.com
ServerAlias www.1234.measurementapi.com
DocumentRoot /var/www/1234.measurementapi.com
</VirtualHost>
EOF
cat > branchster.app.link.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@branchster.app.link
ServerName branchster.app.link
ServerAlias www.branchster.app.link
DocumentRoot /var/www/branchster.app.link
</VirtualHost>
EOF
cat > tracking.app.link.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@tracking.app.link
ServerName tracking.app.link
ServerAlias www.tracking.app.link
DocumentRoot /var/www/tracking.app.link
</VirtualHost>
EOF
cat > c.singular.net.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@c.singular.net
ServerName c.singular.net
ServerAlias www.c.singular.net
DocumentRoot /var/www/c.singular.net
</VirtualHost>
EOF
cat > i.sng.link.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@i.sng.link
ServerName i.sng.link
ServerAlias www.i.sng.link
DocumentRoot /var/www/i.sng.link
</VirtualHost>
EOF
cat > app.appsflyer.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@app.appsflyer.com
ServerName app.appsflyer.com
ServerAlias www.app.appsflyer.com
DocumentRoot /var/www/app.appsflyer.com
</VirtualHost>
EOF
cat > a.localytics.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@a.localytics.com
ServerName a.localytics.com
ServerAlias www.a.localytics.com
DocumentRoot /var/www/a.localytics.com
</VirtualHost>
EOF
cat > app-adforce.jp.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@app-adforce.jp
ServerName app-adforce.jp
ServerAlias www.app-adforce.jp
DocumentRoot /var/www/app-adforce.jp
</VirtualHost>
EOF
cat > click.adzcore.com.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@click.adzcore.com
ServerName click.adzcore.com
ServerAlias www.click.adzcore.com
DocumentRoot /var/www/click.adzcore.com
</VirtualHost>
EOF
cd /root
sudo a2ensite applovin.conf
sudo a2ensite s2s.adjust.conf
sudo a2ensite 0c3-a.tlnk.conf
sudo a2ensite impression.appsflyer.conf
sudo a2ensite track.tenjin.conf
sudo a2ensite imp.control.kochava.conf
sudo a2ensite app.adjust.conf
sudo a2ensite adtrack.appcpi.conf
sudo a2ensite view.adjust.com.conf
sudo a2ensite rt.applovin.com.conf
sudo a2ensite control.kochava.com.conf
sudo a2ensite 1234.measurementapi.com.conf
sudo a2ensite branchster.app.link.conf
sudo a2ensite tracking.app.link.conf
sudo a2ensite c.singular.net.conf
sudo a2ensite i.sng.link.conf
sudo a2ensite app.appsflyer.com.conf
sudo a2ensite a.localytics.com.conf
sudo a2ensite app-adforce.jp.conf
sudo a2ensite click.adzcore.com.conf
sudo systemctl restart apache2
