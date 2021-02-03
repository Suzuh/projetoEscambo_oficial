<?php

class Usuario
{
    public $msgErro="";
    public $user="";
    public $senha="";

    private $conexao;

    function conectar(){
        global $conexao;
        
        $servidor = "localhost";
        $user = "root";
        $senha = "";
        $database = "escambo";

        $conexao = mysqli_connect($servidor, $user, $senha, $database);
        if($conexao){
            echo "conectado com sucesso";
        }else{
            echo "houve algum impedimento ao conectar";
        };
    }

    function cadastrar(){
    }

    function logar(){
        global $conexao;
        global $user;
        global $senha;

        $query = "SELECT * FROM `usuarios` WHERE `nome` = '$user' AND `senha` = '$senha'";

        $consulta = mysqli_query($conexao, $query);

        if(mysqli_num_rows($consulta) > 0){
            header('location:SRC/admin.php');
        }else{
            echo "não foi possivel logar";
        }
    }
}
?>