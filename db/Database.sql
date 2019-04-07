create database if not exists formaweb character set utf8 collate utf8_unicode_ci;
use formaweb;
grant all privileges on formaweb.* to 'formaweb_user'@'localhost' identified by 'secret';