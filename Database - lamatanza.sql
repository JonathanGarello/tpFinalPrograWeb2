drop database if exists lamatanza;
create database lamatanza;
use lamatanza;

create table usuarios  (id bigint primary key not null auto_increment,
						nombre varchar(40),
						apellido varchar(40) ,
						username varchar(40),
						contra varchar(40),
						rol varchar(40));

create table proforma  (id bigint primary key not null auto_increment,
						numero smallint not null,
						fecha date);

create table cliente  (id smallint primary key not null auto_increment,
						denominacion varchar(40),
						cuit varchar(40) ,
						direccion varchar(40),
						telefono varchar(40),
						contacto1 varchar(40),
                        contacto2 varchar(40));

create table viaje  (id bigint primary key not null auto_increment,
						origen varchar(40),
						destino varchar(40) ,
						fechaCarga date,
						eta varchar(40));

create table carga  (id bigint primary key not null auto_increment,
						tipo varchar(40),
						pesoNeto varchar(40),
						hazard varchar(40),
                        Reefer varchar(40),
                        imoClass varchar(40),
                        temperatura varchar(40),
						imoSclass varchar(40));
	
create table costeo  (id bigint primary key not null auto_increment,
						realKm integer,
						estimadoKm integer,
						realCombustible smallint,
                        estimadoCombustible smallint,
                        realEtd integer,
						estimadoEtd integer,
						realEta integer,
                        estimadoEta integer,
                        realViaticos integer,
						estimadoViaticos integer,
						realPeajes smallint,
                        estimadoPeajes smallint,
                        realExtras integer,
						estimadoExtras integer,
						realHazard integer,
                        estimadoHazard integer,
                        realReefer integer,
						estimadoReefeer integer,
                        realFree integer,
						estimadoFree integer,
                        realTotal integer,
                        estimadototal integer);

create table personal  (id smallint primary key not null auto_increment,
						choferAsigando varchar(40) not null);
                        
insert into usuarios (`nombre`, `apellido`, `username`, `contra`,`rol`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');
