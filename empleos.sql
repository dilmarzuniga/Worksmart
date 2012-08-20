-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 13-08-2012 a las 16:16:55
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `empleos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `curriculum`
-- 

CREATE TABLE `curriculum` (
  `id_curriculum` int(100) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `nombres` varchar(100) default NULL,
  `apellidos` varchar(100) default NULL,
  `fecha_nacimiento` varchar(100) default NULL,
  `telefono` varchar(30) default NULL,
  `dui` varchar(20) default NULL,
  `nit` varchar(20) default NULL,
  `direccion` varchar(250) default NULL,
  `celular` varchar(100) default NULL,
  `direccion2` varchar(250) default NULL,
  `estado_civil` varchar(100) default NULL,
  `correo` varchar(100) default NULL,
  `pais` varchar(100) default NULL,
  `mensaje_personal` varchar(250) default NULL,
  `sexo` varchar(100) default NULL,
  `estudios_basicos` varchar(100) default NULL,
  `bachillerato` varchar(100) default NULL,
  `est_superiores` varchar(100) default NULL,
  `exp_laboral` varchar(100) default NULL,
  `profesion` varchar(100) default NULL,
  `ref_personal` varchar(100) default NULL,
  `prof_ref` varchar(100) default NULL,
  `tel_ref` varchar(100) default NULL,
  `mail_ref` varchar(100) default NULL,
  PRIMARY KEY  (`id_curriculum`),
  KEY `id_curriculum` (`id_curriculum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

-- 
-- Volcar la base de datos para la tabla `curriculum`
-- 

