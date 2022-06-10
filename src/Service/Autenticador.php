<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha):void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Usuario pode realizar login";
            return;
        }else{
            echo "Usuario não pode realizar login";
            return;
        }
    }
}