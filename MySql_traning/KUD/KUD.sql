DROP database IF EXISTS KUD;
CREATE database KUD;
use KUD;


CREATE TABLE events(

	id int NOT NULL auto_increment PRIMARY KEY,
	name varchar(50) NOT NULL,
	country varchar(50) NOT NULL,
	place int
	
);

CREATE TABLE events_members(

	event int,
	member int
	
);

CREATE TABLE members(

	id int NOT NULL auto_increment PRIMARY KEY,
	name varchar(50) NOT NULL,
	lastname varchar(50) NOT NULL,
	mobile varchar(12)
	
);

CREATE TABLE places(

	id int NOT NULL auto_increment PRIMARY KEY,
	name varchar(50) NOT NULL,
	event_location varchar(50) NOT NULL
	
);



ALTER TABLE events ADD FOREIGN KEY (place) REFERENCES places(id);
ALTER TABLE events_members ADD FOREIGN KEY (event) REFERENCES events(id);
ALTER TABLE events_members ADD FOREIGN KEY (member) REFERENCES members(id);
