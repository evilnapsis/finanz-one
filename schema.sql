create database finanzone;
use finanzone;

create table operation(
	id int not null auto_increment primary key,
	concept varchar(255),
	description text,
	amount float,
	date_at date,
	kind int,/*1. in, 2. out*/
	created_at datetime
);

