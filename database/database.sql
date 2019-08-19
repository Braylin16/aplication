CREATE TABLE users(
    id              int(11) auto_increment primary key,
    name            varchar(100) not null,
    surname         varchar(100) not null,
    email           varchar(100) UNIQUE not null,
    password        varchar(200) not null
)ENGINE=InnoDb;