function changeText(id) {
  let text = "";
  switch (id) {
    case 1:
      text = "<h4><strong>Sencillez</strong></h4><hr>";
      text += nl2br(
        "Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta, acabada con hormigón, o seca, sustituyendo el hormigón por otra placa de madera OSB en la cara superior, adaptándose a las necesidades del proyecto."
      );
      break;
    case 2:
      text = "<h4><strong>Ligereza</strong></h4><hr>";
      text += nl2br(
        "El bajísimo peso propio del forjado resulta una opción muy atractiva para la ejecución de estructuras en las que el peso propio del forjado es determinante, como en remontas, edificios en altura, zonas sísmicas, o con cimentaciones en suelos con baja capacidad resistente.\n\nEl sistema es hasta un 33% más ligero que la solución equivalente en forjado colaborante, un 50% más ligero que el forjado reticular equivalente y hasta un 65% más ligero que una losa maciza con las mismas prestaciones."
      );
      break;
    case 3:
      text = "<h4><strong>Resistencia</strong></h4><hr>";
      text += nl2br(
        "El SES permite cubrir luces de hasta 7m con sobrecargas estáticas de 580kg/m<sup>2</sup> sin apuntalar, ideal para usos públicos, residenciales y aparcamiento.\n\nPara grandes luces de hasta 11,5m pueden alcanzarse sobrecargas de uso residencial con apuntalamiento en fase de montaje con cantos de forjado muy atractivos."
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
        "Incluso la versión mixta del forjado el sistema proporciona un ahorro de hasta un 20% en emisiones de fabricación respecto otras soluciones constructivas usuales.\n\nEl ahorro de CO<sub>2</sub> durante la fabricación del sistema SES equivale a haber plantado 3100 árboles en un año por cada edificio de 2500m<sup>2</sup>."
      );
      break;
    case 6:
      text = "<h4><strong>Rentabilidad</strong></h4><hr>";
      text += nl2br(
        "EL SES permite optimizar costes indirectos de ejecución gracias a su implementación extremadamente rápida y mínima manipulación en obra.\n\nPermite cubrir en el mismo tiempo hasta 10 veces más superfície que la solución equivalente de forjado reticular."
      );
      break;
    case 7:
      text = "<h4><strong>Precisión</strong></h4><hr>";
      text += nl2br(
        "Ancho adaptable de placas para ajustarse a la dimensión de la estructura. Apoyo simple sobre pórticos metálicos, de hormigón o paredes de carga nuevas y existentes.\n\nFácil ejecución en proyectos complejos como remontas, zonas sísmicas y estructuras provisionales que requieren desmontaje."
      );
      break;
    default:
      text = "<h4><strong>Sencillez</strong></h4><hr>";
      text += nl2br(
        "Sistema integrado de forjado que combina inteligentemente el diseño de las piezas de madera OSB, chapa de acero galvanizada, poliestireno expandido EPS y hormigón.\n\nEl forjado presenta las variantes mixta, acabada con hormigón, o seca, sustituyendo el hormigón por otra placa de madera OSB en la cara superior, adaptándose a las necesidades del proyecto."
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

function setVideoVolume(id, volume) {
  let video = document.getElementById(id);
  video.volume = volume;
}
