drop table if exists jalon;


create table jalon(
    jalon_id integer not null primary key auto_increment,
    jalon_titre varchar(80) not null,
    jalon_image varchar(150),
    jalon_resume varchar (500),
    jalon_debut varchar (50),
    jalon_fin varchar (50)
) engine=innodb character set utf8 collate utf8_unicode_ci;