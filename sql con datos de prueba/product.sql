CREATE TABLE IF NOT EXISTS `products` (
`id` INT NULL,
`name` VARCHAR(MAX) NULL,
`prize` INT NULL,
`description` VARCHAR(MAX) NULL,
`created_at` VARCHAR(MAX) NULL,
`updated_at` VARCHAR(MAX) NULL,
`filename` VARCHAR(MAX) NULL,
`mime` VARCHAR(MAX) NULL,
`original_filename` VARCHAR(MAX) NULL,
`visible` INT NULL
);

INSERT INTO products VALUES
(10,'caballo cafe',40000,'un gran caballo cafe de regalo para su hijo','2020-05-12 01:47:46','2020-05-12 06:25:46','uploads/php6DDA.tmp.jpg','image/jpeg','caballo-de-palo.jpg',0),
(11,'caballo 2',10000,'breve','2020-05-12 07:56:10','2020-05-12 07:59:17','uploads/phpB44D.tmp.jpg','image/jpeg','caballo-de-palo.jpg',0),
(12,'caballo s3',1000,'ojala este','2020-05-12 07:58:56','2020-05-12 07:59:20','storage/php4048.tmp.jpg','image/jpeg','caballo-de-palo.jpg',0),
(14,'caballo s3',15000,'porfa','2020-05-12 08:09:09','2020-05-12 08:15:48','https://www.kamchatkatoys.com/imagenes/poridentidad?identidad=39f1cf89-e1d2-4c4b-862c-65c6074458f5&ancho=900&alto=','','',0),
(15,'caballo cafe',20000,'prueba','2020-05-12 08:14:49','2020-05-12 08:14:49','https://www.kamchatkatoys.com/imagenes/poridentidad?identidad=39f1cf89-e1d2-4c4b-862c-65c6074458f5&ancho=900&alto=','','',1),
(16,'caballo cafe nuevo',40000,'prueba 2','2020-05-12 08:15:15','2020-05-12 09:37:31','storage/phpQ6g53w.jpg','image/jpeg','caballo-de-palo.jpg',0),
(17,'Caballo de madera negro',4000,'Caballo de palo negro\, buen regalo','2020-05-12 09:01:06','2020-05-12 09:01:06','storage/phpe4uEX0.jpg','image/jpeg','46963cc472e11cb1a2a7d6f312c54314.jpg',1),
(18,'Caballo rosado',40000,'Caballo de palo rosado\, excelente precio','2020-05-12 09:02:02','2020-05-12 09:02:02','storage/phpYmiaON.jpg','image/jpeg','61qxCbr3R5L._AC_SY679_.jpg',1),
(19,'caballo 2',14000,'prueba','2020-05-12 09:36:10','2020-05-12 09:36:10','storage/php40E2.tmp.jpg','image/jpeg','caballo-de-palo.jpg',1),
(20,'Caballo Final',15000,'Ultima prueba','2020-05-12 09:45:50','2020-05-12 09:45:50','storage/phpE8El94.jpg','image/jpeg','46963cc472e11cb1a2a7d6f312c54314.jpg',1);