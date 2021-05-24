-- *********************************
-- * Base de Datos de la Pagina    *
-- * Luis D. Padilla               *
-- * 441 10 3930                   *
-- * COTI 4210 MR1                 *
-- *********************************

-- Script de creacion de tablas
-- *********************************

CREATE DATABASE licoDB;
USE licoDB;

CREATE TABLE cliente (
  user_pk             VARCHAR(10),
  nombre              VARCHAR(15) NOT NULL,
  inicial             CHAR(1),
  apellido1           VARCHAR(20) NOT NULL,
  apellido2           VARCHAR(20),
  negocio             VARCHAR(20) NOT NULL,
  direccion           VARCHAR(30) NOT NULL,
  pueblo              VARCHAR(20) NOT NULL,
  zip_code            VARCHAR(5) NOT NULL,
  telefono            VARCHAR(15) NOT NULL,
  correo1             VARCHAR(30) NOT NULL,
  correo2             VARCHAR(30),
  passwd              VARCHAR(10) NOT NULL,
  servicio            VARCHAR(12) NOT NULL,
     PRIMARY KEY (`user_pk`)
);

-- *********************************
-- Final del Script
