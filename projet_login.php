<?php

    function login($email, $senha, $email_correto, $senha_correta){
        if($email == $email_correto && $senha == $senha_correta){
           return true;
            // echo "Login aprovado com sucesso";
        }
        else {
            return false;
            //echo "Email e/ou login estão inválidos.";
        }
    }

    $email = "victorcordeirofp@gmail.com";
    $senha = "16031997Marcia";

    $email_correto = "victorcordeirofp@gmail.com";
    $senha_correta = "16031997Marcia";

    $resultado_login = login($email, $senha, $email_correto, $senha_correta);

    echo $resultado_login ? "Login aprovado com sucesso" : "Email e/ou login estão inválidos";
?>
