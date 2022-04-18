<?php
 require_once 'connect.php';
 $db->exec("CREATE TABLE IF NOT EXISTS feedback (
    id SERIAL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(500) NOT NULL, 
    status TINYINT NOT NULL DEFAULT 'unread')");

 $db->exec("CREATE TABLE IF NOT EXISTS users (
    id SERIAL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(10) NOT NULL DEFAULT 'user')");