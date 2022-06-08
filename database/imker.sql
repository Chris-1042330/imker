DROP DATABASE IF EXISTS imker;
CREATE DATABASE imker;
USE imker;

CREATE TABLE pages(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255),
	subtitle VARCHAR(255),
	template VARCHAR(255),
	text text,
	text2 text,
	banner_text text,
	banner_image_url varchar(255),
	image_url1 varchar(255),
	image_url2 varchar(255)
);

-- User tabel
CREATE TABLE posts();
CREATE TABLE comments();
CREATE TABLE users();
-- Comments tabel
-- Posts tabel
 

INSERT INTO pages (title, subtitle, template, text, text2, banner_text, banner_image_url, image_url1, image_url2) VALUES
('De harige Imker', 'Harige imker', 'Normaal', 'asdasdasd', 'asdasdasd', 'asd', 'link', 'link', 'link'),
('De kale Imker', 'Kale imker', 'Apart', 'asdasdasd', 'asdasdasd', 'asd', 'link', 'link', 'link');