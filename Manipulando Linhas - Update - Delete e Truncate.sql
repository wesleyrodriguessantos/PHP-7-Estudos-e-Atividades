INSERT INTO cursos VALUES 
('1', 'HTML5', 'Curso de HTML5', '40', '37', '2017'),
('2', 'CSS3', 'Curso de CSS3', '30', '27', '2018'),
('3', 'PHP7', 'Curso de PHP7', '34', '116', '2019'),
('4', 'JARVA', 'Curso de JAVA', '50', '76', '2020'),
('5', 'YOTOBAR', 'Curso de YOUTUBER', '30', '27', '2013'),
('6', 'PHPMYANIMIM', 'Curso de PHPMYADMIN', '65', '90', '2014');

SELECT * FROM cursos;

update cursos SET totaulas = '42' where idcurso = 1;

UPDATE cursos SET nome = 'JAVA', carga = '40' where idcurso = 4; 

UPDATE cursos SET nome = 'YOUTUBE', ano = '2019' where idcurso = 5;

UPDATE cursos SET nome = 'PHPMyAdmin', carga = '60', totaulas = '70' WHERE idcurso = '6';

DELETE FROM cursos Where idcurso = '5';

/*APAGA TODAS AS LINHAS DA TABELA!!!!*/
TRUNCATE TABLE cursos;