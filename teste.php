<?php
   // pra funcionar, faz uma conexão do banco de dados aqui
   // -------------- pois n fiz
   


   // validar email
   function validate_email1($email){
               if(preg_match("/^([[:alnum:].-]){3,}([[:lower:][:digit:].-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)){
               return false;}else{return true;}
               if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ return false;}else{return true;}
   }
   
   // executa quando clicar em enviar
   if(isset($_POST['enviar'])){
   
   // verificar se tem dados em nome
     $flag=0;
     if($_POST['nome']!=""){
       $nome=strip_tags($_POST['nome']);
     }else{
       $class="warning";
       $mensagem[$flag]="Informe o seu nome";
       $flag++;
     }
   
   // verificar se tem dados em email
     if($_POST['email']!=""){
       $email=strip_tags($_POST['email']);
       if(!validate_email1($email)){
         $class="warning";
         $mensagem[$flag]="Informe um endereço de e-mail que seja válido";
         $flag++;
       }
     }else{
       $class="warning";
       $mensagem[$flag]="Informe endereço de e-mail";
       $flag++;
     }
     
     // verificar se tem dados em nome
     $flag=0;
     if($_POST['msg']!=""){
       $msg=strip_tags($_POST['msg']);
     }else{
       $class="warning";
       $mensagem[$flag]="Informe sua msg";
       $flag++;
     }
   
     if($flag==0){
       $objgrava=$pdo->prepare("INSERT INTO contato(con_nome, con_email, con_msg) VALUES(?,?,?)");
       $objgrava->execute(array($nome, $email, $msg));
       $id=$pdo->lastInsertId();
       
       if($id){
         $class="success";
         $mensagem[$flag]="Dados cadastrados com sucesso";
         //envia_email();
       }else{
         $class="danger";
         $mensagem[$flag]="Houve algum erro ao tentar guardar os dados, por favor tente novemente mais tarde";
       }
     }
   }
   
   ?>