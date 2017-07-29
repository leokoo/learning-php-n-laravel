# Understanding MYSQL for Laravel

## To Access MySQL (instead of installing the homebrew version), start by SSH into Homestead's vagrant
* `homestead ssh`
* `mysql -u homestead -psecret`

## To see all databases
* `show databases;`

## Create a new Database
* `create database mytodo;`

## Switching database
* `use mytodo;`

## Commands
* e.g. of a table
	* `create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL)`;
* notice that it has the name (id), type (integer) and modifiers (PRIMARY KEY AUTO_INCREMENT)

* How to see the newly created todo table?
	* `describe todos;`

* How to insert data into the table
	* `insert into todos (description, completed) values('Go to the store', false);`

* How to see everything from the todos table
	* `select * from todos;`