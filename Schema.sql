drop database if exists lab5;

create database lab5;
use lab5;
create table Paintings (
	ID int AUTO_INCREMENT primary key,
    Title varchar(255) NOT NULL, 
    Artist varchar(255) NOT NULL,
	Year int NOT NULL,
	Price double -- millions of USD
);

insert into Paintings(Title,Artist,Year,Price)
values
("The Mona Lisa","Leonardo da Vinci",1519,860),
("Starry Night","Vincent van Gogh",1889,100),
("The Scream","Edvard Munch",1893,119.9),
("Guernica","Pablo Picasso",1937,200),
("The Persistence of Memory","Salvador Dali",1931,150),
("Three Musicians","Pablo Picasso",1921,NULL),
("A Sunday Afternoon on the Island of La Grande Jatte","Georges Seurat",1886,650),
("Girl with a Pearl Earring","Johannes Vermeer",1665,30.1),
("Whistler's Mother","James McNeill",1871,36),
("Portrait de L'artiste Sans Barbe","Vincent van Gogh",1889,103);




