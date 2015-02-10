CREATE DATABASE  IF NOT EXISTS `bd_etrans` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `bd_etrans`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bd_etrans
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `etr_city`
--

DROP TABLE IF EXISTS `etr_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_city` (
  `idcity` int(11) NOT NULL AUTO_INCREMENT,
  `idstate` int(11) NOT NULL,
  `name_city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcity`),
  KEY `fk_etr_city_1_idx` (`idstate`),
  CONSTRAINT `fk_etr_city_1` FOREIGN KEY (`idstate`) REFERENCES `etr_state` (`idstate`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2957 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_city`
--

LOCK TABLES `etr_city` WRITE;
/*!40000 ALTER TABLE `etr_city` DISABLE KEYS */;
INSERT INTO `etr_city` VALUES (500,1,'Aguascalientes'),(501,1,'San Francisco de los Romo'),(502,1,'El Llano'),(503,1,'Rincón de Romos'),(504,1,'Cosío'),(505,1,'San José de Gracia'),(506,1,'Tepezalá'),(507,1,'Pabellón de Arteaga'),(508,1,'Asientos'),(509,1,'Calvillo'),(510,1,'Jesús María'),(511,2,'Mexicali'),(512,2,'Tecate'),(513,2,'Tijuana'),(514,2,'Playas de Rosarito'),(515,2,'Ensenada'),(516,3,'La Paz'),(517,3,'Los Cabos'),(518,3,'Comondú'),(519,3,'Loreto'),(520,3,'Mulegé'),(521,4,'Campeche'),(522,4,'Carmen'),(523,4,'Palizada'),(524,4,'Candelaria'),(525,4,'Escárcega'),(526,4,'Champotón'),(527,4,'Hopelchén'),(528,4,'Calakmul'),(529,4,'Tenabo'),(530,4,'Hecelchakán'),(531,4,'Calkiní'),(532,5,'Saltillo'),(533,5,'Arteaga'),(534,5,'Juárez'),(535,5,'Progreso'),(536,5,'Escobedo'),(537,5,'San Buenaventura'),(538,5,'Abasolo'),(539,5,'Candela'),(540,5,'Frontera'),(541,5,'Monclova'),(542,5,'Castaños'),(543,5,'Ramos Arizpe'),(544,5,'General Cepeda'),(545,5,'Piedras Negras'),(546,5,'Nava'),(547,5,'Acuña'),(548,5,'Múzquiz'),(549,5,'Jiménez'),(550,5,'Zaragoza'),(551,5,'Morelos'),(552,5,'Allende'),(553,5,'Villa Unión'),(554,5,'Guerrero'),(555,5,'Hidalgo'),(556,5,'Sabinas'),(557,5,'San Juan de Sabinas'),(558,5,'Torreón'),(559,5,'Matamoros'),(560,5,'Viesca'),(561,5,'Ocampo'),(562,5,'Nadadores'),(563,5,'Sierra Mojada'),(564,5,'Cuatro Ciénegas'),(565,5,'Lamadrid'),(566,5,'Sacramento'),(567,5,'San Pedro'),(568,5,'Francisco I. Madero'),(569,5,'Parras'),(570,6,'Colima'),(571,6,'Tecomán'),(572,6,'Manzanillo'),(573,6,'Armería'),(574,6,'Coquimatlán'),(575,6,'Comala'),(576,6,'Cuauhtémoc'),(577,6,'Ixtlahuacán'),(578,6,'Minatitlán'),(579,6,'Villa de Álvarez'),(580,7,'Tuxtla Gutiérrez'),(581,7,'San Fernando'),(582,7,'Berriozábal'),(583,7,'Ocozocoautla de Espinosa'),(584,7,'Suchiapa'),(585,7,'Chiapa de Corzo'),(586,7,'Osumacinta'),(587,7,'San Cristóbal de las Casas'),(588,7,'Chamula'),(589,7,'Ixtapa'),(590,7,'Zinacantán'),(591,7,'Acala'),(592,7,'Chiapilla'),(593,7,'San Lucas'),(594,7,'Teopisca'),(595,7,'Amatenango del Valle'),(596,7,'Chanal'),(597,7,'Oxchuc'),(598,7,'Huixtán'),(599,7,'Tenejapa'),(600,7,'Mitontic'),(601,7,'Reforma'),(602,7,'Juárez'),(603,7,'Pichucalco'),(604,7,'Sunuapa'),(605,7,'Ostuacán'),(606,7,'Francisco León'),(607,7,'Ixtacomitán'),(608,7,'Solosuchiapa'),(609,7,'Ixtapangajoya'),(610,7,'Tecpatán'),(611,7,'Copainalá'),(612,7,'Chicoasén'),(613,7,'Coapilla'),(614,7,'Pantepec'),(615,7,'Tapalapa'),(616,7,'Ocotepec'),(617,7,'Chapultenango'),(618,7,'Amatán'),(619,7,'Huitiupán'),(620,7,'Ixhuatán'),(621,7,'Tapilula'),(622,7,'Rayón'),(623,7,'Pueblo Nuevo Solistahuacán'),(624,7,'Jitotol'),(625,7,'Bochil'),(626,7,'Soyaló'),(627,7,'San Juan Cancuc'),(628,7,'Sabanilla'),(629,7,'Simojovel'),(630,7,'San Andrés Duraznal'),(631,7,'El Bosque'),(632,7,'Chalchihuitán'),(633,7,'Larráinzar'),(634,7,'Santiago el Pinar'),(635,7,'Chenalhó'),(636,7,'Aldama'),(637,7,'Pantelhó'),(638,7,'Sitalá'),(639,7,'Salto de Agua'),(640,7,'Tila'),(641,7,'Tumbalá'),(642,7,'Yajalón'),(643,7,'Ocosingo'),(644,7,'Chilón'),(645,7,'Benemérito de las Américas'),(646,7,'Marqués de Comillas'),(647,7,'Palenque'),(648,7,'La Libertad'),(649,7,'Catazajá'),(650,7,'Comitán de Domínguez'),(651,7,'Tzimol'),(652,7,'Chicomuselo'),(653,7,'Bella Vista'),(654,7,'Frontera Comalapa'),(655,7,'La Trinitaria'),(656,7,'La Independencia'),(657,7,'Maravilla Tenejapa'),(658,7,'Las Margaritas'),(659,7,'Altamirano'),(660,7,'Venustiano Carranza'),(661,7,'Totolapa'),(662,7,'Nicolás Ruíz'),(663,7,'Las Rosas'),(664,7,'La Concordia'),(665,7,'Angel Albino Corzo'),(666,7,'Montecristo de Guerrero'),(667,7,'Socoltenango'),(668,7,'Cintalapa'),(669,7,'Jiquipilas'),(670,7,'Arriaga'),(671,7,'Villaflores'),(672,7,'Tonalá'),(673,7,'Villa Corzo'),(674,7,'Pijijiapan'),(675,7,'Mapastepec'),(676,7,'Acapetahua'),(677,7,'Acacoyagua'),(678,7,'Escuintla'),(679,7,'Villa Comaltitlán'),(680,7,'Huixtla'),(681,7,'Mazatán'),(682,7,'Huehuetán'),(683,7,'Tuzantán'),(684,7,'Tapachula'),(685,7,'Suchiate'),(686,7,'Frontera Hidalgo'),(687,7,'Metapa'),(688,7,'Tuxtla Chico'),(689,7,'Unión Juárez'),(690,7,'Cacahoatán'),(691,7,'Motozintla'),(692,7,'Mazapa de Madero'),(693,7,'Amatenango de la Frontera'),(694,7,'Bejucal de Ocampo'),(695,7,'La Grandeza'),(696,7,'El Porvenir'),(697,7,'Siltepec'),(698,8,'Chihuahua'),(699,8,'Cuauhtémoc'),(700,8,'Riva Palacio'),(701,8,'Aquiles Serdán'),(702,8,'Bachíniva'),(703,8,'Guerrero'),(704,8,'Nuevo Casas Grandes'),(705,8,'Ascensión'),(706,8,'Janos'),(707,8,'Casas Grandes'),(708,8,'Galeana'),(709,8,'Buenaventura'),(710,8,'Gómez Farías'),(711,8,'Ignacio Zaragoza'),(712,8,'Madera'),(713,8,'Namiquipa'),(714,8,'Temósachic'),(715,8,'Matachí'),(716,8,'Juárez'),(717,8,'Guadalupe'),(718,8,'Praxedis G. Guerrero'),(719,8,'Ahumada'),(720,8,'Coyame del Sotol'),(721,8,'Ojinaga'),(722,8,'Aldama'),(723,8,'Julimes'),(724,8,'Manuel Benavides'),(725,8,'Delicias'),(726,8,'Rosales'),(727,8,'Meoqui'),(728,8,'Dr. Belisario Domínguez'),(729,8,'Satevó'),(730,8,'San Francisco de Borja'),(731,8,'Nonoava'),(732,8,'Guachochi'),(733,8,'Bocoyna'),(734,8,'Cusihuiriachi'),(735,8,'Gran Morelos'),(736,8,'Santa Isabel'),(737,8,'Carichí'),(738,8,'Uruachi'),(739,8,'Ocampo'),(740,8,'Moris'),(741,8,'Chínipas'),(742,8,'Maguarichi'),(743,8,'Guazapares'),(744,8,'Batopilas'),(745,8,'Urique'),(746,8,'Morelos'),(747,8,'Guadalupe y Calvo'),(748,8,'San Francisco del Oro'),(749,8,'Rosario'),(750,8,'Huejotitán'),(751,8,'El Tule'),(752,8,'Balleza'),(753,8,'Santa Bárbara'),(754,8,'Camargo'),(755,8,'Saucillo'),(756,8,'Valle de Zaragoza'),(757,8,'La Cruz'),(758,8,'San Francisco de Conchos'),(759,8,'Hidalgo del Parral'),(760,8,'Allende'),(761,8,'López'),(762,8,'Matamoros'),(763,8,'Jiménez'),(764,8,'Coronado'),(765,9,'Álvaro Obregón'),(766,9,'Azcapotzalco'),(767,9,'Benito Juárez'),(768,9,'Coyoacán'),(769,9,'Cuajimalpa de Morelos'),(770,9,'Cuauhtémoc'),(771,9,'Gustavo A. Madero'),(772,9,'Iztacalco'),(773,9,'Iztapalapa'),(774,9,'La Magdalena Contreras'),(775,9,'Miguel Hidalgo'),(776,9,'Milpa Alta'),(777,9,'Tláhuac'),(778,9,'Tlalpan'),(779,9,'Venustiano Carranza'),(780,9,'Xochimilco'),(781,10,'Durango'),(782,10,'Canatlán'),(783,10,'Nuevo Ideal'),(784,10,'Coneto de Comonfort'),(785,10,'San Juan del Río'),(786,10,'Canelas'),(787,10,'Topia'),(788,10,'Tamazula'),(789,10,'Santiago Papasquiaro'),(790,10,'Otáez'),(791,10,'San Dimas'),(792,10,'Guadalupe Victoria'),(793,10,'Peñón Blanco'),(794,10,'Pánuco de Coronado'),(795,10,'Poanas'),(796,10,'Nombre de Dios'),(797,10,'Vicente Guerrero'),(798,10,'Súchil'),(799,10,'Pueblo Nuevo'),(800,10,'Mezquital'),(801,10,'Gómez Palacio'),(802,10,'Lerdo'),(803,10,'Mapimí'),(804,10,'Tlahualilo'),(805,10,'Hidalgo'),(806,10,'Ocampo'),(807,10,'Guanaceví'),(808,10,'San Bernardo'),(809,10,'Indé'),(810,10,'San Pedro del Gallo'),(811,10,'Tepehuanes'),(812,10,'El Oro'),(813,10,'Nazas'),(814,10,'San Luis del Cordero'),(815,10,'Rodeo'),(816,10,'Cuencamé'),(817,10,'Santa Clara'),(818,10,'San Juan de Guadalupe'),(819,10,'General Simón Bolívar'),(820,11,'Guanajuato'),(821,11,'Silao de la Victoria'),(822,11,'Romita'),(823,11,'San Francisco del Rincón'),(824,11,'Purísima del Rincón'),(825,11,'Manuel Doblado'),(826,11,'Irapuato'),(827,11,'Salamanca'),(828,11,'Pueblo Nuevo'),(829,11,'Pénjamo'),(830,11,'Cuerámaro'),(831,11,'Abasolo'),(832,11,'Huanímaro'),(833,11,'León'),(834,11,'San Felipe'),(835,11,'Ocampo'),(836,11,'San Miguel de Allende'),(837,11,'Dolores Hidalgo'),(838,11,'San Diego de la Unión'),(839,11,'San Luis de la Paz'),(840,11,'Victoria'),(841,11,'Xichú'),(842,11,'Atarjea'),(843,11,'Santa Catarina'),(844,11,'Doctor Mora'),(845,11,'Tierra Blanca'),(846,11,'San José Iturbide'),(847,11,'Celaya'),(848,11,'Apaseo el Grande'),(849,11,'Comonfort'),(850,11,'Santa Cruz de Juventino Rosas'),(851,11,'Villagrán'),(852,11,'Cortazar'),(853,11,'Valle de Santiago'),(854,11,'Jaral del Progreso'),(855,11,'Apaseo el Alto'),(856,11,'Jerécuaro'),(857,11,'Coroneo'),(858,11,'Acámbaro'),(859,11,'Tarimoro'),(860,11,'Tarandacuao'),(861,11,'Moroleón'),(862,11,'Salvatierra'),(863,11,'Yuriria'),(864,11,'Santiago Maravatío'),(865,11,'Uriangato'),(866,12,'Chilpancingo de los Bravo'),(867,12,'General Heliodoro Castillo'),(868,12,'Leonardo Bravo'),(869,12,'Tixtla de Guerrero'),(870,12,'Ayutla de los Libres'),(871,12,'Mochitlán'),(872,12,'Quechultenango'),(873,12,'Tecoanapa'),(874,12,'Acapulco de Juárez'),(875,12,'Juan R. Escudero'),(876,12,'San Marcos'),(877,12,'Iguala de la Independencia'),(878,12,'Huitzuco de los Figueroa'),(879,12,'Tepecoacuilco de Trujano'),(880,12,'Eduardo Neri'),(881,12,'Taxco de Alarcón'),(882,12,'Buenavista de Cuéllar'),(883,12,'Tetipac'),(884,12,'Pilcaya'),(885,12,'Teloloapan'),(886,12,'Ixcateopan de Cuauhtémoc'),(887,12,'Pedro Ascencio Alquisiras'),(888,12,'General Canuto A. Neri'),(889,12,'Arcelia'),(890,12,'Apaxtla'),(891,12,'Cuetzala del Progreso'),(892,12,'Cocula'),(893,12,'Tlapehuala'),(894,12,'Cutzamala de Pinzón'),(895,12,'Pungarabato'),(896,12,'Tlalchapa'),(897,12,'Coyuca de Catalán'),(898,12,'Ajuchitlán del Progreso'),(899,12,'Zirándaro'),(900,12,'San Miguel Totolapan'),(901,12,'La Unión de Isidoro Montes de Oca'),(902,12,'Petatlán'),(903,12,'Coahuayutla de José María Izazaga'),(904,12,'Zihuatanejo de Azueta'),(905,12,'Técpan de Galeana'),(906,12,'Atoyac de Álvarez'),(907,12,'Benito Juárez'),(908,12,'Coyuca de Benítez'),(909,12,'Olinalá'),(910,12,'Atenango del Río'),(911,12,'Copalillo'),(912,12,'Cualác'),(913,12,'Chilapa de Álvarez'),(914,12,'José Joaquín de Herrera'),(915,12,'Ahuacuotzingo'),(916,12,'Zitlala'),(917,12,'Mártir de Cuilapan'),(918,12,'Huamuxtitlán'),(919,12,'Xochihuehuetlán'),(920,12,'Alpoyeca'),(921,12,'Tlapa de Comonfort'),(922,12,'Tlalixtaquilla de Maldonado'),(923,12,'Xalpatláhuac'),(924,12,'Zapotitlán Tablas'),(925,12,'Acatepec'),(926,12,'Atlixtac'),(927,12,'Copanatoyac'),(928,12,'Malinaltepec'),(929,12,'Iliatenco'),(930,12,'Tlacoapa'),(931,12,'Atlamajalcingo del Monte'),(932,12,'San Luis Acatlán'),(933,12,'Metlatónoc'),(934,12,'Cochoapa el Grande'),(935,12,'Alcozauca de Guerrero'),(936,12,'Ometepec'),(937,12,'Tlacoachistlahuaca'),(938,12,'Xochistlahuaca'),(939,12,'Florencio Villarreal'),(940,12,'Cuautepec'),(941,12,'Copala'),(942,12,'Azoyú'),(943,12,'Juchitán'),(944,12,'Marquelia'),(945,12,'Cuajinicuilapa'),(946,12,'Igualapa'),(947,13,'Pachuca de Soto'),(948,13,'Mineral del Chico'),(949,13,'Mineral del Monte'),(950,13,'Ajacuba'),(951,13,'San Agustín Tlaxiaca'),(952,13,'Mineral de la Reforma'),(953,13,'Zapotlán de Juárez'),(954,13,'Jacala de Ledezma'),(955,13,'Pisaflores'),(956,13,'Pacula'),(957,13,'La Misión'),(958,13,'Chapulhuacán'),(959,13,'Ixmiquilpan'),(960,13,'Zimapán'),(961,13,'Nicolás Flores'),(962,13,'Cardonal'),(963,13,'Tasquillo'),(964,13,'Alfajayucan'),(965,13,'Huichapan'),(966,13,'Tecozautla'),(967,13,'Nopala de Villagrán'),(968,13,'Actopan'),(969,13,'Santiago de Anaya'),(970,13,'San Salvador'),(971,13,'Francisco I. Madero'),(972,13,'El Arenal'),(973,13,'Mixquiahuala de Juárez'),(974,13,'Progreso de Obregón'),(975,13,'Chilcuautla'),(976,13,'Tezontepec de Aldama'),(977,13,'Tlahuelilpan'),(978,13,'Tula de Allende'),(979,13,'Tepeji del Río de Ocampo'),(980,13,'Chapantongo'),(981,13,'Tepetitlán'),(982,13,'Tetepango'),(983,13,'Tlaxcoapan'),(984,13,'Atitalaquia'),(985,13,'Atotonilco de Tula'),(986,13,'Huejutla de Reyes'),(987,13,'San Felipe Orizatlán'),(988,13,'Jaltocán'),(989,13,'Huautla'),(990,13,'Atlapexco'),(991,13,'Huazalingo'),(992,13,'Yahualica'),(993,13,'Xochiatipan'),(994,13,'Molango de Escamilla'),(995,13,'Tepehuacán de Guerrero'),(996,13,'Lolotla'),(997,13,'Tlanchinol'),(998,13,'Tlahuiltepa'),(999,13,'Juárez Hidalgo'),(1000,13,'Zacualtipán de Ángeles'),(1001,13,'Calnali'),(1002,13,'Xochicoatlán'),(1003,13,'Tianguistengo'),(1004,13,'Atotonilco el Grande'),(1005,13,'Eloxochitlán'),(1006,13,'Metztitlán'),(1007,13,'San Agustín Metzquititlán'),(1008,13,'Metepec'),(1009,13,'Huehuetla'),(1010,13,'San Bartolo Tutotepec'),(1011,13,'Agua Blanca de Iturbide'),(1012,13,'Tenango de Doria'),(1013,13,'Huasca de Ocampo'),(1014,13,'Acatlán'),(1015,13,'Omitlán de Juárez'),(1016,13,'Epazoyucan'),(1017,13,'Tulancingo de Bravo'),(1018,13,'Acaxochitlán'),(1019,13,'Cuautepec de Hinojosa'),(1020,13,'Santiago Tulantepec de Lugo Guerrero'),(1021,13,'Singuilucan'),(1022,13,'Tizayuca'),(1023,13,'Zempoala'),(1024,13,'Tolcayuca'),(1025,13,'Villa de Tezontepec'),(1026,13,'Apan'),(1027,13,'Tlanalapa'),(1028,13,'Almoloya'),(1029,13,'Emiliano Zapata'),(1030,13,'Tepeapulco'),(1031,14,'Guadalajara'),(1032,14,'Zapopan'),(1033,14,'San Cristóbal de la Barranca'),(1034,14,'Ixtlahuacán del Río'),(1035,14,'Tala'),(1036,14,'El Arenal'),(1037,14,'Amatitán'),(1038,14,'Tonalá'),(1039,14,'Zapotlanejo'),(1040,14,'Acatic'),(1041,14,'Cuquío'),(1042,14,'San Pedro Tlaquepaque'),(1043,14,'Tlajomulco de Zúñiga'),(1044,14,'El Salto'),(1045,14,'Acatlán de Juárez'),(1046,14,'Villa Corona'),(1047,14,'Zacoalco de Torres'),(1048,14,'Atemajac de Brizuela'),(1049,14,'Jocotepec'),(1050,14,'Ixtlahuacán de los Membrillos'),(1051,14,'Juanacatlán'),(1052,14,'Chapala'),(1053,14,'Poncitlán'),(1054,14,'Zapotlán del Rey'),(1055,14,'Huejuquilla el Alto'),(1056,14,'Mezquitic'),(1057,14,'Villa Guerrero'),(1058,14,'Bolaños'),(1059,14,'Totatiche'),(1060,14,'Colotlán'),(1061,14,'Santa María de los Ángeles'),(1062,14,'Huejúcar'),(1063,14,'Chimaltitán'),(1064,14,'San Martín de Bolaños'),(1065,14,'Tequila'),(1066,14,'Hostotipaquillo'),(1067,14,'Magdalena'),(1068,14,'Etzatlán'),(1069,14,'San Marcos'),(1070,14,'San Juanito de Escobedo'),(1071,14,'Ameca'),(1072,14,'Ahualulco de Mercado'),(1073,14,'Teuchitlán'),(1074,14,'San Martín Hidalgo'),(1075,14,'Guachinango'),(1076,14,'Mixtlán'),(1077,14,'Mascota'),(1078,14,'San Sebastián del Oeste'),(1079,14,'San Juan de los Lagos'),(1080,14,'Jalostotitlán'),(1081,14,'San Miguel el Alto'),(1082,14,'San Julián'),(1083,14,'Arandas'),(1084,14,'San Ignacio Cerro Gordo'),(1085,14,'Teocaltiche'),(1086,14,'Villa Hidalgo'),(1087,14,'Encarnación de Díaz'),(1088,14,'Yahualica de González Gallo'),(1089,14,'Mexticacán'),(1090,14,'Cañadas de Obregón'),(1091,14,'Valle de Guadalupe'),(1092,14,'Lagos de Moreno'),(1093,14,'Ojuelos de Jalisco'),(1094,14,'Unión de San Antonio'),(1095,14,'San Diego de Alejandría'),(1096,14,'Tepatitlán de Morelos'),(1097,14,'Tototlán'),(1098,14,'Atotonilco el Alto'),(1099,14,'Ocotlán'),(1100,14,'Jamay'),(1101,14,'La Barca'),(1102,14,'Ayotlán'),(1103,14,'Jesús María'),(1104,14,'Degollado'),(1105,14,'Unión de Tula'),(1106,14,'Ayutla'),(1107,14,'Atenguillo'),(1108,14,'Cuautla'),(1109,14,'Atengo'),(1110,14,'Talpa de Allende'),(1111,14,'Puerto Vallarta'),(1112,14,'Cabo Corrientes'),(1113,14,'Tomatlán'),(1114,14,'Cocula'),(1115,14,'Tecolotlán'),(1116,14,'Tenamaxtlán'),(1117,14,'Juchitlán'),(1118,14,'Chiquilistlán'),(1119,14,'Ejutla'),(1120,14,'El Limón'),(1121,14,'El Grullo'),(1122,14,'Tonaya'),(1123,14,'Tuxcacuesco'),(1124,14,'Villa Purificación'),(1125,14,'La Huerta'),(1126,14,'Autlán de Navarro'),(1127,14,'Casimiro Castillo'),(1128,14,'Cuautitlán de García Barragán'),(1129,14,'Cihuatlán'),(1130,14,'Zapotlán el Grande'),(1131,14,'Gómez Farías'),(1132,14,'Concepción de Buenos Aires'),(1133,14,'Atoyac'),(1134,14,'Techaluta de Montenegro'),(1135,14,'Teocuitatlán de Corona'),(1136,14,'Sayula'),(1137,14,'Tapalpa'),(1138,14,'Amacueca'),(1139,14,'Tizapán el Alto'),(1140,14,'Tuxcueca'),(1141,14,'La Manzanilla de la Paz'),(1142,14,'Mazamitla'),(1143,14,'Valle de Juárez'),(1144,14,'Quitupan'),(1145,14,'Zapotiltic'),(1146,14,'Tamazula de Gordiano'),(1147,14,'San Gabriel'),(1148,14,'Tolimán'),(1149,14,'Zapotitlán de Vadillo'),(1150,14,'Tuxpan'),(1151,14,'Tonila'),(1152,14,'Pihuamo'),(1153,14,'Tecalitlán'),(1154,14,'Jilotlán de los Dolores'),(1155,14,'Santa María del Oro'),(1156,15,'Toluca'),(1157,15,'Acambay de Ruíz Castañeda'),(1158,15,'Aculco'),(1159,15,'Temascalcingo'),(1160,15,'Atlacomulco'),(1161,15,'Timilpan'),(1162,15,'Morelos'),(1163,15,'El Oro'),(1164,15,'San Felipe del Progreso'),(1165,15,'San José del Rincón'),(1166,15,'Jocotitlán'),(1167,15,'Ixtlahuaca'),(1168,15,'Jiquipilco'),(1169,15,'Temoaya'),(1170,15,'Almoloya de Juárez'),(1171,15,'Villa Victoria'),(1172,15,'Villa de Allende'),(1173,15,'Donato Guerra'),(1174,15,'Ixtapan del Oro'),(1175,15,'Santo Tomás'),(1176,15,'Otzoloapan'),(1177,15,'Zacazonapan'),(1178,15,'Valle de Bravo'),(1179,15,'Amanalco'),(1180,15,'Temascaltepec'),(1181,15,'Zinacantepec'),(1182,15,'Tejupilco'),(1183,15,'Luvianos'),(1184,15,'San Simón de Guerrero'),(1185,15,'Amatepec'),(1186,15,'Tlatlaya'),(1187,15,'Sultepec'),(1188,15,'Texcaltitlán'),(1189,15,'Coatepec Harinas'),(1190,15,'Villa Guerrero'),(1191,15,'Zacualpan'),(1192,15,'Almoloya de Alquisiras'),(1193,15,'Ixtapan de la Sal'),(1194,15,'Tonatico'),(1195,15,'Zumpahuacán'),(1196,15,'Lerma'),(1197,15,'Xonacatlán'),(1198,15,'Otzolotepec'),(1199,15,'San Mateo Atenco'),(1200,15,'Metepec'),(1201,15,'Mexicaltzingo'),(1202,15,'Calimaya'),(1203,15,'Chapultepec'),(1204,15,'San Antonio la Isla'),(1205,15,'Tenango del Valle'),(1206,15,'Rayón'),(1207,15,'Joquicingo'),(1208,15,'Tenancingo'),(1209,15,'Malinalco'),(1210,15,'Ocuilan'),(1211,15,'Atizapán'),(1212,15,'Almoloya del Río'),(1213,15,'Texcalyacac'),(1214,15,'Tianguistenco'),(1215,15,'Xalatlaco'),(1216,15,'Capulhuac'),(1217,15,'Ocoyoacac'),(1218,15,'Huixquilucan'),(1219,15,'Atizapán de Zaragoza'),(1220,15,'Naucalpan de Juárez'),(1221,15,'Tlalnepantla de Baz'),(1222,15,'Polotitlán'),(1223,15,'Jilotepec'),(1224,15,'Soyaniquilpan de Juárez'),(1225,15,'Villa del Carbón'),(1226,15,'Chapa de Mota'),(1227,15,'Nicolás Romero'),(1228,15,'Isidro Fabela'),(1229,15,'Jilotzingo'),(1230,15,'Tepotzotlán'),(1231,15,'Coyotepec'),(1232,15,'Huehuetoca'),(1233,15,'Cuautitlán Izcalli'),(1234,15,'Teoloyucan'),(1235,15,'Cuautitlán'),(1236,15,'Melchor Ocampo'),(1237,15,'Tultitlán'),(1238,15,'Tultepec'),(1239,15,'Ecatepec de Morelos'),(1240,15,'Zumpango'),(1241,15,'Tequixquiac'),(1242,15,'Apaxco'),(1243,15,'Hueypoxtla'),(1244,15,'Coacalco de Berriozábal'),(1245,15,'Tecámac'),(1246,15,'Jaltenco'),(1247,15,'Tonanitla'),(1248,15,'Nextlalpan'),(1249,15,'Teotihuacán'),(1250,15,'San Martín de las Pirámides'),(1251,15,'Acolman'),(1252,15,'Otumba'),(1253,15,'Axapusco'),(1254,15,'Nopaltepec'),(1255,15,'Temascalapa'),(1256,15,'Tezoyuca'),(1257,15,'Chiautla'),(1258,15,'Papalotla'),(1259,15,'Tepetlaoxtoc'),(1260,15,'Texcoco'),(1261,15,'Chiconcuac'),(1262,15,'Atenco'),(1263,15,'Chimalhuacán'),(1264,15,'Chicoloapan'),(1265,15,'La Paz'),(1266,15,'Ixtapaluca'),(1267,15,'Chalco'),(1268,15,'Valle de Chalco Solidaridad'),(1269,15,'Temamatla'),(1270,15,'Cocotitlán'),(1271,15,'Tlalmanalco'),(1272,15,'Ayapango'),(1273,15,'Tenango del Aire'),(1274,15,'Ozumba'),(1275,15,'Juchitepec'),(1276,15,'Tepetlixpa'),(1277,15,'Amecameca'),(1278,15,'Atlautla'),(1279,15,'Ecatzingo'),(1280,15,'Nezahualcóyotl'),(1281,16,'Morelia'),(1282,16,'Huaniqueo'),(1283,16,'Coeneo'),(1284,16,'Quiroga'),(1285,16,'Tzintzuntzan'),(1286,16,'Lagunillas'),(1287,16,'Acuitzio'),(1288,16,'Madero'),(1289,16,'Puruándiro'),(1290,16,'José Sixto Verduzco'),(1291,16,'Angamacutiro'),(1292,16,'Panindícuaro'),(1293,16,'Zacapu'),(1294,16,'Tlazazalca'),(1295,16,'Purépero'),(1296,16,'Jiménez'),(1297,16,'Morelos'),(1298,16,'Huandacareo'),(1299,16,'Cuitzeo'),(1300,16,'Chucándiro'),(1301,16,'Copándaro'),(1302,16,'Tarímbaro'),(1303,16,'Santa Ana Maya'),(1304,16,'Álvaro Obregón'),(1305,16,'Zinapécuaro'),(1306,16,'Indaparapeo'),(1307,16,'Queréndaro'),(1308,16,'Sahuayo'),(1309,16,'Briseñas'),(1310,16,'Cojumatlán de Régules'),(1311,16,'Venustiano Carranza'),(1312,16,'Pajacuarán'),(1313,16,'Vista Hermosa'),(1314,16,'Tanhuato'),(1315,16,'Yurécuaro'),(1316,16,'Ixtlán'),(1317,16,'La Piedad'),(1318,16,'Numarán'),(1319,16,'Churintzio'),(1320,16,'Zináparo'),(1321,16,'Penjamillo'),(1322,16,'Marcos Castellanos'),(1323,16,'Jiquilpan'),(1324,16,'Villamar'),(1325,16,'Chavinda'),(1326,16,'Zamora'),(1327,16,'Ecuandureo'),(1328,16,'Tangancícuaro'),(1329,16,'Chilchota'),(1330,16,'Jacona'),(1331,16,'Tangamandapio'),(1332,16,'Cotija'),(1333,16,'Tocumbo'),(1334,16,'Tingüindín'),(1335,16,'Uruapan'),(1336,16,'Charapan'),(1337,16,'Paracho'),(1338,16,'Cherán'),(1339,16,'Nahuatzen'),(1340,16,'Tingambato'),(1341,16,'Los Reyes'),(1342,16,'Peribán'),(1343,16,'Tancítaro'),(1344,16,'Nuevo Parangaricutiro'),(1345,16,'Buenavista'),(1346,16,'Tepalcatepec'),(1347,16,'Aguililla'),(1348,16,'Apatzingán'),(1349,16,'Parácuaro'),(1350,16,'Coahuayana'),(1351,16,'Chinicuila'),(1352,16,'Coalcomán de Vázquez Pallares'),(1353,16,'Aquila'),(1354,16,'Tumbiscatío'),(1355,16,'Arteaga'),(1356,16,'Lázaro Cárdenas'),(1357,16,'Epitacio Huerta'),(1358,16,'Contepec'),(1359,16,'Tlalpujahua'),(1360,16,'Hidalgo'),(1361,16,'Maravatío'),(1362,16,'Irimbo'),(1363,16,'Senguio'),(1364,16,'Charo'),(1365,16,'Tzitzio'),(1366,16,'Tiquicheo de Nicolás Romero'),(1367,16,'Aporo'),(1368,16,'Angangueo'),(1369,16,'Tuxpan'),(1370,16,'Ocampo'),(1371,16,'Jungapeo'),(1372,16,'Zitácuaro'),(1373,16,'Tuzantla'),(1374,16,'Juárez'),(1375,16,'Susupuato'),(1376,16,'Pátzcuaro'),(1377,16,'Erongarícuaro'),(1378,16,'Huiramba'),(1379,16,'Tacámbaro'),(1380,16,'Turicato'),(1381,16,'Ziracuaretiro'),(1382,16,'Taretan'),(1383,16,'Gabriel Zamora'),(1384,16,'Nuevo Urecho'),(1385,16,'Múgica'),(1386,16,'Salvador Escalante'),(1387,16,'Ario'),(1388,16,'La Huacana'),(1389,16,'Churumuco'),(1390,16,'Nocupétaro'),(1391,16,'Carácuaro'),(1392,16,'Huetamo'),(1393,16,'San Lucas'),(1394,17,'Cuernavaca'),(1395,17,'Huitzilac'),(1396,17,'Tepoztlán'),(1397,17,'Tlalnepantla'),(1398,17,'Tlayacapan'),(1399,17,'Jiutepec'),(1400,17,'Temixco'),(1401,17,'Miacatlán'),(1402,17,'Coatlán del Río'),(1403,17,'Tetecala'),(1404,17,'Mazatepec'),(1405,17,'Amacuzac'),(1406,17,'Puente de Ixtla'),(1407,17,'Ayala'),(1408,17,'Yautepec'),(1409,17,'Cuautla'),(1410,17,'Emiliano Zapata'),(1411,17,'Tlaltizapán de Zapata'),(1412,17,'Zacatepec'),(1413,17,'Xochitepec'),(1414,17,'Tetela del Volcán'),(1415,17,'Yecapixtla'),(1416,17,'Totolapan'),(1417,17,'Atlatlahucan'),(1418,17,'Ocuituco'),(1419,17,'Temoac'),(1420,17,'Zacualpan'),(1421,17,'Jojutla'),(1422,17,'Tepalcingo'),(1423,17,'Jonacatepec'),(1424,17,'Axochiapan'),(1425,17,'Jantetelco'),(1426,17,'Tlaquiltenango'),(1427,18,'Tepic'),(1428,18,'Tuxpan'),(1429,18,'Santiago Ixcuintla'),(1430,18,'Acaponeta'),(1431,18,'Tecuala'),(1432,18,'Huajicori'),(1433,18,'Del Nayar'),(1434,18,'La Yesca'),(1435,18,'Ruíz'),(1436,18,'Rosamorada'),(1437,18,'Compostela'),(1438,18,'Bahía de Banderas'),(1439,18,'San Blas'),(1440,18,'Xalisco'),(1441,18,'San Pedro Lagunillas'),(1442,18,'Santa María del Oro'),(1443,18,'Jala'),(1444,18,'Ahuacatlán'),(1445,18,'Ixtlán del Río'),(1446,18,'Amatlán de Cañas'),(1447,19,'Monterrey'),(1448,19,'Anáhuac'),(1449,19,'Lampazos de Naranjo'),(1450,19,'Mina'),(1451,19,'Bustamante'),(1452,19,'Sabinas Hidalgo'),(1453,19,'Villaldama'),(1454,19,'Vallecillo'),(1455,19,'Parás'),(1456,19,'Salinas Victoria'),(1457,19,'Ciénega de Flores'),(1458,19,'Hidalgo'),(1459,19,'Abasolo'),(1460,19,'Higueras'),(1461,19,'General Zuazua'),(1462,19,'Agualeguas'),(1463,19,'General Treviño'),(1464,19,'Cerralvo'),(1465,19,'Melchor Ocampo'),(1466,19,'García'),(1467,19,'General Escobedo'),(1468,19,'Santa Catarina'),(1469,19,'San Pedro Garza García'),(1470,19,'San Nicolás de los Garza'),(1471,19,'El Carmen'),(1472,19,'Apodaca'),(1473,19,'Pesquería'),(1474,19,'Marín'),(1475,19,'Doctor González'),(1476,19,'Los Ramones'),(1477,19,'Los Herreras'),(1478,19,'Los Aldamas'),(1479,19,'Doctor Coss'),(1480,19,'General Bravo'),(1481,19,'China'),(1482,19,'Guadalupe'),(1483,19,'Juárez'),(1484,19,'Santiago'),(1485,19,'Allende'),(1486,19,'General Terán'),(1487,19,'Cadereyta Jiménez'),(1488,19,'Montemorelos'),(1489,19,'Rayones'),(1490,19,'Linares'),(1491,19,'Iturbide'),(1492,19,'Galeana'),(1493,19,'Hualahuises'),(1494,19,'Doctor Arroyo'),(1495,19,'Aramberri'),(1496,19,'General Zaragoza'),(1497,19,'Mier y Noriega'),(1498,20,'Oaxaca de Juárez'),(1499,20,'Villa de Etla'),(1500,20,'San Juan Bautista Atatlahuca'),(1501,20,'San Jerónimo Sosola'),(1502,20,'San Juan Bautista Jayacatlán'),(1503,20,'San Francisco Telixtlahuaca'),(1504,20,'Santiago Tenango'),(1505,20,'San Pablo Huitzo'),(1506,20,'San Juan del Estado'),(1507,20,'Magdalena Apasco'),(1508,20,'Santiago Suchilquitongo'),(1509,20,'San Juan Bautista Guelache'),(1510,20,'Reyes Etla'),(1511,20,'Nazareno Etla'),(1512,20,'San Andrés Zautla'),(1513,20,'San Agustín Etla'),(1514,20,'Soledad Etla'),(1515,20,'Santo Tomás Mazaltepec'),(1516,20,'Guadalupe Etla'),(1517,20,'San Pablo Etla'),(1518,20,'San Felipe Tejalápam'),(1519,20,'San Lorenzo Cacaotepec'),(1520,20,'Santa María Peñoles'),(1521,20,'Santiago Tlazoyaltepec'),(1522,20,'Tlalixtac de Cabrera'),(1523,20,'San Jacinto Amilpas'),(1524,20,'San Andrés Huayápam'),(1525,20,'San Agustín Yatareni'),(1526,20,'Santo Domingo Tomaltepec'),(1527,20,'Santa María del Tule'),(1528,20,'San Juan Bautista Tuxtepec'),(1529,20,'Loma Bonita'),(1530,20,'San José Independencia'),(1531,20,'Cosolapa'),(1532,20,'Acatlán de Pérez Figueroa'),(1533,20,'San Miguel Soyaltepec'),(1534,20,'Ayotzintepec'),(1535,20,'San Pedro Ixcatlán'),(1536,20,'San José Chiltepec'),(1537,20,'San Felipe Jalapa de Díaz'),(1538,20,'Santa María Jacatepec'),(1539,20,'San Lucas Ojitlán'),(1540,20,'San Juan Bautista Valle Nacional'),(1541,20,'San Felipe Usila'),(1542,20,'Huautla de Jiménez'),(1543,20,'Santa María Chilchotla'),(1544,20,'Santa Ana Ateixtlahuaca'),(1545,20,'San Lorenzo Cuaunecuiltitla'),(1546,20,'San Francisco Huehuetlán'),(1547,20,'San Pedro Ocopetatillo'),(1548,20,'Santa Cruz Acatepec'),(1549,20,'Eloxochitlán de Flores Magón'),(1550,20,'Santiago Texcalcingo'),(1551,20,'Teotitlán de Flores Magón'),(1552,20,'Santa María Teopoxco'),(1553,20,'San Martín Toxpalan'),(1554,20,'San Jerónimo Tecóatl'),(1555,20,'Santa María la Asunción'),(1556,20,'Huautepec'),(1557,20,'San Juan Coatzóspam'),(1558,20,'San Lucas Zoquiápam'),(1559,20,'San Antonio Nanahuatípam'),(1560,20,'San José Tenango'),(1561,20,'San Mateo Yoloxochitlán'),(1562,20,'San Bartolomé Ayautla'),(1563,20,'Mazatlán Villa de Flores'),(1564,20,'San Juan de los Cués'),(1565,20,'Santa María Tecomavaca'),(1566,20,'Santa María Ixcatlán'),(1567,20,'San Juan Bautista Cuicatlán'),(1568,20,'Cuyamecalco Villa de Zaragoza'),(1569,20,'Santa Ana Cuauhtémoc'),(1570,20,'Chiquihuitlán de Benito Juárez'),(1571,20,'San Pedro Teutila'),(1572,20,'San Miguel Santa Flor'),(1573,20,'Santa María Tlalixtac'),(1574,20,'San Andrés Teotilálpam'),(1575,20,'San Francisco Chapulapa'),(1576,20,'Concepción Pápalo'),(1577,20,'Santos Reyes Pápalo'),(1578,20,'San Juan Bautista Tlacoatzintepec'),(1579,20,'Santa María Pápalo'),(1580,20,'San Juan Tepeuxila'),(1581,20,'San Pedro Sochiápam'),(1582,20,'Valerio Trujano'),(1583,20,'San Pedro Jocotipac'),(1584,20,'Santa María Texcatitlán'),(1585,20,'San Pedro Jaltepetongo'),(1586,20,'Santiago Nacaltepec'),(1587,20,'Natividad'),(1588,20,'San Juan Quiotepec'),(1589,20,'San Pedro Yólox'),(1590,20,'Santiago Comaltepec'),(1591,20,'Abejones'),(1592,20,'San Pablo Macuiltianguis'),(1593,20,'Ixtlán de Juárez'),(1594,20,'San Juan Atepec'),(1595,20,'San Pedro Yaneri'),(1596,20,'San Miguel Aloápam'),(1597,20,'Teococuilco de Marcos Pérez'),(1598,20,'Santa Ana Yareni'),(1599,20,'San Juan Evangelista Analco'),(1600,20,'Santa María Jaltianguis'),(1601,20,'San Miguel del Río'),(1602,20,'San Juan Chicomezúchil'),(1603,20,'Capulálpam de Méndez'),(1604,20,'Nuevo Zoquiápam'),(1605,20,'Santiago Xiacuí'),(1606,20,'Guelatao de Juárez'),(1607,20,'Santa Catarina Ixtepeji'),(1608,20,'San Miguel Yotao'),(1609,20,'Santa Catarina Lachatao'),(1610,20,'San Miguel Amatlán'),(1611,20,'Santa María Yavesía'),(1612,20,'Santiago Laxopa'),(1613,20,'San Ildefonso Villa Alta'),(1614,20,'Santiago Camotlán'),(1615,20,'San Juan Yaeé'),(1616,20,'Santiago Lalopa'),(1617,20,'San Juan Yatzona'),(1618,20,'Villa Talea de Castro'),(1619,20,'Tanetze de Zaragoza'),(1620,20,'San Juan Juquila Vijanos'),(1621,20,'San Cristóbal Lachirioag'),(1622,20,'Santa María Temaxcalapa'),(1623,20,'Santo Domingo Roayaga'),(1624,20,'Santa María Yalina'),(1625,20,'San Andrés Solaga'),(1626,20,'San Juan Tabaá'),(1627,20,'San Melchor Betaza'),(1628,20,'San Andrés Yaá'),(1629,20,'San Bartolomé Zoogocho'),(1630,20,'San Baltazar Yatzachi el Bajo'),(1631,20,'Santiago Zoochila'),(1632,20,'Villa Hidalgo'),(1633,20,'San Francisco Cajonos'),(1634,20,'San Mateo Cajonos'),(1635,20,'San Pedro Cajonos'),(1636,20,'Santo Domingo Xagacía'),(1637,20,'San Pablo Yaganiza'),(1638,20,'Santiago Choápam'),(1639,20,'Santiago Jocotepec'),(1640,20,'San Juan Lalana'),(1641,20,'Santiago Yaveo'),(1642,20,'San Juan Petlapa'),(1643,20,'San Juan Comaltepec'),(1644,20,'Heroica Ciudad de Huajuapan de León'),(1645,20,'Santiago Chazumba'),(1646,20,'Cosoltepec'),(1647,20,'San Pedro y San Pablo Tequixtepec'),(1648,20,'San Juan Bautista Suchitepec'),(1649,20,'Santa Catarina Zapoquila'),(1650,20,'Santiago Miltepec'),(1651,20,'San Jerónimo Silacayoapilla'),(1652,20,'Zapotitlán Palmas'),(1653,20,'San Andrés Dinicuiti'),(1654,20,'Santiago Cacaloxtepec'),(1655,20,'Asunción Cuyotepeji'),(1656,20,'Santa María Camotlán'),(1657,20,'Santiago Huajolotitlán'),(1658,20,'Santiago Tamazola'),(1659,20,'San Juan Cieneguilla'),(1660,20,'Zapotitlán Lagunas'),(1661,20,'San Juan Ihualtepec'),(1662,20,'San Nicolás Hidalgo'),(1663,20,'Guadalupe de Ramírez'),(1664,20,'San Andrés Tepetlapa'),(1665,20,'San Miguel Ahuehuetitlán'),(1666,20,'San Mateo Nejápam'),(1667,20,'San Juan Bautista Tlachichilco'),(1668,20,'Tezoatlán de Segura y Luna'),(1669,20,'Fresnillo de Trujano'),(1670,20,'Santiago Ayuquililla'),(1671,20,'San José Ayuquila'),(1672,20,'San Martín Zacatepec'),(1673,20,'San Miguel Amatitlán'),(1674,20,'Mariscala de Juárez'),(1675,20,'Santa Cruz Tacache de Mina'),(1676,20,'San Simón Zahuatlán'),(1677,20,'San Marcos Arteaga'),(1678,20,'San Jorge Nuchita'),(1679,20,'Santos Reyes Yucuná'),(1680,20,'Santo Domingo Tonalá'),(1681,20,'Santo Domingo Yodohino'),(1682,20,'San Juan Bautista Coixtlahuaca'),(1683,20,'Tepelmeme Villa de Morelos'),(1684,20,'Concepción Buenavista'),(1685,20,'Santiago Ihuitlán Plumas'),(1686,20,'Tlacotepec Plumas'),(1687,20,'San Francisco Teopan'),(1688,20,'Santa Magdalena Jicotlán'),(1689,20,'San Mateo Tlapiltepec'),(1690,20,'San Miguel Tequixtepec'),(1691,20,'San Miguel Tulancingo'),(1692,20,'Santiago Tepetlapa'),(1693,20,'San Cristóbal Suchixtlahuaca'),(1694,20,'Santa María Nativitas'),(1695,20,'Silacayoápam'),(1696,20,'Santiago Yucuyachi'),(1697,20,'San Lorenzo Victoria'),(1698,20,'San Agustín Atenango'),(1699,20,'Calihualá'),(1700,20,'Santa Cruz de Bravo'),(1701,20,'Ixpantepec Nieves'),(1702,20,'San Francisco Tlapancingo'),(1703,20,'Santiago del Río'),(1704,20,'San Pedro y San Pablo Teposcolula'),(1705,20,'La Trinidad Vista Hermosa'),(1706,20,'Villa de Tamazulápam del Progreso'),(1707,20,'San Pedro Nopala'),(1708,20,'Teotongo'),(1709,20,'San Antonio Acutla'),(1710,20,'Villa Tejúpam de la Unión'),(1711,20,'Santo Domingo Tonaltepec'),(1712,20,'Villa de Chilapa de Díaz'),(1713,20,'San Antonino Monte Verde'),(1714,20,'San Andrés Lagunas'),(1715,20,'San Pedro Yucunama'),(1716,20,'San Juan Teposcolula'),(1717,20,'San Bartolo Soyaltepec'),(1718,20,'Santiago Yolomécatl'),(1719,20,'San Sebastián Nicananduta'),(1720,20,'Santo Domingo Tlatayápam'),(1721,20,'Santa María Nduayaco'),(1722,20,'San Vicente Nuñú'),(1723,20,'San Pedro Topiltepec'),(1724,20,'Santiago Nejapilla'),(1725,20,'Asunción Nochixtlán'),(1726,20,'San Miguel Huautla'),(1727,20,'San Miguel Chicahua'),(1728,20,'Santa María Apazco'),(1729,20,'Santiago Apoala'),(1730,20,'Santa María Chachoápam'),(1731,20,'San Pedro Coxcaltepec Cántaros'),(1732,20,'Santiago Huauclilla'),(1733,20,'Santo Domingo Yanhuitlán'),(1734,20,'San Andrés Sinaxtla'),(1735,20,'San Juan Yucuita'),(1736,20,'San Juan Sayultepec'),(1737,20,'Santiago Tillo'),(1738,20,'San Francisco Chindúa'),(1739,20,'San Mateo Etlatongo'),(1740,20,'Santa Inés de Zaragoza'),(1741,20,'Santiago Juxtlahuaca'),(1742,20,'San Miguel Tlacotepec'),(1743,20,'San Sebastián Tecomaxtlahuaca'),(1744,20,'Santos Reyes Tepejillo'),(1745,20,'San Juan Mixtepec -Dto. 08 -'),(1746,20,'San Martín Peras'),(1747,20,'Coicoyán de las Flores'),(1748,20,'Heroica Ciudad de Tlaxiaco'),(1749,20,'San Juan Ñumí'),(1750,20,'San Pedro Mártir Yucuxaco'),(1751,20,'San Martín Huamelúlpam'),(1752,20,'Santa Cruz Tayata'),(1753,20,'Santiago Nundiche'),(1754,20,'Santa María del Rosario'),(1755,20,'San Juan Achiutla'),(1756,20,'Santa Catarina Tayata'),(1757,20,'San Cristóbal Amoltepec'),(1758,20,'San Miguel Achiutla'),(1759,20,'San Martín Itunyoso'),(1760,20,'Magdalena Peñasco'),(1761,20,'San Bartolomé Yucuañe'),(1762,20,'Santa Cruz Nundaco'),(1763,20,'San Agustín Tlacotepec'),(1764,20,'Santo Tomás Ocotepec'),(1765,20,'San Antonio Sinicahua'),(1766,20,'San Mateo Peñasco'),(1767,20,'Santa María Tataltepec'),(1768,20,'San Pedro Molinos'),(1769,20,'Santa María Yosoyúa'),(1770,20,'San Juan Teita'),(1771,20,'Magdalena Jaltepec'),(1772,20,'Magdalena Yodocono de Porfirio Díaz'),(1773,20,'San Miguel Tecomatlán'),(1774,20,'Magdalena Zahuatlán'),(1775,20,'San Francisco Nuxaño'),(1776,20,'San Pedro Tidaá'),(1777,20,'San Francisco Jaltepetongo'),(1778,20,'Santiago Tilantongo'),(1779,20,'San Juan Diuxi'),(1780,20,'San Andrés Nuxiño'),(1781,20,'San Juan Tamazola'),(1782,20,'Santo Domingo Nuxaá'),(1783,20,'Yutanduchi de Guerrero'),(1784,20,'San Pedro Teozacoalco'),(1785,20,'San Miguel Piedras'),(1786,20,'San Mateo Sindihui'),(1787,20,'Heroica Ciudad de Juchitán de Zaragoza'),(1788,20,'Ciudad Ixtepec'),(1789,20,'El Espinal'),(1790,20,'Santo Domingo Ingenio'),(1791,20,'Santa María Xadani'),(1792,20,'Santiago Niltepec'),(1793,20,'San Dionisio del Mar'),(1794,20,'Asunción Ixtaltepec'),(1795,20,'San Francisco del Mar'),(1796,20,'Unión Hidalgo'),(1797,20,'San Miguel Chimalapa'),(1798,20,'Santo Domingo Zanatepec'),(1799,20,'Reforma de Pineda'),(1800,20,'San Francisco Ixhuatán'),(1801,20,'San Pedro Tapanatepec'),(1802,20,'Chahuites'),(1803,20,'Santiago Zacatepec'),(1804,20,'Santo Domingo Tepuxtepec'),(1805,20,'San Juan Cotzocón'),(1806,20,'San Juan Mazatlán'),(1807,20,'Totontepec Villa de Morelos'),(1808,20,'Mixistlán de la Reforma'),(1809,20,'Santa María Tlahuitoltepec'),(1810,20,'Santa María Alotepec'),(1811,20,'Santiago Atitlán'),(1812,20,'Tamazulápam del Espíritu Santo'),(1813,20,'San Pedro y San Pablo Ayutla'),(1814,20,'Santa María Tepantlali'),(1815,20,'San Miguel Quetzaltepec'),(1816,20,'Asunción Cacalotepec'),(1817,20,'San Pedro Ocotepec'),(1818,20,'San Lucas Camotlán'),(1819,20,'Santiago Ixcuintepec'),(1820,20,'Matías Romero Avendaño'),(1821,20,'San Juan Guichicovi'),(1822,20,'Santo Domingo Petapa'),(1823,20,'Santa María Chimalapa'),(1824,20,'Santa María Petapa'),(1825,20,'El Barrio de la Soledad'),(1826,20,'Tlacolula de Matamoros'),(1827,20,'San Sebastián Abasolo'),(1828,20,'Villa Díaz Ordaz'),(1829,20,'Santa María Guelacé'),(1830,20,'Teotitlán del Valle'),(1831,20,'San Francisco Lachigoló'),(1832,20,'San Sebastián Teitipac'),(1833,20,'Santa Ana del Valle'),(1834,20,'San Pablo Villa de Mitla'),(1835,20,'Santiago Matatlán'),(1836,20,'Santo Domingo Albarradas'),(1837,20,'Rojas de Cuauhtémoc'),(1838,20,'San Juan Teitipac'),(1839,20,'Santa Cruz Papalutla'),(1840,20,'Magdalena Teitipac'),(1841,20,'San Jerónimo Tlacochahuaya'),(1842,20,'San Juan Guelavía'),(1843,20,'San Lucas Quiaviní'),(1844,20,'San Juan del Río'),(1845,20,'San Bartolomé Quialana'),(1846,20,'San Lorenzo Albarradas'),(1847,20,'San Pedro Totolápam'),(1848,20,'San Pedro Quiatoni'),(1849,20,'Santa María Zoquitlán'),(1850,20,'San Dionisio Ocotepec'),(1851,20,'San Carlos Yautepec'),(1852,20,'San Juan Juquila Mixes'),(1853,20,'Nejapa de Madero'),(1854,20,'Santa Ana Tavela'),(1855,20,'San Juan Lajarcia'),(1856,20,'San Bartolo Yautepec'),(1857,20,'Santa María Ecatepec'),(1858,20,'Asunción Tlacolulita'),(1859,20,'San Pedro Mártir Quiechapa'),(1860,20,'Santa María Quiegolani'),(1861,20,'Santa Catarina Quioquitani'),(1862,20,'Santa Catalina Quierí'),(1863,20,'Salina Cruz'),(1864,20,'Santiago Lachiguiri'),(1865,20,'Santa María Jalapa del Marqués'),(1866,20,'Santa María Totolapilla'),(1867,20,'Santiago Laollaga'),(1868,20,'Guevea de Humboldt'),(1869,20,'Santo Domingo Chihuitán'),(1870,20,'Santa María Guienagati'),(1871,20,'Magdalena Tequisistlán'),(1872,20,'Magdalena Tlacotepec'),(1873,20,'San Pedro Comitancillo'),(1874,20,'Santa María Mixtequilla'),(1875,20,'Santo Domingo Tehuantepec'),(1876,20,'San Pedro Huamelula'),(1877,20,'San Pedro Huilotepec'),(1878,20,'San Mateo del Mar'),(1879,20,'San Blas Atempa'),(1880,20,'Santiago Astata'),(1881,20,'San Miguel Tenango'),(1882,20,'Miahuatlán de Porfirio Díaz'),(1883,20,'San Nicolás'),(1884,20,'San Simón Almolongas'),(1885,20,'San Luis Amatlán'),(1886,20,'San José Lachiguiri'),(1887,20,'Sitio de Xitlapehua'),(1888,20,'San Francisco Logueche'),(1889,20,'Santa Ana'),(1890,20,'Santa Cruz Xitla'),(1891,20,'Monjas'),(1892,20,'San Ildefonso Amatlán'),(1893,20,'Santa Catarina Cuixtla'),(1894,20,'San José del Peñasco'),(1895,20,'San Cristóbal Amatlán'),(1896,20,'San Juan Mixtepec -Dto. 26 -'),(1897,20,'San Pedro Mixtepec -Dto. 26 -'),(1898,20,'Santa Lucía Miahuatlán'),(1899,20,'San Jerónimo Coatlán'),(1900,20,'San Sebastián Coatlán'),(1901,20,'San Pablo Coatlán'),(1902,20,'San Mateo Río Hondo'),(1903,20,'Santo Tomás Tamazulapan'),(1904,20,'San Andrés Paxtlán'),(1905,20,'Santa María Ozolotepec'),(1906,20,'San Miguel Coatlán'),(1907,20,'San Sebastián Río Hondo'),(1908,20,'San Miguel Suchixtepec'),(1909,20,'Santo Domingo Ozolotepec'),(1910,20,'San Francisco Ozolotepec'),(1911,20,'Santiago Xanica'),(1912,20,'San Marcial Ozolotepec'),(1913,20,'San Juan Ozolotepec'),(1914,20,'San Pedro Pochutla'),(1915,20,'Santo Domingo de Morelos'),(1916,20,'Santa Catarina Loxicha'),(1917,20,'San Agustín Loxicha'),(1918,20,'San Baltazar Loxicha'),(1919,20,'Santa María Colotepec'),(1920,20,'San Bartolomé Loxicha'),(1921,20,'Santa María Tonameca'),(1922,20,'Candelaria Loxicha'),(1923,20,'Pluma Hidalgo'),(1924,20,'San Pedro el Alto'),(1925,20,'San Mateo Piñas'),(1926,20,'Santa María Huatulco'),(1927,20,'San Miguel del Puerto'),(1928,20,'Putla Villa de Guerrero'),(1929,20,'Constancia del Rosario'),(1930,20,'Mesones Hidalgo'),(1931,20,'Santa María Zacatepec'),(1932,20,'San Pedro Amuzgos'),(1933,20,'La Reforma'),(1934,20,'Santa María Ipalapa'),(1935,20,'Chalcatongo de Hidalgo'),(1936,20,'Santa María Yucuhiti'),(1937,20,'San Esteban Atatlahuca'),(1938,20,'Santa Catarina Ticuá'),(1939,20,'Santiago Nuyoó'),(1940,20,'Santa Catarina Yosonotú'),(1941,20,'San Miguel el Grande'),(1942,20,'Santo Domingo Ixcatlán'),(1943,20,'San Pablo Tijaltepec'),(1944,20,'Santa Cruz Tacahua'),(1945,20,'Santa Lucía Monteverde'),(1946,20,'San Andrés Cabecera Nueva'),(1947,20,'Santa María Yolotepec'),(1948,20,'Santiago Yosondúa'),(1949,20,'Santa Cruz Itundujia'),(1950,20,'Zimatlán de Álvarez'),(1951,20,'San Bernardo Mixtepec'),(1952,20,'Santa Cruz Mixtepec'),(1953,20,'San Miguel Mixtepec'),(1954,20,'Santa María Atzompa'),(1955,20,'San Andrés Ixtlahuaca'),(1956,20,'Santa Cruz Amilpas'),(1957,20,'Santa Cruz Xoxocotlán'),(1958,20,'Santa Lucía del Camino'),(1959,20,'San Pedro Ixtlahuaca'),(1960,20,'San Antonio de la Cal'),(1961,20,'San Agustín de las Juntas'),(1962,20,'San Pablo Huixtepec'),(1963,20,'Ánimas Trujano'),(1964,20,'San Jacinto Tlacotepec'),(1965,20,'San Raymundo Jalpan'),(1966,20,'Trinidad Zaachila'),(1967,20,'Santa María Coyotepec'),(1968,20,'San Bartolo Coyotepec'),(1969,20,'Santa Inés Yatzeche'),(1970,20,'Ciénega de Zimatlán'),(1971,20,'San Antonio Huitepec'),(1972,20,'Villa de Zaachila'),(1973,20,'San Sebastián Tutla'),(1974,20,'San Miguel Peras'),(1975,20,'San Pablo Cuatro Venados'),(1976,20,'Santa Inés del Monte'),(1977,20,'Santa Gertrudis'),(1978,20,'San Antonino el Alto'),(1979,20,'Magdalena Mixtepec'),(1980,20,'Santa Catarina Quiané'),(1981,20,'Ayoquezco de Aldama'),(1982,20,'Santa Ana Tlapacoyan'),(1983,20,'Santa Cruz Zenzontepec'),(1984,20,'San Francisco Cahuacuá'),(1985,20,'San Mateo Yucutindoo'),(1986,20,'Santiago Textitlán'),(1987,20,'Santiago Amoltepec'),(1988,20,'Santa María Zaniza'),(1989,20,'Santo Domingo Teojomulco'),(1990,20,'Cuilápam de Guerrero'),(1991,20,'Villa Sola de Vega'),(1992,20,'Santa María Lachixío'),(1993,20,'San Vicente Lachixío'),(1994,20,'San Lorenzo Texmelúcan'),(1995,20,'Santa María Sola'),(1996,20,'San Francisco Sola'),(1997,20,'San Ildefonso Sola'),(1998,20,'Santiago Minas'),(1999,20,'Heroica Ciudad de Ejutla de Crespo'),(2000,20,'San Martín Tilcajete'),(2001,20,'Santo Tomás Jalieza'),(2002,20,'San Juan Chilateca'),(2003,20,'Ocotlán de Morelos'),(2004,20,'Santa Ana Zegache'),(2005,20,'Santiago Apóstol'),(2006,20,'San Antonino Castillo Velasco'),(2007,20,'Asunción Ocotlán'),(2008,20,'San Pedro Mártir'),(2009,20,'San Dionisio Ocotlán'),(2010,20,'Magdalena Ocotlán'),(2011,20,'San Miguel Tilquiápam'),(2012,20,'Santa Catarina Minas'),(2013,20,'San Baltazar Chichicápam'),(2014,20,'San Pedro Apóstol'),(2015,20,'Santa Lucía Ocotlán'),(2016,20,'San Jerónimo Taviche'),(2017,20,'San Andrés Zabache'),(2018,20,'San José del Progreso'),(2019,20,'Yaxe'),(2020,20,'San Pedro Taviche'),(2021,20,'San Martín de los Cansecos'),(2022,20,'San Martín Lachilá'),(2023,20,'La Pe'),(2024,20,'La Compañía'),(2025,20,'Coatecas Altas'),(2026,20,'San Juan Lachigalla'),(2027,20,'San Agustín Amatengo'),(2028,20,'Taniche'),(2029,20,'San Miguel Ejutla'),(2030,20,'Yogana'),(2031,20,'San Vicente Coatlán'),(2032,20,'Santiago Pinotepa Nacional'),(2033,20,'San Juan Cacahuatepec'),(2034,20,'San Juan Bautista Lo de Soto'),(2035,20,'Mártires de Tacubaya'),(2036,20,'San Sebastián Ixcapa'),(2037,20,'San Antonio Tepetlapa'),(2038,20,'Santa María Cortijo'),(2039,20,'Santiago Llano Grande'),(2040,20,'San Miguel Tlacamama'),(2041,20,'Santiago Tapextla'),(2042,20,'San José Estancia Grande'),(2043,20,'Santo Domingo Armenta'),(2044,20,'Santiago Jamiltepec'),(2045,20,'San Pedro Atoyac'),(2046,20,'San Juan Colorado'),(2047,20,'Santiago Ixtayutla'),(2048,20,'San Pedro Jicayán'),(2049,20,'Pinotepa de Don Luis'),(2050,20,'San Lorenzo'),(2051,20,'San Agustín Chayuco'),(2052,20,'San Andrés Huaxpaltepec'),(2053,20,'Santa Catarina Mechoacán'),(2054,20,'Santiago Tetepec'),(2055,20,'Santa María Huazolotitlán'),(2056,20,'Villa de Tututepec de Melchor Ocampo'),(2057,20,'Tataltepec de Valdés'),(2058,20,'San Juan Quiahije'),(2059,20,'San Miguel Panixtlahuaca'),(2060,20,'Santa Catarina Juquila'),(2061,20,'San Pedro Juchatengo'),(2062,20,'Santiago Yaitepec'),(2063,20,'San Juan Lachao'),(2064,20,'Santa María Temaxcaltepec'),(2065,20,'Santos Reyes Nopala'),(2066,20,'San Gabriel Mixtepec'),(2067,20,'San Pedro Mixtepec -Dto. 22 -'),(2068,21,'Puebla'),(2069,21,'Tlaltenango'),(2070,21,'San Miguel Xoxtla'),(2071,21,'Juan C. Bonilla'),(2072,21,'Coronango'),(2073,21,'Cuautlancingo'),(2074,21,'San Pedro Cholula'),(2075,21,'San Andrés Cholula'),(2076,21,'Ocoyucan'),(2077,21,'Amozoc'),(2078,21,'Francisco Z. Mena'),(2079,21,'Pantepec'),(2080,21,'Venustiano Carranza'),(2081,21,'Jalpan'),(2082,21,'Tlaxco'),(2083,21,'Tlacuilotepec'),(2084,21,'Xicotepec'),(2085,21,'Pahuatlán'),(2086,21,'Honey'),(2087,21,'Naupan'),(2088,21,'Huauchinango'),(2089,21,'Ahuazotepec'),(2090,21,'Juan Galindo'),(2091,21,'Tlaola'),(2092,21,'Zihuateutla'),(2093,21,'Jopala'),(2094,21,'Tlapacoya'),(2095,21,'Chignahuapan'),(2096,21,'Zacatlán'),(2097,21,'Chiconcuautla'),(2098,21,'Ahuacatlán'),(2099,21,'Tepetzintla'),(2100,21,'San Felipe Tepatlán'),(2101,21,'Amixtlán'),(2102,21,'Tepango de Rodríguez'),(2103,21,'Zongozotla'),(2104,21,'Hermenegildo Galeana'),(2105,21,'Olintla'),(2106,21,'Coatepec'),(2107,21,'Camocuautla'),(2108,21,'Hueytlalpan'),(2109,21,'Zapotitlán de Méndez'),(2110,21,'Huitzilan de Serdán'),(2111,21,'Xochitlán de Vicente Suárez'),(2112,21,'Huehuetla'),(2113,21,'Ixtepec'),(2114,21,'Atlequizayan'),(2115,21,'Tenampulco'),(2116,21,'Tuzamapan de Galeana'),(2117,21,'Caxhuacan'),(2118,21,'Jonotla'),(2119,21,'Zoquiapan'),(2120,21,'Nauzontla'),(2121,21,'Cuetzalan del Progreso'),(2122,21,'Ayotoxco de Guerrero'),(2123,21,'Hueytamalco'),(2124,21,'Acateno'),(2125,21,'Cuautempan'),(2126,21,'Aquixtla'),(2127,21,'Tetela de Ocampo'),(2128,21,'Xochiapulco'),(2129,21,'Zacapoaxtla'),(2130,21,'Zaragoza'),(2131,21,'Ixtacamaxtitlán'),(2132,21,'Zautla'),(2133,21,'Ocotepec'),(2134,21,'Libres'),(2135,21,'Teziutlán'),(2136,21,'Tlatlauquitepec'),(2137,21,'Yaonáhuac'),(2138,21,'Hueyapan'),(2139,21,'Teteles de Avila Castillo'),(2140,21,'Atempan'),(2141,21,'Chignautla'),(2142,21,'Xiutetelco'),(2143,21,'Cuyoaco'),(2144,21,'Tepeyahualco'),(2145,21,'San Martín Texmelucan'),(2146,21,'Tlahuapan'),(2147,21,'San Matías Tlalancaleca'),(2148,21,'San Salvador el Verde'),(2149,21,'San Felipe Teotlalcingo'),(2150,21,'Chiautzingo'),(2151,21,'Huejotzingo'),(2152,21,'Domingo Arenas'),(2153,21,'Calpan'),(2154,21,'San Nicolás de los Ranchos'),(2155,21,'Atlixco'),(2156,21,'Nealtican'),(2157,21,'San Jerónimo Tecuanipan'),(2158,21,'San Gregorio Atzompa'),(2159,21,'Tochimilco'),(2160,21,'Tianguismanalco'),(2161,21,'Santa Isabel Cholula'),(2162,21,'Huaquechula'),(2163,21,'San Diego la Mesa Tochimiltzingo'),(2164,21,'Tepeojuma'),(2165,21,'Izúcar de Matamoros'),(2166,21,'Atzitzihuacán'),(2167,21,'Acteopan'),(2168,21,'Cohuecan'),(2169,21,'Tepemaxalco'),(2170,21,'Tlapanalá'),(2171,21,'Tepexco'),(2172,21,'Tilapa'),(2173,21,'Chietla'),(2174,21,'Atzala'),(2175,21,'Teopantlán'),(2176,21,'San Martín Totoltepec'),(2177,21,'Xochiltepec'),(2178,21,'Epatlán'),(2179,21,'Ahuatlán'),(2180,21,'Coatzingo'),(2181,21,'Santa Catarina Tlaltempan'),(2182,21,'Chigmecatitlán'),(2183,21,'Zacapala'),(2184,21,'Tepexi de Rodríguez'),(2185,21,'Teotlalco'),(2186,21,'Jolalpan'),(2187,21,'Huehuetlán el Chico'),(2188,21,'Chiautla'),(2189,21,'Cohetzala'),(2190,21,'Xicotlán'),(2191,21,'Chila de la Sal'),(2192,21,'Ixcamilpa de Guerrero'),(2193,21,'Albino Zertuche'),(2194,21,'Tulcingo'),(2195,21,'Tehuitzingo'),(2196,21,'Cuayuca de Andrade'),(2197,21,'Santa Inés Ahuatempan'),(2198,21,'Axutla'),(2199,21,'Chinantla'),(2200,21,'Ahuehuetitla'),(2201,21,'San Pablo Anicano'),(2202,21,'Tecomatlán'),(2203,21,'Piaxtla'),(2204,21,'Guadalupe'),(2205,21,'Ixcaquixtla'),(2206,21,'Coyotepec'),(2207,21,'Xayacatlán de Bravo'),(2208,21,'Totoltepec de Guerrero'),(2209,21,'Acatlán'),(2210,21,'San Jerónimo Xayacatlán'),(2211,21,'San Pedro Yeloixtlahuaca'),(2212,21,'Petlalcingo'),(2213,21,'San Miguel Ixitlán'),(2214,21,'Chila'),(2215,21,'Rafael Lara Grajales'),(2216,21,'San José Chiapa'),(2217,21,'Oriental'),(2218,21,'San Nicolás Buenos Aires'),(2219,21,'Guadalupe Victoria'),(2220,21,'Tlachichuca'),(2221,21,'Lafragua'),(2222,21,'Chilchotla'),(2223,21,'Quimixtlán'),(2224,21,'Chichiquila'),(2225,21,'Tepatlaxco de Hidalgo'),(2226,21,'Acajete'),(2227,21,'Nopalucan'),(2228,21,'Mazapiltepec de Juárez'),(2229,21,'Soltepec'),(2230,21,'Acatzingo'),(2231,21,'San Salvador el Seco'),(2232,21,'General Felipe Ángeles'),(2233,21,'Aljojuca'),(2234,21,'San Juan Atenco'),(2235,21,'Tepeaca'),(2236,21,'Cuautinchán'),(2237,21,'Tecali de Herrera'),(2238,21,'Mixtla'),(2239,21,'Santo Tomás Hueyotlipan'),(2240,21,'Tzicatlacoyan'),(2241,21,'Huehuetlán el Grande'),(2242,21,'La Magdalena Tlatlauquitepec'),(2243,21,'San Juan Atzompa'),(2244,21,'Huatlatlauca'),(2245,21,'Los Reyes de Juárez'),(2246,21,'Cuapiaxtla de Madero'),(2247,21,'San Salvador Huixcolotla'),(2248,21,'Quecholac'),(2249,21,'Tecamachalco'),(2250,21,'Palmar de Bravo'),(2251,21,'Chalchicomula de Sesma'),(2252,21,'Atzitzintla'),(2253,21,'Esperanza'),(2254,21,'Cañada Morelos'),(2255,21,'Tlanepantla'),(2256,21,'Tochtepec'),(2257,21,'Atoyatempan'),(2258,21,'Tepeyahualco de Cuauhtémoc'),(2259,21,'Huitziltepec'),(2260,21,'Molcaxac'),(2261,21,'Xochitlán Todos Santos'),(2262,21,'Yehualtepec'),(2263,21,'Tlacotepec de Benito Juárez'),(2264,21,'Juan N. Méndez'),(2265,21,'Tehuacán'),(2266,21,'Tepanco de López'),(2267,21,'Chapulco'),(2268,21,'Santiago Miahuatlán'),(2269,21,'Nicolás Bravo'),(2270,21,'Atexcal'),(2271,21,'San Antonio Cañada'),(2272,21,'Zapotitlán'),(2273,21,'San Gabriel Chilac'),(2274,21,'Caltepec'),(2275,21,'Vicente Guerrero'),(2276,21,'Ajalpan'),(2277,21,'Eloxochitlán'),(2278,21,'Zoquitlán'),(2279,21,'San Sebastián Tlacotepec'),(2280,21,'Altepexi'),(2281,21,'Zinacatepec'),(2282,21,'San José Miahuatlán'),(2283,21,'Coxcatlán'),(2284,21,'Coyomeapan'),(2285,22,'Querétaro'),(2286,22,'El Marqués'),(2287,22,'Colón'),(2288,22,'Pinal de Amoles'),(2289,22,'Jalpan de Serra'),(2290,22,'Landa de Matamoros'),(2291,22,'Arroyo Seco'),(2292,22,'Peñamiller'),(2293,22,'Cadereyta de Montes'),(2294,22,'San Joaquín'),(2295,22,'Tolimán'),(2296,22,'Ezequiel Montes'),(2297,22,'Pedro Escobedo'),(2298,22,'Tequisquiapan'),(2299,22,'San Juan del Río'),(2300,22,'Amealco de Bonfil'),(2301,22,'Corregidora'),(2302,22,'Huimilpan'),(2303,23,'Othón P. Blanco'),(2304,23,'Felipe Carrillo Puerto'),(2305,23,'Lázaro Cárdenas'),(2306,23,'Isla Mujeres'),(2307,23,'Benito Juárez'),(2308,23,'Cozumel'),(2309,23,'Solidaridad'),(2310,23,'Tulum'),(2311,23,'José María Morelos'),(2312,23,'Bacalar'),(2313,24,'San Luis Potosí'),(2314,24,'Soledad de Graciano Sánchez'),(2315,24,'Cerro de San Pedro'),(2316,24,'Ahualulco'),(2317,24,'Mexquitic de Carmona'),(2318,24,'Villa de Arriaga'),(2319,24,'Vanegas'),(2320,24,'Cedral'),(2321,24,'Catorce'),(2322,24,'Charcas'),(2323,24,'Salinas'),(2324,24,'Santo Domingo'),(2325,24,'Villa de Ramos'),(2326,24,'Matehuala'),(2327,24,'Villa de la Paz'),(2328,24,'Villa de Guadalupe'),(2329,24,'Guadalcázar'),(2330,24,'Moctezuma'),(2331,24,'Venado'),(2332,24,'Villa de Arista'),(2333,24,'Villa Hidalgo'),(2334,24,'Armadillo de los Infante'),(2335,24,'Ciudad Valles'),(2336,24,'Ebano'),(2337,24,'Tamuín'),(2338,24,'El Naranjo'),(2339,24,'Ciudad del Maíz'),(2340,24,'Alaquines'),(2341,24,'Cárdenas'),(2342,24,'Cerritos'),(2343,24,'Villa Juárez'),(2344,24,'San Nicolás Tolentino'),(2345,24,'Villa de Reyes'),(2346,24,'Zaragoza'),(2347,24,'Santa María del Río'),(2348,24,'Tierra Nueva'),(2349,24,'Rioverde'),(2350,24,'Ciudad Fernández'),(2351,24,'San Ciro de Acosta'),(2352,24,'Tamasopo'),(2353,24,'Rayón'),(2354,24,'Aquismón'),(2355,24,'Lagunillas'),(2356,24,'Santa Catarina'),(2357,24,'Tancanhuitz'),(2358,24,'Tanlajás'),(2359,24,'San Vicente Tancuayalab'),(2360,24,'San Antonio'),(2361,24,'Tanquián de Escobedo'),(2362,24,'Tampamolón Corona'),(2363,24,'Coxcatlán'),(2364,24,'Huehuetlán'),(2365,24,'Xilitla'),(2366,24,'Axtla de Terrazas'),(2367,24,'Tampacán'),(2368,24,'San Martín Chalchicuautla'),(2369,24,'Tamazunchale'),(2370,24,'Matlapa'),(2371,25,'Culiacán'),(2372,25,'Navolato'),(2373,25,'Badiraguato'),(2374,25,'Cosalá'),(2375,25,'Mocorito'),(2376,25,'Guasave'),(2377,25,'Ahome'),(2378,25,'Salvador Alvarado'),(2379,25,'Angostura'),(2380,25,'Choix'),(2381,25,'El Fuerte'),(2382,25,'Sinaloa'),(2383,25,'Mazatlán'),(2384,25,'Escuinapa'),(2385,25,'Concordia'),(2386,25,'Elota'),(2387,25,'Rosario'),(2388,25,'San Ignacio'),(2389,26,'Hermosillo'),(2390,26,'San Miguel de Horcasitas'),(2391,26,'Carbó'),(2392,26,'San Luis Río Colorado'),(2393,26,'Puerto Peñasco'),(2394,26,'General Plutarco Elías Calles'),(2395,26,'Caborca'),(2396,26,'Altar'),(2397,26,'Tubutama'),(2398,26,'Atil'),(2399,26,'Oquitoa'),(2400,26,'Sáric'),(2401,26,'Benjamín Hill'),(2402,26,'Trincheras'),(2403,26,'Pitiquito'),(2404,26,'Nogales'),(2405,26,'Imuris'),(2406,26,'Santa Cruz'),(2407,26,'Magdalena'),(2408,26,'Naco'),(2409,26,'Agua Prieta'),(2410,26,'Fronteras'),(2411,26,'Nacozari de García'),(2412,26,'Bavispe'),(2413,26,'Bacerac'),(2414,26,'Huachinera'),(2415,26,'Nácori Chico'),(2416,26,'Granados'),(2417,26,'Bacadéhuachi'),(2418,26,'Cumpas'),(2419,26,'Huásabas'),(2420,26,'Moctezuma'),(2421,26,'Villa Hidalgo'),(2422,26,'Santa Ana'),(2423,26,'Cananea'),(2424,26,'Arizpe'),(2425,26,'Cucurpe'),(2426,26,'Bacoachi'),(2427,26,'San Pedro de la Cueva'),(2428,26,'Divisaderos'),(2429,26,'Tepache'),(2430,26,'Villa Pesqueira'),(2431,26,'Opodepe'),(2432,26,'Huépac'),(2433,26,'Banámichi'),(2434,26,'Ures'),(2435,26,'Aconchi'),(2436,26,'Baviácora'),(2437,26,'San Felipe de Jesús'),(2438,26,'Rayón'),(2439,26,'Cajeme'),(2440,26,'Navojoa'),(2441,26,'Huatabampo'),(2442,26,'Bácum'),(2443,26,'Etchojoa'),(2444,26,'Benito Juárez'),(2445,26,'Empalme'),(2446,26,'Guaymas'),(2447,26,'San Ignacio Río Muerto'),(2448,26,'La Colorada'),(2449,26,'Mazatán'),(2450,26,'Suaqui Grande'),(2451,26,'Sahuaripa'),(2452,26,'San Javier'),(2453,26,'Soyopa'),(2454,26,'Bacanora'),(2455,26,'Arivechi'),(2456,26,'Rosario'),(2457,26,'Quiriego'),(2458,26,'Onavas'),(2459,26,'Alamos'),(2460,26,'Yécora'),(2461,27,'Centro'),(2462,27,'Jalpa de Méndez'),(2463,27,'Nacajuca'),(2464,27,'Comalcalco'),(2465,27,'Huimanguillo'),(2466,27,'Cárdenas'),(2467,27,'Paraíso'),(2468,27,'Cunduacán'),(2469,27,'Macuspana'),(2470,27,'Centla'),(2471,27,'Jonuta'),(2472,27,'Teapa'),(2473,27,'Jalapa'),(2474,27,'Tacotalpa'),(2475,27,'Tenosique'),(2476,27,'Balancán'),(2477,27,'Emiliano Zapata'),(2478,28,'Victoria'),(2479,28,'Llera'),(2480,28,'Güémez'),(2481,28,'Casas'),(2482,28,'Matamoros'),(2483,28,'Valle Hermoso'),(2484,28,'San Fernando'),(2485,28,'Cruillas'),(2486,28,'San Nicolás'),(2487,28,'Soto la Marina'),(2488,28,'Jiménez'),(2489,28,'San Carlos'),(2490,28,'Abasolo'),(2491,28,'Padilla'),(2492,28,'Hidalgo'),(2493,28,'Mainero'),(2494,28,'Villagrán'),(2495,28,'Tula'),(2496,28,'Jaumave'),(2497,28,'Miquihuana'),(2498,28,'Bustamante'),(2499,28,'Palmillas'),(2500,28,'Ocampo'),(2501,28,'Nuevo Laredo'),(2502,28,'Miguel Alemán'),(2503,28,'Guerrero'),(2504,28,'Mier'),(2505,28,'Gustavo Díaz Ordaz'),(2506,28,'Camargo'),(2507,28,'Reynosa'),(2508,28,'Río Bravo'),(2509,28,'Méndez'),(2510,28,'Burgos'),(2511,28,'Tampico'),(2512,28,'Ciudad Madero'),(2513,28,'Altamira'),(2514,28,'Aldama'),(2515,28,'González'),(2516,28,'Xicoténcatl'),(2517,28,'Gómez Farías'),(2518,28,'El Mante'),(2519,28,'Antiguo Morelos'),(2520,28,'Nuevo Morelos'),(2521,29,'Tlaxcala'),(2522,29,'Ixtacuixtla de Mariano Matamoros'),(2523,29,'Santa Ana Nopalucan'),(2524,29,'Panotla'),(2525,29,'Totolac'),(2526,29,'Tepeyanco'),(2527,29,'Santa Isabel Xiloxoxtla'),(2528,29,'San Juan Huactzinco'),(2529,29,'Calpulalpan'),(2530,29,'Sanctórum de Lázaro Cárdenas'),(2531,29,'Benito Juárez'),(2532,29,'Hueyotlipan'),(2533,29,'Tlaxco'),(2534,29,'Nanacamilpa de Mariano Arista'),(2535,29,'Españita'),(2536,29,'Apizaco'),(2537,29,'Atlangatepec'),(2538,29,'Muñoz de Domingo Arenas'),(2539,29,'Tetla de la Solidaridad'),(2540,29,'Xaltocan'),(2541,29,'San Lucas Tecopilco'),(2542,29,'Yauhquemehcan'),(2543,29,'Xaloztoc'),(2544,29,'Tocatlán'),(2545,29,'Tzompantepec'),(2546,29,'San José Teacalco'),(2547,29,'Huamantla'),(2548,29,'Terrenate'),(2549,29,'Lázaro Cárdenas'),(2550,29,'Emiliano Zapata'),(2551,29,'Atltzayanca'),(2552,29,'Cuapiaxtla'),(2553,29,'El Carmen Tequexquitla'),(2554,29,'Ixtenco'),(2555,29,'Ziltlaltépec de Trinidad Sánchez Santos'),(2556,29,'Apetatitlán de Antonio Carvajal'),(2557,29,'Amaxac de Guerrero'),(2558,29,'Santa Cruz Tlaxcala'),(2559,29,'Cuaxomulco'),(2560,29,'Contla de Juan Cuamatzi'),(2561,29,'Tepetitla de Lardizábal'),(2562,29,'Natívitas'),(2563,29,'Santa Apolonia Teacalco'),(2564,29,'Tetlatlahuca'),(2565,29,'San Damián Texóloc'),(2566,29,'San Jerónimo Zacualpan'),(2567,29,'Zacatelco'),(2568,29,'San Lorenzo Axocomanitla'),(2569,29,'Santa Catarina Ayometla'),(2570,29,'Xicohtzinco'),(2571,29,'Papalotla de Xicohténcatl'),(2572,29,'Chiautempan'),(2573,29,'La Magdalena Tlaltelulco'),(2574,29,'San Francisco Tetlanohcan'),(2575,29,'Teolocholco'),(2576,29,'Acuamanala de Miguel Hidalgo'),(2577,29,'Santa Cruz Quilehtla'),(2578,29,'Mazatecochco de José María Morelos'),(2579,29,'Tenancingo'),(2580,29,'San Pablo del Monte'),(2581,30,'Xalapa'),(2582,30,'Tlalnelhuayocan'),(2583,30,'Xico'),(2584,30,'Ixhuacán de los Reyes'),(2585,30,'Ayahualulco'),(2586,30,'Perote'),(2587,30,'Banderilla'),(2588,30,'Rafael Lucio'),(2589,30,'Acajete'),(2590,30,'Las Vigas de Ramírez'),(2591,30,'Villa Aldama'),(2592,30,'Tlacolulan'),(2593,30,'Tonayán'),(2594,30,'Coacoatzintla'),(2595,30,'Jilotepec'),(2596,30,'Naolinco'),(2597,30,'Miahuatlán'),(2598,30,'Acatlán'),(2599,30,'Tepetlán'),(2600,30,'Juchique de Ferrer'),(2601,30,'Alto Lucero de Gutiérrez Barrios'),(2602,30,'Actopan'),(2603,30,'Coatepec'),(2604,30,'Teocelo'),(2605,30,'Cosautlán de Carvajal'),(2606,30,'Emiliano Zapata'),(2607,30,'Apazapan'),(2608,30,'Puente Nacional'),(2609,30,'Ursulo Galván'),(2610,30,'Paso de Ovejas'),(2611,30,'La Antigua'),(2612,30,'Veracruz'),(2613,30,'Pánuco'),(2614,30,'Pueblo Viejo'),(2615,30,'Tampico Alto'),(2616,30,'Tempoal'),(2617,30,'Ozuluama de Mascareñas'),(2618,30,'Tantoyuca'),(2619,30,'Platón Sánchez'),(2620,30,'Chiconamel'),(2621,30,'Chalma'),(2622,30,'Chontla'),(2623,30,'Citlaltépetl'),(2624,30,'Ixcatepec'),(2625,30,'Naranjos Amatlán'),(2626,30,'El Higo'),(2627,30,'Chinampa de Gorostiza'),(2628,30,'Tantima'),(2629,30,'Tamalín'),(2630,30,'Cerro Azul'),(2631,30,'Tepetzintla'),(2632,30,'Tancoco'),(2633,30,'Tamiahua'),(2634,30,'Huayacocotla'),(2635,30,'Ilamatlán'),(2636,30,'Zontecomatlán de López y Fuentes'),(2637,30,'Texcatepec'),(2638,30,'Zacualpan'),(2639,30,'Benito Juárez'),(2640,30,'Tlachichilco'),(2641,30,'Ixhuatlán de Madero'),(2642,30,'Chicontepec'),(2643,30,'Álamo Temapache'),(2644,30,'Tuxpan'),(2645,30,'Tihuatlán'),(2646,30,'Castillo de Teayo'),(2647,30,'Cazones de Herrera'),(2648,30,'Zozocolco de Hidalgo'),(2649,30,'Chumatlán'),(2650,30,'Coxquihui'),(2651,30,'Mecatlán'),(2652,30,'Filomeno Mata'),(2653,30,'Coahuitlán'),(2654,30,'Coyutla'),(2655,30,'Coatzintla'),(2656,30,'Espinal'),(2657,30,'Poza Rica de Hidalgo'),(2658,30,'Papantla'),(2659,30,'Gutiérrez Zamora'),(2660,30,'Tecolutla'),(2661,30,'Martínez de la Torre'),(2662,30,'San Rafael'),(2663,30,'Tlapacoyan'),(2664,30,'Jalacingo'),(2665,30,'Atzalan'),(2666,30,'Altotonga'),(2667,30,'Las Minas'),(2668,30,'Tatatila'),(2669,30,'Tenochtitlán'),(2670,30,'Nautla'),(2671,30,'Misantla'),(2672,30,'Landero y Coss'),(2673,30,'Chiconquiaco'),(2674,30,'Yecuatla'),(2675,30,'Colipa'),(2676,30,'Vega de Alatorre'),(2677,30,'Jalcomulco'),(2678,30,'Tlaltetela'),(2679,30,'Tenampa'),(2680,30,'Totutla'),(2681,30,'Sochiapa'),(2682,30,'Tlacotepec de Mejía'),(2683,30,'Huatusco'),(2684,30,'Calcahualco'),(2685,30,'Alpatláhuac'),(2686,30,'Coscomatepec'),(2687,30,'La Perla'),(2688,30,'Chocamán'),(2689,30,'Tomatlán'),(2690,30,'Ixhuatlán del Café'),(2691,30,'Tepatlaxco'),(2692,30,'Comapa'),(2693,30,'Zentla'),(2694,30,'Camarón de Tejeda'),(2695,30,'Soledad de Doblado'),(2696,30,'Manlio Fabio Altamirano'),(2697,30,'Jamapa'),(2698,30,'Medellín'),(2699,30,'Boca del Río'),(2700,30,'Orizaba'),(2701,30,'Rafael Delgado'),(2702,30,'Mariano Escobedo'),(2703,30,'Ixhuatlancillo'),(2704,30,'Atzacan'),(2705,30,'Ixtaczoquitlán'),(2706,30,'Fortín'),(2707,30,'Córdoba'),(2708,30,'Maltrata'),(2709,30,'Nogales'),(2710,30,'Río Blanco'),(2711,30,'Camerino Z. Mendoza'),(2712,30,'Aquila'),(2713,30,'Acultzingo'),(2714,30,'Soledad Atzompa'),(2715,30,'Huiloapan de Cuauhtémoc'),(2716,30,'Tlaquilpa'),(2717,30,'Astacinga'),(2718,30,'Xoxocotla'),(2719,30,'Atlahuilco'),(2720,30,'Tequila'),(2721,30,'San Andrés Tenejapan'),(2722,30,'Tlilapan'),(2723,30,'Magdalena'),(2724,30,'Naranjal'),(2725,30,'Coetzala'),(2726,30,'Omealca'),(2727,30,'Cuitláhuac'),(2728,30,'Cuichapa'),(2729,30,'Yanga'),(2730,30,'Amatlán de los Reyes'),(2731,30,'Atoyac'),(2732,30,'Paso del Macho'),(2733,30,'Carrillo Puerto'),(2734,30,'Cotaxtla'),(2735,30,'Zongolica'),(2736,30,'Tehuipango'),(2737,30,'Mixtla de Altamirano'),(2738,30,'Los Reyes'),(2739,30,'Texhuacán'),(2740,30,'Tezonapa'),(2741,30,'Tierra Blanca'),(2742,30,'Tlalixcoyan'),(2743,30,'Ignacio de la Llave'),(2744,30,'Alvarado'),(2745,30,'Lerdo de Tejada'),(2746,30,'Tres Valles'),(2747,30,'Carlos A. Carrillo'),(2748,30,'Cosamaloapan de Carpio'),(2749,30,'Ixmatlahuacan'),(2750,30,'Acula'),(2751,30,'Amatitlán'),(2752,30,'Tlacotalpan'),(2753,30,'Saltabarranca'),(2754,30,'Otatitlán'),(2755,30,'Tlacojalpan'),(2756,30,'Tuxtilla'),(2757,30,'Chacaltianguis'),(2758,30,'José Azueta'),(2759,30,'Playa Vicente'),(2760,30,'Santiago Sochiapan'),(2761,30,'Isla'),(2762,30,'Juan Rodríguez Clara'),(2763,30,'San Andrés Tuxtla'),(2764,30,'Santiago Tuxtla'),(2765,30,'Angel R. Cabada'),(2766,30,'Hueyapan de Ocampo'),(2767,30,'Catemaco'),(2768,30,'Soteapan'),(2769,30,'Mecayapan'),(2770,30,'Tatahuicapan de Juárez'),(2771,30,'Pajapan'),(2772,30,'Chinameca'),(2773,30,'Acayucan'),(2774,30,'San Juan Evangelista'),(2775,30,'Sayula de Alemán'),(2776,30,'Oluta'),(2777,30,'Soconusco'),(2778,30,'Texistepec'),(2779,30,'Jáltipan'),(2780,30,'Zaragoza'),(2781,30,'Oteapan'),(2782,30,'Cosoleacaque'),(2783,30,'Nanchital de Lázaro Cárdenas del Río'),(2784,30,'Ixhuatlán del Sureste'),(2785,30,'Moloacán'),(2786,30,'Coatzacoalcos'),(2787,30,'Agua Dulce'),(2788,30,'Minatitlán'),(2789,30,'Hidalgotitlán'),(2790,30,'Jesús Carranza'),(2791,30,'Las Choapas'),(2792,30,'Uxpanapa'),(2793,31,'Mérida'),(2794,31,'Progreso'),(2795,31,'Chicxulub Pueblo'),(2796,31,'Ixil'),(2797,31,'Conkal'),(2798,31,'Yaxkukul'),(2799,31,'Hunucmá'),(2800,31,'Ucú'),(2801,31,'Kinchil'),(2802,31,'Tetiz'),(2803,31,'Celestún'),(2804,31,'Kanasín'),(2805,31,'Timucuy'),(2806,31,'Acanceh'),(2807,31,'Tixpéhual'),(2808,31,'Umán'),(2809,31,'Telchac Pueblo'),(2810,31,'Dzemul'),(2811,31,'Telchac Puerto'),(2812,31,'Cansahcab'),(2813,31,'Sinanché'),(2814,31,'Yobaín'),(2815,31,'Motul'),(2816,31,'Baca'),(2817,31,'Mocochá'),(2818,31,'Muxupip'),(2819,31,'Cacalchén'),(2820,31,'Bokobá'),(2821,31,'Tixkokob'),(2822,31,'Hoctún'),(2823,31,'Tahmek'),(2824,31,'Dzidzantún'),(2825,31,'Temax'),(2826,31,'Tekantó'),(2827,31,'Teya'),(2828,31,'Suma'),(2829,31,'Tepakán'),(2830,31,'Tekal de Venegas'),(2831,31,'Izamal'),(2832,31,'Hocabá'),(2833,31,'Xocchel'),(2834,31,'Seyé'),(2835,31,'Cuzamá'),(2836,31,'Homún'),(2837,31,'Sanahcat'),(2838,31,'Huhí'),(2839,31,'Dzilam González'),(2840,31,'Dzilam de Bravo'),(2841,31,'Panabá'),(2842,31,'San Felipe'),(2843,31,'Buctzotz'),(2844,31,'Sucilá'),(2845,31,'Cenotillo'),(2846,31,'Dzoncauich'),(2847,31,'Tunkás'),(2848,31,'Quintana Roo'),(2849,31,'Dzitás'),(2850,31,'Kantunil'),(2851,31,'Sudzal'),(2852,31,'Tekit'),(2853,31,'Sotuta'),(2854,31,'Tizimín'),(2855,31,'Río Lagartos'),(2856,31,'Espita'),(2857,31,'Temozón'),(2858,31,'Calotmul'),(2859,31,'Tinum'),(2860,31,'Chankom'),(2861,31,'Chichimilá'),(2862,31,'Tixcacalcupul'),(2863,31,'Kaua'),(2864,31,'Cuncunul'),(2865,31,'Tekom'),(2866,31,'Chemax'),(2867,31,'Valladolid'),(2868,31,'Uayma'),(2869,31,'Maxcanú'),(2870,31,'Samahil'),(2871,31,'Opichén'),(2872,31,'Chocholá'),(2873,31,'Kopomá'),(2874,31,'Tecoh'),(2875,31,'Abalá'),(2876,31,'Halachó'),(2877,31,'Muna'),(2878,31,'Sacalum'),(2879,31,'Maní'),(2880,31,'Dzán'),(2881,31,'Chapab'),(2882,31,'Ticul'),(2883,31,'Oxkutzcab'),(2884,31,'Santa Elena'),(2885,31,'Mama'),(2886,31,'Chumayel'),(2887,31,'Mayapán'),(2888,31,'Teabo'),(2889,31,'Cantamayec'),(2890,31,'Yaxcabá'),(2891,31,'Peto'),(2892,31,'Chikindzonot'),(2893,31,'Tahdziú'),(2894,31,'Tixmehuac'),(2895,31,'Chacsinkín'),(2896,31,'Tzucacab'),(2897,31,'Tekax'),(2898,31,'Akil'),(2899,32,'Zacatecas'),(2900,32,'Morelos'),(2901,32,'Vetagrande'),(2902,32,'Concepción del Oro'),(2903,32,'Melchor Ocampo'),(2904,32,'Mazapil'),(2905,32,'El Salvador'),(2906,32,'Juan Aldama'),(2907,32,'Miguel Auza'),(2908,32,'General Francisco R. Murguía'),(2909,32,'Río Grande'),(2910,32,'Villa de Cos'),(2911,32,'Cañitas de Felipe Pescador'),(2912,32,'Calera'),(2913,32,'Pánuco'),(2914,32,'General Enrique Estrada'),(2915,32,'Guadalupe'),(2916,32,'Trancoso'),(2917,32,'Genaro Codina'),(2918,32,'Cuauhtémoc'),(2919,32,'Ojocaliente'),(2920,32,'General Pánfilo Natera'),(2921,32,'Luis Moya'),(2922,32,'Loreto'),(2923,32,'Villa González Ortega'),(2924,32,'Noria de Ángeles'),(2925,32,'Villa García'),(2926,32,'Pinos'),(2927,32,'Villa Hidalgo'),(2928,32,'Fresnillo'),(2929,32,'Sombrerete'),(2930,32,'Sain Alto'),(2931,32,'Valparaíso'),(2932,32,'Chalchihuites'),(2933,32,'Jiménez del Teul'),(2934,32,'Jerez'),(2935,32,'Monte Escobedo'),(2936,32,'Susticacán'),(2937,32,'Villanueva'),(2938,32,'Tepetongo'),(2939,32,'El Plateado de Joaquín Amaro'),(2940,32,'Jalpa'),(2941,32,'Tabasco'),(2942,32,'Huanusco'),(2943,32,'Tlaltenango de Sánchez Román'),(2944,32,'Momax'),(2945,32,'Atolinga'),(2946,32,'Tepechitlán'),(2947,32,'Benito Juárez'),(2948,32,'Teúl de González Ortega'),(2949,32,'Santa María de la Paz'),(2950,32,'Trinidad García de la Cadena'),(2951,32,'Mezquital del Oro'),(2952,32,'Nochistlán de Mejía'),(2953,32,'Apulco'),(2954,32,'Apozol'),(2955,32,'Juchipila'),(2956,32,'Moyahua de Estrada');
/*!40000 ALTER TABLE `etr_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_clients`
--

DROP TABLE IF EXISTS `etr_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_clients` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rfc` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `businessname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_client` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_inactive` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_clients`
--

LOCK TABLES `etr_clients` WRITE;
/*!40000 ALTER TABLE `etr_clients` DISABLE KEYS */;
INSERT INTO `etr_clients` VALUES (1,'Bosque de Duraznos 65','ETR010203PPT','ETRANS SA DE CV','0102030405','etrans@portoprint.com','ETRANS','0'),(2,'Bosque de duraznos 2','EST040506FB8','ESTAFETA SA DE CV','0102030405','info@estafeta.com','ESTAFETA','0'),(4,'Bosque de Duraznos 43','ABCD122334FB8','GRUPO DANONE SA DE CV','123456789','info@danone.com.mx','DANONE','0');
/*!40000 ALTER TABLE `etr_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_country`
--

DROP TABLE IF EXISTS `etr_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_country` (
  `idcountry` int(11) NOT NULL AUTO_INCREMENT,
  `name_country` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcountry`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_country`
--

LOCK TABLES `etr_country` WRITE;
/*!40000 ALTER TABLE `etr_country` DISABLE KEYS */;
INSERT INTO `etr_country` VALUES (1,'México');
/*!40000 ALTER TABLE `etr_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_product`
--

DROP TABLE IF EXISTS `etr_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_product` (
  `idproduct` bigint(15) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `idclient` int(11) NOT NULL,
  `code` bigint(15) unsigned NOT NULL,
  `item` bigint(15) DEFAULT NULL,
  `idcategory` int(11) NOT NULL,
  `description` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pu` decimal(6,2) NOT NULL,
  `pxc` smallint(5) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  `heigth` decimal(6,2) DEFAULT '0.00',
  `depth` decimal(6,2) DEFAULT '0.00',
  `width` decimal(6,2) DEFAULT '0.00',
  `weight` decimal(6,2) DEFAULT '0.00',
  `stowmax` decimal(6,2) DEFAULT '0.00',
  `heigthpallet` decimal(6,2) DEFAULT '0.00',
  `weightpallet` decimal(6,2) DEFAULT '0.00',
  `is_inactive` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `created_by` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idproduct`),
  KEY `fk_etr_product_1_idx` (`idcategory`),
  KEY `fk_etr_product_2_idx` (`idclient`),
  CONSTRAINT `fk_etr_product_1` FOREIGN KEY (`idcategory`) REFERENCES `etr_product_category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_product_2` FOREIGN KEY (`idclient`) REFERENCES `etr_clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_product`
--

LOCK TABLES `etr_product` WRITE;
/*!40000 ALTER TABLE `etr_product` DISABLE KEYS */;
INSERT INTO `etr_product` VALUES (000000000000003,'2015-01-30 13:43:27',4,7501017362950,NULL,1,'Pañuelos Kleenex 25 Hojas dobles',NULL,5.20,20,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000005,'2015-01-30 14:04:47',1,682430400102,NULL,2,'VOSS Agua de Colonia Para Caballeros 500ml',NULL,15.30,10,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000006,'2015-01-30 15:50:48',4,7501031322558,NULL,2,'Refresco seven up 600ml',NULL,12.50,12,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000007,'2015-01-30 15:59:10',4,7501011111028,NULL,1,'SABRITAS RANCHERITOS 52g','000000000000007.png',11.50,10,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000011,'2015-02-03 13:54:38',4,7502247543751,NULL,1,'INSTANT CLEAN LIMPIADOR AROMA PINO 5 LT',NULL,15.30,20,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000012,'2015-02-03 16:42:52',4,7506167621742,NULL,1,'OVAL PLASTIC BASKET W HANDLES 30.5 X 19.5 X 2','000000000000012.jpg',12.50,10,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000013,'2015-02-03 16:48:53',4,35549101598,NULL,1,'SANDWICH SIZE BAG (S J) 24X110CT. FOLD U/E24',NULL,5.20,10,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000014,'2015-02-03 16:50:01',4,7501402906745,NULL,1,'VASO CONICO IMAGEN MEZCLA JD','000000000000014.jpg',12.50,12,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000015,'2015-02-03 16:53:09',4,41348003322,NULL,1,'AUTO GLASS CLEANER',NULL,11.50,20,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint'),(000000000000016,'2015-02-03 16:54:26',4,729986125308,NULL,1,'CABALLERO DRAKKAR','000000000000016.jpg',15.30,11,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','portoprint');
/*!40000 ALTER TABLE `etr_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_product_category`
--

DROP TABLE IF EXISTS `etr_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_product_category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_product_category`
--

LOCK TABLES `etr_product_category` WRITE;
/*!40000 ALTER TABLE `etr_product_category` DISABLE KEYS */;
INSERT INTO `etr_product_category` VALUES (1,'Alimentos',''),(2,'Bebidas no Alcoholicas',''),(3,'Bebidas Alcoholicas y Tabaco',''),(4,'Limpieza',''),(5,'Salud y belleza',''),(6,'Electrodomesticos',''),(7,'Farmacéuticos',''),(8,'Muebles y decoración',''),(9,'Ropa y calzado',''),(10,'Papel y desechables',''),(11,'Juguetes y entretenimiento','');
/*!40000 ALTER TABLE `etr_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_state`
--

DROP TABLE IF EXISTS `etr_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_state` (
  `idstate` int(11) NOT NULL AUTO_INCREMENT,
  `idcountry` int(11) NOT NULL,
  `name_state` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idstate`),
  KEY `fk_etr_state_1_idx` (`idcountry`),
  CONSTRAINT `fk_etr_state_1` FOREIGN KEY (`idcountry`) REFERENCES `etr_country` (`idcountry`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_state`
--

LOCK TABLES `etr_state` WRITE;
/*!40000 ALTER TABLE `etr_state` DISABLE KEYS */;
INSERT INTO `etr_state` VALUES (1,1,'Aguascalientes'),(2,1,'Baja California'),(3,1,'Baja California Sur'),(4,1,'Campeche'),(5,1,'Coahuila'),(6,1,'Colima'),(7,1,'Chiapas'),(8,1,'Chihuahua'),(9,1,'Distrito Federal'),(10,1,'Durango'),(11,1,'Guanajuato'),(12,1,'Guerrero'),(13,1,'Hidalgo'),(14,1,'Jalisco'),(15,1,'México'),(16,1,'Michoacán'),(17,1,'Morelos'),(18,1,'Nayarit'),(19,1,'Nuevo León'),(20,1,'Oaxaca'),(21,1,'Puebla'),(22,1,'Querétaro'),(23,1,'Quintana Roo'),(24,1,'San Luis Potosí'),(25,1,'Sinaloa'),(26,1,'Sonora'),(27,1,'Tabasco'),(28,1,'Tamaulipas'),(29,1,'Tlaxcala'),(30,1,'Veracruz'),(31,1,'Yucatán'),(32,1,'Zacatecas');
/*!40000 ALTER TABLE `etr_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_storage_layout`
--

DROP TABLE IF EXISTS `etr_storage_layout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_storage_layout` (
  `idstorage_layout` int(11) NOT NULL AUTO_INCREMENT,
  `idstorage_units` int(11) DEFAULT NULL,
  `long_unit` decimal(6,2) DEFAULT NULL,
  `width_unit` decimal(6,2) DEFAULT NULL,
  `qty_plataform` int(11) DEFAULT NULL,
  `qty_unity` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `divlong` int(11) DEFAULT NULL,
  `divwidth` int(11) DEFAULT NULL,
  `idstore` int(11) DEFAULT NULL,
  `type_rack` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `width_rack` decimal(6,2) DEFAULT NULL,
  `long_rack` decimal(6,2) DEFAULT NULL,
  `deep_rack` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`idstorage_layout`),
  KEY `fk_etr_storage_layout_1_idx` (`idstorage_units`),
  KEY `fk_etr_storage_layout_2_idx` (`idstore`),
  CONSTRAINT `fk_etr_storage_layout_1` FOREIGN KEY (`idstorage_units`) REFERENCES `etr_storage_units` (`idstorage_units`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_storage_layout_2` FOREIGN KEY (`idstore`) REFERENCES `etr_store` (`idstore`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_storage_layout`
--

LOCK TABLES `etr_storage_layout` WRITE;
/*!40000 ALTER TABLE `etr_storage_layout` DISABLE KEYS */;
/*!40000 ALTER TABLE `etr_storage_layout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_storage_typeunits`
--

DROP TABLE IF EXISTS `etr_storage_typeunits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_storage_typeunits` (
  `idtype_units` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtype_units`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_storage_typeunits`
--

LOCK TABLES `etr_storage_typeunits` WRITE;
/*!40000 ALTER TABLE `etr_storage_typeunits` DISABLE KEYS */;
INSERT INTO `etr_storage_typeunits` VALUES (1,'Zona'),(2,'Area'),(3,'Rack'),(4,'Bloque');
/*!40000 ALTER TABLE `etr_storage_typeunits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_storage_units`
--

DROP TABLE IF EXISTS `etr_storage_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_storage_units` (
  `idstorage_units` int(11) NOT NULL AUTO_INCREMENT,
  `name_units` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idtype_units` int(11) DEFAULT NULL,
  PRIMARY KEY (`idstorage_units`),
  KEY `fk_etr_storage_units_1_idx` (`idtype_units`),
  CONSTRAINT `fk_etr_storage_units_1` FOREIGN KEY (`idtype_units`) REFERENCES `etr_storage_typeunits` (`idtype_units`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tabla para guardar todas las zonas, areas,  y unidades (rack, bloque), de aqui se tomara la lista para mostrarla en el layout al momento de crear el almacen.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_storage_units`
--

LOCK TABLES `etr_storage_units` WRITE;
/*!40000 ALTER TABLE `etr_storage_units` DISABLE KEYS */;
INSERT INTO `etr_storage_units` VALUES (1,'Recepción',NULL,1),(2,'Control de Calidad',NULL,1),(3,'Cuarentena',NULL,1),(4,'Maquila',NULL,1),(5,'Almacenamiento',NULL,1),(6,'Crossdock',NULL,1),(7,'Alto Valor',NULL,1),(8,'Picking',NULL,1),(9,'Devolución',NULL,1),(10,'Desahogo',NULL,1),(11,'Merma',NULL,1),(12,'Embarque',NULL,1),(13,'Alta Rotación',NULL,2),(14,'Media Rotación',NULL,2),(15,'Baja Rotación',NULL,2),(16,'Prioridad Alta',NULL,2),(17,'Prioridad Media',NULL,2),(18,'Prioridad Baja',NULL,2),(19,'Unica',NULL,2),(20,'Rack',NULL,3),(21,'Bloque',NULL,4);
/*!40000 ALTER TABLE `etr_storage_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store`
--

DROP TABLE IF EXISTS `etr_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store` (
  `idstore` int(11) NOT NULL AUTO_INCREMENT,
  `name_store` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hrsbday` tinyint(2) DEFAULT NULL,
  `inihrsbday` tinyint(2) DEFAULT NULL,
  `finhrsbday` tinyint(2) DEFAULT NULL,
  `is_inactive` char(1) COLLATE utf8_unicode_ci DEFAULT '0',
  `idtypestore` int(11) NOT NULL,
  `idcomplex` int(11) NOT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colony` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp` mediumint(6) DEFAULT NULL,
  `idcountry` int(11) NOT NULL,
  `idstate` int(11) NOT NULL,
  `idcity` int(11) NOT NULL,
  `dimensions` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `width` decimal(6,2) DEFAULT NULL,
  `long` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`idstore`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_etr_store_1_idx` (`idtypestore`),
  KEY `fk_etr_store_2_idx` (`idcomplex`),
  KEY `fk_etr_store_3_idx` (`idcountry`),
  KEY `fk_etr_store_4_idx` (`idstate`),
  KEY `fk_etr_store_5_idx` (`idcity`),
  CONSTRAINT `fk_etr_store_1` FOREIGN KEY (`idtypestore`) REFERENCES `etr_store_typestore` (`idtypestore`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_store_2` FOREIGN KEY (`idcomplex`) REFERENCES `etr_store_complex` (`idcomplex`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_store_3` FOREIGN KEY (`idcountry`) REFERENCES `etr_country` (`idcountry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_store_4` FOREIGN KEY (`idstate`) REFERENCES `etr_state` (`idstate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_etr_store_5` FOREIGN KEY (`idcity`) REFERENCES `etr_city` (`idcity`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store`
--

LOCK TABLES `etr_store` WRITE;
/*!40000 ALTER TABLE `etr_store` DISABLE KEYS */;
INSERT INTO `etr_store` VALUES (4,'PPT PFIZER 01',NULL,NULL,NULL,'0',1,1,'','',NULL,1,15,1156,NULL,'','etr_pfizer@portoprint.mx',0.00,0.00);
/*!40000 ALTER TABLE `etr_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store_complex`
--

DROP TABLE IF EXISTS `etr_store_complex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store_complex` (
  `idcomplex` int(11) NOT NULL AUTO_INCREMENT,
  `name_complex` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_short` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `iduser` varchar(10) COLLATE ucs2_unicode_ci NOT NULL,
  `is_active` char(1) COLLATE ucs2_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcomplex`),
  KEY `fk_etr_store_complex_1_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store_complex`
--

LOCK TABLES `etr_store_complex` WRITE;
/*!40000 ALTER TABLE `etr_store_complex` DISABLE KEYS */;
INSERT INTO `etr_store_complex` VALUES (1,'TOLUCA','TLC01','2015-01-15 00:00:00','portoprint','1'),(3,'PPT TAMAULIPAS','TML01','2015-01-23 11:02:11','portoprint','1'),(4,'Monterrey01','Mty01','2015-01-29 11:45:46','jacob','1');
/*!40000 ALTER TABLE `etr_store_complex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store_plataform`
--

DROP TABLE IF EXISTS `etr_store_plataform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store_plataform` (
  `idplataform` int(11) NOT NULL AUTO_INCREMENT,
  `idstore` int(11) NOT NULL,
  `name_plataform` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_inactive` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idplataform`),
  KEY `fk_etr_store_plataform_1_idx` (`idstore`),
  CONSTRAINT `fk_etr_store_plataform_1` FOREIGN KEY (`idstore`) REFERENCES `etr_store` (`idstore`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store_plataform`
--

LOCK TABLES `etr_store_plataform` WRITE;
/*!40000 ALTER TABLE `etr_store_plataform` DISABLE KEYS */;
/*!40000 ALTER TABLE `etr_store_plataform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_store_typestore`
--

DROP TABLE IF EXISTS `etr_store_typestore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_store_typestore` (
  `idtypestore` int(11) NOT NULL AUTO_INCREMENT,
  `name_typestore` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtypestore`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_store_typestore`
--

LOCK TABLES `etr_store_typestore` WRITE;
/*!40000 ALTER TABLE `etr_store_typestore` DISABLE KEYS */;
INSERT INTO `etr_store_typestore` VALUES (1,'Multibodega',NULL),(2,'Bodega Propia',NULL),(3,'Parque Industrial',NULL),(4,'CEDIS',NULL),(5,'Espacio Asignado',NULL);
/*!40000 ALTER TABLE `etr_store_typestore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etr_user`
--

DROP TABLE IF EXISTS `etr_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etr_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `username` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `idusertype` int(11) NOT NULL,
  `idprofile` int(11) NOT NULL,
  `active` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '1',
  `iduser_detail` int(11) NOT NULL,
  `flag_resetpwd` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  `resetpwd` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etr_user`
--

LOCK TABLES `etr_user` WRITE;
/*!40000 ALTER TABLE `etr_user` DISABLE KEYS */;
INSERT INTO `etr_user` VALUES (1,1,'portoprint','73fd06a46eecdcf350e5e00b11486656','porto','print','ncastellanos@portoprint.mx',1,1,'1',0,'0','0'),(2,1,'jacob','926bae7127cfdaa9e99fecd9f02c6e8a','jacobo','salinas','jsalinas@portoprint.mx',1,1,'1',0,'0','0');
/*!40000 ALTER TABLE `etr_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-10 17:32:59
