create table roles (
id serial primary key,
name varchar(30)
);

create table users (
id serial primary key,
role_id integer,
username varchar(50),
password varchar(32),
email varchar(128)
);