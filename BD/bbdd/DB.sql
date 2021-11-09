CREATE TABLE `Customer` (
	`id_customer` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(50) AUTO_INCREMENT,
	`apellidos` varchar(70) NOT NULL,
	`email` varchar(40),
	`phone_number` INT(40),
	PRIMARY KEY (`id_customer`)
);

CREATE TABLE `Games` (
	`id_game` varchar(255) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	`year` INT(255) NOT NULL AUTO_INCREMENT,
	`img` INT(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`console` varchar(255) NOT NULL,
	`price` INT(255),
	`stock` INT(255),
	PRIMARY KEY (`id_game`)
);

CREATE TABLE `Invoice` (
	`id_factura` INT NOT NULL AUTO_INCREMENT,
	`id_customer` INT NOT NULL AUTO_INCREMENT,
	`date` TIMESTAMP NOT NULL,
	`total` DECIMAL NOT NULL,
	PRIMARY KEY (`id_factura`)
);

CREATE TABLE `orders` (
	`id_orders` INT NOT NULL,
	`id_factura` INT NOT NULL,
	`id_game` INT NOT NULL,
	`quantity` INT NOT NULL,
	PRIMARY KEY (`id_orders`,`id_factura`)
);

ALTER TABLE `Games` ADD CONSTRAINT `Games_fk0` FOREIGN KEY (`id_game`) REFERENCES `orders`(`id_game`);

ALTER TABLE `Games` ADD CONSTRAINT `Games_fk1` FOREIGN KEY (`console`) REFERENCES ``(``);

ALTER TABLE `Invoice` ADD CONSTRAINT `Invoice_fk0` FOREIGN KEY (`id_factura`) REFERENCES `orders`(`id_factura`);

ALTER TABLE `Invoice` ADD CONSTRAINT `Invoice_fk1` FOREIGN KEY (`id_customer`) REFERENCES `Customer`(`id_customer`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`id_factura`) REFERENCES `Invoice`(`id_factura`);





