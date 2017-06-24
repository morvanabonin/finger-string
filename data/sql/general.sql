-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `username` VARCHAR(30) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(30) NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `deleted` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`imdb`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`imdb` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `year` DATETIME NULL,
  `type` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `createdAt` DATETIME NOT NULL,
  `deleted` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_imdb_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_imdb_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mydb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`episode`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`episode` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `imdb_id` INT NOT NULL,
  `title` VARCHAR(100) NULL,
  `number_episode` INT(3) NULL,
  `createdAt` DATETIME NOT NULL,
  `deleted` TINYINT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_episode_imdb1_idx` (`imdb_id` ASC),
  CONSTRAINT `fk_episode_imdb1`
    FOREIGN KEY (`imdb_id`)
    REFERENCES `mydb`.`imdb` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
