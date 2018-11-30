$(document).ready(function () {
    getComunasCiudades();
});

var urlComunas = "/api/getComunas";

function getComunasCiudades() {
    $.getJSON(urlComunas, function (data) {
        var opciones = $("#comuna");
        var opcionesCiudad = $("#ciudad");
        $.each(data.comunas, function (i, item) {
            opciones.append($("<option />").val(item).text(item));
            opcionesCiudad.append($("<option />").val(item).text(item));
        });
        opciones.val("Colina");
        opcionesCiudad.val("Santiago");
    });
}