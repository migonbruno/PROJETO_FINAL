<?php 
require "Conexao.class.php";
class Usuario{ 
    public $id_usuario;
	public $nome_usuario;
    public $email_usuario;
    public $celular_usuario;
    public $senha_usuario;
    
    public function autenticarUsuario(){
        $pdo = Conexao::conexao();
        $sql = "SELECT email_usuario,senha_usuario FROM usuario WHERE email_usuario = '$this->email_usuario' AND senha_usuario ='$this->senha_usuario'";
        $consulta = $pdo->query($sql);
        $dados = false;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = true;
        }
        return $dados;
    }
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into usuario values(null, :nome_usuario, :email_usuario, :celular_usuario, :senha_usuario);';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome_usuario' => $this->nome_usuario,
        ':email_usuario' => $this->email_usuario,
        ':celular_usuario' => $this->celular_usuario,
   
        ':senha_usuario' => $this->senha_usuario,
        
         
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM usuario;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "id_usuario" => $linha['id_usuario'],
            "nome_usuario" => $linha['nome_usuario'],
      
            "email_usuario" => $linha['email_usuario'],    
            "celular_usuario" => $linha['celular_usuario'], 
            "senha_usuario" => $linha['senha_usuario']   
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
       public function pesquisarPorNome($nome_usuario){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM usuario WHERE nome_usuario like '%$nome_usuario%'";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
                "id_usuario" => $linha['id_usuario'],
                "nome_usuario" => $linha['nome_usuario'],
                "email_usuario" => $linha['email_usuario'],
                "celular_usuario" => $linha['celular_usuario'],
                "senha_usuario" => $linha['senha_usuario'],
                
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM usuario WHERE id_usuario = :id_usuario';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':id_usuario'=>$this->id_usuario
        ));        
        
    }
    
 
    
}
    
    
    
    
