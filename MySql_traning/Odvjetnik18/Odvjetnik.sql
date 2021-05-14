DROP database IF EXISTS Odvjetnik;
CREATE database Odvjetnik;
use Odvjetnik;


CREATE TABLE osoba (

	sifra int NOT NULL auto_increment PRIMARY key,
	ime varchar(50) NOT null,
	prezime varchar(50) NOT null,
	oib varchar(11) NOT null,
	mobitel varchar(30) NOT null
	
);

CREATE TABLE odvjetnik (

	sifra int NOT NULL auto_increment PRIMARY key,
	osoba int,
	broj_ugovora varchar(20) not null,
	satnica decimal (18,2) not null
	
);

create table klijent (

	sifra int NOT NULL auto_increment PRIMARY key,
	osoba int,
	opis_slucaja text NOT null

);

create table suradnik (

	sifra int NOT NULL auto_increment PRIMARY key,
	osoba int

);

create table suradnik_obrana (


	suradnik int, 
	obrana int

);

create table obrane (
	
	sifra int NOT NULL auto_increment PRIMARY key,
	odvjetnik int, 
	klijent int,
	datum date

);


alter table odvjetnik add foreign key (osoba) references osoba(sifra);
alter table klijent add foreign key (osoba) references osoba(sifra);
alter table suradnik add foreign key (osoba) references osoba(sifra);

alter table obrane add foreign key (odvjetnik) references odvjetnik(sifra);
alter table obrane add foreign key (klijent) references klijent(sifra);

alter table suradnik_obrana add foreign key (suradnik) references suradnik(sifra);
alter table suradnik_obrana add foreign key (obrana) references obrane(sifra);








