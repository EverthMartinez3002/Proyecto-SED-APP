<?php
class UsuarioController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function registrarUsuario($nombre, $apellido, $email, $contrasena)
    {
        // Validar datos
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('El correo electrónico no es válido.');
        }
        if (strlen($contrasena) < 8) {
            throw new Exception('La contraseña debe tener al menos 8 caracteres.');
        }

        // Verificar si el correo electrónico ya está registrado.
        $sql = 'SELECT COUNT(*) as count FROM public.usuario WHERE email = :email';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($result['count'] > 0) {
            // El correo electrónico ya está registrado.
            throw new Exception('El correo electrónico ya está registrado.');
        }

        // Insertar el nuevo usuario en la base de datos.
        $sql = 'INSERT INTO public.usuario (nombre, apellido, email, contraseña) VALUES (:nombre, :apellido, :email, :contrasena)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', password_hash($contrasena, PASSWORD_DEFAULT));
    
        if ($stmt->execute()) {
            echo 'exito';
            return true;
        } else {
            // Hubo un problema al registrar el usuario.
            return false;
        }
    }    
}