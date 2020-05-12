CREATE TABLE IF NOT EXISTS `data` (
`id` INT NULL,
`user_id` INT NULL,
`text` VARCHAR(MAX) NULL,
`remember_token` VARCHAR(MAX) NULL,
`created_at` VARCHAR(MAX) NULL,
`updated_at` VARCHAR(MAX) NULL,
`product_id` INT NULL
);

INSERT INTO data VALUES
(1,1,'No me gusto el producto','','','',15),
(2,1,'No tienen en negro?','','','',16),
(3,1,'Excelente producto','','','',18),
(4,1,'ahora funciona la app','','','',15);