/* Exercicio 1 */
SELECT nome, idade FROM alunos;

/* Exercicio 2 */
SELECT nome, disciplina FROM professores WHERE disciplina = 'Administracão';

/* Exercicio 3 */
select nome, idade from alunos order by idade ASC;

/* Exercicio 4 */
SELECT curso, COUNT(*) AS quantidade_alunos 
FROM alunos
GROUP BY curso
ORDER BY quantidade_alunos DESC;

/* Exercicio 5 */
SELECT curso, COUNT(*) AS quantidade_alunos
FROM alunos
GROUP BY curso
HAVING COUNT(*) > 6
ORDER BY quantidade_alunos DESC;

/* Exercicio 6 */
SELECT a.nome AS turmas ,t.nome_turma
FROM alunos a
JOIN matriculas m ON a.id = m.id_aluno
JOIN turmas t ON t.id = m.id_turma
WHERE nome_turma = 'turma A';

/* Exercicio 7 */
SELECT a.nome AS aluno ,t.nome_turma
FROM alunos a
JOIN matriculas m ON a.id = m.id_aluno
JOIN turmas t ON t.id = m.id_turma;

/* Exercicio 8 */
SELECT a.nome AS turma ,a.nome_aluno
FROM turmas t
JOIN alunos a ON m.id = m.m-matriculas
JOIN turmas t ON t.id = m.id_turma;

/* Exercicio 9 */
SELECT COUNT(*)AS total_matriculas
FROM turmas t
WHERE nome_turma = 'turma C';

/* Exercicio 10 */
SELECT a.nome AS professores ,t.nome_turma
FROM professores
JOIN turmas t ON p.id = p.id_professor
JOIN professores p ON t.id = m.id_turmas;

/* Exercicio 11 */
SELECT AVG (idade) AS media_idade 
FROM alunos a
WHERE curso = 'Contabilidade';















Select * from matriculas;

