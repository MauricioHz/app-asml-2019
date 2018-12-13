$(document).ready(function () {

    $('#buscar-proveedor').click(function () {
        getProveedorPorRut($('#rut').val().trim());
    });

    $('#prioridad').click(function () {
        var prioridad = $('#prioridad').val();
        getDocumento(prioridad);
    });

    $('#documento').change(function () {
        var documento = $('#documento').val();
        getFormaPago(documento);
    });

    $('#forma-pago').change(function () {
        var formaPago = $('#forma-pago').val();
        getCondicionPago(formaPago);
    });

    $('#agregar-producto-pedido').click(function () {
        var producto = {
            "producto": $('#form-producto').val().trim(),
            "descripcion": $('#form-descripcion').val().trim(),
            "unidad": $('#form-unidad option:selected').val(),
            "unidadNombre": $('#form-unidad option:selected').text(),
            "cantidad": $('#form-cantidad').val().trim(),
            "precio": $('#form-precio').val().trim(),
            "esAfecto": ($('#form-afecto-impuesto').is(':checked')) ? 'SÍ' : "NO",
            "total": 0
        };
        agregarProducto(producto);
    });

    $('#editar-producto').click(function () {
        var classSelector = "." + "67d8bfb1-ad1f-d156-2feb-8f0f5130f008";
        var $row = $(this).parents('tr');
        var texto = $row.find('td:nth-child(5)').text();
        var producto = {
            "producto": $('#form-producto').val().trim(),
            "descripcion": $('#form-descripcion').val().trim(),
            "unidad": $(classSelector).val(),
            "unidadNombre": $('#form-unidad option:selected').text(),
            "cantidad": $('#form-cantidad').val().trim(),
            "precio": $('#form-precio').val().trim(),
            "esAfecto": ($('#form-afecto-impuesto').is(':checked')) ? 'SÍ' : "NO",
            "total": 0
        };
        editarProducto(producto);
    });

    $('#remover-producto').click(function () {
        removerProducto(producto);
    });

    $('a[data-tab="seccion-pago-solicitud"]').click(function (e) {

    });

    $('a[data-tab="seccion-productos"]').click(function (e) {

    });

    $('a[data-tab="seccion-confirmar"]').click(function (e) {

    });

});

var urlComunas = "/api/proveedor/";

function getProveedorPorRut(rut) {
    if (rut === "") {
        alert('Debe ingresar un RUT valido.');
        return false;
    }
    var rutArray = rut.split("-");
    var rutEntero = rutArray[0].replace('.', '').replace('.', '');
    $.getJSON("/api/proveedor/" + rutEntero, function (json) {
        console.log(json);
        $('#datos-proveedor').append(
            '<tr><td>RUT</td><td>' + json.data[0].rut + '-K</td></tr>' +
            '<tr><td>Razón social</td><td>' + json.data[0].razon_social + '</td></tr>' +
            '<tr><td>Nombre comercial</td><td>' + json.data[0].nombre_comercial + '</td></tr>' +
            '<tr><td>Dirección</td><td>' + json.data[0].direccion + '</td></tr>' +
            '<tr><td>Comuna</td><td>' + json.data[0].ciudad + '</td></tr>' +
            '<tr><td>Ciudad</td><td>' + json.data[0].comuna + '</td></tr>' +
            '<tr><td>Giro</td><td>' + json.data[0].giro + '</td></tr>' +
            '<tr><td>Fono</td><td>' + json.data[0].fono + '</td></tr>' +
            '<tr><td>Fax</td><td>' + json.data[0].fax + '</td></tr>' +
            '<tr><td>Email SII</td><td>' + json.data[0].email_sii + '</td></tr>' +
            '<tr><td>Contacto</td><td>' + json.data[0].contacto + '</td></tr>' +
            '<tr><td>Email contacto</td><td>' + json.data[0].email_contacto + '</td></tr>'
        );
    });
}

function getDocumento(prioridad) {}

function getFormaPago(documento) {}

function getCondicionPago(formaPago) {}

/*
| ----------------------------------------------------------
| Productos
| ----------------------------------------------------------
*/

function agregarProducto(producto) {
    producto.total = parseFloat(producto.precio).toFixed(2) * parseFloat(producto.cantidad).toFixed(2);
    var guid = generarGuid();
    $('table#productos-seleccionados').append(
        '<tr id=' + guid + '>' +
        '<td><button type="button" class="btn btn-primary editar-producto">Editar</button></td>' +
        '<td>item</td>' +
        '<td>' + producto.producto + ' ' + producto.descripcion + '</td>' +
        '<td>' + producto.unidadNombre + '</td>' +
        '<td>' + producto.cantidad + '</td>' +
        '<td>' + producto.precio + '</td>' +
        '<td>' + producto.total + '</td>' +
        '<td>' + producto.esAfecto + '</td>' +
        '<input type="hidden" name="producto[]" value="' + producto.producto + '">' +
        '<input type="hidden" name="descripcion[]" value="' + producto.descripcion + '">' +
        '<input type="hidden" class="' + guid + '" name="unidad[]" value="' + producto.unidad + '">' +
        '<input type="hidden" class="' + guid + '" name="cantidad[]" value="' + producto.cantidad + '">' +
        '<input type="hidden" name="precio[]" value="' + producto.precio + '">' +
        '<input type="hidden" name="total[]"  value="' + producto.total + '">' +
        '<input type="hidden" name="afecto[]" value="' + producto.esAfecto + '">' +
        '</tr>');

    // calcularTotalFila(valor);
    // calcularTotalFinal(valor);
}

function editarProducto(producto) {
    calcularTotalFila(valor);
    calcularTotalFinal(valor);
}

function removerProducto(producto) {
    calcularTotalFila(valor);
    calcularTotalFinal(valor);
}

function calcularTotalFila(valor) {}

function calcularTotalFinal(valor) {}

function generarGuid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}