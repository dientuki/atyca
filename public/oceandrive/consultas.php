<title>Ocean Drive</title>
<? 
if ($_POST){
	$consulta = $_POST["consulta"];
	$nombre = $_POST["nombre"];
	$mail = $_POST["email"];
	$telefono = $_POST["telefono"];


function insertarReg($consulta, $nombre, $mail, $telefono){
        
        $servidor = "localhost";
        $usuario = "c2atyca";
        $password = "Big5TusGIZo";
        $sdb = "c2atyca";
       
        $ilink3=mysql_connect($servidor,$usuario,$password) or die(mysql_error());
        mysql_select_db($sdb,$ilink3);
       
        $inserta= "insert into oceandrive (fecha,consulta,nombre,mail,telefono) values (CURDATE(),'$consulta','$nombre','$mail','$telefono')";
        $resultado3=mysql_query($inserta,$ilink3) or die (mysql_error());
       
        if (!$resultado3)
          return false;
        else{
            return true;
           
        }
}
                insertarReg($fecha,$nombre, $mail, $telefono,$consulta); 
				

	$boundary = "==" . md5(time());

	$hdrs  = "From:Ocean Drive <". $mail .">\n";
	$hdrs .= "MIME-Version: 1.0\n";
	$hdrs .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
	
	$mesg  = "--$boundary\n";
	$mesg .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$mesg .= "Content-Transfer-Encoding: 7bit\n\n";

	$mesg .=" 
	
	Nombre:  ". $nombre ." <br>
	Tel:  ". $telefono ." <br>
	Mail:  ". $mail ."<br>
	Consulta:  ". $consulta;
		

	mail("diego.gutierrez@atyca.tur.ar","Consulta Ocean Drive", $mesg, $hdrs);
} else
?>
<script language="javascript">
alert("Conulta enviada. Muchas gracias");

top.location="http://atycaoperadora.tur.ar/od";
</script>
