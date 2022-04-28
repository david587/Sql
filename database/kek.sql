--Baráth Dávid

create database kek
character set utf8
collate utf8_hungerian_ci;
use kek;


create table dolgozok(
az int not null primary key auto_increment, nev varchar(50),
telepules varchar(50),
fizetes double
);

--Milyen felhasználót hozunk létre
grant all privilages 
on kek.*
to kek@localhost  
indentified by "titok"; 
