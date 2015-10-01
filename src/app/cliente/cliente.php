<?php

namespace app\cliente;

class cliente
{

    private $id;
    private $login;
    private $nome;
    private $email;
    private $cpf;
    private $sexo;

    public function __construct($id, $login, $nome, $email, $cpf, $sexo)
    {
        $this->id = $id;
        $this->login = $login;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

}