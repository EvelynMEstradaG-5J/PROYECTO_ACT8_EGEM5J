<HTML>

<?php 
include('header.php'); 
?>

</BR> </BR>	<HR> </HR> </BR> </BR>

<CENTER>

<B style="	font-family: Gill Sans MT Condensed; color: royalblue; font-size: 40px;"> Regístrate en MI TELMEX </B>
<br> <B style="font-family: Gill Sans MT Condensed; font-size: 30px;"> y disfruta de muchos beneficios. </B>
<br> 

  <DIV class="div2">

<FORM action="factura2.php" method="post">

<br> 
<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Número Telmex">
    <br> <A href="mensaje2.php" style="font-size: 17px;"> (Para conocer tu número Telmex da click aquí). </A>
<br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Correo electrónico">
<br> <br>

<input style="width: 400px;" type="password" name="CONTRASEÑA" class="cajas" required="" placeholder="Contraseña"> <br>
<U style="font-family: Gill Sans MT Condensed; font-size: 18px;">  
• Debe de iniciar con una letra. <br>
• Contener al menos 8 caracteres. <br>
• Usar números. </U>
<br>

<br> <B style="font-family: Gill Sans MT Condensed; font-size: 25px;"> Informaci&oacute;n del contacto: </B>
<br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Nombre">
<br> <br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Apellido">
<br> <br>

<input style="width: 200px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Ciudad">

<input style="width: 200px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="C&oacute;digo postal">
<br> <br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Direcci&oacute;n">
<br> <br>

<input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Tel&eacute;fono">
<br> 

<U style="font-family: Gill Sans MT Condensed; font-size: 18px;"> 
Verifica que el número celular sea correcto; 
<br> recibirás un SMS con el código de seguridad para 
<br> continuar con la creación de tu cuenta. </U>
<br>

<input style="width: 20px;" type="radio" name="NOMBRE" class="cajas" required="" placeholder="Apellido"> 
<A href="mensaje2.php"> T&eacute;rminos y condiciones. </A> <br>

<br> <U style="font-family: Gill Sans MT Condensed; font-size: 18px;"> Al concluir tu registro se activará tu Recibo Telmex Digital </U>
<br> <br>

<center>
    <input class="btn" type="submit" name="submit" value="Crear cuenta" onclick="">
</center>
<br>
¿Ya tienes una cuenta? <A href="factura1.php"> <B> Ingresa aqu&iacute; </B></A> 
<br>
<br>
  <A href="mensaje2.php"> ¿Necesitas ayuda? </A>
</FORM>
</DIV>
</CENTER>    
    </BODY>
    
<?php
include("footer.php");
?>
    
</HTML>