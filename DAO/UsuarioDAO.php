<?php

class UsuarioDAO

{
   
    private $conexao;


    
    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


   
    function insert(UsuarioModel $model) 
    {
        
        $sql = "INSERT INTO Usuario
                (id, nome, senha) 
                VALUES (?, ?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->id);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->senha);
        
       
        $stmt->execute();      
    }
    public function update(UsuarioModel $model)                   
    {
        $sql = "UPDATE nome SET senha=?  WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->senha);
        $stmt->bindValue(2, $model->id);
        $stmt->bindValue(2, $model->nome);

        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM Usuario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/UsuarioModel.php';

        $sql = "SELECT * FROM Usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("UsuarioModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM Usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}