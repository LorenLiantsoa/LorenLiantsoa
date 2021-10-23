#Install apache
sudo apt-get install apache2
sudo ufw allow 'Apache'
sudo systemctl restart apache2.service



#INSTALL PHP 7
sudo apt update

sudo apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
# INSTALL MYSQL
sudo apt update
sudo apt install mysql-server


wget https://repo.mysql.com//mysql-apt-config_0.8.18-1_all.deb

sudo dpkg -i mysql-apt-config_0.8.18-1_all.deb

sudo apt-get update

sudo apt install mysql-client mysql-community-server mysql-server

sudo mysql_secure_installation
mysql -u root -p

CREATE USER 'root'@'%' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON * . * TO 'root'@'%'; 
FLUSH PRIVILEGES;
exit

sudo vim /etc/mysql/mysql.conf.d/mysqld.cnf

#By default we only accept connections from localhost 
#bind-address   = 127.0.0.1 
bind-address   = 0.0.0.0

sudo systemctl restart mysql

sudo ufw allow from 192.168.8.107 to any port 3306
sudo ufw enable

#install git
sudo apt install git
git --version

#déploiement
cd /etc/opt 
git clone https://github.com/LorenLiantsoa/LorenLiantsoa.git
cd /var/www/html
cp /etc/opt/LorenLiantsoa/*.jpg *.css *.php -d .
sudo systemctl restart apache2.service



