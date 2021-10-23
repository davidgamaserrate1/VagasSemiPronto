<?php

  namespace App\Entity;
  use \App\Db\DataBase;
  use \PDO;
 

class Empresa{
 
    public $id;
    public $nome;
 
 
    public function cadastrar(){      
      $obDatabase = new Database('empresa');

      $this->id = $obDatabase->insert(
                                      ['nome' => $this->nome ]
                                      );
     
    return true;
  } 
  public function atualizar(){
    return (new Database('empresa'))->update('id = '.$this->id, 
                                                              ['nome' => $this->nome]
                                            );
  }
 
    // public static function getEmpresa(){
    //     return (new Database('vagas'))->select()
    //                                   ->fetchObject(self::class);
    // }
    public static function getEmpresas(){
        return (new Database('empresa'))->selectTabela('nome', 'empresa')
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
 

}

