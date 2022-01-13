<?php
include 'form.html';

$conn = getConnection();

function getConnection(){
    # conexao com o banco de dados
    $dsn = 'mysql:host=addrres_database; dbname=nome_database'; #adicione suas configs de banco aqui 
    $user = 'root';
    $pass = 'adlo895020';//acho que nao tem password

    try {
        $pdo = new PDO( $dsn, $user, $pass);
        return $pdo;
    }catch (PDOException $ex){
        echo 'erro:',$ex->getMessage();
    }

}

?>  