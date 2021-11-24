# Data base configuration

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
-- Base de datos: `milis`
CREATE DATABASE milis;
use milis;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL DEFAULT '0',
  `ApellidoP` varchar(40) NOT NULL DEFAULT '0',
  `ApellidoM` varchar(40) NOT NULL DEFAULT '0',
  `Correo` varchar(40) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
 
-- Índices de la tabla 'cliente'

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);
 

-- AUTO_INCREMENT de la tabla `cliente`

ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
