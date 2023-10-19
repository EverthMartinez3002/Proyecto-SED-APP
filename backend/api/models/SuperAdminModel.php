<?php
class SuperAdminModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSuperAdmins() {
        $sql = 'SELECT id, nombre, apellido, email, contraseña FROM public.superadmin';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
