## Sin Docker

Descargue el repositorio, para hacer eso ejecute el siguiente comando <br /> `git clone https://github.com/thelement115/Proyecto-TEIS.git`<br />
cree una base de datos mysql llamada innodb<br />
cree un documento .env y ponga en este la configuración que necesite. <br />
use el comando 'php artisan migrate' para migrar la base de datos <br />
si usa xampp solo active apache y mysql en caso de necesitar la base de datos local<br />
en caso de no usar xampp ejecute el `comando php artisan serve` para correr el servidor<br />
la URL principal en local es http://localhost/TEIS/public. 

## Con Docker en local

En una maquina con docker instalado corra los siguientes comandos: <br/>
`docker image build -t "nombre"`<br/>
'docker container run -d --name laravel-docker -p 8000:80 laravel-app'<br/>

## Con Docker en local
En una maquina con docker instalado corra los siguientes comandos:<br/>
`docker image build -t "nombre"`<br/>
'docker container run -d --name laravel-docker -p 80:80 laravel-app'<br/>
