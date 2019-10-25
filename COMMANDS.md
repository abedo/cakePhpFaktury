composer create-project --prefer-dist cakephp/app faktury


composer require friendsofcake/bootstrap-ui
composer require nos86/cakephp3-material-design:dev-master

bin/cake plugin loaded
bin/cake plugin load MaterialDesignTheme
bin/cake plugin load BootstrapUI

bin/cake plugin assets copy
bin/cake plugin assets symlink

bin/cake bake controller Invoices
bin/cake bake model Invoices
bin/cake bake template Invoices -t BootstrapUI

bin/cake routes

bin/cake server --port=4040
