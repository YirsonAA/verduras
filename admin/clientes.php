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
    <title>Clientes</title>
</head>
<body>
    <h1 id="cabecera">Modulo Clientes</h1>
    <table>
        <tr>
            <td>Nombre cliente</td>
            <td><input type="text" name="txtNombreCliente" id="txtNombreCliente"></td>
        </tr>
        <tr>
            <td>Domicilio</td>
            <td><input type="text" name="txtDomicilio" id="txtDomicilio"></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><input type="text" name="txtTelefono" id="txtTelefono"></td>
        </tr>
        <tr>
            <td>Correo electrónico</td>
            <td><input type="text" name="txtCorreoElectronico" id="txtCorreoElectronico"></td>
        </tr>
        <tr>
            <td>Tipo cliente</td>
            <td>
                <select name="selTipoCliente" id="selTipoCliente">
                    <option value="final">Cliente final</option>
                    <option value="descuento1">Descuento 1</option>
                    <option value="mayorista">Mayorista</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
    <input type="reset" value="Reset" id="btnReset" name="btnReset">
</body>
</html>