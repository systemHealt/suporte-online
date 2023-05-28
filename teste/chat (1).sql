-- Active: 1685222569565@@127.0.0.1@3306@phpmyadmin

create database chat;

use chat;

create table users(

user_id int not null auto_increment,
unique_id int (200),
fname varchar (255),
lname varchar (255),
email varchar (255),
password varchar (255),
img varchar (400),
status varchar (255),
primary key (user_id)
);
