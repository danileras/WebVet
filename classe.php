<?php
class Pet
{
	private $pdo;
	public function __construct()
	{
		$dbname = 'epiz_31597876_inter';
		$host = 'sql112.epizy.com';
		$user = 'epiz_31597876';
		$senha = 'polido123';
		try {
			$this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
		} catch (PDOException $e) {
			echo "Erro com o banco de dados: " . $e->getMessage();
			exit();
		} catch (Exception $e) {
			echo "Erro genérico: " . $e->getMessage();
		}
	}


	public function cadastrarPet($name_pet, $idade_pet, $peso_pet,$porte_pet,$tipo_pet)
	{

		$cmd = $this->pdo->prepare("INSERT INTO pets(nome_pet,tipo_pet,idade_pet,peso_pet,porte_pet) VALUES (:NOME_PET,:TIPO_PET,:IDADE_PET,:PESO_PET,:PORTE_PET,:TIPO_PET)");
		$cmd->bindValue(":NAME_PET", $name_pet);
		$cmd->bindValue(":IDADE_PET", $idade_pet);
		$cmd->bindValue(":PESO_PET", $peso_pet);
		$cmd->bindValue(":PESO_PET", $porte_pet);
		$cmd->bindValue(":TIPO_PET", $tipo_pet);
		$cmd->execute();
		return true;
	}
	public function buscarPet($id_pet)
	{
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM pet WHERE id_pet=:ID_PET");
		$cmd->bindValue(":ID_PET", $id_pet);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}
	public function teste (){
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM epiz_31597876_inter.pets");
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}
	public function atualizarPet($id_pet, $name_pet, $idade_pet, $peso_pet,$tipo_pet,$porte_pet)
	{
		$cmd = $this->pdo->prepare("UPDATE pet SET name_pet = :NAME_PET, idade_pet = :IDADE_PET, peso_pet = :PESO_PET,:TIPO_PET,:PORTE_PET,  WHERE id_pet =:ID_PET");
		$cmd->bindValue(":ID_PET", $id_pet);
		$cmd->bindValue(":NAME_PET", $name_pet);
		$cmd->bindValue(":IDADE_PET", $idade_pet);
		$cmd->bindValue(":PESO_PET", $peso_pet);
		$cmd->bindValue(":TIPO_PET", $tipo_pet);
		$cmd->bindValue(":PORTE_PET", $porte_pet);
		$cmd->execute();
	}
}
