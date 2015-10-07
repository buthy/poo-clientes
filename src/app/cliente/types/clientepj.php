<?php

namespace app\cliente\types;

use app\cliente\clienteabstract;

class clientepj extends clienteabstract
{

    private $cnpj;

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

}