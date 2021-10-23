<?php

    require __DIR__. '/vendor/autoload.php';

    use App\Entity\Cargo;
    use \App\Entity\Vaga;
    use \App\Entity\Empresa;
    use \App\Entity\Setor;

    $vagas = Vaga::getVagas();
    $empresa = Empresa::getEmpresas();
    $cargo = Cargo::getCargos();
    $setor = Setor::getSetores();
    
    
    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/listagem.php';
    
    
    
    
    include __DIR__.'/includes/footer.php';