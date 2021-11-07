<!DOCTYPE html>

<?php 
require("header.php"); 
?>

<br> <br> <br> <br>

<BODY>

<CENTER style="z-index: 1000px;">
<DIV class="div2">
<IMG src="IMG/aprobado.png" class="aprobado"> <br>
<B style="font-family: Gill Sans MT Condensed; color: royalblue; font-size: 40px;"> El pago ha sido aprobado, ¡gracias por su preferenecia! :) </B>
<br> <br>

<STYLE>
table{
		line-height: 30px;
        width: 80%;
        height: auto;
        text-align: center;
	} 
    th{
        background-color: #EAF2F8;
        color: royalblue;
    }
    th, td{
        border: 2px solid #D5DBDB;
        padding: 5px;
    }
</STYLE>

<table>
<tr class="tabla">
<th> Empresa: </th>
<td> TELMEX </td>
</tr>

<tr>
<th> Fecha:  </th>
<td> 
    <?php
        $time = time();
        echo date("d / m / Y", $time);
    ?> 
</td>
</tr>

<tr>
<th> Monto MXN </th>
<td> $389.00 </td>
</tr>

<tr>
<th> Descripci&oacute;n </th>
<td> Pago de servicios de telefon&iacute;a e internet Infinitum </td>
</tr>

<tr>
<th> Autorizaci&oacute;n: </th>
<td> 647321 </td>
</tr>
</table>

<br>

<A href="index.php" style="font-family: Gill Sans MT Condensed; font-size: 27px;"> Volver al inicio </A>

</DIV>
</CENTER>

<br> <br>

</BODY>

<?php
require("footer.php");
?>