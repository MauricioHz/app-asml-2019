$(document).ready(function () {

    getJefatura();

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
        var fila = 0;
        if (cantidadFilasTablaProductos() !== 0) {
            fila = cantidadFilasTablaProductos();
        }

        var producto = {
            "fila": fila,
            "producto": $('#form-producto').val().trim(),
            "descripcion": $('#form-descripcion').val().trim(),
            "unidad": $('#form-unidad option:selected').val(),
            "unidadNombre": $('#form-unidad option:selected').text(),
            "cantidad": $('#form-cantidad').val().trim(),
            "precio": $('#form-precio').val().trim(),
            "esAfecto": ($('#form-afecto-impuesto').is(':checked')) ? '1' : "0",
            "total": 0
        };
        agregarProducto(producto);
    });

    $(document).on("click", ".editar-producto", function () {
        $('#editarProductoModal').modal('show');
        var fila = $(this).attr('id');
        var producto = {
            "fila": fila,
            "producto": $('input[name="producto[' + fila + ']"]').val(),
            "descripcion": $('input[name="descripcion[' + fila + ']"]').val(),
            "unidad": $("#e-form-unidad select").val($('input[name="unidad[' + fila + ']"]').val()),
            "cantidad": $('input[name="cantidad[' + fila + ']"]').val(),
            "precio": $('input[name="precio[' + fila + ']"]').val(),
            "esAfecto": $('input[name="afecto[' + fila + ']"]').val()
        };
        editarProducto(producto);
    });

    $(document).on("click", ".eliminar-producto", function () {
        $(this).parent().parent().remove();
        $.each(['producto', 'descripcion', 'unidad', 'cantidad', 'precio'], function (index, value) {
            reenumerarIndices(value);
        });
    });

    $('#editar-producto-pedido').click(function () {

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

/*
| -------------------------------------------------------------
| Funciones
| -------------------------------------------------------------
*/

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

function getJefatura() {
    var optiones = $("#jefatura_id");
    $.getJSON("/api/getJefatura", function (data) {
        optiones.append($("<option />").val('').text('Seleccionar ...'));
        $.each(data.data, function (i, item) {
            optiones.append($("<option />").val(item.id).text(item.name));
        });
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
    //var guid = generarGuid();
    var esAfectoValor = (producto.esAfecto === '1') ? "SÍ" : "NO";
    $('table#productos-seleccionados').append(
        '<tr>' +
        '<td><button type="button" id="' + producto.fila + '" class="btn btn-primary editar-producto">Editar</button>' +
        '<button type="button" class="btn btn-primary eliminar-producto">Remover</button></td>' +
        '<td>item</td>' +
        '<td>' + producto.producto + ' ' + producto.descripcion + '</td>' +
        '<td>' + producto.unidadNombre + '</td>' +
        '<td>' + producto.cantidad + '</td>' +
        '<td>' + producto.precio + '</td>' +
        '<td>' + producto.total + '</td>' +
        '<td>' + esAfectoValor + '</td>' +
        '<input type="hidden" class="producto" name="producto[' + producto.fila + ']" value="' + producto.producto + '">' +
        '<input type="hidden" class="descripcion" name="descripcion[' + producto.fila + ']" value="' + producto.descripcion + '">' +
        '<input type="hidden" class="unidad" name="unidad[' + producto.fila + ']" value="' + producto.unidad + '">' +
        '<input type="hidden" class="catidad" name="cantidad[' + producto.fila + ']" value="' + producto.cantidad + '">' +
        '<input type="hidden" class="precio" name="precio[' + producto.fila + ']" value="' + producto.precio + '">' +
        '<input type="hidden" class="total" name="total[' + producto.fila + ']"  value="' + producto.total + '">' +
        '<input type="hidden" class="afecto" name="afecto[' + producto.fila + ']" value="' + producto.esAfecto + '">' +
        '</tr>');

    //calcularTotalFila(valor);
    calcularTotalFinal();
}

function editarProducto(producto) {
    $('#e-form-producto').val(producto.producto);
    $('#e-form-descripcion').val(producto.descripcion);
    $('#e-form-unidad selected').val(producto.unidad);
    $('#e-form-cantidad').val(producto.cantidad);
    $('#e-form-precio').val(producto.precio);
    if (producto.esAfecto === '1') {
        $('#e-form-afecto-impuesto').attr('checked', 'checked');
    }

    $.each(['producto', 'descripcion', 'unidad', 'cantidad', 'precio'], function (index, value) {
        reenumerarIndices(value);
    });

    //calcularTotalFila(valor);
    //calcularTotalFinal(valor);
}

function removerProducto(producto) {
    calcularTotalFila(valor);
    calcularTotalFinal(valor);
}

function calcularTotalFila(valor) {}

function calcularTotalFinal() {
    var suma, totalFila = 0;
    $(".total").each(function (value) {
        suma = suma + parseInt($('input[name="total[' + value + ']"]').val());
    });
    $('#neto').text(suma);
}

function cantidadFilasTablaProductos() {
    return $('#productos-seleccionados tbody tr').length;
}

function reenumerarIndices(classSelector) {
    $("[class=" + classSelector + "]").each(function (index) {
        var nombreArray = classSelector + "[" + index + "]";
        $(this).attr('name', nombreArray);
    });
}

function generarGuid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}