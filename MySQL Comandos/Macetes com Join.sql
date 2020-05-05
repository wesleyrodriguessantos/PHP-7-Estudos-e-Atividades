USE cadastro;
describe gafanhotos;
ALTER table gafanhotos add column cursopreferido int;

alter table gafanhotos add foreign key (cursopreferido) REFERENCES cursos(idcurso);

select * from gafanhotos;
select * from cursos;

update gafanhotos set cursopreferido = '6' where id = '1';
update gafanhotos set cursopreferido = '29' where id = '9';

select nome, cursopreferido from gafanhotos;

SELECT gafanhotos.nome, gafanhotos.cursopreferido, cursos.nome, cursos.ano
 from gafanhotos join cursos on cursos.idcurso = gafanhotos.cursopreferido;
 
 /*SEM O CÓDIGO DO CURSO PREFERIDO*/
 SELECT gafanhotos.nome, cursos.nome, cursos.ano
 from gafanhotos inner join cursos on cursos.idcurso = gafanhotos.cursopreferido order by gafanhotos.nome;
 
  /*USO DO as Para ficar mais produtivo*/
 SELECT g.nome, c.nome, c.ano
 from gafanhotos as g inner join cursos as c 
 on c.idcurso = g.cursopreferido order by g.nome;