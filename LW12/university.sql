CREATE DATABASE university;
USE university;
CREATE TABLE faculty
(
    id              INT AUTO_INCREMENT NOT NULL,
    name            VARCHAR(255)       NOT NULL,
    PRIMARY KEY(id) 
) DEFAULT CHARACTER SET utf8mb4
  COLLATE 'utf8mb4_unicode_ci'
  ENGINE = InnoDB
;
CREATE TABLE class
(
    id              INT AUTO_INCREMENT NOT NULL,
    name            VARCHAR(255)       NOT NULL,
    id_faculty      INT                NOT NULL,
    FOREIGN KEY (id_faculty) REFERENCES faculty(id),
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE 'utf8mb4_unicode_ci'
  ENGINE = InnoDB
;
CREATE TABLE student
(
    id              INT AUTO_INCREMENT NOT NULL,
    surname         VARCHAR(255)       NOT NULL,
    name            VARCHAR(255)       NOT NULL,
    last_name       VARCHAR(255)       NOT NULL,
    age             INT                NOT NULL,
    id_class        INT                NOT NULL,
    FOREIGN KEY (id_class) REFERENCES class(id),
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4
  COLLATE 'utf8mb4_unicode_ci'
  ENGINE = InnoDB
;

INSERT INTO faculty
    (name)
VALUES
    ('ФИФТ'),
	('РТФ'),
	('ЭФ')
;
INSERT INTO class
    (name, id_faculty)
VALUES
    ('Ф-1', 1),
	('Ф-2', 1),
	('Ф-3', 1),
    ('Р-1', 2),
	('Р-2', 2),
	('Р-3', 2),
    ('Э-1', 3),
	('Э-2', 3),
	('Э-3', 3)
;
select * from student;
INSERT INTO student
    (surname, name, last_name, age, id_class)
VALUES
    ('Чернядьев', 'Максим', 'Владимирович', 19, 1),
    ('Кармазанов ', 'Роман', 'Сергеевичьев', 17, 1),
    ('Осокин', 'Владислав', 'Михайлович', 18, 1),
    ('Аламбаев', 'Даниил', 'Алексеевич', 18, 1),
    ('Александров', 'Дмитрий', 'Владимирович', 20, 1),
    ('Безносюк', 'Олег', 'Николаевич', 21, 2),
	('Петухов', 'Дмитрий', 'Игоревич', 19, 2),
    ('Петухов', 'Дмитрий', 'Игоревич', 19, 2),
    ('Москвин', 'Алексей', 'Евгеньевич', 18, 2),
    ('Каплунова', 'Анастасия', 'Владимировна', 16, 2),
    ('Бусыгин  ', 'Алексей', 'Александрович', 19, 3),
    ('Иванов', 'Дмитрий', 'Юрьевич', 19, 3),
    ('Попов', 'Михаил', 'Дмитриевич', 18, 3),
    ('Данилов', 'Павел', 'Андреевич', 17, 3),
    ('Колдырев  ', 'Даниил', 'Сергеевич', 17, 3),
    ('Смирнов ', 'Роман', 'Дмитриевич', 18, 4),
    ('Подоплелов ', 'Дмитрий', 'Алексеевич', 18, 4),
    ('Иванов', 'Артем', 'Александрович', 17, 4),
    ('Клочко', 'Александр', 'Александрович', 20, 4),
    ('Белов', 'Никита', 'Васильевич', 21, 4),
    ('Игнатьев', 'Владислав', 'Дмитриевич', 19, 5),
    ('Крюков', 'Дмитрий', 'Алексеевич', 18, 5),
    ('Пащенко', 'Дарья', 'Дмитриевна', 19, 5),
    ('Волков', 'Семен', 'Александрович', 20, 5),
    ('Горник', 'Мария', 'Юрьевна', 21, 5),
	('Романова', 'Анна', 'Андреевна', 19, 6),
    ('Мыза', 'Артём', 'Александрович', 18, 6),
    ('Чухланцев', 'Павел', 'Андреевич', 19, 6),
    ('Комиссарова', 'Арина', 'Григорьевна', 20, 6),
    ('Видякин', 'Егор', 'Викторович', 21, 6),
	('Таныгин', 'Вадим', 'Викторович', 19, 7),
    ('Васильева', 'Ольга', 'Александровна', 18, 7),
    ('Петухов', 'Фёдор', 'Александрович', 19, 7),
    ('Яковлев', 'Кирилл', 'Игоревич', 20, 7),
    ('Петров', 'Михаил', 'Владимирович', 21, 7),
	('Платонова', 'Дарья', 'Александровна', 19, 8),
    ('Пирогова', 'Светлана', 'Павловна', 18, 8),
    ('Петухов', 'Максим', 'Анатольевич', 19, 8),
    ('Ильдюков', 'Дмитрий', 'Юрьевич', 20, 8),
    ('Ткаченко', 'Святослав', 'Андреевич', 21, 8),
	('Кашин', 'Владислав', 'Владиславович', 19, 9),
    ('Кузнецов', 'Вадим', 'Алексеевич', 18, 9),
    ('Журавлёва', 'Татьяна', 'Олеговна', 19, 9),
    ('Арсибеков', 'Кирилл', 'Артурович', 20, 9),
    ('Куликов ', 'Роман', 'Андреевич', 21, 9)
;
SELECT /*Для получения всех студентов в возрасте 19 лет*/
	student.surname AS Фамилия,
    student.name AS Имя,
    student.last_name AS Отчество,
    class.name AS Группа
FROM student
    INNER JOIN class ON student.id_class = class.id
WHERE
	student.age = 19;
SELECT  /*Для получения всех студентов из конкретной группы.*/
	class.name AS Группа,
	student.surname AS Фамилия,
    student.name AS Имя,
    student.last_name AS Отчество
FROM student
    INNER JOIN class ON student.id_class = class.id
WHERE
	class.id = 7;
SELECT  /*Для получения всех студентов из конкретного факультета*/
    faculty.name AS Факультет,
	class.name AS Группа,
	student.surname AS Фамилия,
    student.name AS Имя,
    student.last_name AS Отчество,
	student.age AS Возраст
FROM  student
    INNER JOIN class ON student.id_class = class.id
    INNER JOIN faculty ON faculty.id = class.id_faculty
WHERE
	faculty.id = 3;
SELECT  /*Для получения факультета и группы конкретного студента по имени и фамилии*/
    class.name AS Группа,
    faculty.name AS Факультет
FROM student
    INNER JOIN class ON student.id_class = class.id
    INNER JOIN faculty ON faculty.id = class.id_faculty
WHERE
	student.surname = 'Петухов' AND student.name = 'Фёдор' AND student.last_name = 'Александрович';
SELECT  /*Для получения факультета и группы конкретного студента по id*/
    faculty.name AS Факультет,
    class.name AS Группа,
	student.surname AS Фамилия,
    student.name AS Имя,
    student.last_name AS Отчество,
	student.age AS Возраст
FROM student
    INNER JOIN class ON student.id_class = class.id
    INNER JOIN faculty ON faculty.id = class.id_faculty
WHERE
	student.id = 200;