DELETE FROM user;
ALTER TABLE user auto_increment=1;

insert into user(usr_login,usr_password) values
    ("prout","wow c'est drole");
