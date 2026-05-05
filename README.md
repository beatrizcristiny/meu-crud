git config --global user.email "beatrizcrispires@gmail.com"
  git config --global user.name "beatrizcristiny"





A criação da tabela pelo cmd 

mysql> CREATE DATABASE crud_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
Query OK, 1 row affected (0.02 sec)

mysql> USE crud_php;
Database changed
mysql> CREATE TABLE tarefas (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> titulo VARCHAR(120) NOT NULL,
    -> descricao TEXT NULL,
    -> status ENUM('pendente','feito') NOT NULL DEFAULT 'pendente',
    -> criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    -> );
Query OK, 0 rows affected (0.05 sec)

mysql> insert into tarefas (titulo, descricao, status) values
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
mysql> insert into tarefas (titulo, descricao, status) values ('Estudar o php', ' Revisar algumas coisas', 'pendente'), ('Realizar os exercicios', 'Exercicios de fixação', 'pendente'), ('Ler o pdf parte um', 'Pagina um', 'feito');
Query OK, 3 rows affected (0.03 sec)
Records: 3  Duplicates: 0  Warnings: 0

mysql> select * from tarefas wheres status 'pendente';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'status 'pendente'' at line 1
mysql> select * from tarefas wheres status = 'pendente';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'status = 'pendente'' at line 1
mysql> SELECT * FROM tarefas WHERE status ='pendente';
+----+------------------------+-------------------------+----------+---------------------+
| id | titulo                 | descricao               | status   | criado_em           |
+----+------------------------+-------------------------+----------+---------------------+
|  1 | Estudar o php          |  Revisar algumas coisas | pendente | 2026-04-29 08:19:19 |
|  2 | Realizar os exercicios | Exercicios de fixação   | pendente | 2026-04-29 08:19:19 |
+----+------------------------+-------------------------+----------+---------------------+
2 rows in set (0.04 sec)

mysql> select * from tarefas order by criado_em desc;
+----+------------------------+-------------------------+----------+---------------------+
| id | titulo                 | descricao               | status   | criado_em           |
+----+------------------------+-------------------------+----------+---------------------+
|  1 | Estudar o php          |  Revisar algumas coisas | pendente | 2026-04-29 08:19:19 |
|  2 | Realizar os exercicios | Exercicios de fixação   | pendente | 2026-04-29 08:19:19 |
|  3 | Ler o pdf parte um     | Pagina um               | feito    | 2026-04-29 08:19:19 |
+----+------------------------+-------------------------+----------+---------------------+
3 rows in set (0.03 sec)


PERGUNTAS:

4.2 
1-é um conjunto de caracteres usado pelo banco que suporta todas as letras simbolos e etc.

2- O php lança um erro quando algo da errado no banco de dados em vez de n sinalizar nada, isso facilita encontrar bugs.

5.2

1- query() listar_tarefas pq n recebe dados do usuario.
prepare() criar_tarefa, buscar_tarefa, excluir_tarefa, atualizar_tarefa.

2- O prepare separa os dados do codigo sql assim  evita ter invasões maliciosas no banco de dados.

7.2

1- Ele é usado em todo lugar que vai aparecer alo na tela, ele muda caracteres especiais para texto seguro assim impede ataques.

2- O get pode ser acessado por robos e o post exige ações que comprovem que você é uma pessoa como clicar em um botão ou escolher imagens.

8.2

1- foram adicionadas

2- String vazia = existe um campo mas ele está vazio
null = significa ausencia de informação, que realmente não existe um valor.

12.0

A-
 primary key: é a chave primaria indentifica cada registro de forma unica e não pode repetir.

 auto_increment: gera o numero do id automaticamente e adiciona + 1 a cada registro.

 enum: limita os valores aceitos pelo campo, como 'pendente' ou 'feito'.

 2