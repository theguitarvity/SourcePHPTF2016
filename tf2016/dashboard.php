<?php
    
    $user_type = "apoio";

    /**
     * Imaginei em algo do tipo:
     * 
     * Assim que um usuário fazer login, iremos criar uma variável na sessão que
     * se chama 'user_type' que terá os valores 'apoio' ou 'transformando'.
     */
    if($user_type == "apoio") {
        require_once 'requires_pages/apoio_dashboard.php';
    }
    
    else if($user_type == "transformando") {
        require_once 'requires_pages/transformando_dashboard.php';
    }
    
    
    
    
    else {
        echo 'Erro: $user_type invalid.';
    }