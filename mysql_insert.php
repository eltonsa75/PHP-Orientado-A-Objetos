<?php
	
	// abre conexão com Mysql

$conn = mysqli_connect('127.0.0.1', 'root', 'hodel', 'livro');

// insere vários registros

mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Verissimo')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Jhon Lennon')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Mahatma Gandhi')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Ayrton Senna')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Charlin Chappin')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Anita Garibaldi')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Mário Quintana')");

// fecha a conexão

mysqli_close($conn);

?>