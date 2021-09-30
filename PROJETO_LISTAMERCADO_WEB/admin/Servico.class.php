<?php 

require "Conexao.class.php";

class Servico{
    
    public $codservico;
	public $descricao;
    public $categoria;
    public $preco;
    public $imagem;
    
 
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into servico values(default, :descricao, :categoria, :preco, :imagem)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':descricao' => $this->descricao,
        ':categoria' => $this->categoria,
        ':preco' => $this->preco,
        ':imagem' => $this->imagem
         
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM servico;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "codservico" => $linha['codservico'],
            "descricao" => $linha['descricao'],
            "categoria" => $linha['categoria'],
            "preco" => $linha['preco'],       
            "imagem" => $linha['imagem']   
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($descricao){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM servico WHERE descricao like '%$descricao%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
                "codservico" => $linha['codservico'],
                "descricao" => $linha['descricao'],
                "categoria" => $linha['categoria'],
                "preco" => $linha['preco'],
                "imagem" => $linha['imagem'],
                
               
            );     
        }
        $pdo = null;
        return $dados;
        
    }
    
	public function visualizar($servico){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM servico where codservico =".$codservico->getcodservico();
        $consulta = $pdo->query($sql);
        
        $dados = null;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = new Servico();
            $dados -> $linha['codservico'];
            $dados -> $linha['descricao'];
            $dados -> $linha['ncategoria'];
            $dados -> $linha['preco'];
            $dados -> $linha['imagem'];
           
            
        }
        $pdo = null;
        return $dados;
        
        
        }
	
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM servico WHERE codservico = :codservico';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':codservico'=>$this->codservico
        ));        
        
    }
    
   
    
}
    
    
    
    
