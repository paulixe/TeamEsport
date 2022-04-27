drop table if exists user;
create table user(
    usr_id integer not null primary key auto_increment,
    usr_login varchar(50) not null,
    usr_password varchar(88) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
