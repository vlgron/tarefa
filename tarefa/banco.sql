create database sistema;

use tarefa;

create table tarefa (
    id (int) NOT NULL AUTO_INCREMENT,
    atividade varchar (45),
    primary key(id)
);

insert into tarefa values (null, "Estudar 1 todo dia");

select * from tarefa;
delete from tarefa where id = 'id';
update tarefa set id = 'id';
select * from tarefa where id = 'id';