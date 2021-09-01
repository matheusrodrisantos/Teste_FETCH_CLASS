<?php


include "Telefone.php";

#variaveis de conexao com o banco de dados
$driver ="mysql";
$host   ="127.0.0.1";
$dbname ="colaborador";
$user   ="sogeking";
$pass   ="Ukulele1_";


try
{
  $pdo = new PDO("$driver:host=$host;dbname=$dbname", $user, $pass,
  [   PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'",
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_CLASS
  ]);
}
catch(Exception $e)
{
    echo $e->getMessage();
    die();
}

$query = $pdo->query('SELECT * FROM telefone');
$query -> setFetchMode(PDO::FETCH_CLASS,'Telefone');//muda o fetch para FETCH_CLASS apontando para a Classe Telefones
$resultado=$query->fetchAll();

//Pega o primeiro resultado da consulta e guar no array $first
$first=$resultado[0];
//exibe o resultado
echo "<pre>";
echo "<h1>Primeira linha da tabela já conectada com a Classe Colaborador</h1>";
var_dump($first);
echo "</pre>";

//Muda o telefone do primeiro objeto
$first->setTelefone('434234123421');
echo "<br><hr>";
//exibe o resultado
$first=$resultado[0];
echo "<pre>";
echo "<h1>Exibe depois de mudar o telefone</h1>";
var_dump($first);
echo "</pre>";
echo "<br><hr>";

//cria um instancia da classe Telefone para comparar com classe do Fatch
$tel= new Telefone();
echo "<pre>";
echo "<h1>Instancia padrão da classe Telefone</h1>";
var_dump($tel);
echo "</pre>";
