drop database if exists lamatanza;
create database lamatanza;
use lamatanza;

create table viaje  (id bigint primary key not null auto_increment,
                     origen varchar(40),
                     destino varchar(40),
                     idchofer bigint,
					latitud varchar(40),
                    longitud varchar(40),
                    realTotal integer,
                    realFree integer,
                    realReefer integer,
                    realHazard integer,
                    realPeajes smallint,
                    realViaticos integer,
                    realEta integer,
					realEtd integer,
                    realCombustible integer,
                    realKm integer,
                    fecha date
                        );

create table usuarios  (id bigint primary key not null auto_increment,
						nombre varchar(40),
						apellido varchar(40) ,
						username varchar(40),
						contra varchar(40),
						rol varchar(40),
						codigo varchar(40),
						email varchar(40),
                        validar varchar(20)
                        );


						
                        
insert into usuarios (`nombre`, `apellido`, `username`, `contra`,`rol`, `codigo`, `email`, `validar` ) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'si');
