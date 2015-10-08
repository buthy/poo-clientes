<?php

namespace app\Cliente\Types;

use app\Cliente\ClienteAbstract;

class ClientePf extends ClienteAbstract
{

    protected $cpf;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

}