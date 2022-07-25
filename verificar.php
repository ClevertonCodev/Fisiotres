<?php
require 'configurar.php';
if (isset($_SESSION['nome']) && !empty($_SESSION['nome'])){
    if (isset($_SESSION['nome'])) { 


      
    
     } else { header("Location: pagina5.html ");}
    
    
}else{
	header("Location: pagina5.html ");
}
?>
