#0. Kreirajte tablice (10) i veze izme�u tablica. (3)

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
	treciputa datetime,
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


#1. Kreirati funkciju zadatak1 koja osigurava kako cjelobrojni tipovi podataka moraju biti izme�u 1346 i 5367
#(7). Primjeniti funkciju u minimalno jednom upitu u proceduri ili okida�u (7).

delimiter $$
create function Zadatak1(A int) returns int begin
	if (a > 1346 and a < 5367) then 
	return a;
	else 
	return null;
	end if;
end
$$
delimiter ;

insert into prijateljica (maraka, narukvica) values (1.1, Zadatak1(4000));
### ERROR --- insert into prijateljica (maraka, narukvica) values (1.1, Zadatak1(2)); --- ERROR ###
select * from prijateljica;


#2. Kreirajte proceduru zadatak2 koja unosi 33501 zapisa u tablicu ostavljen (7). Izvesti proceduru jednom
#tako da u tablici bude to�no 33501 zapisa (7).

delimiter $$
create procedure Zadatak2() 
begin 
	declare A int default 0;
	while (A < 33501) do 
	insert into ostavljen(id) values (0);
	set A=A+1;
	end while;
end;
$$
delimiter ;

select count(*) from ostavljen;
delete from ostavljen; 
call zadatak2;


#3. Kreirajte okida� zadatak3 nakon insert-a u tablicu ostavljen tako da za svaki unos u tablicu ostavljen
#napravi po dva unosa u tablicu djevojka (7). Okida� je u funkciji, tablica djevojka ima dvostruko vi�e zapisa
#od tablice ostavljen (7).

delimiter $$ 
create trigger Zadatak3 after insert on ostavljen for each row 
begin 
	insert into djevojka (majica, indiferentno, narukvica) values ("",1,1),("",1,1);
end
$$
delimiter ;

select count(*) from djevojka;
