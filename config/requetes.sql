CREATE DATABASE 'immobilier';

CREATE TABLE `immobilier`.`logement` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titre` VARCHAR(200) NOT NULL,
  `adresse` VARCHAR(200) NOT NULL,
  `ville` VARCHAR(200) NOT NULL,
  `cp` VARCHAR(5) NOT NULL,
  `surface` INT NOT NULL,
  `prix` INT NOT NULL,
  `photo` VARCHAR(200) NULL,
  `type` VARCHAR(20) NOT NULL,
  `description` TEXT NULL,
);
