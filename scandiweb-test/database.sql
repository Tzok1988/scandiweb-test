CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `size` float UNSIGNED DEFAULT NULL,
  `weight` float UNSIGNED DEFAULT NULL,
  `height` float UNSIGNED DEFAULT NULL,
  `width` float UNSIGNED DEFAULT NULL,
  `length` float UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
);