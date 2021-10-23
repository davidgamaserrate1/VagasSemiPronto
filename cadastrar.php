<?php

    require __DIR__. '/vendor/autoload.php';
    define('TITLE','Cadastrar Vaga');

    
    use \App\Entity\Vaga;
    use \App\Entity\Cargo;
    use \App\Entity\Empresa;
    use \App\Entity\Setor;

 
    $obCargo    = new Cargo;
    $obEmpresa  = new Empresa;
    $obSetor    = new Setor;

 
  //CARGO
 
   
    if(isset($_POST['empresaNome'],$_POST['cargoDescricao'],$_POST['cargoSalario'],$_POST['cargoSetor_id'], $_POST['cargoDescricao_setor'], $_POST['cargoEmpresa_id'])){
        //EMPRESA
        $obEmpresa  ->nome              = $_POST['empresaNome'];
      

        $obCargo    ->descricao         = $_POST['cargoDescricao'];
        $obCargo    ->salario           = $_POST['cargoSalario'];
        $obCargo    ->setor_id           = $_POST['cargoSetor_id'];
        //SETOR
        $obSetor    ->descricao_setor   = $_POST['cargoDescricao_setor'];
        $obSetor    ->empresa_id   = $_POST['cargoEmpresa_id'];       
        //INSERE REGISTRO NAS TABELAS :
        $obCargo    ->cadastrar();  
        $obEmpresa  ->cadastrar();  
        $obSetor    ->cadastrar(); 

        
         //AUX DE VAGA       
         $auxVagasdescricao_setor     =   $obSetor     ->descricao_setor;
       
        $auxVagasdescricao_cargo     =   $obCargo     ->descricao ;
        $auxVagasnome_empresa        =   $obEmpresa   ->nome  ;
        $auxVagasSalario             =   $obCargo     ->salario ;

        //INSERE REGISTRO NA TABELA VAGAS :
        $obVaga = new Vaga ( $auxVagasdescricao_setor, $auxVagasdescricao_cargo,  
                                $auxVagasnome_empresa, $auxVagasSalario );
                                $obVaga ->cadastrar();
        


        header('location: index.php?status=success');
        exit;
    }
   
    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/formulario.php';    
    include __DIR__.'/includes/footer.php';