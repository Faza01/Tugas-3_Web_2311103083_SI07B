/* Create Database and Table */
create database data_pembelian;
 
use data_pembelian;
 
CREATE TABLE `pembelians` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100),
  `email` varchar(100),
  `tlp` int(12),
  `alamat` varchar(255),
  `mobil` varchar(100),
  PRIMARY KEY  (`id`)
);