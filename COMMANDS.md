composer create-project --prefer-dist cakephp/app faktury


composer require friendsofcake/bootstrap-ui
composer require nos86/cakephp3-material-design:dev-master

bin/cake plugin loaded
bin/cake plugin load MaterialDesignTheme
bin/cake plugin load BootstrapUI

bin/cake plugin assets copy
bin/cake plugin assets symlink

bin/cake bake controller Users
bin/cake bake model Users
bin/cake bake template Users -t MaterialDesignTheme
bin/cake bake template Designs -t BootstrapUI



bin/cake routes

bin/cake server --port=4040


Model FAKTURY zawierający kolumny: ID, Numer Faktury (string), Data wystawienia, Kwota faktury, Nazwa firmy, Adres, e-mail.


mysql -u root -p
GRANT ALL PRIVILEGES ON *.* TO 'my_app'@'localhost' IDENTIFIED BY 'secret';
\q


CREATE TABLE users (
  id int NOT NULL auto_increment,
  created datetime DEFAULT CURRENT_TIMESTAMP,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
