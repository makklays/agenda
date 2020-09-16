
// la estructura database
CREATE DATABASE `agenda` CHARACTER SET utf8 COLLATE utf8_general_ci;

// la esctructura de tables
// la mesa de contacto está relacionada con la mesa de telefono - uno a muchos

// table - 'contacto'
CREATE TABLE `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `ano` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

// table - 'telefono' telefonos de contacto
CREATE TABLE `telefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `prefijo` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
