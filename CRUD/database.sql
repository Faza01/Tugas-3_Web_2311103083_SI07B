/* Create Database and Table */
create database CRUD_PRODUK_DB;
 
use CRUD_PRODUK_DB;
 
CREATE TABLE `produks` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `jenis` varchar(100),
  `stok` int(11),
  PRIMARY KEY  (`id`)
);