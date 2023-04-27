-- Tạo cơ sở dữ liệu và bảng "comments"
CREATE DATABASE myblog;

USE myblog;

CREATE TABLE comments (
  id INT(11) NOT NULL AUTO_INCREMENT,
  comment TEXT NOT NULL,
  PRIMARY KEY (id)
);

-- INSERT INTO comments values ()