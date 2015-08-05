<?php

$edad = filter_input(INPUT_POST, "inputEdad");
$SexoH = filter_input(INPUT_POST, "sexo");
$SexoM = filter_input(INPUT_POST, "sexo");
$prendaH1 = filter_input(INPUT_POST, "ropaH1");
$prendaH2 = filter_input(INPUT_POST, "ropaH2");
$prendaH3 = filter_input(INPUT_POST, "ropaH3");
$prendaM1 = filter_input(INPUT_POST, "ropaM1");
$prendaM2 = filter_input(INPUT_POST, "ropaM2");
$prendaM3 = filter_input(INPUT_POST, "ropaM3");
$prendaM4 = filter_input(INPUT_POST, "ropaM4");
$ropaH = $prendaH1 . $prendaH2 . $prendaH3;
$ropaM = $prendaM1 . $prendaM2 . $prendaM3 . $prendaM4;


if ($edad >= 1 and $edad <= 17) {
  echo "Esta muy joven para tomar";
} else if ($edad >= 18 and $edad <= 21) {
  echo "Va para la chiquiteca";
} else if ($edad >= 22 and $edad <= 39) {
  echo "Va para la discoteca";
} else if ($edad >= 40) {
  echo "A la viejoteca  ";
}

if (($edad >= 40)and ( $SexoH == "hombre")) {
  if (($ropaH === "Manga CortaTelaFinos") or ( $ropaH === "Manga LargaTelaFinos")) {
    echo "  puede entrar";
  } else {
    echo "No puede entrar, por favor cambiese de ropa";
  }
}


if (($edad >= 40)and ( $SexoM == "mujer")) {
  if (($ropaM === "No TieneNoTelaTacones") or ( $ropaM === "LargaNootroTacones")) {
    echo "  puede entrar dama";
  } else {
    echo "No puede entrar dama,por favor cambiese de ropa";
  }
}