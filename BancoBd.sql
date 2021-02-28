CREATE DATABASE `construsite`;
USE `construsite`;

CREATE TABLE `clientes` (
  `id_cliente` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cliente` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_cliente` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_cliente` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc_cliente` date NOT NULL, 
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

