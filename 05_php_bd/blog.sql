-- MySQL Script generated by MySQL Workbench
-- Fri Feb  8 12:37:53 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema blog
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `blog` ;

-- -----------------------------------------------------
-- Schema blog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `blog`.`entrada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blog`.`entrada` ;

CREATE TABLE IF NOT EXISTS `blog`.`entrada` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(200) NULL,
  `texto` TEXT NULL,
  `fecha` DATETIME NULL,
  `activo` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`comentario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `blog`.`comentario` ;

CREATE TABLE IF NOT EXISTS `blog`.`comentario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  `texto` TEXT NULL,
  `fecha` DATETIME NULL,
  `activo` TINYINT(1) NULL,
  `entrada_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comentario_entrada_idx` (`entrada_id` ASC),
  CONSTRAINT `fk_comentario_entrada`
    FOREIGN KEY (`entrada_id`)
    REFERENCES `blog`.`entrada` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `blog`.`entrada`
-- -----------------------------------------------------
START TRANSACTION;
USE `blog`;
INSERT INTO `blog`.`entrada` (`id`, `titulo`, `texto`, `fecha`, `activo`) VALUES (DEFAULT, 'Primer post', 'Este es el primer post que se publica en este blog.', '2019-02-08 12:10:25', 1);
INSERT INTO `blog`.`entrada` (`id`, `titulo`, `texto`, `fecha`, `activo`) VALUES (DEFAULT, 'Segundo post', 'Este es el segundo.', '2019-02-08 13:15:30', 0);

COMMIT;


-- -----------------------------------------------------
-- Data for table `blog`.`comentario`
-- -----------------------------------------------------
START TRANSACTION;
USE `blog`;
INSERT INTO `blog`.`comentario` (`id`, `email`, `texto`, `fecha`, `activo`, `entrada_id`) VALUES (DEFAULT, 'ijaureguialzo@egibide.org', 'Este es el único comentario.', '2019-02-08 16:51:00', 1, 1);

COMMIT;

