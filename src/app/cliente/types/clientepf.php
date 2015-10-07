<?php

namespace app\cliente\types;

use app\cliente\clienteabstract;

class clientepf extends clienteabstract
{

    private $cpf;

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