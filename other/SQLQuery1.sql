create database [ShopDb];

CREATE TABLE Manufacturers
(
    Id int NOT null identity(1, 1) PRIMARY KEY,
    [Name] varchar(30) not null
)

CREATE TABLE Goods
(
    Id int NOT null PRIMARY KEY identity(1, 1),
    Title nvarchar(30) not null,
    Price money not null check (Price >= 0.0),
    ManufacturerId int not null
)

INSERT INTO Manufacturers([Name])
VALUES ('Redmi'),
	   ('Samsung'),
	   ('Aple')


INSERT INTO Goods (Title, Price, ManufacturerId)
VALUES ('Redmi Note 9', 5499.99,1),
	   ('Redmi Note 9S', 5999.99,1),
	   ('A50', 8999.99,2),
	   ('iPhone X11', 25999.99,3)


SELECT Goods.Title, Manufacturers.Name, Goods.Price from Goods
JOIN Manufacturers ON Manufacturers.Id=Goods.ManufacturerId

SELECT Goods.Title,  Goods.Price, Manufacturers.Name from Manufacturers
JOIN Goods ON Manufacturers.Id=Goods.ManufacturerId
