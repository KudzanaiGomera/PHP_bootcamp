<?php
$link = mysqli_connect("localhost", "root", "123456789");

$query = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS rush00");

$link = mysqli_connect("localhost", "root", "123456789", "rush00");

$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `items` (
      `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(160) NOT NULL,
      `type` varchar(600) NOT NULL,
      `typeof` varchar(600) NOT NULL,
      `description` varchar(700) NOT NULL,
      `price` int(100) NOT NULL,
      `img` varchar(500) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `order` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) DEFAULT NULL,
      `name` varchar(16) NOT NULL,
      `price` int(11) NOT NULL,
      `ordered` int(11) NOT NULL,
      `addr` varchar(30) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8");

$query = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `users` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `login` varchar(16) NOT NULL,
      `email` varchar(60) NOT NULL,
      `password` varchar(500) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8");


$query = mysqli_query($link, " CREATE TABLE IF NOT EXISTS `products` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(255) NOT NULL,  
  `image` varchar(255) NOT NULL,  
  `price` decimal(10,2) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;");




$query = mysqli_query($link, "INSERT INTO rush00.products (`id`, `name`, `image`, `price`) VALUES ('13', 'Hoody', './image/p12.jpg', '260.00');");
$query = mysqli_query($link, "INSERT INTO rush00.products (`id`, `name`, `image`, `price`) VALUES ('14', 'Boots', './image/boots.jpg', '1300.00');");
$query = mysqli_query($link, "INSERT INTO rush00.products (`id`, `name`, `image`, `price`) VALUES ('15', 'jean', './image/p2.jpg', '
300.00');");