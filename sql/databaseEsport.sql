create database if not exists Esport character set utf8 collate utf8_unicode_ci;
use Esport;

grant all privileges on Esport.* to 'Esport'@'localhost' identified by 'secret';