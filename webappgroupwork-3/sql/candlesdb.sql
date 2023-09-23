DROP DATABASE IF EXISTS blog_db;
CREATE DATABASE IF NOT EXISTS blog_db;
USE blog_db;

DROP TABLE IF EXISTS authors;
CREATE TABLE IF NOT EXISTS authors (
  authorID bigint(15) NOT NULL AUTO_INCREMENT,
  firstName varchar(50) NOT NULL DEFAULT '',
  lastName varchar(50) NOT NULL DEFAULT '',
  email varchar(50) NOT NULL DEFAULT '',
  password varchar(50) NOT NULL DEFAULT '',
  dob DATE NOT NULL DEFAULT '00-00-0000',
  phone varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (authorID),
  UNIQUE KEY email (email)
);

DROP TABLE IF EXISTS articles;
CREATE TABLE IF NOT EXISTS articles (
  articleID bigint(15) NOT NULL AUTO_INCREMENT,
  authorName varchar(50) NOT NULL DEFAULT '',
  title varchar(50) NOT NULL DEFAULT '',
  content varchar(50) NOT NULL DEFAULT '',
  datepublished datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (articleID)
);

