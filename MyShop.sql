DROP database IF EXISTS myshop;
create database myshop;
use myshop;

#Products, users, orders,buyers,categories, comments, rating

create table products (

	id int primary key auto_increment not null,
	title varchar(50) not null,
	author varchar(50) not null,
	image varchar(50) not null,
	price decimal(18.2) not null,
	category int not null,
	quantity int not null,
	content text not null

);