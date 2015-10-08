<?php

namespace app\Cliente\Interfaces;

interface ClienteInterface
{

    public function getId();
    public function setId($id);
    public function getLogin();
    public function setLogin($login);
    public function getNome();
    public function setNome($nome);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getEmail();
    public function setEmail($email);
    public function getTipo();
    public function setTipo($tipo);

}