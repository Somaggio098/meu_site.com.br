<?php
require_once 'Usuario.php';
// Classe Filha - Professor
class Professor extends Usuario {
    private $Matricula;

    public function __construct($nome, $email, $Matricla) {
        parent::__construct($nome, $email);
        $this->Matricula = $Matricula;
    }

    public function getMatricula() {
        return $this->Matricula;
    }

    public function exibirInfo() {
        return parent::exibirInfo() . " | Matricula: {$this->Matricula}";
    }

    public function darAula() {
        return "{$this->nome} está estudando...";
    }
}