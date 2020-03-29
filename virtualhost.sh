#!/bin/bash
sudo mkdir /var/www/applovin.com
sudo mkdir /var/www/adjust.com
sudo mkdir /var/www/tlnk.io
sudo mkdir /var/www/appsflyer.com
sudo mkdir /var/www/tenjin.io
sudo mkdir /var/www/kochava.com
sudo mkdir /var/www/appcpi.net
sudo mkdir /var/www/s2s.adjust.com
sudo mkdir /var/www/0c3-a.tlnk.io
sudo mkdir /var/www/impression.appsflyer.com
sudo mkdir /var/www/track.tenjin.io
sudo mkdir /var/www/imp.control.kochava.com
sudo mkdir /var/www/app.adjust.com
sudo mkdir /var/www/adtrack.appcpi.net
sudo chown -R $USER:$USER /var/www/applovin.com
sudo chown -R $USER:$USER /var/www/adjust.com
sudo chown -R $USER:$USER /var/www/tlnk.io
sudo chown -R $USER:$USER /var/www/appsflyer.com
sudo chown -R $USER:$USER /var/www/tenjin.io
sudo chown -R $USER:$USER /var/www/kochava.com
sudo chown -R $USER:$USER /var/www/appcpi.net
sudo chown -R $USER:$USER /var/www/s2s.adjust.com
sudo chown -R $USER:$USER /var/www/0c3-a.tlnk.io
sudo chown -R $USER:$USER /var/www/impression.appsflyer.com
sudo chown -R $USER:$USER /var/www/track.tenjin.io
sudo chown -R $USER:$USER /var/www/imp.control.kochava.com
sudo chown -R $USER:$USER /var/www/app.adjust.com
sudo chown -R $USER:$USER /var/www/adtrack.appcpi.net
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
cat > adjust.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@adjust.com
ServerName adjust.com
ServerAlias www.adjust.com
DocumentRoot /var/www/adjust.com
</VirtualHost>
EOF
cat > tlnk.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@tlnk.io
ServerName tlnk.io
ServerAlias www.tlnk.io
DocumentRoot /var/www/tlnk.io
</VirtualHost>
EOF
cat > appsflyer.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@appsflyer.com
ServerName appsflyer.com
ServerAlias www.appsflyer.com
DocumentRoot /var/www/appsflyer.com
</VirtualHost>
EOF
cat > tenjin.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@tenjin.io
ServerName tenjin.io
ServerAlias www.tenjin.io
DocumentRoot /var/www/tenjin.io
</VirtualHost>
EOF
cat > kochava.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@kochava.com
ServerName kochava.com
ServerAlias www.kochava.com
DocumentRoot /var/www/kochava.com
</VirtualHost>
EOF
cat > appcpi.conf <<EOF
<VirtualHost *:80>
ServerAdmin support@appcpi.net
ServerName appcpi.net
ServerAlias www.appcpi.net
DocumentRoot /var/www/appcpi.net
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
cd /root
sudo a2ensite applovin.conf
sudo a2ensite adjust.conf
sudo a2ensite tlnk.conf
sudo a2ensite appsflyer.conf
sudo a2ensite tenjin.conf
sudo a2ensite kochava.conf
sudo a2ensite appcpi.conf
sudo a2ensite s2s.adjust.conf
sudo a2ensite 0c3-a.tlnk.conf
sudo a2ensite impression.appsflyer.conf
sudo a2ensite track.tenjin.conf
sudo a2ensite imp.control.kochava.conf
sudo a2ensite app.adjust.conf
sudo a2ensite adtrack.appcpi.conf
sudo systemctl restart apache2
