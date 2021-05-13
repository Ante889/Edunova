DROP database IF EXISTS vjezba;
CREATE database vjezba;
use vjezba;


CREATE TABLE zupanija (

	sifra int auto_increment PRIMARY key not null,
	naziv varchar(50) not null,
	zupan int not null

);


CREATE TABLE zupan (

	sifra int auto_increment PRIMARY KEY,
	ime varchar(50) not null,
	prezime varchar(50) not null

);

CREATE TABLE opcina (

	sifra int auto_increment PRIMARY KEY,
	zupanija int,
	naziv varchar(50) not null

);

CREATE TABLE mjesto (

	sifra int auto_increment PRIMARY KEY,
	opcina int,
	naziv varchar(50) not null

);


alter table zupanija add foreign key (zupan) references zupan(sifra); 
alter table opcina add foreign key (zupanija) references zupanija(sifra); 
alter table mjesto add foreign key (opcina) references opcina(sifra); 


########################################
###########     INSERT     #############
########################################


insert into zupan (ime,prezime) values
('Ime�upana1','Prezime�upana1'),
('Ime�upana2','Prezime�upana2'),
('Ime�upana3','Prezime�upana3');



insert into zupanija (naziv, zupan) values
('Ime�upanije','1'),
('Ime�upanije','2'),
('Ime�upanije','3');



insert into opcina (zupanija, naziv) values
(1,'ImeOp�ine1'),
(3,'ImeOp�ine2'),
(2,'ImeOp�ine3'),
(1,'ImeOp�ine4'),
(3,'ImeOp�ine5'),
(2,'ImeOp�ine6');


insert into mjesto (opcina, naziv) values
(1,'ImeMjesta1'),
(3,'ImeMjesta2'),
(2,'ImeMjesta3'),
(1,'ImeMjesta4'),
(3,'ImeMjesta5'),
(4,'ImeMjesta6'),
(1,'ImeMjesta7'),
(4,'ImeMjesta8'),
(2,'ImeMjesta9'),
(4,'ImeMjesta10'),
(3,'ImeMjesta11'),
(3,'ImeMjesta12');



########################################
###########     UPDATE     #############
########################################

update mjesto set naziv= 'UpdateImeMjesta' where sifra <=5;


########################################
###########     DELETE     #############
########################################


delete from opcina where sifra >= 5;



