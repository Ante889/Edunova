DROP database IF EXISTS Djecja_igraonica;
CREATE database Djecja_igraonica;
use Djecja_igraonica;


CREATE TABLE djeca (

	sifra int PRIMARY KEY NOT NULL auto_increment,
	ime varchar(50) NOT null,
	prezime varchar(50) NOT null,
	roditelj_mobitel varchar(12) NOT null,
	aktivan boolean

);


CREATE TABLE skupina (

	sifra int PRIMARY KEY NOT NULL auto_increment,
	naziv varchar(50),
	teta int

);

CREATE TABLE tete (

	sifra int PRIMARY KEY NOT NULL auto_increment,
	ime varchar(50) NOT null,
	skupina int

);

CREATE TABLE skupina_djeca (

	djete int,
	skupina int

);

alter table skupina_djeca add foreign key (djete) references djeca(sifra);
alter table skupina_djeca add foreign key (skupina) references skupina(sifra);
alter table skupina add foreign key (teta) references tete(sifra);

