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
    <title>Proveedor</title>
</head>
<body>
    <h1 id="cabecera">Modulo proveedor</h1>
    <table>
        <tr>
            <td>Nombre proveedor</td>
            <td><input type="text" name="txtNombreProveedor" id="txtNombreProveedor"></td>
        </tr>

        <tr>
            <td>Categoría</td>
            <td>
                <select name="selCategoria" id="selCategoria">
                    <option value="legumbres">Legumbres</option>
                    <option value="frutas">Frutas</option>
                    <option value="verduras">Verduras</option>
                </select>
            </td>
        </tr>

    </table>
    <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
    <input type="reset" value="Reset" id="btnReset" name="btnReset">
</body>
</html>