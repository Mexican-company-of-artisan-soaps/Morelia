<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script language="javascript">
   function MostrarTodo(texto){
      var elemento = document.getElementById('texto_original');
	  elemento.innerHTML = texto;
	}
</script>
</head>

<body>
<?php
$texto = "thryjgjdfguohedtryhjkyutyrsdfg jfgyujhfrguyjtg7yukjygfyrtghfghbn fdsdfgbukyjfwsdfuilkhsvndxfgnbn gfsdfgiukjhnsbdcjvhj,mtfdtegfngmhjiukjhnfv";

if (strlen($texto)>100) {
      $texto = substr($texto,0,100).'...<a href="javascript:void(0);" onclick="MostrarTodo('."'".$texto."'".');">Ver mas</a>';
      print '<div id="texto_original">'.$texto.'</div>'; 
}
?>
</body>
</html>