INSERT INTO `curriculum` (`id_curriculum`, `username`, `nombres`, `apellidos`, `fecha_nacimiento`, `telefono`, `dui`, `nit`, `direccion`, `celular`, `direccion2`, `estado_civil`, `correo`, `pais`, `mensaje_personal`, `sexo`, `estudios_basicos`, `bachillerato`, `est_superiores`, `exp_laboral`, `profesion`, `ref_personal`, `prof_ref`, `tel_ref`, `mail_ref`) VALUES 
(48, 'thiz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'adrian', 'Henry Adrian', 'Gómez Romero', '14/01/1992', '2551-0000', '01233555', '0506-140192-0900', 'La Cima', '7998-9090', NULL, 'Acompañado', 'adrian@callejon.com', 'El Salvador', 'Hola :D', 'Masculino', 'Kinder Garten BENDIX', 'Instituto Técnico Ricaldone Opcion Informatica', 'Universidad Don Bosco Ing. Informatica', '13 años', 'Programador', 'Andrea Platero', 'Edecan', '2257-7777', 'andrea@gmail.com'),
(45, 'ana', 'Ana', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'k', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'ryuk', 'sanssss', 'no', '23', '22222222', '00000', '00009', 'san salvador', '799900', NULL, '', '', '', 'hoa', '', 'dsdfsf', 'fff', 'ffffws', 'dd', 'vv', 'cc', 'cfccc', 'vv', ''),
(35, 'dani', 'sanss', 'no', '23', '22222222', '00000', '00009', 'san salvador', '799900', '', '', '', '', 'hoa', '', '', '', '', '', '', '', '', '', ''),
(49, 'karla', 'Karla', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'teffy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'admin', '', 'Guandique', '196703/05', '22882323', '2342234554', '', 'Residencial Los Andes', '', NULL, 'Soltero', 'ricardo.elias@udb.edu.sv', 'EL SALVADOR', 'DF', 'Masculino', 'sr', ' sdf', 'bla bla', 'bastante', 'catedratico', 'bla bla', 'adfv', '23233445', ''),
(52, 'PochiiMel', 'Alejandra Iveth', 'Meléndez Morales', '21-11-1992', '', '', '', '', '', NULL, '', 'ale.9ri@gmail.com', '', '', 'Femenino', 'Colegio Modelo Adventista', 'Instituto Técnico Ricaldone', 'Universidad Don Bosco', '', 'Técnico en Ingeniería en Computación', '', '', '', ''),
(53, 'CindyFo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'MendezDav', 'William David', 'Parras Méndez', '06-11-2011', '', '', '', '', '', NULL, '', '', '', 'Hola mi nombre es David Parras', '', '', '', '', '', 'Técnico en Ingeniería en Computación', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `empresas`
-- 

CREATE TABLE `empresas` (
  `id_empresa` varchar(11) NOT NULL default '',
  `nombre` varchar(200) default NULL,
  `password` varchar(45) default NULL,
  `persona_contacto` varchar(200) default NULL,
  `direccion` varchar(500) default NULL,
  `departamento` varchar(500) default NULL,
  `email` varchar(200) default NULL,
  `telefono` varchar(100) default NULL,
  `fax` varchar(20) default NULL,
  `tipo` varchar(200) default NULL,
  `descripcion` varchar(500) default NULL,
  `usrnivel` int(11) default NULL,
  PRIMARY KEY  (`id_empresa`),
  UNIQUE KEY `id_empresa_2` (`id_empresa`),
  UNIQUE KEY `id_empresa_3` (`id_empresa`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `empresas`
-- 

INSERT INTO `empresas` (`id_empresa`, `nombre`, `password`, `persona_contacto`, `direccion`, `departamento`, `email`, `telefono`, `fax`, `tipo`, `descripcion`, `usrnivel`) VALUES 
('Apple', 'Apple Store', 'A$TGaXsEb6fO6', 'Jose', 'Centro Comercial Galerias Escalon', 'San Salvador', 'appstore.es@apple.com', '22349089', '0', 'Portatiles', 'Tienda de dispositivos electronicos', 2),
('bic', 'BIC', 'b$tnAtpjuDJAE', 'Jose', 'Los Abetos', 'Ahuachapán', 'info@bic.com', '2234-2134', '2248-2189', 'lapices y lapiceros', 'utiles escolares', 2),
('CAESS', 'Compañia de Alumbrado Eléctrico de San Salvador', 'C$OeZ.GId4N5I', 'Jose', 'San Salvador', 'San Salvador', 'caess@aeses.com', '22342134', '0', 'Alumbrado Eléctrico', '', 2),
('Sony', 'SONY', 'S$BVVYBqfZQLE', 'Adrian', 'San Salvador', 'San Salvador', 'sony@service.com', '22342134', '22482189', 'Sociedad Anónima', 'Tienda de dispositivos electronicos', 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensajes`
-- 

CREATE TABLE `mensajes` (
  `id_mensaje` int(11) NOT NULL auto_increment,
  `id_user` int(11) default NULL,
  `mensaje` varchar(500) default NULL,
  `leido` int(11) default NULL,
  PRIMARY KEY  (`id_mensaje`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Volcar la base de datos para la tabla `mensajes`
-- 

INSERT INTO `mensajes` (`id_mensaje`, `id_user`, `mensaje`, `leido`) VALUES 
(16, 1, 'borrar la cuenta', 0),
(14, 35, 'borrar la cuenta', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `plazas`
-- 

CREATE TABLE `plazas` (
  `id_empleo` int(11) NOT NULL auto_increment,
  `id_empresa` varchar(11) default NULL,
  `descripcion` varchar(500) default NULL,
  `salario` varchar(100) default NULL,
  `nomb_empleo` varchar(100) NOT NULL,
  `requisitos_empleo` varchar(500) default NULL,
  `tipo_contrato` varchar(200) default NULL,
  `genero` varchar(30) default NULL,
  `Edad_rango` varchar(15) default NULL,
  `vehiculo` varchar(50) default NULL,
  `depto_plaza` varchar(50) default NULL,
  `Categoria` varchar(300) default NULL,
  PRIMARY KEY  (`id_empleo`),
  KEY `id_empleo` (`id_empleo`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- 
-- Volcar la base de datos para la tabla `plazas`
-- 

INSERT INTO `plazas` (`id_empleo`, `id_empresa`, `descripcion`, `salario`, `nomb_empleo`, `requisitos_empleo`, `tipo_contrato`, `genero`, `Edad_rango`, `vehiculo`, `depto_plaza`, `Categoria`) VALUES 
(10, 'bic', '', '$250', 'Bartender', 'Sin problemas de horario', 'Nocturno', 'Masculino', '18-25', 'Indiferente', 'Usulutan', 'servicio_cliente'),
(11, 'bic', 'kjojkjmkjkjwe', '200', 'Aeromosa', 'dsfsdfasdfasdfa', 'Nocturno', 'Femenino', 'Rango separado ', 'Indiferente', 'San Salvador', 'turismo'),
(12, 'bic', 'Digitación de Datos', '$100', 'Secretaria', ' Excelente presentación, Conocimientos de Office 2003', 'Sabatino', 'Femenino', '18-30', 'Requerido', 'Santa Ana', 'admin_oficina'),
(14, NULL, 'qweqweqeqw', '$500', 'alaskdlaskd', 'adahjdhqjehwqjeqwasdasd', 'qeqweasdf', 'Femenino', '10-20', 'Requerido', 'Santa Ana', NULL),
(15, NULL, 'sfaqeqeqw', '500', 'qeqwe', 'qweqweqwe', 'qeqweqwe', 'Femenino', '10-80', 'Requerido', 'San Salvador', NULL),
(16, 'Apple', 'Repartidor de productos                    ', '350', 'Repartidor', ' Licencia de Conducir tipo LIVIANA    ', 'Tiempo Completo', 'Indiferente', '25-30', 'no', 'chalatenango', 'otros'),
(17, NULL, 'adsqeqewrrw', '600', 'htrtrhsdfsd', 'sfsdfasf', 'completo', 'femenino', '18-20', 'SI', 'sonsonate', 'servicio al cliente'),
(19, NULL, 'Administración de balances                    ', '$500', 'Auxiliar contable', ' Excelente presentación  ', 'Medio Tiempo', 'Indiferente', '', '', 'Cualquiera', 'Informatica'),
(20, NULL, 'Administración de balances                    ', '$500', 'Auxiliar contable', ' Excelente presentación  ', '', '', '', '', 'Cualquiera', 'Informatica'),
(21, NULL, 'Administración de balances                    ', '$100', 'Auxiliar contable', ' Excelente presentación  ', '', '', '', '', 'Cualquiera', 'Informatica'),
(22, NULL, 'Administración de balances                    ', '$100', 'Auxiliar contable', ' Excelente presentación  ', '', '', '', '', 'Cualquiera', 'Informatica'),
(23, NULL, 'Administración de balances                    ', '$100', 'Auxiliar contable', ' Excelente presentación  ', '', '', '', '', 'Cualquiera', 'Informatica'),
(24, NULL, 'ss', '$0', 'Prueba', ' ss', 'Medio Tiempo', 'Femenino', 'indiferente', 'Indiferente', 'Ahuachapan', 'Administración Oficinas'),
(25, '', 'ss', '222', 'Prueba 1', ' sss', 'Medio Tiempo', 'Femenino', 'no importa edad', 'Indiferente', 'Ahuachapan', 'Administración Oficinas'),
(26, '', 'ss', 'ss', 'ss', ' ss', 'Medio Tiempo', 'Femenino', '', 'Indiferente', 'Ahuachapan', 'Administración Oficinas'),
(28, 'CAESS', 'Reparacion de daños en hogares                                        ', '555', 'Electricista', ' Tecnico Electronica    ', 'Medio Tiempo', 'Indiferente', '20 - 25 años', 'Requerido', 'Cabañas', 'informatica'),
(31, 'Apple', 'Sin descripcion                   ', '900', 'Vendedor Junior', 'Ninguno', 'Medio Tiempo', 'Masculino', '29-40', 'Indiferente', 'Ahuachapan', 'Administración Oficinas'),
(32, 'Apple', 'kqjw', '900', 'Vendedor Informal', 'wkqej ', 'Temporal', 'Masculino', '2-10', 'Indiferente', 'Ahuachapan', 'Administración Oficinas');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `solicitudes`
-- 

CREATE TABLE `solicitudes` (
  `id_solicitud` int(11) NOT NULL auto_increment,
  `id_user` int(10) default NULL,
  `id_empleo` int(100) default NULL,
  `fecha` date default NULL,
  PRIMARY KEY  (`id_solicitud`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `solicitudes`
-- 

INSERT INTO `solicitudes` (`id_solicitud`, `id_user`, `id_empleo`, `fecha`) VALUES 
(1, 36, 1, NULL),
(2, 36, 24, NULL),
(3, 44, 1, NULL),
(4, 44, 22, NULL),
(5, 44, 20, NULL),
(6, 46, 31, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `id_user` int(100) NOT NULL auto_increment,
  `username` varchar(500) default NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY  (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` (`id_user`, `username`, `nombre`, `password`, `nivel`) VALUES 
(1, 'Lam', 'Néstor Lam', 'L$ycdbrWULcbA', 1),
(3, 'Ruso', 'David Alemán', 'R$kE9B2fn9Ew2', 1),
(4, 'Rake', 'Raquel Sibrian', 'R$vQevJuOWKcU', 1),
(6, 'Apple', 'Apple Store', 'A$TGaXsEb6fO6', 2),
(17, 'Sony', 'SONY', 'S$BVVYBqfZQLE', 2),
(18, 'tommy', 'Tommy', 't$RaubMK96diA', 3),
(21, 'Rodrigo', 'Rodrigo Rodriguez', 'R$kAbrcetcQRI', 1),
(24, 'thiz', 'thiz', 't$UN3SXRQbhWI', 1),
(26, 'CAESS', 'Compañia de Alumbrado Eléctrico de San Salvador', 'C$OeZ.GId4N5I', 2),
(27, 'bic', 'BIC', 'b$tnAtpjuDJAE', 2),
(28, 'jose', 'Jose', 'j$25Cs3EORK22', 3),
(29, 'jose', 'Jose', 'j$25Cs3EORK22', 3),
(30, 'Andrea', 'Andrea', 'A$oB45ccuyzNw', 3),
(34, 'dani', 'Daniel', 'd$hRaco0evKUo', 3),
(35, 'ryuk', 'Ryuk', 'r$hNVCVRZT7fs', 3),
(36, 'adrian', 'adrian', 'a$GmffM.8vYBs', 3),
(37, 'ana', 'ana', 'a$MGbTgIGbS4w', 3),
(38, 'k', 'k', 'k$CTTar.FDrDo', 3),
(40, 'thiz', 'Thiz', 't$UN3SXRQbhWI', 3),
(41, 'karla', 'karla', 'k$mI2U6nKkTtE', 3),
(42, 'teffy', 'Stephanie', 't$rY7XmUGumeY', 3),
(43, 'admin', 'Ricardo Elias Guandique', 'a$jdLmRuLn5oc', 3),
(44, 'PochiiMel', 'Ale Meléndez', 'L$ycdbrWULcbA', 3),
(45, 'CindyFo', 'Cindy', 'C$/GArHA3hfM.', 3),
(46, 'MendezDav', 'William David', 'M$o91NdrqHHAs', 3);
