<?php 
require 'configurar.php';
class cadastrados {
    public function login($logi, $pswd){
        global $usuario;
        $busca = $usuario->prepare("SELECT crefito, senha, nome FROM usuario  WHERE crefito = :crefito AND senha = :senha"); 
        $busca->bindParam(':crefito', $logi);
        $busca->bindParam(':senha', $pswd);
        $busca->execute();
        
        if($busca->rowCount()>0){
            $dados = $busca->fetch();
            $_SESSION['nome'] = $dados['nome'];
            return true;
        }else {
            return false;
        }
    }
    
}


