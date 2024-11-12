<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'agtech');

$conexao = mysqli_connect(HOST, USERNAME, PASSWORD, DB) or die ('Não foi possível conectar ao banco.');