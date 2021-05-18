select * from country where name = "kosovo";

insert into country (Code,Name,Continent,Region,SurfaceArea,Population,LocalName,GovernmentForm,Code2)
values ('KOS', 'Kosovo', 'Europe', 'Region', 123,1,'LocalName','GovermmentForm','12');


insert into city (Name,CountryCode,District,Population) values('Priština', 'KOS','District',12531);

select * from city where id = 4081;


update city set Name= "Priština_U" where ID = 4081;

DELETE FROM city WHERE ID =4081;

delete from country where code ="KOS";



###################################################################################



select * from mjesto where postanskibroj like '31%';

select * from mjesto where naziv like '%a';

####################################################################################


select * from autor where datumrodenja is null;

update autor set datumrodenja = '1983-2-7' where sifra = 3;

select * from autor where sifra=3;

select * from autor where ime = "Ante";

select * from izdavac where naziv like '%d.o.o%' or naziv like '%d.oo%' or naziv like '%do.o%';

####################################################################################

select ime as name, "something" as prezime from autor;


#############################################################################

select * from autor where datumrodenja < now(); 
