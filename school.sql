DROP DATABASE IF EXISTS school;
CREATE DATABASE school;
USE school;

CREATE TABLE students (
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    age INT,
    classname VARCHAR(10)
);

INSERT INTO students (firstname, lastname, age, classname) VALUES
-- Studenten in klas B2H
('Ali', 'Ahmed', 15, 'B2H'),
('Sofia', 'García', 14, 'B2H'),
('Liam', 'O\'Connor', 16, 'B2H'),
('Aisha', 'Khan', 15, 'B2H'),
('Chen', 'Wang', 14, 'B2H'),
('Maria', 'Fernandez', 15, 'B2H'),
('David', 'Smith', 16, 'B2H'),
('Leila', 'Haddad', 15, 'B2H'),
('Mateo', 'Martínez', 14, 'B2H'),
('Sara', 'Petrova', 16, 'B2H'),
('Daniel', 'Johnson', 15, 'B2H'),
('Aya', 'Tanaka', 14, 'B2H'),
('Mohamed', 'Ali', 15, 'B2H'),
('Emilia', 'Rossi', 16, 'B2H'),
('Ethan', 'Brown', 15, 'B2H'),
('Fatima', 'Rahman', 14, 'B2H'),
('Kai', 'Kim', 15, 'B2H'),
('Nina', 'Kowalski', 16, 'B2H'),
('Hassan', 'Abdi', 15, 'B2H'),
('Isabella', 'Santos', 14, 'B2H'),
('Youssef', 'El-Masry', 16, 'B2H'),
('Lin', 'Zhang', 15, 'B2H'),

-- Studenten in klas B2K
('Oliver', 'Wilson', 14, 'B2K'),
('Amira', 'Bakir', 15, 'B2K'),
('Noah', 'Lévesque', 16, 'B2K'),
('Priya', 'Sharma', 15, 'B2K'),
('Lucas', 'Novak', 14, 'B2K'),
('Zara', 'Singh', 16, 'B2K'),
('Sebastian', 'Müller', 15, 'B2K'),
('Aiko', 'Sato', 14, 'B2K'),
('Diego', 'Rodriguez', 15, 'B2K'),
('Hana', 'Kimura', 16, 'B2K'),
('Eli', 'Goldstein', 15, 'B2K'),
('Maya', 'Patel', 14, 'B2K'),
('Oscar', 'Jensen', 15, 'B2K'),
('Samantha', 'Johnson', 16, 'B2K'),
('Gabriel', 'Silva', 15, 'B2K'),
('Layla', 'Hassan', 14, 'B2K'),
('Alex', 'Petrov', 16, 'B2K'),
('Mei', 'Li', 15, 'B2K'),
('Javier', 'Lopez', 14, 'B2K'),
('Sofia', 'Kowalska', 15, 'B2K'),

-- Studenten in klas B2J
('Tomás', 'González', 16, 'B2J'),
('Amina', 'Abdul', 15, 'B2J'),
('Ethan', 'Anderson', 14, 'B2J'),
('Lina', 'Chen', 16, 'B2J'),
('Dmitri', 'Ivanov', 15, 'B2J'),
('Isabel', 'Martín', 14, 'B2J'),
('Arjun', 'Gupta', 15, 'B2J'),
('Nadia', 'Popov', 16, 'B2J'),
('William', 'Thompson', 15, 'B2J'),
('Leila', 'Mahmoud', 14, 'B2J'),
('Carlos', 'Ruiz', 15, 'B2J'),
('Aya', 'Yamamoto', 16, 'B2J'),
('Daniel', 'Nguyen', 15, 'B2J'),
('Fatima', 'Hussein', 14, 'B2J'),
('Jacob', 'Larsen', 15, 'B2J'),
('Hana', 'Lee', 16, 'B2J'),
('Marco', 'Esposito', 15, 'B2J'),
('Aisha', 'Singh', 14, 'B2J'),
('Samuel', 'Katz', 15, 'B2J'),
('Mina', 'Saito', 16, 'B2J');
