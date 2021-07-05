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
						realKm varchar(40),
						estimadoKm varchar(40),
						realCombustible varchar(40),
                        estimadoCombustible varchar(40),
                        realEtd varchar(40),
						estimadoEtd varchar(40),
						realEta varchar(40),
                        estimadoEta varchar(40),
                        realViaticos varchar(40),
						estimadoViaticos varchar(40),
						realPeajes varchar(40),
                        estimadoPeajes varchar(40),
                        realExtras varchar(40),
						estimadoExtras varchar(40),
						realHazard varchar(40),
                        estimadoHazard varchar(40),
                        realReefer varchar(40),
						estimadoReefeer varchar(40),
                        realFree varchar(40),
						estimadoFree varchar(40),
                        realTotal varchar(40),
                        estimadototal varchar(40));

create table personal  (id smallint primary key not null auto_increment,
						choferAsigando smallint not null);
                        
insert into usuarios (`nombre`, `apellido`, `username`, `contra`,`rol`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');
