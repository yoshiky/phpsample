CREATE USER vagrant WITH PASSWORD  'vagrant';
ALTER ROLE vagrant WITH SUPERUSER CREATEDB CREATEROLE;

CREATE SEQUENCE blogs_id_seq;

CREATE TABLE blog (
id INT DEFAULT nextval('blogs_id_seq') PRIMARY KEY ,
title VARCHAR(25) NOT NULL ,
description TEXT,
created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)
