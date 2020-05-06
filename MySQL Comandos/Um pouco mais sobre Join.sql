CREATE TABLE gafanhoto_assiste_curso (
id int NOT NULL AUTO_INCREMENT,
data date,
idgafanhoto int,
idcurso int,
PRIMARY KEY(id),
FOREIGN KEY (idgafanhoto) REFERENCES gafanhotos (id),
FOREIGN KEY (idcurso) REFERENCES cursos (idcurso)
) DEFAULT CHARSET = utf8;

insert into gafanhoto_assiste_curso VALUES 
(default, '2014-02-01', '1', '2');

select * from gafanhoto_assiste_curso;

SELECT 
    g.nome, idcurso
FROM
    gafanhotos g
        JOIN
    gafanhoto_assiste_curso a ON g.id = a.idgafanhoto
ORDER BY g.nome;

/*MOSTRAR O NOME DO CURSO AGORA */
SELECT 
    g.nome, c.nome
FROM
    gafanhotos g
        JOIN
    gafanhoto_assiste_curso a ON g.id = a.idgafanhoto
    JOIN cursos c
    ON c.idcurso = a.idcurso
ORDER BY g.nome;