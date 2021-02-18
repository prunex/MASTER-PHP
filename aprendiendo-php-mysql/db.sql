/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  prunex
 * Created: Feb 18, 2021
 */

DROP DATABASE IF EXISTS phpmysql;
CREATE DATABASE IF NOT EXISTS phpmysql;
SHOW DATABASES;
USE phpmysql;

CREATE TABLE `phpmysql`.`notas` (
`id` INT NOT NULL AUTO_INCREMENT , 
`titulo` VARCHAR(255) NOT NULL , 
`descripcion` MEDIUMTEXT NOT NULL , 
`color` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO notas (id, titulo, descripcion, color) VALUES (NULL, "Nota 1", "Hacer los ejercicios de SQL", "red");
INSERT INTO notas (id, titulo, descripcion, color) VALUES (NULL, "Aprendiendo PHP", "Master de PHP de R.I.Pruna", "yellow");