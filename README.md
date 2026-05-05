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
é um conjunto de caracteres usado pelo banco que suporta tudo