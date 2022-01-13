<?php

include './connection.php';

$data_nascimento; 
$nome;            
$cpf;             
$cargo;           
$email;           
$telefone;        
$cep;             
$cidade;          
$rua;             
$numero;          
$bairro;          
$complemmento;    
#$analise_curricular;
$formacao_academica; 
$tempo_servico;
$pontuacao;       
$experiencia_profissional_area ;
$pontuacao_academica;
$pontuacao2;
$id_endereco;

$conn = getConnection();

        $data_nascimento = $_POST["f_data_nascimento"];
        $nome            = $_POST["f_nome"];
        $cpf             = $_POST["f_cpf"];
        $cargo           = $_POST["f_cargo"];
        #$id_cargo_candidato = $_POST["f_cargo_candidato"]; #verificar
        $email           = $_POST["f_email"];
        $telefone        = $_POST["f_telefone"];
        $cep             = $_POST["f_cep"];
        $cidade          = $_POST["f_cidade"];
        $rua             = $_POST["f_rua"];
        $numero          = $_POST["f_numero"];
        $bairro          = $_POST["f_bairro"];
        $complemmento    = $_POST["f_complemento"];
        #$analise_curricular = $_POST["f_analise_curricular"];
        $cargo_formacao = $_POST["f_formacao_academica"];
        $tempo_servico  = $_POST["f_tempo_servico"];
        $pontuacao_academica = $_POST["f_pontuacao_academica"];
        $experiencia_profissional_area = $_POST["f_experiencia_profissional"];
        
        $sql = 'insert into dados_candidato(Data_nascimento,nome,email,rua,bairro,cpf,cargo,telefone,cidade,numero,complemento,formacao_academica,tempo_servico_area_saude,experiencia_profiss_area_hospitalar,pontuacao_formacao_academica,cep) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$data_nascimento);
        $stmt->bindValue(2,$nome);        
        $stmt->bindValue(3,$email);
        $stmt->bindValue(4,$rua);
        $stmt->bindValue(5,$bairro);
        $stmt->bindValue(6,$cpf); 
        $stmt->bindValue(7,$cargo);
        $stmt->bindValue(8,$telefone);
        $stmt->bindValue(9,$cidade);
        $stmt->bindValue(10,$numero);
        $stmt->bindValue(11,$complemmento);
        $stmt->bindValue(12,$cargo_formacao);
        $stmt->bindValue(13,$tempo_servico);
        $stmt->bindValue(14,$experiencia_profissional_area);
        $stmt->bindValue(15,$pontuacao_academica);
        $stmt->bindValue(16,$cep);
        if ($stmt->execute())
        {
            echo 'Dados salvos com sucesso!';
        }
        
      



       
       
       /*
           
        $sql ="insert into teste(data) values ('$data');";
        $stmt = $conn->prepare($sql);
        //$stmt->bindValue(1,$data);
        /*$stmt->bindValue(2,$cep);
        $stmt->bindValue(3,$bairro);
        $stmt->bindValue(4,$numero);
        $stmt->bindValue(5,$cidade);
        $stmt->bindValue(6,$complemmento);
        if ($stmt->execute())
        {
            echo 'Dados salvos com sucesso!';
        }

       
        /*
        $sql = 'insert into Cargo_social(nome) values (?)';
        $stmt = $conn->prepare($sql);
        $stmt-> bindValue(1,$cargo);
        if($stmt->execute())
        {
            echo 'dados salvos com sucesso!';
        }
    
        $sql = 'insert into Formacao_academica(time_de_servico_area_saude,time_experiencia_profis_area_hospitalar) values (?,?)';
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(1,$tempo_servico);
        $stmt->bindValue(2,$experiencia_profissional_area);
         
        if ($stmt->execute())
        {
            echo 'Dados salvos com sucesso!';
        }
    

    
        $sql = 'insert into Cargo_candidato(nome_cargo) values(?)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$cargo_formacao);
        
        if($stmt->execute())
        {
            echo '<br> Dados salvos com sucesso';
        }

        


        #------ id cargo candidato------
        $sql = 'select  MAX(idCargo_candidato) as idCargo_candidato from Cargo_candidato;';
        $sql = $conn->query($sql);
        $row = $id_cargo_candidato->fetch();
        $id_cargo_candidato = $row['idCargo_candidato'];

        echo 'id cargo candidato'.$id_cargo_candidato;


        #----- id cargo social ---------
        $sql = 'SELECT MAX(idCargo_social) as idCargo_social FROM Cargo_social;';
        $sql = $conn->query($sql);
        $row = $id_cargo_social->fetch();
        $id_cargo_social = $row['idCargo_social'];

        #----- id formacao academica ---
        $sql = 'SELECT MAX(idFormacao_academica) as idFormacao_academica FROM Formacao_academica;';
        $sql = $conn->query($sql);
        $row = $id_formacao_academica->fetch();
        $id_formacao_academica = $row['idFormacao_academica'];


        echo 'id cargo'.$id_cargo_candidato; 



        $sql = 'insert into Dados_academicos(formacao_academica_idFormacao_academica,Cargo_candidato_idCargo_candidato,Cargo_social_idCargo_social) values(?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$id_formacao_academica);
        $stmt->bindValue(2,$id_cargo_candidato);
        $stmt->bindValue(3,$id_cargo_social);

        if($stmt->execute())
        {
            echo 'Dados salvos com sucesso!';
        }

        $sql = 'SELECT MAX(idDados_academicos) as idDados_academicos FROM Dados_academicos;';
        $sql = $conn->query($sql);
        $row = $id_dados_academicos->fetch();
        $id_dados_academicos = $row['idDados_academicos'];


        
        echo "dados academicos: ".$id_dados_academicos;



        $sql = 'insert into Candidato(data_nacimento,cpf,telefone,Endereco_idEndereco,Dados_academicos_idDados_academicos,nome_candidato) values (?,?,?,?,?,?)';
        $stmt= $conn->prepare($sql);
        $stmt->bindValue(1,$data_nascimento);
        $stmt->bindValue(2,$cpf);
        $stmt->bindValue(3,$telefone);
        $smtm->bindValue(4,$id_endereco);
        $stmt->bindValue(5,$id_dados_academicos);
        $stmt->bindValue(6,$nome);

        if($stmt->execute())
        {
            echo 'Dados salvos com sucesso!';
        }
*/
    
?>