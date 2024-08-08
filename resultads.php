<?php
$producto_1= $_POST ['producto_1'];
$precio_1= $_POST ['producto_2'];
$producto_3= $_POST ['producto_3'];
$precio_1= $_POST ['precio_1'];
$precio_2= $_POST ['precio_2'];
$precio_3= $_POST ['precio_3'];
$suma=$precio_1+$precio_2+$precio_3;
$descuento=$suma-0.16%;
echo "producto 1:   ".$producto_1.'= '.$precio_1;
echo '<br>'
echo "producto 2:   ".$producto_2.'= '.$precio_2;
echo '<br>'
echo "producto 3:   ".$producto_3.'= '.$precio_3;
echo '<br>'
echo "la suma de los productos es:   ".$suma;
echo '<br>'
echo "el total a pagar es=    ".$descuento;
;
?>
