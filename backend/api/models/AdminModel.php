<?php
class AdminModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function getAdmins() {
        $sql = 'SELECT id, nombre, apellido, email, contraseña FROM public."admin"';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}