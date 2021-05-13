DROP database IF EXISTS vjezba;
CREATE database vjezba;
use vjezba;


CREATE TABLE zupanija (

	sifra int auto_increment PRIMARY KEY,
	naziv varchar(50),
	zupan int

);


CREATE TABLE zupan (

	sifra int auto_increment PRIMARY KEY,
	ime varchar(50),
	prezime varchar(50)

);

CREATE TABLE opcina (

	sifra int auto_increment PRIMARY KEY,
	zupanija int,
	naziv varchar(50)

);

CREATE TABLE mjesto (

	sifra int auto_increment PRIMARY KEY,
	opcina int,
	naziv varchar(50)

);