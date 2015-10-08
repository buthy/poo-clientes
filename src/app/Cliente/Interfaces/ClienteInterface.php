<?php

namespace app\Cliente\Interfaces;

interface ClienteInterface
{

    public function getId();
    public function getLogin();
    public function getNome();
    public function getEndereco();
    public function getEmail();
    public function getSexo();
    public function getTipo();

}