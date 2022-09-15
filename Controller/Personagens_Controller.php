<?PHP
class Personagens_Controller 
{
    
    public static function index() 
    {
        include 'Model/PersonagensModel.php';
        
        $model = new PersonagensModel(); 
        $model->getAllRows();
                   
        include 'View/modules/Personagens/listaPersonagens.php';

    }
   
    public static function form()
    {
        
        include 'Model/personagensModel.php'; 
        $model = new PersonagensModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
        
        include 'View/modules/Personagens/FormPersonagens.php';
    }

    
    public static function save() {

        include 'Model/personagensModel.php'; 

        $personagens = new PersonagensModel();
        $personagens->id = $_POST['id'];
        $personagens->nome = $_POST['nome'];
        $personagens->descricao = $_POST['descricao'];

        $personagens->save();  
        header("Location: /Personagens"); 

  
    }

    public static function delete()
    {
        include 'Model/PersonagensModel.php'; 

        $model = new PersonagensModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Personagens"); 
    }

}