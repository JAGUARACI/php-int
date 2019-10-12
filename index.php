<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adultos';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'Eduardo';
$idade = [];

//var_dump ($nome);
//var_dump ($idade);

If($idade >= 6 && $idade <=12)

{for($i = 0; $i <= count ($categorias); $i++)

{if($categorias[$i] == 'infantil')
echo "O nadador",$nome, "compete na categoria",$categorias[$i];
}}


else if($idade >= 13 && $idade <=18)

{for($i = 0; $i <= count ($categorias); $i++)
{if($categorias[$i] == 'adolescente')
echo "O narrador",$nome, "compete na categoria adolescente";
}}

else {for($i = 0; $i <= count($categorias); $i++)
{if($categorias[$i] == 'adulto')
echo "O narrador",$nome, "compete na categoria adulto";
}}

print_r($i);

?>
