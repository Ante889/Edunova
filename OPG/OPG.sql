DROP database IF EXISTS OPG;
CREATE database OPG;
USE OPG;


create table proizvodi(


	sifra int primary key auto_increment not null,
	naziv varchar(50) not null,
	cijena decimal(18,2) not null,
	kolicina int

);


create table proizvodi_sirovine (

	proizvod int,
	sirovina int
	
);

create table sirovine(

	sifra int primary key auto_increment not null,
	naziv varchar(50) not null

);


create table djelatnici(

	sifra int primary key auto_increment not null,
	ime varchar(50) not null,
	prezime varchar(50) not null,
	iban varchar(20) not null
	
);

create table djelatnici_proizvodi(

	djelatnik int,
	proizvod int
	
);


alter table proizvodi_sirovine add foreign key (proizvod) references proizvodi(sifra);
alter table proizvodi_sirovine add foreign key (sirovina) references sirovine(sifra);

alter table djelatnici_proizvodi add foreign key (djelatnik) references djelatnici(sifra);
alter table djelatnici_proizvodi add foreign key (proizvod) references proizvodi(sifra);



############################################################
insert into proizvodi (naziv,cijena,kolicina) values
('proizvod1','18.22','10'),
('proizvod2','12.59','18');

insert into sirovine (naziv) values
('sirovina1');

insert into proizvodi_sirovine (proizvod,sirovina) values
(1,1);

###########################################################

update sirovine set naziv='UpdateSirovina1' where sifra=1; 

###########################################################

delete from proizvodi where sifra = 2;