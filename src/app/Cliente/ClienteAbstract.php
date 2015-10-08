<?php

namespace app\Cliente;

use app\Cliente\Interfaces\EnderecoCobrancaInterface;
use app\Cliente\Interfaces\GrauImportanciaInterface;

class ClienteAbstract implements EnderecoCobrancaInterface, GrauImportanciaInterface
{

    private $id;
    private $login;
    private $nome;
    private $endereco;
    private $email;
    private $sexo;
    private $tipo;
    private $grauImportancia;
    private $enderecoCobranca;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
        return $this;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function getGrauImportancia()
    {
        return $this->grauImportancia;
    }

    public function setGrauImportancia($grauImportancia)
    {
        $this->grauImportancia = $grauImportancia;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

}