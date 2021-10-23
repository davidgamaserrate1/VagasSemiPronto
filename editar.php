<?php
    
    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Editar vaga');


    use \App\Entity\Vaga;

    //VALIDAR ID
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    //CONSULTA A VAGA
    $obVaga = Vaga::getVaga($_GET['id']);
    
    //VALIDAÇÃO DA VAGA
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error');
        exit;
    }

    if(isset($_POST['nome_empresa'],$_POST['descricao_setor'],$_POST['descricao_cargo'],$_POST['salario'])){
   
 
    
        $obSetor    ->descricao_setor   = $_POST['descricao_setor'];
        $obCargo    ->descricao         = $_POST['descricao_cargo'];
        $obCargo    ->salario           = $_POST['salario'];
        $obEmpresa  ->nome              = $_POST['nome_empresa'];
        $obVaga->atualizar();
        header('location: index.php');
        exit;
    }

    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/formulario.php';    
    include __DIR__.'/includes/footer.php';