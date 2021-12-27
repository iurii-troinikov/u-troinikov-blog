DROP DATABASE IF EXISTS iuriit_blog;

DROP USER IF EXISTS 'iuriit_blog_user'@'%';

CREATE DATABASE iuriit_blog;

CREATE USER 'iuriit_blog_user'@'%' IDENTIFIED BY '45Ya!$""sT&P*C%RNSEhr';

GRANT ALL ON iuriit_blog.* TO 'iuriit_blog_user'@'%';
