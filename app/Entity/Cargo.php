<?php

  namespace App\Entity;

  use \App\Db\DataBase;
  use \PDO;


class Cargo{
 
    public $id; 
    public $descricao; 
    public $salario; 
    public $setor_id;
  
 
    public function cadastrar(){  

        $obDatabase = new Database('cargo');

        $this->id = $obDatabase->insert([
                'descricao'    => $this->descricao,
                'salario' => $this->salario,
                'setor_id' => $this->setor_id
        ]);
 
      return true;
    }
 
    public function atualizar(){
    return (new Database('cargo'))->update('id = '.$this->id,
                                      [
                                      'descricao'    => $this->descricao,
                                      'salario' => $this->salario ,
                                      'setor_id' => $this->setor_id
                                      ]);
  }
  public static function getCargo($fields){
    return (new Database('cargo'))->selectTabela($fields, 'cargo')
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
}
    public static function getCargos(){
        return (new Database('cargo'))->selectTabela('descricao, salario', 'cargo')
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
  
    public function excluir(){
        return (new Database('cargo'))->delete('id ='.$this->id);
    }

}

