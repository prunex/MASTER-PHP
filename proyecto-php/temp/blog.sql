/*
-- Connect with the root and change the password
mysql -u root -h localhost
mysql> ALTER USER 'root'@'localhost' IDENTIFIED BY 'qwer.1234';
-- Create a new user with all privileges.
mysql> CREATE USER 'toor'@'localhost' IDENTIFIED BY 'qwer.1234';
mysql> GRANT ALL PRIVILEGES ON `toor\_%`.* TO "toor"@"localhost";
mysql> FLUSH PRIVILEGES;
mysql> EXIT;
-- Restart MySQL service and reconect with the "new" user
mysql -h localhost -u toor -pqwer.1234
-- To delete a user, connect with a root
mysql> DROP USER "toor"@"localhost";
*/

DROP DATABASE IF EXISTS blog_master;
CREATE DATABASE IF NOT EXISTS blog_master;
USE blog_master;

CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id      int(255) auto_increment not null,
nombre  varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
categoria_id    int(255) not null,
titulo          varchar(255) not null,
descripcion     MEDIUMTEXT,
fecha           date not null,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE NO ACTION
)ENGINE=InnoDb;