DROP database IF EXISTS Primjer3;
CREATE database Primjer3;
use Primjer3;

create table neprijatelj (

	id int not null primary key auto_increment,
	gustoca decimal(13,6) not null,
	treciputa datetime not null,
	novcica decimal(12,8),
	narukvica int not null,
	prijateljica int

);

create table prijateljica (

	id int not null primary key auto_increment,
	gustoca decimal(13,6),
	maraka decimal(14,9) not null,
	treciputa datetime not null,
	narukvica int not null
	
);

create table ostavljen (

	id int not null primary key auto_increment,
	ekstroventno bit,
	haljina varchar(42),
	nausnica int,
	narukvica int

);

create table djevojka (

	id int not null primary key auto_increment,
	lipa decimal(13,5),
	majica varchar(35) not null,
	indiferentno bit not null,
	kuna decimal(14,8),
	narukvica int not null

);


create table punica (

	id int not null primary key auto_increment,
	bojaociju varchar(40) not null,
	modelnaocala varchar(42) not null,
	ekstroventno bit,
	asocijalno bit,
	prstena int

);

alter table neprijatelj add foreign key (prijateljica) references prijateljica(id);
