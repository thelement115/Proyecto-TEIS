En cualquiera de los 3 casos siguientes usted debe configurar el archivo .env del proyecto para su caso en especifico, en este github hay un .env que sirve de prueba con una base de datos mysql en aws

mas información en : https://laravel.com/docs/7.x/configuration

## Sin Docker
Descargue el repositorio, para hacer eso ejecute el siguiente comando: <br /> `git clone https://github.com/thelement115/Proyecto-TEIS.git`<br />
cree una base de datos mysql llamada innodb<br />
cree un documento .env y ponga en este la configuración que necesite. <br />
para migrar la base de datos use el comando: <br />
`php artisan migrate` <br/>
si usa xampp solo active apache y mysql en caso de necesitar la base de datos local<br />
en caso de no usar xampp ejecute el siguiente comando para correr el servidor<br />
 `comando php artisan serve` <br />
la URL principal en local es http://localhost/TEIS/public. 

## Con Docker en local

Descargue el repositorio, para hacer eso ejecute el siguiente comando: <br /> `git clone https://github.com/thelement115/Proyecto-TEIS.git`<br />
En una maquina con docker instalado corra los siguientes comandos: <br/>
`docker image build -t "nombre"`<br/>
`docker container run -d --name "nombre" -p 8000:80 "nombre"`<br/>

## Con Docker EC2

Descargue git y docker, para eso corra los siguientes comandos:
`#!/bin/bash`<br />
`yum update -y` <br />
`yum install -y docker `<br />
`service docker start `<br />
`usermod -a -G docker ec2-user`<br />
Descargue el repositorio, para hacer eso ejecute el siguiente comando: <br /> `git clone https://github.com/thelement115/Proyecto-TEIS.git`<br />
En una maquina con docker instalado corra los siguientes comandos:<br/>
`docker image build -t "nombre"`<br/>
`docker container run -d --name "nombre" -p 80:80 "nombre"`<br/>
