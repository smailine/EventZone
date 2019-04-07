use formaweb;
drop table if exists Conference;

create table Conference (
idConf integer not null primary key auto_increment,
intituleConf varchar(45) not null,
descriptionConf varchar(600) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;