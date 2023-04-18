<?php
include "../incluedes/conexiondb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Usuarios</title>
</head>
<body>
    <h1 id="cabecera">Modulo Usuarios y cuentas</h1>
    <table>
        <tr>
            <td>Nombre completo usuario</td>
            <td><input type="text" name="txtNombreUsuario" id="txtNombreUsuario"></td>
        </tr>

        <tr>
            <td>Nickname</td>
            <td><input type="text" name="txtNickname" id="txtNickname"></td>
        </tr>
        
        <tr>
            <td>Contraseña</td>
            <td><input type="text" name="txtContrasena" id="txtContrasena"></td>
        </tr>
        <tr>
            <td>Repita contraseña</td>
            <td><input type="text" name="txtRepitaContrasena" id="txtRepitaContrasena"></td>
        </tr>

        <tr>
            <td>Tipo usuario</td>
            <td>
                <select name="selTipoUsuario" id="selTipoUsuario">
                    <option value="administrador">Administrador</option>
                    <option value="gestor">Gestor</option>
                    <option value="normal">Normal</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
    <input type="reset" value="Reset" id="btnReset" name="btnReset">
</body>
</html>