select current_date();
select version();

drop database if exists cinema;
create database cinema;
use cinema;

create table pelicula (
codigopelic varchar (5) comment 'clave primaria',
nombrepelic varchar (50) not null,
directorpelic varchar (20)not null,
tipopelic varchar (18)not null,
anholanzapelic date not null,
duracionpelic time not null,
primary key (codigopelic)) ENGINE=InnoDB;
describe pelicula;

insert into pelicula values

("PS01","Apocalipto","Mel Gibson","Historica","2005/12/03","03:15:42"),
("PS02","Terminator Rise of Machines","Stephen Chow","Accion","2003/01/12","02:52:12"),
("PS03","El Beso del Dragon","Jet Li","Aventuras","2014/02/10","02:15:48"),
("PS04","Fireball","Kawaki kim","Accion","2009/02/11","01:50:48"),
("PS05","En Tierrra Hostil","Quentin Tarantino","Accion","2013/02/05","02:50:48"),
("PS06","Tron","Joseph howard","Ciencia ficcion","2011/05/10","02:50:48"),
("PS07","Yo Robot","Joe Roberts","Ciencia ficcion","2010/07/10","02:25:48");

select * from pelicula;

create table actores (
codigoact varchar (5) comment 'clave primaria',
nombreact varchar (20) not null,
edadact varchar (15)not null,
paisact varchar (20)not null,
añonaciact date not null,
partiotraspeli varchar (60) not null,
primary key (codigoact)) ENGINE=InnoDB;
describe actores;


insert into actores values

("RM001","Stephen Chow","42","Japon","1982/10/21","Kung fu sio,Shaolin Soccer"),
("RM002","Bradley Cooper","49","EE.UU","1980/12/20","Que paso ayer,Free guy"),
("RM003","Jelt Li","55","China","1978/01/21","Romeo Debe Morir,El Reino Prohibido"),
("RM004","Will Smith","49","EE.UU","1985/12/20","Hombres De Negro,Bad Boys"),
("RM005","Kannut Samerjai","41","Tailandia","1980/12/20","Fireball"),
("RM006","Mel Gibson","63","EE.UU","1975/12/19","Corazon Valiente,Arma Mortal"),
("RM007","Arnold Schwazerneger","68","EE.UU","1973/12/20","Terminator,Mentiras Verdaderas");

select * from actores;

create table grabacion (
codigograb varchar (8) comment 'clave primaria',
lugargrabpel varchar (40) not null,
mesrealgrab varchar (20) not null,
durgrabpel time not null,
diasgrapel varchar (40) not null,
gananciagrab varchar (50) not null,
primary key (codigograb)) ENGINE=InnoDB;
describe grabacion;

insert into grabacion values

("KM23","alaska","abril","03:20:30","20 dias"," 18.100.670 USD"),
("KM24","amazona","mayo","48:50:20","24 dias","5.000.001 USD"),
("KM25","","enero","21:29:10","15 dias","35.256.123 USD"),
("KM26","antartida","enero","19:27:10","21 dias","10.458.245 USD"),
("KM27","rio orinoco","octubre","98:20:10","48 dias","15.458.259 USD"),
("KM28","new york","julio","59:29:10","33 dias","33.103.000 USD"),
("KM29","escalera al cielo","agosto","42:28:10","10 dias","98.025.458 USD");