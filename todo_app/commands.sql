CREATE DATABASE dotinstall_todoapp;

GRANT ALL ON dotinstall_todoapp.* TO 'nagatsuka'@localhost IDENTIFIED BY 'nagatsuka';

USE dotinstall_todoapp;

CREATE TABLE tasks(
  id int not null auto_increment primary key,
  seq int not null,
  type enum('notyet', 'done', 'deleted') default 'notyet',
  title text,
  created datetime,
  modified datetime,
  KEY type(type),
  KEY seq(seq)
);

INSERT INTO tasks(seq, type, title, created, modified) VALUES
(1, 'notyet', '牛乳買う', now(), now()),
(2, 'notyet', '提案書作る', now(), now()),
(3, 'done', '映画見る', now(), now());
