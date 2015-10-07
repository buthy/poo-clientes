<?php

namespace app\cliente\interfaces;

interface clienteinterface
{

    public function getId();
    public function getLogin();
    public function getNome();
    public function getEndereco();
    public function getEmail();
    public function getCpf();
    public function getCnpj();
    public function getSexo();
    public function getRazaoSocial();
    public function getTipo();
    public function getGrauImportancia();
    public function getEnderecoCobranca();

}