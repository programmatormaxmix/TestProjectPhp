<?php

/** 
 * @Autor Startsev Maxim
 * @Copyright 2019
 * @Description Installer in progress
 */

  include("database.php");


//Config Root

//ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';

//CREATE DATABASE slotsengine;
//USE slotsengine; 

/*
 CREATE TABLE `users` (
	`uid` BIGINT(20) NULL DEFAULT NULL,
	`firstname` TINYTEXT NULL,
	`middlename` TINYTEXT NULL,
	`lastname` TINYTEXT NULL,
	`country` TINYTEXT NULL,
	`state` TINYTEXT NULL,
	`postcode` TINYTEXT NULL,
	`street` TINYTEXT NULL,
	`phone` TINYTEXT NULL,
	`email` TINYTEXT NULL,
	`cardnumber` TINYTEXT NULL,
	`login` TINYTEXT NULL,
	`password` TINYTEXT NULL,
	`money` INT(11) NULL DEFAULT NULL,
	`points` INT(11) NULL DEFAULT NULL,
	`loyalty` INT(11) NULL DEFAULT NULL
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;

*/

/*

CREATE TABLE `award` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`uid` BIGINT(20) NULL DEFAULT NULL,
	`type` TINYTEXT NULL,
	`count` INT(11) NULL DEFAULT NULL,
	`desc` TINYTEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
AUTO_INCREMENT=18
;

*/

?>