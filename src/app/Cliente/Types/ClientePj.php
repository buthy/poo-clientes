<?php

namespace app\Cliente\Types;

use app\Cliente\ClienteAbstract;

class ClientePj extends ClienteAbstract
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