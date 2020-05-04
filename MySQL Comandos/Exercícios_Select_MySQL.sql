/*Exercícios sobre SELECT no MySQL*/

/* Uma lista com o nome de todas as gafanhotas */
SELECT nome from gafanhotos where sexo = 'F';

/* Uma lista com com os dados de todos aqueles que nasceram entre 1/Jan/2000 e 31/dez/2015 */
SELECT * FROM gafanhotos WHERE nascimento BETWEEN '2000-01-01' and '2015-12-31';

/* Uma lista com o nome de todos os homens que trabalham como Programadores */
SELECT nome from gafanhotos where profissao = 'Programador' and sexo = 'M' order by nome;

/* Uma lista com todos os dados de  todas as mulheres que nasceram no Brasil e que tem seu nome iniciando com a letra J */ 
SELECT * from gafanhotos where nacionalidade = 'Brasil' and  nome like 'J%' ORDER BY nome;

/* Uma lista com o nome e a nacionalidade de todos os homens que têm Silva no nome, não nasceram no Brasil e pesam menos de 100Kg */
SELECT nome, nacionalidade from gafanhotos where sexo = 'M' AND nacionalidade <> 'Brasil' and peso < '100' and nome like '%Silva%' order by nome;

/* Qual é a maior altura entre gafanhotos homens que moram no Brasil? */
SELECT max(altura) from gafanhotos where sexo = 'M' and nacionalidade = 'Brasil';

/* Qual é a média de peso dos gafanhotos cadastrados? */
SELECT avg(peso) from gafanhotos;

/* Qual é o menor peso entre as gafanhotas mulheres que nasceram fora do Brasil e entre 01/jan/19990 e 31/dez/2000? */
SELECT min(peso) from gafanhotos where sexo = 'F' AND nacionalidade != 'Brasil' and nascimento between '19990-01-01' and '2000-12-31';


/* Quantas gafanhotos mulheres tem mais de 1.90m de Altura? */
select count(altura) from gafanhotos where sexo = 'F' AND altura > '1.90';
