<?php

$turno = "n";

  switch ($turno) {
    case "M" or "m":
      echo "Bom dia.";
      break;
    case "T" or "t":
      echo "Boa tarde";
      break;
    case "N" or "n":
      echo "Boa noite.";
      break;
    default:
      echo "Opção invalida.";
  }

return $turno;