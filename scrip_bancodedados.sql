
-- -----------------------------------------------------
-- Schema dbfilme
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbfilme` DEFAULT CHARACTER SET utf8 ;
USE `dbfilme` ;

-- -----------------------------------------------------
-- Table `dbfilme`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbfilme`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `login` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbfilme`.`diretor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbfilme`.`diretor` (
  `idDiretor` INT NOT NULL AUTO_INCREMENT,
  `Diretor_Nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`iddiretor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbfilme`.`filme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbfilme`.`filme` (
  `idFilme` INT NOT NULL AUTO_INCREMENT,
  `Filme_Nome` VARCHAR(255) NOT NULL,
  `Filme_ano` INT NOT NULL,
  `Filme_duracao`INT NOT NULL,
  `Filme_desc` MEDIUMTEXT NOT NULL,
  `Filme_iddiretor` INT NOT NULL,
  PRIMARY KEY (`idfilme`))
ENGINE = InnoDB;



