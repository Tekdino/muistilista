create table asiakas
(
asiakasID serial not null primary key,
tunnus varchar(30) not null,
email varchar(50),
salasana varchar(50) not null,
);

create table luokka
(
luokkaID serial not null primary key,
luokkanimi varchar(20) not null,
luokkarank int,
foreign key (asiakasID) references asiakas
);

create table askare
(
askareID serial not null primary key,
askarenimi varchar(20) not null,
askarerank int,
foreign key (luokkaID) references luokka
);