CREATE DATABASE SQL_Injection;

USE SQL_Injection;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE products (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image_url VARCHAR(255) NOT NULL,
  price int NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO products (name, description, image_url, price) VALUES
('Đắc nhân tâm', 'Quyển sách bán chạy nhất mọi thời đại', 'https://salt.tikicdn.com/cache/750x750/ts/product/df/7d/da/d340edda2b0eacb7ddc47537cddb5e08.jpg.webp',100000),
('Tam quốc diễn nghĩa', 'Quyển sách bán chạy nhất mọi thời đại', 'https://product.hstatic.net/200000273991/product/tam_quoc_chi_b1_af46822e7f724e70b887893f2c440a55_master.jpg',1000000),
('Thủy hử', 'Quyển sách bán chạy nhất mọi thời đại', 'https://www.khaitam.com/Data/Sites/1/Product/1587/thuy-hu-bo-2-tap.png',500000);

INSERT INTO users VALUES (1, 'admin', '12345678');
