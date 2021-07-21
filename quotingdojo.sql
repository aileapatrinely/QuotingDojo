CREATE TABLE IF NOT EXISTS `mydb`.`quotes` (
  `id` INT NOT NULL,
  `name` VARCHAR(2) NOT NULL,
  `quote` VARCHAR(5) NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB

