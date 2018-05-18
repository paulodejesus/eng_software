<?php
//design pattern Singleton
class conexao
{
    // Instância da classe
    private static $instance = null;
    private $conn;

    // Construtor privado: só a própria classe pode invocá-lo
    private function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pswd = "";
        $db = "projeto";

        try {
            $this->conn = mysqli_connect($host, $user, $pswd, $db);
            $this->conn->set_charset('utf8');
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    // método estático
    static function getInstance()
    {
        // Já existe uma instância?
        if (self::$instance == NULL)
            self::$instance = new conexao();   // Não existe, cria a instância 
        return self::$instance;                // Já existe, simplesmente retorna
    }

    // Previne o uso de __clone
    private function __clone() {}
     public function getCon(){
        return $this->conn;
    }
}
?>