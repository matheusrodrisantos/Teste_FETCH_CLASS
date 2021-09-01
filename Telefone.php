<?php


class Telefone
{
    private int $id;
    private string $telefone;

    public function getId(){
      return $this->id;
    }

    public function  getTelefone(){
      return $this->telefone;
    }

    public function  setId(int $id){
      $this->id=$id;
    }

    public function  setTelefone(string $telefone){
      $this->telefone=$telefone;
    }

}
