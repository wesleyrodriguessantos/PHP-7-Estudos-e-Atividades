/* WILDCARDS*/
/*terminam com A*/
select * from cursos where nome like '%A';

/*Começam com A*/
select * from cursos where nome like 'A%';

/*que CONTÉM  A em qualquer lugar*/
select * from cursos where nome like '%A%';

/*que NÃO CONTÉM  A em  lugar NENHUM*/
select * from cursos where nome not like '%A%';

/*Vai selecionar qualquer curso cujo nome comece com PH e que TERMINE com P*/
select * from cursos where nome like 'ph%p';

/*Vai selecionar qualquer curso cujo nome comece com PH e que TERMINE com P e + alguma coisa (o underline obriga a ter um caracter)*/
select * from cursos where nome like 'ph%p_';

SELECT * FROM gafanhotos where nome LIKE '%SILVA%';

/*Fazer distinção entre valores repetidos*/
select distinct nacionalidade from gafanhotos;

/* Função de Agregação - irá contar quantos são todos os ursos nesse caso*/
SELECT count(*) from cursos;

/* Contou todos os cursos cuja carga era maior que 40 horas*/
SELECT count(*) FROM cursos where carga > 40;
/* Seleciona a maior Carga entre os cursos */
SELECT max(carga) from cursos;
select max(totaulas) from cursos where ano = '2019';

/* Aqui se Seleciona a menor Carga entre os cursos e mostra o nome do referido curso ainda */
SELECT nome, min(carga) from cursos;

/* Somar o total de aulas de todosos cursos*/
select sum(totaulas) from cursos;

/* Fazer a Média o total de aulas de todosos cursos*/
select AVG(totaulas) from cursos where ano = '2016';

