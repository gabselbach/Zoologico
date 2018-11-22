
<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
   class Conexao
  {
     private $host = 'localhost';
     private $user = 'root';
     private $pass = '12345';
     private $database = 'zoo';
     private $resultado;
     public  $query;
     public $link;
     public function __construct() {
          // $this->link = new mysqli($this->$host, $this->$user, $this->$pass, $this->$database);

          $this->link = new mysqli("localhost", "root", "12345", "zoo");
          echo mysqli_connect_error($this->link);
         return $this->link;
     }
  
      function executeQuery()
     {
        $this->resultado = $this->link->query($this->query);
          echo $this->link->error;
       
    }
    function fazLinha(){
        $array = array();
         while($aux = $this->resultado->fetch_array(MYSQLI_ASSOC)){
           array_push($array,$aux);
         }
           return $array;
    }
    function linha(){
      $aux = $this->resultado->fetch_array(MYSQLI_ASSOC);
      return $aux;
    }
    function pegaUltimo(){
      $sql ="SELECT LAST_INSERT_ID()";
      return $sql;
    }
     function disconnect()
     {
        mysqli_close($this->link);
     }
    function setQuery($query)
    {
    	$this->query=$query;
    }
    function getResult(){
        return $this->resultado;
    }
  }