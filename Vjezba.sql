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
('Imeéupana1','Prezimeéupana1'),
('Imeéupana2','Prezimeéupana2'),
('Imeéupana3','Prezimeéupana3');



insert into zupanija (naziv, zupan) values
('Imeéupanije','1'),
('Imeéupanije','2'),
('Imeéupanije','3');



insert into opcina (zupanija, naziv) values
(1,'ImeOpÊine1'),
(3,'ImeOpÊine2'),
(2,'ImeOpÊine3'),
(1,'ImeOpÊine4'),
(3,'ImeOpÊine5'),
(2,'ImeOpÊine6');


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



