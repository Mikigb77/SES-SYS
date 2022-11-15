function changeText(id) {
  let text = "";
  switch (id) {
    case 1:
      text = "<h4><strong>Sencillez</strong></h4><hr>";
      text += nl2br(
        "Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta - hormigonada - o seca, sustituyendo el hormigón por otra placa de madera, adaptándose a las necesidades del proyecto."
      );
      break;
    case 2:
      text = "<h4><strong>Ligereza</strong></h4><hr>";
      text += nl2br(
        "El bajisimo peso propio del forjado resulta una opcion muy atractiva para la ejecucion de remontas en estructuras muy solicitadas.\n\nEl sistema es hasta un 33% mas ligero que la solucion equivalente en forjado colaborante y hasta un 50% mas ligero que el forjado reticular equivalente."
      );
      break;
    case 3:
      text = "<h4><strong>Resistencia</strong></h4><hr>";
      text += nl2br(
        "El SES permite cubrir luces de hasta 7m con sobrecargas estaticas de 580kg/m<sup>2</sup> sin apuntalar, ideal para usos publicos, residenciales y aparcamiento.\n\nPara grandes luces de hasta 11,5m pueden alcanzarse sobrecargas de uso residencial con apuntalamiento en fase de montaje con cantos de forjado muy atractivos."
      );
      break;
    case 4:
      text = "<h4><strong>Calidad</strong></h4><hr>";
      text += nl2br(
        "Maximiza prestaciones en un único sistema: alto rendimiento estructural, protección frente a incendio acreditada RE-120'+REI90' y acabado visto limpio y pulido desde su puesta en obra."
      );
      break;
    case 5:
      text = "<h4><strong>Sostenibilidad</strong></h4><hr>";
      text += nl2br(
        "Incluso la versión mixta del forjado el sistema proporciona un ahorro de hasta un 20% en emisiones de fabricación respecto otras soluciones constructivas usuales.\n\nEl ahorro de CO2 durante la fabricación del sistema SES equivale a haber plantado 3100 árboles en un año por cada edificio de 2500m<sup>2</sup>."
      );
      break;
    case 6:
      text = "<h4><strong>Rentabilidad</strong></h4><hr>";
      text += nl2br(
        "EL SES permite amprtizar cpstes indirectos de ejecución gracias a su implementación ultrarápida y mínima manipulación en obra.\n\nHasta 10 veces más superfície cubierta por día respecto a la solución equivalente de forjado reticular."
      );
      break;
    case 7:
      text = "<h4><strong>Precisión</strong></h4><hr>";
      text += nl2br(
        "Ancho adaptable de placas para ajustarse a la dimensi6n de la estructura. Apoyo simple sobre porticos metalicos, de hormig6n o paredes de carga nuevas y existentes.\n\nFacil ejecucion en proyectos complejos como remontas, zonas sismicas y estructuras provisionales que requieren desmontaje."
      );
      break;
    default:
      text = "<h4><strong>Sencillez</strong></h4><hr>";
      text += nl2br(
        "Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta - hormigonada - o seca, sustituyendo el hormigón por otra placa de madera, adaptándose a las necesidades del proyecto."
      );
      break;
  }
  let x = document.getElementById("description-text");
  x.innerHTML = text;
}

function nl2br(str, is_xhtml) {
  if (typeof str === "undefined" || str === null) {
    return "";
  }
  var breakTag =
    is_xhtml || typeof is_xhtml === "undefined" ? "<br />" : "<br>";
  return (str + "").replace(
    /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
    "$1" + breakTag + "$2"
  );
}
