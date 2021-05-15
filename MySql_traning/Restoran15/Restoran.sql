DROP database IF EXISTS restoran;
CREATE database restoran;
use restoran;


CREATE TABLE kategorija(

	sifra int PRIMARY KEY NOT NULL auto_increment,
	naziv varchar(50)

);

create table kategorija_jela(

	kategorija int,
	jela int

);

CREATE TABLE jela (

	sifra int PRIMARY KEY NOT NULL auto_increment,
	naziv varchar(50),
	opis text,
	cijena decimal(18,2)

);

create table jela_pice(

	jelo int, 
	pice int

);

CREATE TABLE pica (

	sifra int PRIMARY KEY NOT NULL auto_increment,
	naziv varchar(50),
	cijena decimal(18,2)

);

alter table kategorija_jela add foreign key (kategorija) references kategorija(sifra);
alter table kategorija_jela add foreign key (jela) references jela(sifra);
alter table jela_pice add foreign key (jelo	) references jela(sifra);
alter table jela_pice add foreign key (pice) references pica(sifra);