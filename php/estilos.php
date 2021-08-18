<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
                        $texto = "El centro comercial Manhattan Mall es uno de los mejores de llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll.";
                        if (strlen($texto)>100)  {
                            $texto =substr($texto,0,100).'...<a href="javascript:void(0):" onclick="MostrarTodo('."'".$texto."'".');" title="Ver mas" class="more">Ver mas</a>';
                            print '<div id="texto_original">'.$texto.'</div>';
                        }            

                          ?>
</body>
</html>