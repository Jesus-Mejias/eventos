-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema eventos
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `eventos` ;

-- -----------------------------------------------------
-- Schema eventos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eventos` DEFAULT CHARACTER SET utf8 ;
USE `eventos` ;

-- -----------------------------------------------------
-- Table `eventos`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`users` ;

CREATE TABLE IF NOT EXISTS `eventos`.`users` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `user` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `photo` TEXT(100) NULL,
  `linkedin` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`roles` ;

CREATE TABLE IF NOT EXISTS `eventos`.`roles` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`events`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`events` ;

CREATE TABLE IF NOT EXISTS `eventos`.`events` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `date` VARCHAR(45) NULL,
  `time` VARCHAR(45) NULL,
  `duration` VARCHAR(45) NULL,
  `location` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`register`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`register` ;

CREATE TABLE IF NOT EXISTS `eventos`.`register` (
  `id` INT NOT NULL,
  `discount` VARCHAR(45) NULL,
  `users_id` INT NOT NULL,
  `events_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `events_id`),
  INDEX `fk_register_users1_idx` (`users_id` ASC) VISIBLE,
  INDEX `fk_register_events1_idx` (`events_id` ASC) VISIBLE,
  CONSTRAINT `fk_register_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `eventos`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_register_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `eventos`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`sessions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`sessions` ;

CREATE TABLE IF NOT EXISTS `eventos`.`sessions` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NULL,
  `room` VARCHAR(45) NULL,
  `speaker` VARCHAR(45) NULL,
  `events_id` INT NOT NULL,
  PRIMARY KEY (`id`, `events_id`),
  INDEX `fk_sessions_events1_idx` (`events_id` ASC) VISIBLE,
  CONSTRAINT `fk_sessions_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `eventos`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`users_has_roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`users_has_roles` ;

CREATE TABLE IF NOT EXISTS `eventos`.`users_has_roles` (
  `users_id` INT NOT NULL,
  `roles_id` INT NOT NULL,
  PRIMARY KEY (`users_id`, `roles_id`),
  INDEX `fk_users_has_roles_roles1_idx` (`roles_id` ASC) VISIBLE,
  INDEX `fk_users_has_roles_users_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_has_roles_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `eventos`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_roles_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `eventos`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eventos`.`rating`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eventos`.`rating` ;

CREATE TABLE IF NOT EXISTS `eventos`.`rating` (
  `id` INT NOT NULL,
  `rating` VARCHAR(45) NULL,
  `users_id` INT NOT NULL,
  `events_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `events_id`),
  INDEX `fk_rating_users1_idx` (`users_id` ASC) VISIBLE,
  INDEX `fk_rating_events1_idx` (`events_id` ASC) VISIBLE,
  CONSTRAINT `fk_rating_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `eventos`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rating_events1`
    FOREIGN KEY (`events_id`)
    REFERENCES `eventos`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
