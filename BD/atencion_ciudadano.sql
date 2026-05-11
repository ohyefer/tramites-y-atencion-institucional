-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 14:50:22
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atencion_ciudadano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregar_pase`
--

CREATE TABLE `agregar_pase` (
  `id_agregarp` int(11) NOT NULL,
  `nombre_p` varchar(100) NOT NULL,
  `apellido_p` varchar(100) NOT NULL,
  `cedula_p` int(20) NOT NULL,
  `fecha_inicio` varchar(100) NOT NULL,
  `fecha_p` varchar(100) NOT NULL,
  `pisos_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `estatu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nombre_cargo`) VALUES
(0, ''),
(1, 'Administrador'),
(2, 'Jefe de oficina'),
(3, 'Registrador'),
(4, 'Pase');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `add_departamento` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `add_departamento`) VALUES
(0, ''),
(1, 'Seguro'),
(2, 'Inicial'),
(3, 'Primario'),
(4, 'Especial'),
(5, 'Defensoria'),
(6, 'Escuela privada'),
(7, 'Canaima'),
(8, 'OPSU'),
(9, 'Escuela tecnica'),
(10, 'Deporte'),
(11, 'CNAE'),
(12, 'Adulto'),
(13, 'Gestion interna'),
(14, 'Despacho'),
(15, 'Fundobit'),
(16, 'Asesoria'),
(17, 'Formacion'),
(18, 'Archivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_tramites`
--

CREATE TABLE `detalles_tramites` (
  `id_detalle_tramite` int(11) NOT NULL,
  `pisos_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalles_tramites`
--

INSERT INTO `detalles_tramites` (`id_detalle_tramite`, `pisos_id`, `departamento_id`) VALUES
(2, 1, 13),
(1, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `nombre_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `nombre_status`) VALUES
(0, 'Espera'),
(1, 'En atención'),
(2, 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nombre_apellido` varchar(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `pisos_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `nombre_apellido`, `username`, `password`, `email`, `cargo_id`, `pisos_id`, `departamento_id`) VALUES
(1, 'Zona Educativa ', 'zonaeducativa', '123', 'zonaeducativa@gmail.com', 1, 0, 0),
(7, 'Yeferson Bravo', 'bravoyefer', '123', 'bravoluquey@gmai', 4, 4, 4),
(9, 'Nestor jose', 'nestor', '123', 'nestorm@gmail.com', 3, 4, 1),
(10, 'Luis', 'luis', '123', 'luisgraterol@gmail.com', 2, 3, 2),
(11, 'Juan Perez', 'juanp', '123', 'juanp@gmail.com', 2, 3, 9),
(12, 'Pedro Morales', 'pedrom', '123', 'pedrom@gmail.com', 2, 3, 18),
(13, 'Daniel Colmenarez', 'daniel', '123', 'daniel@hotmail.com', 3, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `id_pisos` int(10) NOT NULL,
  `add_piso` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id_pisos`, `add_piso`) VALUES
(0, ''),
(1, 'Piso 1'),
(2, 'Piso 2'),
(3, 'Piso 3'),
(4, 'Planta baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publico`
--

CREATE TABLE `publico` (
  `id_publico` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `correo` varchar(30) NOT NULL,
  `motivo` varchar(500) DEFAULT NULL,
  `fecha` varchar(500) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `estatus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publico`
--

INSERT INTO `publico` (`id_publico`, `nombre`, `apellido`, `cedula`, `correo`, `motivo`, `fecha`, `departamento_id`, `estatus_id`) VALUES
(5, 'yeferson', 'bravo', 24976444, 'bravoluquey@gmail.com', 'pasante', '2-2-2018', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_tramites`
--

CREATE TABLE `registro_tramites` (
  `id_registro` int(11) NOT NULL,
  `nombre_tra` varchar(100) NOT NULL,
  `apellido_tra` varchar(100) NOT NULL,
  `cedula_tra` int(20) NOT NULL,
  `correo_tra` varchar(200) NOT NULL,
  `motivo_tra` varchar(5000) NOT NULL,
  `fecha_inicio` varchar(11) NOT NULL,
  `fecha_tra` varchar(11) NOT NULL,
  `tipopersonal_id` int(11) NOT NULL,
  `tramites_id` int(11) NOT NULL,
  `requisitos_id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_tramites`
--

INSERT INTO `registro_tramites` (`id_registro`, `nombre_tra`, `apellido_tra`, `cedula_tra`, `correo_tra`, `motivo_tra`, `fecha_inicio`, `fecha_tra`, `tipopersonal_id`, `tramites_id`, `requisitos_id`, `departamento_id`) VALUES
(2, 'Yeferson', 'Montero', 23, 'bravoluquey@gmail.com', 'Pasantes', '', '07-07-2018', 1, 17, 1, 1),
(3, 'mariana', 'vargas', 16804011, 'mariavargas@hotmail.com', 'Visita', '', '07-07-2018', 1, 26, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

CREATE TABLE `requisitos` (
  `id_requisitos` int(11) NOT NULL,
  `nombre_requisito` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `requisitos`
--

INSERT INTO `requisitos` (`id_requisitos`, `nombre_requisito`) VALUES
(1, 'Plantilla de solicitud de vacaciones, Copia de ultima vacacion, Recibo de pago, Constancia de trabajo laborando, Documento probatorio '),
(2, 'Plantilla de tramite firmada, Comprobante de pago, Constancia de trabajo'),
(3, 'Media tecnicas, Nocturna, Exposicion de motivo'),
(4, 'Comprobante de pago'),
(5, 'Constancia de trabajo, Recibo de pago, Exposicion de motivo, Copia simple de titulo y autenticidad'),
(6, '1- Planilla de Traslado  (2- originales) Firmadas y Selladas por los Directores del Plantel Origen y Destino.\n2- Recibo de Pago.\n3- Constancia de Trabajo que Indique la Fecha Desde Cuando labora en ese Plantel  (1 Original y 1 Copia).\n'),
(7, '1- Planilla de Traslado  (2- Originales) Firmadas y Selladas por los Directores del Plantel Origen y Destino.\n2- Recibo de Pago.\n3- Constancia de Trabajo (1 Original y 1 Copia).\nNota: Si es Inter Municipio el Funcionario debe pasar por el Municipio origen donde el departamento correspondiente le selle la constancia de trabajo.\n'),
(8, '1- Planilla de traslado (3  originales)\n2- Recibo de Pago (3 Firmados por el Director del Plantel Donde Labora).\n3- Constancia de Trabajo Emitida por la institución origen con nota sobre el tramite a realizar (1 Original y 2 Copias).\n4- Oficio de ubicación emitido por la Zona Educativa.\n5- Exposición de Motivo (1 original con soporte, si es necesario y 2 copias sin soporte)\n'),
(9, '1-Renuncia - Cantidad (1- Original y 1- Copia)\n2-Fallecimiento: Acta de Defunción  (1- Original y 1- Copia)\n3- Recibo de Pago\n'),
(10, '1- Planilla de Evaluación \r\n2- En caso de ser excepcional la constancia que indique las razones por la cual se evalúa con esa puntuación \r\n3- Recibo de pago. \r\n'),
(11, 'Control libro diario y digital'),
(13, 'Permiso por escrito aprobado por el coordinador y Jefe de División.'),
(14, 'Justificativo o Constancia Médica'),
(15, 'Certificación de Incapacidad Temporal'),
(16, 'Carta de Jefe Inmediato, Carta Aval del Jefe Inmediato, Foto Copia de la Cédula de Identidad, Fotocopia del Último Recibo de Pago, Documento Probatorios, posición de Motivos del Solicitante dirigida al Prof. Pedro Valdivia, Jefe de Zona Educativa Guárico, Llenar Planilla de Solicitud.'),
(17, 'Carta de Jefe Inmediato, Carta Aval del Jefe Inmediato, Foto Copia de la Cédula de Identidad, Fotocopia del Ultimo Recibo de Pago, Documento Probatorio de Estudio, Exposición de Motivos del Solicitante dirigida al Prof. Pedro Valdivia, Jefe de Zona Educativa Guárico, Llenar Planilla de Solicitud'),
(18, '1- Copia de reposo conformado por el IVSS o IPASME\r\n2- Recibo de pago para verificación de datos del titular y donde desempeñan funciones\r\n'),
(19, '1- Formulario de pago de suplencias nacional (dos original), formato emitido por el Ministerio de Educación\r\n2- Reposo original conformado por el IPASME o IVSS, exceptuando los casos de prolongación de los reposos\r\n   Pre y Post natal\r\n3- Constancia de prestación de servicio como suplente firmada y sellada por el director del plantel, especificar el lapso\r\n trabajado por el suplente (día- mes- año), datos del suplente y titular, motivo que genero la suplencia y el tipo de personal\r\n Según lo indica el Boucher \r\n4- En caso de los suplentes por horas anexar horario de clases firmado y sellado por el director del plantel\r\n5- Copia de la cédula legible del suplente (en caso de suplencia extendida consignar solo la primera vez)\r\n6- Recibo de pago\r\n*.- Certificación bancaria del suplente.\r\n7- Si el suplente es docente graduado, se debe anexar copia del título debidamente autenticado por la universidad, si a este \r\nse le realizo un pago anterior solo anexar copia sencilla.\r\n'),
(20, '1- El suplente o director que quiera saber sobre el estado de la suplencia debe indicar datos personales y fecha de la cual hizo \r\n Dicha suplencia.\r\n2- Se le informara el estado en que se encuentra dicha suplencia o si ya tiene pago.\r\n'),
(21, '1- Constancia de que realizo suplencia firmada y sellada por el director del plantel o recibo de pago.'),
(22, 'NUEVOS INGRESOS: \r\n1- COPIA DE LA PARTIDA DE NACIMIENTO DEL ESTUDIANTE.\r\n2- COPIA DE LA CONSTANCIA DE ESTUDIO O DEL BOLETIN. EN CASO QUE EL ESTUDIANTE YA TENGA  EL BOLETIN DEL II Ó TERCER LAPSO ES OBLIGATORIA SU CONSIGNACIÓN\r\n3- RECIBO DE PAGO\r\n4- CARPETA MANILA  TIPO OFICIO\r\nNOTA: LOS DOCUMENTOS DEBEN VENIR ARCHIVADOS EN LA CARPETA EN EL MISMO ORDEN ANTES MENCIONADO.\r\n\r\nRENOVACIÓN: \r\n5- COPIA DE LA CONSTANCIA DE ESTUDIO O DEL BOLETIN. EN CASO QUE EL ESTUDIANTE YA TENGA  EL BOLETIN DEL II Ó TERCER LAPSO ES OBLIGATORIA SU CONSIGNACIÓN.\r\n6- RECIBO DE PAGO\r\n'),
(23, 'INGRESOS: BECA MARCO (SOLO UNIVERSITARIOS). UN SOLO BENEFICIARIO POR TRABAJADOR\r\n1- CONSTANCIA DE ESTUDIO O DE INSCRIPCIÓN FIMADA Y SELLADA.\r\n2- RECIBO DE PAGO\r\n3- CARPETA MANILA TIPO OFICIO\r\nNOTA: LOS DOCUMENTOS DEBEN VENIR ARCHIVADOS EN EL MISMO ORDEN EN EL QUE ESTÁN ESCRITO .\r\n\r\nRENOVACION: BECA MARCO (SOLO UNIVERSITARIOSNUEVOS \r\n4- CONSTANCIA DE ESTUDIO O INSCRIPCIÓN FIRMADA Y SELLADA\r\n\r\n5- RECIBO DE PAGO\r\n'),
(24, 'NUEVOS INGRESOS:\r\n1- COPIA DEL CARNET DE CONAPDIS\r\n2- COPIA DE LA PARTIDA DE NACIMIENTO DEL BENEFICIARIO.\r\n3- COPIA DEL INFORME MÉDICO ACTUALIZADO.\r\n4- RECIBO DE PAGO\r\n\r\nRENOVACIÓN: CLAUSULA 51 DE LA 1ERA CONVENCION COLECTIVA 2016-2018.\r\n1- COPIA DEL INFORME MÉDICO ACTUALIZADO.\r\n2- RECIBO DE PAGO\r\n'),
(25, '1- ACTA DE MATRIMONIO O DECLARACIÓN DE LA UNION ESTABLE DE HECHO.\r\n2- CERTIFICACIÓN BANCARIA \r\n3- RECIBO DE PAGO\r\n'),
(26, '1-  COPIA DE LA PARTIDA DE NACIMIENTO\r\n2- CERTIFICACIÓN BANCARIA\r\n3- RECIBO DE PAGO\r\n'),
(27, '1-RECIBO DE PAGO ACTUALIZADO\r\n 2-COPIA SIMPLE DEL TITULO Y COPIA SIMPLE DE SU AUTENCIDAD. CON VISTA AL ORIGINAL.\r\n'),
(28, '1-RECIBO DE PAGO ACTUALIZADO\r\n\r\n 2-COPIA SIMPLE DEL TITULO Y COPIA SIMPLE DE SU AUTENCIDAD. CON VISTA AL ORIGINAL.\r\n'),
(29, 'NOTA: PARA CLASIFICACION A DOC. V / AULA EL DOCENTE DEBE CUMPLIR CON 13 AÑOS DE SERVICIO Y COBRAR LA PRIMA DE MAESTRIA. SI COBRA PRIMA DE POST-GRADO (ESPECIALIZACION) DEBE CUMPLIR CON 15 AÑOS DE SERVICIO.               \r\n\r\nPARA CLASIFICACION A DOC. VI / AULA DEBE CUMPLIR CON 21 AÑOS DE SERVICIO Y COBRAR LA PRIMA DE POST-GRADO. MAESTRIA O DOCTORADO\r\n\r\n'),
(30, 'CERTIFICACION DE CUENTA BANCARIA / SINTESIS  CURRICULAR / FONDO NEGRO  DEL TITULO COMO PROFESOR (EN CASO DE SER DOCENTE) CON SU AUNTENTICACION. EN CASO DE SER PERSONAL OBRERO: TODOS LOS REQUISITOS ANTERIORES Y  ES OPCIONAL EL TITULO DE BACHILLER. PARA EL PERSONAL ADMISTRATIVO: TODOS LOR REQUISITOS ANTES MENCIONADOS MAS FONDO NEGRO DEL TITULO DE BACHILER CON SU AUTENTICACION. '),
(31, 'CONSTANCIA DE TRABAJO  DONDE INDIQUE LAS HORAS QUE IMPARTE / EXPOSICION DE MOTIVOS/ RECIBO DE PAGO / COPIA SIMPLE DEL FONDO NEGRO DE TITULO DE PREGADO CON SU AUTENTICACION.'),
(32, 'RECIBO DE PAGO / CONSTANCIA DE TRABAJO  DEL PLANTEL DONDE DESEE CONCENTRAR LAS HORAS LA CUAL DE BE INDICAR: TOTAL DE CARGA HORARIA Y LA FECHA  DESDE CUANDO ESTA LABORANDO EN DICHO PLANTEL / EXPOSICION DE MOTIVOS /, COPIA SIMPLE DEL TUTILO DE PRE- GRADO.'),
(33, 'RECIBO  DE PAGO /  SOLICITUD DE LA LIBERACION DE HORAS O DE CARGO / COPIA SIMPLE DEL TITULO DE PRE-GRADO'),
(34, 'RECIBO DE PAGO / EXPOSICION DE MOTIVOS  POR PARTE DEL DOCENTE / AUTORIZACION POR PARTE DEL JEFE DE ZONA / COPIA SIMPLE DEL TITULO DE PRE- GRADO.'),
(35, 'RECIBO DE PAGO / CONSTANCIA DE TRABAJO ORIGINAL DE LA DIVISION DONDE ESTA LABORANDO O PLANTEL / COPIA DE LA LIBRETA DE SUELDO  DONDE REFLEJE LA ULTIMA QUIMCENA ( SI ES CON SUELDO) / COPIA DE LA CREDENCIAL DE INGRESO AL MPPE'),
(36, 'RECIBO DE PAGO FIRMADO Y SELLADO  / CENSO DE LA OCEI / COPIA DE LA CREDENCIAL DE INGRESO AL MPPE / CONSTANCIA DE TRABAJO ORIGINAL DEL PLANTEL RURAL CON FECCHA DE INGRESO Y FECHA DE CULMINACION / CONSTANCIA DEL PLANTEL DONDE SE ENCUENTRE LABORANDO EN LA ACTUALIDAD'),
(37, 'RECIBO DE PAGO  / ACTA DE DEFUNCION /  O CARTA DE RUNUNCIA / COPIA DE LA CREDENCIAL DE INGRESSO AL MPPE'),
(38, 'RECIBO DE PAGO / CONSTANCIA DE TRABAJO DEL PLANTEL  NOMINAL Y POR DONDE LADORA / CONSTANCIA ELECTRONICA FIRMADA Y SELLADA POR EL PLANTEL  NOMINAL'),
(39, 'RECIBO DE PAGO /   COPIA DE LA RESOLUCION/ / COPIA DE LA LIBRETA DE SUELDO DONDE REFLEJE LA ULTIMA QUINCENA ( SI ES CON SUELDO) / COPIA DE LA CREDENCIAL DE INGRESO AL MPPE.'),
(40, 'RECIBO DE PAGO /  COPIA DE LA CREDENCIAL DE INGRESO / COPIA DE LA ACEPTACION DE LA RENUNCIA'),
(41, '3- PLANILLAS DE SOLICITUD DE VACACIONES / CONSTANCIA  DE TRABAJO POR PARTE DE LA DIVISION O MUNICIPIO ESCOLAR / RECIBO DE PAGO'),
(42, '3- PLANILLAS DE SOLICITUD DE VACACIONES / RECIBO DE PAGO ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_personal`
--

CREATE TABLE `tipo_personal` (
  `id_tipopersonal` int(11) NOT NULL,
  `nombre_tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_personal`
--

INSERT INTO `tipo_personal` (`id_tipopersonal`, `nombre_tipo`) VALUES
(1, 'Administrativo'),
(2, 'Obrero'),
(3, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id_tramites` int(11) NOT NULL,
  `nombre_tramite` varchar(500) NOT NULL,
  `requisitos_id` int(11) NOT NULL,
  `tipopersonal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`id_tramites`, `nombre_tramite`, `requisitos_id`, `tipopersonal_id`) VALUES
(1, 'Vacaciones', 1, 1),
(2, 'Vacaciones', 1, 2),
(3, 'Vacaciones', 1, 3),
(6, 'Traslado y sinceracion persona', 2, 1),
(7, 'Traslado y sinceracion persona', 2, 2),
(8, 'Traslado y sinceracion persona', 2, 3),
(9, 'Liberacion por cargo', 4, 1),
(10, 'Liberacion por cargo', 4, 2),
(11, 'Liberacion por cargo', 4, 3),
(12, 'Ingresos', 30, 1),
(13, 'Ingresos', 30, 2),
(14, 'Ingresos', 30, 3),
(15, 'Titularidad', 5, 3),
(16, 'Liberacion por horas', 3, 3),
(17, 'Sinceracion', 6, 1),
(18, 'Sinceracion', 6, 2),
(19, 'Sinceracion', 6, 3),
(20, 'Traslado interno', 7, 1),
(21, 'Traslado interno', 7, 2),
(22, 'Traslado interno', 7, 3),
(23, 'Traslado interzona', 8, 1),
(24, 'Traslado interzona', 8, 2),
(25, 'Traslado interzona', 8, 3),
(26, 'Egresos', 9, 1),
(27, 'Egresos', 9, 2),
(28, 'Egresos', 9, 3),
(29, 'Evaluaciones \r\nPersonal Administrativo\r\n', 10, 1),
(30, 'Asistencia diaria del Personal Obreros, Administrativos y Docentes con función Administrativa de Planta', 11, 1),
(31, 'Asistencia diaria del Personal Obreros, Administrativos y Docentes con función Administrativa de Planta', 11, 2),
(32, 'Asistencia diaria del Personal Obreros, Administrativos y Docentes con función Administrativa de Planta', 11, 3),
(33, 'Asistencia diaria del personal Obrero, Administrativo y Docente con función Administrativa de Planta Retardado', 11, 1),
(34, 'Asistencia diaria del personal Obrero, Administrativo y Docente con función Administrativa de Planta Retardado', 11, 2),
(35, 'Asistencia diaria del personal Obrero, Administrativo y Docente con función Administrativa de Planta Retardado', 11, 3),
(36, 'Permisos aprobados del Personal Obreros, Administrativos y Docentes con función administrativa de Planta.', 13, 1),
(37, 'Permisos aprobados del Personal Obreros, Administrativos y Docentes con función administrativa de Planta.', 13, 2),
(38, 'Permisos aprobados del Personal Obreros, Administrativos y Docentes con función administrativa de Planta.', 13, 3),
(39, 'Reposos de Obreros, Administrativos y Docentes con función administrativa de Planta.', 14, 1),
(40, 'Reposos de Obreros, Administrativos y Docentes con función administrativa de Planta.', 14, 2),
(41, 'Reposos de Obreros, Administrativos y Docentes con función administrativa de Planta.', 14, 3),
(42, 'Reposos continuos del personal obrero, administrativo y docentes con función de administrativa de planta.', 15, 1),
(43, 'Reposos continuos del personal obrero, administrativo y docentes con función de administrativa de planta.', 15, 2),
(44, 'Reposos continuos del personal obrero, administrativo y docentes con función de administrativa de planta.', 15, 3),
(45, 'Comisión de Servicio', 16, 1),
(46, 'Comisión de Servicio', 16, 2),
(47, 'Comisión de Servicio', 16, 3),
(48, 'Licencia Sabática', 17, 1),
(49, 'Licencia Sabática', 17, 2),
(50, 'Licencia Sabática', 17, 3),
(51, 'Permiso Remunerado y no Remunerado', 18, 1),
(52, 'Permiso Remunerado y no Remunerado', 18, 2),
(53, 'Permiso Remunerado y no Remunerado', 18, 3),
(54, 'Cálculo de reposo Pre- natal y Post natal', 19, 1),
(55, 'Cálculo de reposo Pre- natal y Post natal', 19, 2),
(56, 'Cálculo de reposo Pre- natal y Post natal', 19, 3),
(57, 'Documentación para tramites de suplencias (personal obrero, administrativo y docente)', 20, 1),
(58, 'Documentación para tramites de suplencias (personal obrero, administrativo y docente)', 20, 2),
(59, 'Documentación para tramites de suplencias (personal obrero, administrativo y docente)', 20, 3),
(60, 'Informar estado de Suplencias', 21, 1),
(61, 'Informar estado de Suplencias', 21, 2),
(62, 'Informar estado de Suplencias', 21, 3),
(63, 'Constancia de Suplencias', 22, 1),
(64, 'Constancia de Suplencias', 22, 2),
(65, 'Constancia de Suplencias', 22, 3),
(66, 'BECA CLAUSULA 61 CONVENCIÓN COLECTIVA  (DE MATERNAL A 5TO AÑO) PERSONAL ADMINISTRATIVO Y OBRERO MPPE. UN SOLO BENEFICIARIO POR TRABAJADOR', 23, 1),
(67, 'BECA CLAUSULA 61 CONVENCIÓN COLECTIVA  (DE MATERNAL A 5TO AÑO) PERSONAL ADMINISTRATIVO Y OBRERO MPPE. UN SOLO BENEFICIARIO POR TRABAJADOR', 23, 2),
(69, 'BECA MARCO', 24, 1),
(70, 'BECA MARCO', 24, 2),
(71, 'BECA MARCO', 24, 3),
(72, 'CONTRIBUCIÓN POR DISCAPACIDAD. CLAUSULA 51 DE LA 1ERA CONVENCION COLECTIVA 2016-2018. UN SOLO BENEFICIARIO POR TRABAJADOR', 25, 1),
(73, 'CONTRIBUCIÓN POR DISCAPACIDAD. CLAUSULA 51 DE LA 1ERA CONVENCION COLECTIVA 2016-2018. UN SOLO BENEFICIARIO POR TRABAJADOR', 25, 2),
(74, 'CONTRIBUCIÓN POR DISCAPACIDAD. CLAUSULA 51 DE LA 1ERA CONVENCION COLECTIVA 2016-2018. UN SOLO BENEFICIARIO POR TRABAJADOR', 25, 3),
(75, 'CLÁUSULA 52: CONTRIBUCIÓN POR MATRIMONIO ', 26, 1),
(76, 'CLÁUSULA 52: CONTRIBUCIÓN POR MATRIMONIO ', 26, 2),
(77, 'CLÁUSULA 52: CONTRIBUCIÓN POR MATRIMONIO ', 26, 3),
(78, 'CLÁUSULA 53: CONTRIBUCIÓN POR NACIMIENTO DE HIJOS E HIJAS', 27, 1),
(79, 'CLÁUSULA 53: CONTRIBUCIÓN POR NACIMIENTO DE HIJOS E HIJAS', 27, 2),
(80, 'CLÁUSULA 53: CONTRIBUCIÓN POR NACIMIENTO DE HIJOS E HIJAS', 27, 3),
(81, 'PRIMAS DE:\r\n  \r\n* ESPECIALIZACION\r\n* MAESTRIA\r\n* DOCTORADO\r\n', 28, 1),
(82, 'PRIMAS DE:\r\n  \r\n* ESPECIALIZACION\r\n* MAESTRIA\r\n* DOCTORADO\r\n', 28, 3),
(83, 'CLASIFICACIONES:\r\n\r\n* TSU A LICENCIADO\r\n* NO GRADUADO A LICENCIADO\r\n* PROF. NO DOCENTE A LICENCIADO\r\n* POR AÑOS DE SERVICIO, A DOC. V / AULA Y A DOC. VI / AULA.\r\n', 29, 3),
(84, 'INCREMENTO DE HORAS', 31, 1),
(85, 'INCREMENTO DE HORAS', 31, 2),
(86, 'INCREMENTO DE HORAS', 31, 3),
(87, 'CONCENTRACIÓN DE HORAS', 32, 1),
(88, 'CONCENTRACIÓN DE HORAS', 32, 2),
(89, 'CONCENTRACIÓN DE HORAS', 32, 3),
(90, 'LIBERACIÓN DE HORAS Y CARGOS', 33, 1),
(91, 'LIBERACIÓN DE HORAS Y CARGOS', 33, 2),
(92, 'LIBERACIÓN DE HORAS Y CARGOS', 33, 3),
(93, 'CARGOS ADICIONALES', 34, 1),
(94, 'CARGOS ADICIONALES', 34, 2),
(95, 'CARGOS ADICIONALES', 34, 3),
(96, 'CONSTANCIAS DE:                                                 * AÑOS DE SERVICIO.', 35, 1),
(97, 'CONSTANCIAS DE:                                                 * AÑOS DE SERVICIO.', 35, 2),
(98, 'CONSTANCIAS DE:                                                 * AÑOS DE SERVICIO.', 35, 3),
(99, 'RURALIDAD', 36, 1),
(100, 'RURALIDAD', 36, 2),
(101, 'RURALIDAD', 36, 3),
(102, 'CESANTIA ', 37, 1),
(103, 'CESANTIA ', 37, 2),
(104, 'CESANTIA ', 37, 3),
(105, 'NO POSEER CREDENCIALES', 38, 1),
(106, 'NO POSEER CREDENCIALES', 38, 2),
(107, 'NO POSEER CREDENCIALES', 38, 3),
(108, 'CONSTANCIAS DE JUBILADOS', 39, 1),
(109, 'CONSTANCIAS DE JUBILADOS', 39, 2),
(110, 'CONSTANCIAS DE JUBILADOS', 39, 3),
(111, 'ACEPTACIÓN DE RENUNCIA', 40, 1),
(112, 'ACEPTACIÓN DE RENUNCIA', 40, 2),
(113, 'ACEPTACIÓN DE RENUNCIA', 40, 3),
(116, 'VACACIONES DOCENTES ', 41, 3),
(117, 'VACACIONES ADMINISTRATIVAS', 42, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agregar_pase`
--
ALTER TABLE `agregar_pase`
  ADD PRIMARY KEY (`id_agregarp`),
  ADD KEY `pisos_id` (`pisos_id`,`departamento_id`,`login_id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `departamento_id` (`departamento_id`),
  ADD KEY `estatu_id` (`estatu_id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `detalles_tramites`
--
ALTER TABLE `detalles_tramites`
  ADD PRIMARY KEY (`id_detalle_tramite`),
  ADD KEY `pisos_id` (`pisos_id`,`departamento_id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `cargo_id` (`cargo_id`),
  ADD KEY `pisos_id` (`pisos_id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`id_pisos`);

--
-- Indices de la tabla `publico`
--
ALTER TABLE `publico`
  ADD PRIMARY KEY (`id_publico`),
  ADD KEY `estatus_id` (`estatus_id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `registro_tramites`
--
ALTER TABLE `registro_tramites`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `tipopersonal_id` (`tipopersonal_id`),
  ADD KEY `tramites_id` (`tramites_id`),
  ADD KEY `departamento_id` (`departamento_id`),
  ADD KEY `requisitos_id` (`requisitos_id`);

--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id_requisitos`);

--
-- Indices de la tabla `tipo_personal`
--
ALTER TABLE `tipo_personal`
  ADD PRIMARY KEY (`id_tipopersonal`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id_tramites`),
  ADD KEY `requisitos_id` (`requisitos_id`),
  ADD KEY `tipopersonal_id` (`tipopersonal_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agregar_pase`
--
ALTER TABLE `agregar_pase`
  MODIFY `id_agregarp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `detalles_tramites`
--
ALTER TABLE `detalles_tramites`
  MODIFY `id_detalle_tramite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `id_pisos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publico`
--
ALTER TABLE `publico`
  MODIFY `id_publico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `registro_tramites`
--
ALTER TABLE `registro_tramites`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id_requisitos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `tipo_personal`
--
ALTER TABLE `tipo_personal`
  MODIFY `id_tipopersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id_tramites` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agregar_pase`
--
ALTER TABLE `agregar_pase`
  ADD CONSTRAINT `agregar_pase_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `agregar_pase_ibfk_2` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id_departamento`),
  ADD CONSTRAINT `agregar_pase_ibfk_3` FOREIGN KEY (`pisos_id`) REFERENCES `pisos` (`id_pisos`),
  ADD CONSTRAINT `agregar_pase_ibfk_4` FOREIGN KEY (`estatu_id`) REFERENCES `estatus` (`id_estatus`);

--
-- Filtros para la tabla `detalles_tramites`
--
ALTER TABLE `detalles_tramites`
  ADD CONSTRAINT `detalles_tramites_ibfk_1` FOREIGN KEY (`pisos_id`) REFERENCES `pisos` (`id_pisos`),
  ADD CONSTRAINT `detalles_tramites_ibfk_2` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id_departamento`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id_cargo`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`pisos_id`) REFERENCES `pisos` (`id_pisos`),
  ADD CONSTRAINT `login_ibfk_3` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id_departamento`);

--
-- Filtros para la tabla `publico`
--
ALTER TABLE `publico`
  ADD CONSTRAINT `publico_ibfk_4` FOREIGN KEY (`estatus_id`) REFERENCES `estatus` (`id_estatus`),
  ADD CONSTRAINT `publico_ibfk_5` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id_departamento`);

--
-- Filtros para la tabla `registro_tramites`
--
ALTER TABLE `registro_tramites`
  ADD CONSTRAINT `registro_tramites_ibfk_1` FOREIGN KEY (`tipopersonal_id`) REFERENCES `tipo_personal` (`id_tipopersonal`),
  ADD CONSTRAINT `registro_tramites_ibfk_2` FOREIGN KEY (`tramites_id`) REFERENCES `tramites` (`id_tramites`),
  ADD CONSTRAINT `registro_tramites_ibfk_5` FOREIGN KEY (`requisitos_id`) REFERENCES `requisitos` (`id_requisitos`),
  ADD CONSTRAINT `registro_tramites_ibfk_6` FOREIGN KEY (`departamento_id`) REFERENCES `detalles_tramites` (`id_detalle_tramite`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `tramites_ibfk_1` FOREIGN KEY (`requisitos_id`) REFERENCES `requisitos` (`id_requisitos`),
  ADD CONSTRAINT `tramites_ibfk_2` FOREIGN KEY (`tipopersonal_id`) REFERENCES `tipo_personal` (`id_tipopersonal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
