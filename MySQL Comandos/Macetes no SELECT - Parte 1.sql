INSERT INTO gafanhotos VALUES (51,'Jucinei Teixeira','Professor','1977-11-22','F',44.80,1.76,'Portugal'),(52,'Bruna Santos','Auxiliar Administrat','1991-12-01','F',76.30,1.45,'Canadá'),(53,'André Vitebo','Médico','1970-07-01','M',44.11,1.55,'Brasil'),(54,'Andre Santini','Programador','1991-08-15','M',66.00,1.76,'Itália'),(55,'Ruan Valente','Programador','1998-03-19','M',101.90,1.76,'Canadá'),(56,'Nailton Mauricio','Médico','1992-04-25','M',86.01,1.43,'EUA'),(57,'Rita Pontes','Professor','1999-09-02','F',54.10,1.35,'Angola'),(58,'Carlos Camargo','Programador','2005-02-22','M',124.65,1.33,'Brasil'),(59,'Philppe Oliveira','Auxiliar Administrat','2000-05-23','M',105.10,2.19,'Brasil'),(60,'Dayana Dias','Professor','1993-05-30','F',88.30,1.66,'Angola'),(61,'Silvana Albuquerque','Programador','1999-05-22','F',56.00,1.50,'Brasil');

SELECT * FROM gafanhotos;

INSERT INTO gafanhotos VALUES (DEFAULT,'Talita Nascimento','Farmacêutico','1999-12-30','F',55.20,1.65,'Portugal'),(DEFAULT,'Emerson Gabriel','Programador','1920-12-30','M',50.20,1.65,'Moçambique'),(DEFAULT,'Lucas Damasceno','Auxiliar Administrativo','1930-11-02','M',63.20,1.75,'Irlanda'),(DEFAULT,'Leila Martins','Farmacêutico','1975-04-22','F',99.00,2.15,'Brasil'),(DEFAULT,'Letícia Neves','Programador','1999-12-03','F',87.00,2.00,'Brasil'),(DEFAULT,'Janaína Couto','Auxiliar Administrativo','1987-11-12','F',75.40,1.66,'EUA'),(DEFAULT,'Carlisson Rosa','Professor','2010-08-01','M',78.22,1.98,'Brasil'),(DEFAULT,'Jackson Telles','Programador','1999-01-23','M',55.75,1.33,'Portugal'),(DEFAULT,'Danilo Araujo','Dentista','1975-12-10','M',99.21,1.87,'EUA');

SELECT * FROM cursos ORDER BY nome DESC;

select nome, carga, ano FROM cursos ORDER BY ano, nome;

SELECT * FROM cursos WHERE ano = '2016' ORDER BY nome;

SELECT nome, descricao,ano FROM cursos WHERE ano <= '2015' ORDER BY ano;

SELECT nome, ano from cursos where ano between 2014 and 2016 order by ano desc, nome;

SELECT nome, descricao, ano from cursos where ano in (2014, 2016, 2019) order by ano;

select * from cursos where carga > 35 and totaulas <= 30 order by descricao;

select * from cursos where carga > 35 or totaulas <= 30 order by idcurso;
