DROP database IF EXISTS plumber;
CREATE database plumber;
use plumber;


CREATE TABLE persons(

	id int auto_increment PRIMARY KEY NOT NULL,
	name varchar(50) NOT NULL,
	lastname varchar(50) NOT NULL,
	phone varchar(15)

);

CREATE TABLE plumbers(

	id int auto_increment PRIMARY KEY NOT NULL,
	person int,
	card_number varchar(20) NOT NULL

);

CREATE TABLE student(

	id int auto_increment PRIMARY KEY NOT NULL,
	person int,
	school varchar(50),
	praxis_start date default CURRENT_TIMESTAMP,
	date_finising_school date,
	plumber int
);

CREATE TABLE failures (

	id int auto_increment PRIMARY KEY NOT null,
	location varchar (50),
	execution_deadline date
	
);


CREATE TABLE plumbers_failure (

	plumber int,
	failure int,
	need_apprentice_help boolean,
	is_fixed boolean
);


alter table plumbers add foreign key (person) references persons(id);
alter table student add foreign key (person) references persons(id);
alter table student add foreign key (plumber) references plumbers(id);
alter table plumbers_failure add foreign key (plumber) references plumbers(id);
alter table plumbers_failure add foreign key (failure) references failures(id);
