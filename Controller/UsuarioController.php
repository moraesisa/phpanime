<?PHP
class UsuarioController 
{
    
    public static function index() 
    {
        include 'Model/UsuarioModel.php';
        
        $model = new UsuarioModel(); 
        $model->getAllRows();
                   
        include 'View/modules/Usuario/listaUsuario.php';

    }

    public static function form()
    {
        
        include 'Model/UsuarioModel.php'; 
        $model = new UsuarioModel();
        
        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']);
        
        include 'View/modules/Usuario/FormUsuario.php';
    }

    
    public static function save() {

        include 'Model/UsuarioModel.php'; 

        
        $Usuario = new UsuarioModel();
        $Usuario->id = $_POST['id'];
        $Usuario->descricao = $_POST['descricao'];
        $Usuario->save();  
        header("Location: /Usuario"); 
    }

    public static function delete()
    {
        include 'Model/UsuarioModel.php'; 

        $model = new UsuarioModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Usuario"); 
    }
}