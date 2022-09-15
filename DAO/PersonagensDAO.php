<?PHP

class PersonagensDAO

{
   
    private $conexao;


    
    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


   
    function insert(PersonagensModel $model) 
    {
        
        $sql = "INSERT INTO personagens (nome, descricao) VALUES (?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->execute();      
    }
    public function update(PersonagensModel $model)                   
    {
        $sql = "UPDATE nome SET descricao=?  WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->bindValue(2, $model->nome);

        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM personagens";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/PersonagensModel.php';

        $sql = "SELECT * FROM Personagens WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $nome);
        $stmt->bindValue(3, $descricao);
        $stmt->execute();

        return $stmt->fetchObject("PersonagensModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM Personagens WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}