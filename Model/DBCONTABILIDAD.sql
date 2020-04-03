
/*
CREAMOS LA BASE DE DATOS Contabilidad
*/

DROP DATABASE IF EXISTS Contabilidad;
CREATE DATABASE Contabilidad;
USE Contabilidad;


create table Sucursal
(
codSucursal  int unsigned Not null auto_increment primary key,
nombreSucursal varchar (30) not null

)ENGINE=InnoDB;

INSERT INTO Sucursal (nombreSucursal)values ('Sucursal1'),('Sucursal2'),('Sucursal 3');


create table GnlConfigMoneda
(
codMoneda int unsigned not null auto_increment primary key,
codSucursal int UNSIGNED not null,
enviado char(1),
Foreign key(codSucursal) References Sucursal(codSucursal) on update cascade on delete cascade
)ENGINE=InnoDB;

INSERT INTO GnlConfigMoneda (codSucursal,enviado)values ('1','1'),('2','1'),('3','1');

create table IveUnidad
(
 codUnidad int UNSIGNED not null auto_increment primary key,
 descUnidad varchar (50),
 codSucursal int UNSIGNED not null,
 enviado char (1),
Foreign key(codSucursal) References Sucursal(codSucursal) on update cascade on delete cascade
)ENGINE=InnoDB;

INSERT INTO IveUnidad (descUnidad,codSucursal,enviado)values ('Lapiz HB',1,'1'),('tajador',1,'1'),('calculadora',2,'1');

create table IveAlmacen
(
 codAlmacen int UNSIGNED not null auto_increment primary key,
 descAlmacen varchar (50),
 codSucursal int UNSIGNED not null,
 enviado char(1),
 Foreign key(codSucursal) References Sucursal(codSucursal) on update cascade on delete cascade

)ENGINE=InnoDB;
INSERT INTO IveAlmacen (descAlmacen,codSucursal,enviado)values ('product1','1','1'),('product2','1','1'),('product3','2','1');

create table IveArticulo
(
    codArticulo varchar(100) not null UNIQUE,
    codMoneda int UNSIGNED not null,
    codUnidad int UNSIGNED not null,
    codAlmacen int UNSIGNED not null,
    descArticulo varchar(100),
    glosaArticulo varchar(250),
    glosaUnidadArticulo Decimal,
    saldoCantidadArticulo Decimal,
    saldoCostoArticulo Decimal,
    stockMinimoArticulo varchar(100),
    stockMaximoArticulo varchar(100),
    enviado char (1),
    FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda) on update cascade on delete cascade,
    FOREIGN KEY (codUnidad) REFERENCES IveUnidad (codUnidad) on update cascade on delete cascade,
    FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen) on update cascade on delete cascade
    
)ENGINE=InnoDB;

 create table IveConsumoPendiente
 (
codConsumoPendiente int UNSIGNED not null auto_increment primary key,
codArticulo varchar (30) not null UNIQUE,
codAlmacen int UNSIGNED not null,
cantidadAprobada int not null,
fechaAprobada DATE,
cantidadConsumo int not null,
fechaConsumo DATE,
cuentaSolicitud varchar(50),
cuentaConsumo varchar(50),
estado char(1),
codSucursal varchar(3),
enviado  char (1),
 Foreign key (codArticulo) REFERENCES IveArticulo (codArticulo)  on update cascade on delete cascade,
 Foreign key (codAlmacen) References IveAlmacen (codAlmacen) on update cascade on delete cascade
);

 create table IveGrupoAlmacen
 (
codGrupoAlmacen int UNSIGNED not null auto_increment primary key,
codSucursal int UNSIGNED not null,
codConsumoPendiente int UNSIGNED not null,
codMoneda int UNSIGNED not null,
codAlmacen int UNSIGNED not null,
descGrupoAlmacen varchar (50) not null,
cuentaTransArticulo varchar (60) not null,
cuentaGrupoArticulo varchar (60) not null,
cuentaConsumoInt varchar (60) not null,
cuentaDiferenciaArticulo varchar(60) not null,
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade,
FOREIGN KEY (codConsumoPendiente) REFERENCES IveConsumoPendiente (codConsumoPendiente) on update cascade on delete cascade,
FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda) on update cascade on delete cascade,
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen) on update cascade on delete cascade
);

 create table GnlArea
 (
 codArea int UNSIGNED not null auto_increment primary key,
 codSucursal int UNSIGNED not null,
 enviado char (1),
 FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade
 );

create table IveConfigCodTransaccion
(
codTransaccion int UNSIGNED not null auto_increment primary key,
codSucursal int UNSIGNED not null,
descCodTransaccion varchar (50),
tipoCodTransaccion char (1),
conAsientos char (1),
enviado char(1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade
);

create table IveConsumo
(
codConsumo int UNSIGNED not null auto_increment primary key,
codSucursal int UNSIGNED not null,
codArea int UNSIGNED not null,
codAlmacen int UNSIGNED not null,
codTransaccion int UNSIGNED not null,
descConsumo varchar (250),
fechaConsumo  Date,
anulado char (1),
estado char (1),
cuentaConsumo varchar (60),
cuentaSol varchar (60),
usuarioRegistro varchar (60),
usuarioConsumo varchar (60),
enviado char (1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade,
FOREIGN KEY (codArea) REFERENCES GnlArea (codArea)on update cascade on delete cascade,
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen)on update cascade on delete cascade,
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion)on update cascade on delete cascade
);

