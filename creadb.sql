use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database ccong;
use ccong;
grant all privileges on ccong.* to 'admin'@'localhost';
