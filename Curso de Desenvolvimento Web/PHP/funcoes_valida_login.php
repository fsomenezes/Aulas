<?php

    function valida_login($login, $senha){

        $login_bd = 'felipewo';
        $senha_bd = '123';

        if ($login == $login_bd && $senha == $senha_bd) {
            return true;
        }

        return false;
        
    }

?>