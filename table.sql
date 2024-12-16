-- Active: 1732993221467@@127.0.0.1@3306@materiel
CREATE DATABASE materiel;

CREATE TABLE materiel(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    id_type INT,
    date_achat DATE,
    Cout INT
);
CREATE TABLE statu(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);
CREATE TABLE Geolocalisation(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_materiel INT,
    latitude FLOAT,
    longitude FLOAT
);
CREATE TABLE typemain(
    id INT AUTO_INCREMENT PRIMARY KEY,
    0 
);