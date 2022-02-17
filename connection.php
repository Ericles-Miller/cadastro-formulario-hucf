<?php
include 'form.html';

$conn = getConnection();

function getConnection(){
    # conexao com o banco de dados
    $dsn = ''; #adicione suas configs de banco aqui 
    $user = '';
    $pass = '';

    try {
        $pdo = new PDO( $dsn, $user, $pass);
        return $pdo;
    }catch (PDOException $ex){
        echo 'erro:',$ex->getMessage();
    }

}

?>  
