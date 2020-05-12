CREATE TABLE IF NOT EXISTS `data` (
`id` INT NULL,
`name` VARCHAR(MAX) NULL,
`email` VARCHAR(MAX) NULL,
`password` VARCHAR(MAX) NULL,
`banned` INT NULL,
`remember_token` VARCHAR(MAX) NULL,
`created_at` VARCHAR(MAX) NULL,
`updated_at` VARCHAR(MAX) NULL,
`departamento` VARCHAR(MAX) NULL,
`municipio` VARCHAR(MAX) NULL,
`direccion` VARCHAR(MAX) NULL,
`department` VARCHAR(MAX) NULL,
`city` VARCHAR(MAX) NULL,
`address` VARCHAR(MAX) NULL
);

INSERT INTO data VALUES
(1,'Eduard Damiam','eduardelgenio@hotmail.com','$2y$10$VQB9F3/5HasM4GX4brsWjOcJAbdKGcuJ19QV2o4m/1AtnmH71.9u.',0,'','2020-05-07 00:57:45','2020-05-12 09:36:30','','','','Antioquia','Medellín','calle 99b'),
(2,'Esteban Osorio','eosorio@eafit.edu.co','zloCUB25',1,'','2020-05-12 07:16:19','2020-05-12 09:35:25','','','','','',''),
(3,'Esteban','estebanoso77@hotmail.com','$2y$10$UjgQo8K8BHeoCU9lBdbeweo5coViBAk.jB8irZQ0hBSPcJv7jQ1Nu',0,'lehR46h0XMyZ9Xlf7sP1CMKEq2IxXdRl1bSYXSSWBblhW3GsvYoEamfanK98','2020-05-12 08:48:49','2020-05-12 08:48:49','','','','','','');