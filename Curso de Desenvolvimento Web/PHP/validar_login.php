<?php

    require_once("funcoes_valida_login.php");

    $login_usuario = $_POST['Login'];
    $senha_usuario = $_POST['Senha'];

    $usuario_validado = valida_login($login_usuario, $senha_usuario);

    if ($usuario_validado) {
        echo "Acesso liberado";
        
    } else {
        echo 'Acesso negado';
    }

?>