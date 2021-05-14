DROP database IF EXISTS klub_citatelja;
create database klub_citatelja;
USE klub_citatelja;

create table citatelji(

	sifra int auto_increment PRIMARY KEY NOT null,
	ime varchar (50) NOT NULL,
	prezime varchar (50) NOT NULL,
	datum_èlanarine date not null default CURRENT_TIMESTAMP,
	clan_trenutno boolean

);


create table citatelji_knjige(

	citatelj int,
	knjiga int,
	vrijeme_poèetak date not null default CURRENT_TIMESTAMP,
	vrijeme_kraj date

);


create table knjige(

	sifra int auto_increment PRIMARY KEY NOT null,
	naziv varchar (50) NOT NULL,
	vlasnik int,
	datum date not null default CURRENT_TIMESTAMP

);

alter table knjige add foreign key (vlasnik) references citatelji(sifra);
alter table citatelji_knjige add foreign key (citatelj) references citatelji(sifra);
alter table citatelji_knjige add foreign key (knjiga) references knjige(sifra);


