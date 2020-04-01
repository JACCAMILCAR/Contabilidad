CREATE DATABASE "Contabilidad"
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Spain.1252'
    LC_CTYPE = 'Spanish_Spain.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;


create table Sucursal
(
codSucursal SERIAL PRIMARY KEY,
nombreSucursal varchar (30)

);
INSERT INTO Sucursal (nombreSucursal)values ('Sucursal1'),('Sucursal2'),('Sucursal 3');


create table GnlConfigMoneda 
(
codMoneda SERIAL PRIMARY KEY,
codSucursal INTEGER,
enviado char(1) ,
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)
);

INSERT INTO GnlConfigMoneda (codSucursal,enviado)values ('1','1'),('2','1'),('3','1');

create table IveUnidad
(
 codUnidad SERIAL PRIMARY KEY,
 descUnidad varchar (50),
 codSucursal INTEGER,
 enviado char (1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)

);
INSERT INTO IveUnidad (descUnidad,codSucursal,enviado)values ('product1','1','1'),('product2','1','1'),('product3','2','1');

create table IveAlmacen
(
 codAlmacen SERIAL PRIMARY KEY,
 descAlmacen varchar (50),
 codSucursal INTEGER,
 enviado char(1),
 FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)

);
INSERT INTO IveAlmacen (descAlmacen,codSucursal,enviado)values ('product1','1','1'),('product2','1','1'),('product3','2','1');

create table IveArticulo
(
    codArticulo SERIAL PRIMARY KEY,
    codMoneda INTEGER,
    codUnidad INTEGER,
    codAlmacen INTEGER,
    descArticulo varchar(100),
    glosaArticulo varchar(250),
    glosaUnidadArticulo Decimal,
    saldoCantidadArticulo Decimal,
    saldoCostoArticulo Decimal,
    stockMinimoArticulo varchar(100),
    stockMaximoArticulo varchar(100),
    codSucursal varchar(10),
    enviado char (1),
    FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda),
    FOREIGN KEY (codUnidad) REFERENCES IveUnidad (codUnidad),
    FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen)
    
);
 create table IveConsumoPendiente
 (
codConsumoPendiente SERIAL PRIMARY KEY,
codArticulo INTEGER,
codAlmacen INTEGER,
cantidadAprobada INT NOT NULL,
fechaAprobada DATE,
cantidadConsumo INT NOT NULL,
fechaConsumo DATE,
cuentaSolicitud varchar(50),
cuentaConsumo varchar(50),
estado char(1),
codSucursal varchar(3),
enviado  char (1),
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo),
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen)
    
 );

 create table IveGrupoAlmacen
 (
codGrupoAlmacen SERIAL PRIMARY KEY,
codSucursal INTEGER,
codConsumoPendiente INTEGER,
codMoneda INTEGER,
codAlmacen INTEGER,
descGrupoAlmacen varchar (50),
cuentaTransArticulo varchar (60),
cuentaGrupoArticulo varchar (60),
cuentaConsumoInt varchar (60),
cuentaDiferenciaArticulo varchar(60),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal),
FOREIGN KEY (codConsumoPendiente) REFERENCES IveConsumoPendiente (codConsumoPendiente),
FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda),
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen)

 );

 create table GnlArea
 (
 codArea SERIAL PRIMARY KEY,
 codSucursal INTEGER,
 enviado char (1),
 FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)
 );

create table IveConfigCodTransaccion
(
codTransaccion SERIAL PRIMARY KEY,
codSucursal INTEGER,
descCodTransaccion varchar (50),
tipoCodTransaccion char (1),
conAsientos char (1),
enviado char(1),
 FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)
);
create table IveConsumo
(
codConsumo SERIAL PRIMARY KEY,
codSucursal INTEGER,
codArea INTEGER,
codAlmacen INTEGER,
codTransaccion INTEGER,
descConsumo varchar (250),
fechaConsumo  Date,
anulado char (1),
estado char (1),
cuentaConsumo varchar (60),
cuentaSol varchar (60),
usuarioRegistro varchar (60),
usuarioConsumo varchar (60),
enviado char (1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal),
FOREIGN KEY (codArea) REFERENCES GnlArea (codArea),
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen),
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion)
);

create table IveTransaccionesSolicitud
(
codTransaccionSolicitud SERIAL PRIMARY KEY,
codArticulo INTEGER,
codAlmacen INTEGER,
codSucursal INTEGER,
cuentaSolicitud varchar (40),
cantidadTransSolicitud int not null,
fechaTransSolicitud date,
horaTransSolicitud varchar (30),
glosaTransSolicitud varchar (30),
cantidadAprobadaSolicitud varchar (30),
fechaAprobadaSolicitud date,
estado char(1),
anulado char (1),
usuarioRegistro varchar(30),
usuarioSolicitud varchar(30),
enviado char (1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal),
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen),
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)

);
 create table IveSolicitud
 (
codSolicitud SERIAL PRIMARY KEY,
codSucursal INTEGER,
codTransaccionSolicitud INTEGER,
codArea INTEGER,
codAlmacen INTEGER,
codTransaccion INTEGER,
cuentaSolicitud varchar (60),
fechaSolicitud Date,
descSolicitud varchar (60),
estado char (1),
anulado char(1),
usuarioRegistro varchar (40),
usuarioSolicitud varchar (40),
enviado char(1),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal),
FOREIGN KEY (codTransaccionSolicitud) REFERENCES IveTransaccionesSolicitud (codTransaccionSolicitud),
FOREIGN KEY (codArea) REFERENCES GnlArea (codArea),
FOREIGN KEY (codAlmacen) REFERENCES IveAlmacen (codAlmacen),
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion)

 );
create table GnlUsuario
(
    codUsuario SERIAL PRIMARY KEY,
    codSucursal INTEGER,
    enviado char (1)
);
 create table IveTransaccionesConsumo
 (
     codeTransConsumo SERIAL PRIMARY KEY,
     codArticulo INTEGER,
     codSucursal INTEGER,
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
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo),
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)
);
 create table IveTransaccionArticulo
 (
codTransArticulo SERIAL PRIMARY KEY,
codSucursal INTEGER,
codUnidad INTEGER,
codMoneda INTEGER,
codArticulo INTEGER,
codTransaccion INTEGER,
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
FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal),
FOREIGN KEY (codUnidad) REFERENCES IveUnidad (codUnidad),
FOREIGN KEY (codMoneda) REFERENCES GnlConfigMoneda (codMoneda),
FOREIGN KEY (codTransaccion) REFERENCES IveConfigCodTransaccion (codTransaccion),
FOREIGN KEY (codArticulo) REFERENCES IveArticulo (codArticulo)

 );

create table IveConfigPreliminares
(
    codPreliminares SERIAL PRIMARY KEY,
    codSucursal INTEGER,
    tipoCodigo char(1),
    formaCodigo char (1),
    longitudCodigo varchar (60),
    aplicacionCodigo varchar (60),
    mascaraCodigo varchar (60),
    enviado char (1),
    FOREIGN KEY (codSucursal) REFERENCES Sucursal (codSucursal)

);










































































