create table IveTransaccionesSolicitud
(
codTransaccionSolicitud int UNSIGNED not null auto_increment primary key,
codArticulo varchar (30) not null UNIQUE,
codAlmacen int UNSIGNED not null,
codSucursal int UNSIGNED not null,
cuentaSolicitud varchar (40) not null,
cantidadTransSolicitud int not null,
fechaTransSolicitud date,
horaTransSolicitud varchar (30) not null,
glosaTransSolicitud varchar (30) not null,
cantidadAprobadaSolicitud varchar (30) not null,
fechaAprobadaSolicitud date,
estado char(1),
anulado char (1),
usuarioRegistro varchar(30) not null,
usuarioSolicitud varchar(30) not null,
enviado char(1),
Foreign key (codArticulo) REFERENCES IveArticulo (codArticulo)  on update cascade on delete cascade,
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen) on update cascade on delete cascade,
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade
);

 create table IveSolicitud
 (
codSolicitud int UNSIGNED not null auto_increment primary key,
codSucursal int UNSIGNED not null,
codTransaccionSolicitud int UNSIGNED not null,
codArea int UNSIGNED not null,
codAlmacen int UNSIGNED not null,
codTransaccion int UNSIGNED not null,
cuentaSolicitud varchar (60) not null,
fechaSolicitud Date,
descSolicitud varchar (60) not null,
estado char (1),
anulado char(1),
usuarioRegistro varchar (40) not null,
usuarioSolicitud varchar (40) not null,
enviado char(1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade,
FOREIGN KEY (codTransaccionSolicitud) REFERENCES IveTransaccionesSolicitud (codTransaccionSolicitud) on update cascade on delete cascade,
FOREIGN KEY (codArea) REFERENCES GnlArea (codArea) on update cascade on delete cascade,
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen) on update cascade on delete cascade,
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion)

);

create table usuario
(
	id_usuario int not null auto_increment primary key,
	usuario varchar(50),
	email varchar(255),
	contrasena varchar(60)
);


insert into usuario(id_usuario,usuario,email,contrasena) value (null,"Administrador","admin@gmail.com","admin");


create table categoria
(
	id_categoria int not null auto_increment primary key,
	codigoCategoria varchar(50),
	nombreCategoria varchar(50),
	descripcionCategoria varchar(200),
  	estadoCategoria boolean not null default 0
);


 create table IveTransaccionesConsumo
 (
     codeTransConsumo int UNSIGNED not null auto_increment primary key,
     codArticulo varchar(30) not null UNIQUE,
     codSucursal int UNSIGNED not null,
     cuentaSolicitud varchar (30),
     cantidadAprobadaConsumo int not null,
     fechaAprobadaConsumo date,
     horaTransConsumo varchar (30),
     glosaTransConsumo varchar (30),
     cantidadTransConsumo Int not null,
     estado char(1),
     anulado char(1),
     usuarioRegistro varchar (10),
     usuarioConsumo varchar (10),
     enviado char(1),
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)on update cascade on delete cascade,
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)on update cascade on delete cascade
);

 create table IveTransaccionArticulo
 (
codeTransArticulo int UNSIGNED not null auto_increment primary key,
codSucursal int UNSIGNED not null,
codUnidad int UNSIGNED not null,
codMoneda int UNSIGNED not null,
codArticulo varchar(30) not null UNIQUE,
codTransaccion int UNSIGNED not null,
cuentaSolicitud varchar (30),
cuentaConsumo varchar (30),
fechaTransArticulo date,
horaTransArticulo varchar (30),
glosaTransArticulo varchar (30),
cantidadTransArticulo varchar (30),
costoUnidadArticulo varchar(30),
saldoCantidadArticulo varchar (30),
saldoCostoArticulo decimal,
tipoCambioMoneda decimal,
usuarioConsumo varchar (30),
usuarioRegistro varchar (30),
anulado char(1),
enviado char(1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)on update cascade on delete cascade,
FOREIGN KEY (codUnidad) REFERENCES IveUnidad (codUnidad)on update cascade on delete cascade,
FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda)on update cascade on delete cascade,
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion)on update cascade on delete cascade,
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)on update cascade on delete cascade
);

create table IveConfigPrelimanares
(
    codePreliminares int UNSIGNED not null auto_increment primary key,
    codSucursal int UNSIGNED not null,
    tipoCodigo char(1),
    formaCodigo char (1),
    longitudCodigo varchar (60),
    AplicacionCodigo varchar (60),
    MascaraCodigo varchar (60),
    enviado char (1),
    FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal) on update cascade on delete cascade

);

create table Factura
(
   codFactura int UNSIGNED not null auto_increment primary key,
   nombreCliente varchar(50)not null,
   codConsumo int UNSIGNED not null,
   codigoControl int not null,
   codArticulo varchar (50) not null UNIQUE,
   cantidad int not null ,
   precio varchar (40) not null,
   FOREIGN KEY (codConsumo) REFERENCES IveConsumo (codConsumo)on update cascade on delete cascade,
   FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)on update cascade on delete cascade
);
create table IveArticuloFactura
(
 codIveArticuloFactura int UNSIGNED not null auto_increment primary key,
 codArticulo varchar(30) not null UNIQUE,
 codFactura int UNSIGNED not null,
 FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)on update cascade on delete cascade,
 FOREIGN KEY (codFactura) REFERENCES Factura (codFactura)on update cascade on delete cascade
);
