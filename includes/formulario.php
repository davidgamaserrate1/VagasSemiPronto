
<main>

<section>
    <a href="index.php">
        <button class="btn btn-success">Voltar</button>
    </a>
</section>
 

<form method="post">

    <!--Empresa -->
    <h2 class="mt-3">  Empresa </h2>  
        <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="empresaNome" value="<?=$obEmpresa->nome ?>">
        </div>
      
    <!--Cargo -->
    <h2 class="mt-3">  Cargo </h2>  
        <div class="form-group">
            <label>Descrição</label>
                <textarea class="form-control"          name="cargoDescricao" rows="1"><?=$obCargo->descricao?></textarea>
            <label>Salário</label>
                <input type="number" class="form-control" name="cargoSalario" value="<?=$obCargo->salario?>">
            <label>Setor ID</label>
                <input type="number" class="form-control" name="cargoSetor_id" value="<?=$obCargo->setor_id?>">
        </div> 

    <!--Setor -->
    <h2 class="mt-3">  Setor </h2>  
        <div class="form-group">
            <label>Descrição</label>
                <textarea class="form-control" name="cargoDescricao_setor" rows="1"><?=$obSetor->descricao_setor?></textarea>
            <label>Empresa ID</label>
                <input type="number" class="form-control" name="cargoEmpresa_id" value="<?=$obSetor->empresa_id?>">  
                 
        </div>
 
    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>   

</form>

</main>