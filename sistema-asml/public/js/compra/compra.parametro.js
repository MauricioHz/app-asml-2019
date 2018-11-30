$(document).ready(function () {

    var urlComunas = "/api/getComunas";

    function getComunas(){
        $.getJSON(urlComunas, function (data) {
            var opciones = $("#comuna");
            $.each(data.comunas, function (i, item) {
                opciones.append($("<option />").val(item).text(item));
            });
            opciones.val("Santiago");
        });
    }
    getComunas();
});