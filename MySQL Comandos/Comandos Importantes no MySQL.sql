/* deletar a coluna profissao*/
ALTER TABLE pessoas 
drop column profissao;

/*RENOMEAR A TABELA*/
ALTER TABLE pessoas Rename TO gafanhotos;

/* MESMO QUE USAR describe*/
desc cursos;

/* Selecionar a tabela completa*/
select * from pessoas;

/* adicionar coluna após a coluna nome*/
ALTER TABLE pessoas ADD COLUMN profissao varchar(10) AFTER nome;

/* adicionar coluna codigo em primeiro*/
ALTER TABLE pessoas ADD COLUMN codigo int first;

/* MODIFICAR A COLUNA profissao e colocar como não nula e com padrão vazio*/
Alter table pessoas MODIFY COLUMN profissao varchar(20) not null default ' ';

/*ALTERAR O NOME DA COLUNA profissao PARA prof */
ALTER TABLE pessoas CHANGE COLUMN profissao prof varchar(20) not null default ' ';

/* CRIAR TABELA cursos se não existir uma tabela cursos*/
CREATE TABLE IF NOT EXISTS cursos (
nome varchar(30) not null UNIQUE,
descricao text,
carga int UNSIGNED,
totaulas int UNSIGNED,
ano year DEFAULT '2020'
) DEFAULT CHARSET=utf8;

ALTER TABLE cursos add column idcurso int first;

ALTER TABLE cursos ADD PRIMARY KEY (idcurso);

/*DELETAR A TABELA cursos*/
DROP TABLE cursos;