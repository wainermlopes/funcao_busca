<?php
   function findId($funcionarios,$id)
   {
     foreach ($funcionarios as $func)
     { 
        if ($func['id'] == $id) {
          return $func ;    
        };
    };
    return null;
   }

   $id = $_POST ["id_fun"];
   $funcionario=
   [
       ['id'=>1,'nome'=>"joao",'salario'=>10],
       ['id'=>2,'nome'=>"jose",'salario'=>20],
       ['id'=>3,'nome'=>"maria",'salario'=>30]
   ];
   $retorno=findId($funcionario,$id);
   if (is_null($retorno)) 
   { echo 'Nao encontrou';
    die();
   } 
    echo 'Id do funcionario: '. $retorno['id'] . "<br/>" ;
    echo 'Nome: ' . $retorno['nome'] . "<br/>" ;
    echo 'Salario: ' . number_format( $retorno['salario'],2,',','.'); 
   

        
    ?>      