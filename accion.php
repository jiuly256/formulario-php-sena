<?php
function Accion($fila,$puesto,$accion,$lista){
        /*Se evalua la opción del usuario dependiendo de lo contenido en el Array
        Si el puesto elegido por el usuario esta libre se modifica el Array con la acción elegida */
        if($lista[$fila-1][$puesto-1]=="L"){
            $lista[$fila-1][$puesto-1]=$accion;
        }
        //Si el puesto elegido por el usuario esta vendido se muestra una alerta con notificando en cada caso lo sucedido
        else if($lista[$fila-1][$puesto-1]=="V" ){
            echo "<script>alert('";
				if($accion=="L" || $accion=="R" || $accion=="V"){echo " Accion no permitida";}
			echo "')";
			echo "</script>'";
        }
       
        //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario
        else if($lista[$fila-1][$puesto-1]=="R" && $accion!="R"){
            $lista[$fila-1][$puesto-1]=$accion;
        }
        //Se retorna el Array modificado
        return $lista;
}
?>

