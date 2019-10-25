# Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
#
# Licensed under The MIT License
# For full copyright and license information, please see the LICENSE.txt
# Redistributions of files must retain the above copyright notice.
# MIT License (https://opensource.org/licenses/mit-license.php)

CREATE TABLE invoices (
  id int NOT NULL auto_increment,
  number varchar(255) NOT NULL,
  created datetime DEFAULT CURRENT_TIMESTAMP,
  amount int NOT NULL,
  company varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
