$(document).ready(function () {

  // Initialize map
  $('#mexico-map').JSMaps({
    map: 'mexico',
    stateClickAction: 'none',
    onReady: function() {
       // The map is fully rendered and ready for interactions
     },
     onStateClick: function(data) {
       // A state/region has been clicked, data is passed to the listener which includes all data defined for the state/region in maps/{mapName}.js
       // Open box if Collapsed
       collapse_box("estrategicos");
       collapse_box("caja-datos");

       document.getElementById("titulo-estado").innerHTML = data.name.toUpperCase();
       datosEstado(data);
     },
     onStateOver: function(data) {
       // The mouse enters a state, data is passed to the listener which includes all data defined for the state/region in maps/{mapName}.js
     },
     onStateOut: function(data) {
       // The mouse leaves a state, data is passed to the listener which includes all data defined for the state/region in maps/{mapName}.js
     }
  });


});

function collapse_box(element_id){
  NAME = document.getElementById(element_id);
  currentClass = NAME.className;
  if (currentClass == "box collapsed-box") { // Check the current class name
      NAME.className = "box";   // Set other class name
  }
}

function datosEstado(estado) {

  // Contenido para Tabla de Sucursales
  $.post(variables.server.concat("pages/estatales-get.php"), { 'estado': estado.abbreviation.toLowerCase() },
      function(data, textStatus) {
          document.getElementById("poblacion").innerHTML = data[0][0].poblacion;
          document.getElementById("municipios").innerHTML = data[0][0].municipios;
          document.getElementById("sedeco").innerHTML = data[0][0].sedeco;
          document.getElementById("coecyt").innerHTML = data[0][0].coecyt;
          document.getElementById("ems_pob").innerHTML = data[0][0].ems_pob;
          document.getElementById("ems_prof").innerHTML = data[0][0].ems_prof;
          document.getElementById("ems_esc").innerHTML = data[0][0].ems_esc;
          document.getElementById("es_pob").innerHTML = data[0][0].es_pob;
          document.getElementById("es_prof").innerHTML = data[0][0].es_prof;
          document.getElementById("es_esc").innerHTML = data[0][0].es_esc;
          document.getElementById("cit_pub").innerHTML = data[0][0].cit_pub;
          document.getElementById("cit_priv").innerHTML = data[0][0].cit_priv;
          document.getElementById("actuales").innerHTML = data[0][0].actuales;
          document.getElementById("futuros").innerHTML = data[0][0].futuros;
          document.getElementById("prioritarios").innerHTML = data[0][0].prioritarios.replace(".", ". ");
          $('html, body').animate({
              scrollTop: $("#datos-estado").offset().top
          }, 2000);
      }, "json");

}

/* / Build table
var tr;
for (var i = 0; i < data[0].length; i++) {
  boton = '<input type="button" class="btn btn-default pull-right" onclick="verSucursal(' + data[0][i].id + ')" value="Ver Detalles"></input>';

  tabla.row.add([
    data[0][i].nomcomercial,
    data[0][i].tel1,
    data[0][i].colonia,
    boton
  ]).draw();
*/
