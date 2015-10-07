<?php

namespace app\cliente\types;

use app\cliente\clienteabstract;

class clientepj extends clienteabstract
{

    private $cnpj;
    private $razaoSocial;

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }
    
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

}