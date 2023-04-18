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
    <title>Document</title>
</head>
<body>
    <h1 id="cabecera">Modulo facturación</h1>
    <table>
        <tr>
            <td>Fecha</td>
            <td><input type="date" name="txtFecha" id="txtFecha"></td>
        </tr>
        <tr>
            <td>Usuario</td>
            <td><input type="text" name="txtUsuario" id="txtUsuario"></td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td><input type="text" name="txtCliente" id="txtCliente"></td>
        </tr>
        <tr>
            <td>Tipo pago</td>
            <td>
                <select name="selTipoPago" id="selTipoPago">
                    <option value="contado">Contado</option>
                    <option value="efectivo">Efectivo</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tipo moneda</td>
            <td>
                <select name="selTipoMoneda" id="selTipoMoneda">
                    <option value="CRC">CRC</option>
                    <option value="dolar">Dolar</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Observaciones</td>
            <td><input type="text" name="txtObservaciones" id="txtObservaciones"></td>
        </tr>
    </table>
    <div class="centrar" id="divBuscar">BUSCAR</div>
    <table id="tabColocarProd">
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Medida</th>
            <th>Precio unitario</th>
            <th>Precio total</th>
        </tr>
        <tr>
            <td><input type="text" name="txtProducto" id="txtProducto" placeholder="Producto" value="producto 1"></td>
            <td><input type="text" name="txtCantidad" id="txtCantidad" placeholder="Cantidad" value="2" onchange="calculaTotal()"></td>
            <td><input type="text" name="txtMedida" id="txtMedida" placeholder="Medida" value="1Kg"></td>
            <td><input type="text" name="txtPrecioUnitario" id="txtPrecioUnitario" placeholder="Precio unitario" value="50" onchange="calculaTotal()"></td>
            <td><input type="text" name="txtPrecioTotal" id="txtPrecioTotal" placeholder="Precio total" value="100"></td>
        </tr>
    </table>
    <div class="centrar"><input type="button" id="btnAgregarProducto" name="btnAgregarProducto" value="Agregar producto a la venta" onclick="agregaProducto()"></div>
    <div class="centrar" id="divDetalleVenta">DETALLE VENTA</div>
    <table id="tabAgregarProd">
        <thead>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Medida</th>
            <th>Precio unitario</th>
            <th>Precio total</th>
        </thead>
        <tbody>
        </tbody>
    </table>
    <table id="tabTotales" style="float: right;">
        <tr>
            <td>Sub total</td>
            <td><input type="text" name="txtSubTotal" id="txtSubTotal" onchange="calculaTotalFinal()"></td>
        </tr>
        <tr>
            <td>Descuento %</td>
            <td><input type="text" name="txtDescuento" id="txtDescuento" value="10" onchange="calculaTotalFinal()"></td>
        </tr>
        <tr>
            <td>IVA</td>
            <td><input type="text" name="txtIVA" id="txtIVA" value="13" onchange="calculaTotalFinal()" ></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><input type="text" name="txtTotal" id="txtTotal"></td>
        </tr>
    </table>
    <script>
        //Multiplica la cantidad por el precio unitario
        function calculaTotal(){
            //Extrae el numero flotante de la cantidad
            var cantidad=parseFloat(document.getElementById("txtCantidad").value);
            //Extrae el numero flotante del precio unitario
            var precioUnitario=parseFloat(document.getElementById("txtPrecioUnitario").value);
            //Multiplica la cantidad por el precio unitario para obtener el total
            var total=cantidad*precioUnitario;
            //Si es numero
            if (isNaN(total)==false){
                //en el precio total escribimos el valor del total
                document.getElementById("txtPrecioTotal").value=total;
            }
        }
        var subTotal=0;
        //Al dar click al boton agregar producto se colocan los productos al final de la tabla
        function agregaProducto(){
            //obtenemos los textos de los inputs text
            var txtProducto=document.getElementById("txtProducto").value;
            var txtCantidad=document.getElementById("txtCantidad").value;
            var txtMedida=document.getElementById("txtMedida").value;
            var txtPrecioUnitario=document.getElementById("txtPrecioUnitario").value;
            var txtPrecioTotal=document.getElementById("txtPrecioTotal").value;

            //obtenemos la tabla en la que se van a insertar los registro
            var table = document.getElementById("tabAgregarProd");
            //insertamos un registro al final de latabla
            var row = table.insertRow(table.rows.length);
            row.insertCell(0).innerHTML=txtProducto;
            row.insertCell(1).innerHTML=txtCantidad;
            row.insertCell(2).innerHTML=txtMedida;
            row.insertCell(3).innerHTML=txtPrecioUnitario;
            row.insertCell(4).innerHTML=txtPrecioTotal;
            var precioTotal=parseFloat(txtPrecioTotal);
            subTotal=subTotal+precioTotal;
            var descuento=parseFloat(document.getElementById("txtDescuento").value);
            var iva=parseFloat(document.getElementById("txtIVA").value);
            document.getElementById("txtSubTotal").value=subTotal;
            var total=subTotal-(subTotal*(descuento/100));
            var total=total+(total*(iva/100));
            if (isNaN(total)==false){
                document.getElementById("txtTotal").value=total;
            }
        }
        //Calculamos el final total
        function calculaTotalFinal(){
            var subTotal=parseFloat(document.getElementById("txtSubTotal").value);
            var descuento=parseFloat(document.getElementById("txtDescuento").value);
            var iva=parseFloat(document.getElementById("txtIVA").value);
            var total=subTotal-(subTotal*(descuento/100));
            var total=total+(total*(iva/100));
            if (isNaN(total)==false){
                document.getElementById("txtTotal").value=total;
            }
        }
    </script>
</body>
</html>