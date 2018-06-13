# Agendamento
Projeto para realizar o Agendamento de paciente.

# Tecnologias utilizadas
- PHP
- Laravel (Eloquent ORM + Blade)
- MySQL
- Bootstrap
- jQuery
- DataTables - https://datatables.net

# Banco de dados - SQL Server
1. Criar base de dados
```sql
CREATE DATABASE agendamento;
```
2. Usar a base criada
```sql
USE agendamento;
```
3. Criar tabelas
```sql
CREATE TABLE Usuarios (
	UsuarioID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Login varchar(255),
	Senha varchar(255)
);

CREATE TABLE Pacientes (
	PacienteID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome varchar(255)
);

CREATE TABLE Medicos (
	MedicoID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nome varchar(255)
);

CREATE TABLE Agendamentos (
	AgendamentoID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Data datetime,
	PacienteID int NULL,
	MedicoID int NULL,
    FOREIGN KEY (PacienteID) REFERENCES Pacientes(PacienteID),
    FOREIGN KEY (MedicoID) REFERENCES Medicos(MedicoID)
);
```
4. Inserir dados
```sql
INSERT INTO Pacientes (Nome) VALUES ('Antônio Azevedo Costa');
INSERT INTO Pacientes (Nome) VALUES ('Miguel Azevedo Barros');
INSERT INTO Pacientes (Nome) VALUES ('Kauã Ferreira Cavalcanti');

INSERT INTO Medicos (Nome) VALUES ('John A. Miller');
INSERT INTO Medicos (Nome) VALUES ('Jennifer S. Purdie');
INSERT INTO Medicos (Nome) VALUES ('Sophia Cardoso Carvalho');
INSERT INTO Medicos (Nome) VALUES ('Brenda Ribeiro Santos');

INSERT INTO Agendamentos VALUES (1,'2018-06-12 00:00:00',1,4);
INSERT INTO Agendamentos VALUES (2,'2018-06-13 00:00:00',2,1);
INSERT INTO Agendamentos VALUES (3,'2018-06-14 00:00:00',3,3);

INSERT Usuarios (Login, Senha) VALUES ('admin', 'admin');
```

# Possíveis melhorias
- Sistema de Login
- Criar funcionalidade para atualizar registros para todas as entidades (Pacientes, Medicos, Agendamentos e Usuarios)
- Testes unitários

# Autor
Leandro Peres Gonçalves