<?php 

require "Conexao.class.php";

class Restrito{
    
    public $id_adm;
    public $nome_adm;
    public $email_adm;
    public $senha_adm;
    
    public function autenticarUsuario(){
        $pdo = Conexao::conexao();
        $sql = "SELECT nome_adm, senha_adm FROM admsuper WHERE nome_adm = '$this->nome_adm' AND senha_adm ='$this->senha_adm'";
        $consulta = $pdo->query($sql);
        $dados = false;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = true;
        }
        return $dados;
    }
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into admsuper values(default, :nome_adm, :email_adm, :senha_adm)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome_adm' => $this->nome_adm,
        ':nome_adm' => $this->email_adm,
        ':nome_adm' => $this->senha_adm
         
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM admsuper;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "id_adm" => $linha['id_adm'],
            "nome_adm" => $linha['nome_adm'],         
            "email_adm" => $linha['email_adm'],
            "senha_adm" => $linha['senha_adm']   
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($nome_adm){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM admsuper WHERE nome_adm like '%$nome_adm%'";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
                "id_adm"    => $linha['id_adm'],
                "nome_adm"      => $linha['nome_adm'],
                "email_adm"     => $linha['email_adm'],
                "senha_adm"     => $linha['senha_adm'],
                
               
            );     
        }
        $pdo = null;
         
        return $dados;
    }
	
	
	public function visualizar($restrito){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM admsuper where id_adm =".$restrito->getId();
        $consulta = $pdo->query($sql);
        
        $dados = null;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = new Restrito();
            $dados -> $linha['id_adm'];
            $dados -> $linha['nome_adm'];
            $dados -> $linha['email_adm'];
            $dados -> $linha['senha_adm'];
           
            
        }
        $pdo = null;
        return $dados;
        
        
        }

    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM admsuper WHERE id_adm = :id_adm';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':id_adm'=>$this->id_adm
        ));        
        
    }
    
     public function loginExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM admsuper WHERE nome_adm = '$this->nome_adm'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}
    
    
    
    
