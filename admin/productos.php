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
    <title>Productos</title>
</head>
<body>
    <h1 id="cabecera">Modulo Productos</h1>
    <?php 

    echo" <p style='text-align: center;' > hola mundo desde php</p>";
    ?>
    <table>
        <tr>
            <td>Nombre producto</td>
            <td><input type="text" name="txtNombreProducto" id="txtNombreProducto"></td>
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
        <tr>
            <td>Cantidad disponible</td>
            <td><input type="text" name="txtCantidadDisponible" id="txtCantidadDisponible"></td>
        </tr>
        <tr>
            <td>Precio compra.</td>
            <td><input type="text" name="txtPrecioCompra" id="txtPrecioCompra" onchange="calculaTotal()"></td>
        </tr>
        <tr>
            <td>Porcentaje ganancia.</td>
            <td><input type="text" name="txtPorcentajeGanancia" id="txtPorcentajeGanancia" onchange="calculaTotal()">%</td>
        </tr>
        <tr>
            <td>Tipo IVA.</td>
            <td>
                <select name="selTipoIva" id="selTipoIva" onchange="calculaTotal()">
                    <option value="1">1</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="13">13</option>
                </select>
            </td>

        </tr>
        <tr>
            <td>Precio venta IVAi.</td>
            <td><input type="text" name="txtPrecioVentaIVAi" id="txtPrecioVentaIVAi"></td>
        </tr>
        <tr>
            <td>Unidad de medida.</td>
            <td>
                <select name="selUnidadMedida" id="selUnidadMedida">
                    <option value="kilo">Kilo</option>
                    <option value="gramo">Gramo</option>
                    <option value="litro">Litro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Fecha ingreso.</td>
            <td><input type="date" name="txtFechaIngreso" id="txtFechaIngreso"></td>
        </tr>
        <tr>
            <td>Proveedor.</td>
            <td><input type="text" name="txtProveedor" id="txtProveedor"></td>
        </tr>
        <tr>
            <td>Foto.</td>
            <td><input type="file" name="fileFoto" id="fileFoto"></td>
        </tr>
    </table>
    <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
    <input type="reset" value="Reset" id="btnReset" name="btnReset">
    <script>
        function calculaTotal(){
            var precioCompra=parseFloat(document.getElementById("txtPrecioCompra").value);
            var porcentajeGanancia=parseFloat(document.getElementById("txtPorcentajeGanancia").value);
            var precioMasGanancia=precioCompra+(precioCompra*(porcentajeGanancia/100));
            var iva=parseFloat(document.getElementById("selTipoIva").value);
            var total=precioMasGanancia+(precioMasGanancia*(iva/100));
            if (isNaN(total)==false){
                document.getElementById("txtPrecioVentaIVAi").value=total;
            }
        }
    </script>
</body>
</html>