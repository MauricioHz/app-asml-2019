<!DOCTYPE html>

<html>

<head>

	<title>Load PDF</title>

	<style type="text/css">

h2{
	color: blue;
}
		table{

			width: 100%;

			border:1px solid black;

		}

		td, th{

			border:1px solid black;

		}

		/*factura electronica*/
.fondo-factura-electronica {
  z-index: 0;
  position: absolute;
  background-color: #fff;
  height: 1058px;
  width: 820px;
  padding-top: 25px;
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 15px;
}
.fe-logo {
  max-width: 215px;
  margin-left: 25px;
  position: relative;
  float: left;
  width: 200px;
}
.fe-logo img {
  max-width: 215px;
  max-height: 140px;
}
.fe-datos-emp {
  width: 270px;
  float: left;
  padding-left: 3px;
  padding-right: 3px;
  margin-left: 15px;
  text-align: center;
  padding-top: 0px;
}
.fe-datos-emp-Compra-Electronica-Recibida {
width: 500px;
float: left;
padding-left: 3px;
padding-right: 3px;
margin-left: 15px;
text-align: center;
padding-top: 0px;
}

.fe-head {
  height: 155px;
}

.fe-rut {
  padding: 8px;
  border: 4px solid #333;
  float: left;
  text-align: center;
  width: 230px;
  float: right;
  margin-right: 25px;
  height: 106px;
}
.fe-rut.txt-largo p {
  margin: 0;
}
.fe-centro {
  width: 100%;
  margin: auto;
  padding: 10px;
  font-size: 10px;
}
.fe-datos {
  padding-left: 8px;
  margin-top: -20px;
}
.fe-datos .columna2 {
  width: 22.8%;
  /*width: 270px;*/
  float: left;
  margin-top: 6px;
}
.fe-datos .columna3 {
  margin-top: 6px;
  padding-right: 15px;
}
.fe-datos .columna3 p {
  line-height: 10px;
}
.fe-datos .columna5 {
  width: 35.6%;
  /*width: 270px;*/
  float: left;
  margin-left: 4px;
  margin-top: 6px;
  margin-right: 8px;
}
.fe-datos .columna5 p {
  line-height: 10px;
}
.fe-datos .columna8 {
  width: 300px;
  float: left;
  margin-top: 6px;
  margin-right: 8px;
}
.fe-datos .columna8 p {
  line-height: 10px;
}
/*Factura de Compras*/
.formato-cpra-factura {
  position: relative;
  border: 1px solid #222;
  height: 530px;
  margin: auto;
  width: 822px;
  float: none;
  background-color: #fff;
}
.fondo-cpra-factura-electronica {
  z-index: 0;
  position: absolute;
  background-color: #fff;
  height: 528px;
  width: 820px;
  padding-top: 25px;
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 15px;
}
.fe-cpra-datos-emp {
    width: 500px;
    float: left;
    padding-left: 3px;
    padding-right: 3px;
    margin-left: 30px;
    text-align: center;
    padding-top: 0px;
}
.fe-cpra-datos-emp p {
    font-size: 11px;
}
.fe-cpra-datos {
  padding-left: 12px;
  margin-top: -27px;
}
.fe-cpra-centro {
  margin-left: 20px;
}
.fe-cpra-footer {
  margin-top: 25px;
  position: absolute;
  top: 450px;
}
/**********************************/
.borde-top {
  border-top: 2px solid #000;
  padding-top: 12px;
}
.columna1 {
  width: 80px;
  float: left;
  margin-right: 10px;
}
.columna2 {
  width: 160px;
  float: left;
  margin-right: 10px;
}
.columna4 {
  width: 240px;
  float: left;
  margin-right: 15px;
  padding: 4px;
}
.columna4 p {
  margin-bottom: 4px;
}
.columna6 {
  width: 300px;
  float: left;
  margin-right: 10px;
  margin-left: 62px;
}
.columna7 {
  width: 300px;
  float: left;
  margin-right: 10px;
}
.columna12 {
  width: 100%;
}
.fe-timbre {
  top: -40px;
  position: absolute;
  margin-left: 30px;
  text-align: center;
  width: 300px;
}
.fe-timbre small {
  line-height: 2px;
  position: relative;
  display: block;
}
.fe-timbre img {
  max-height: 130px;
}
.fe-timbre canvas {
  border: 1px solid #000000;
}
.fe-tabla-detalle {
  padding-top: 0px;
  height: 645px;
}
.fe-tabla-detalle .table.table-bordered thead th {
  background-color: #9D9C9C;
  color: white;
  border: 0;
  padding: 4px;
}
.fe-tabla-detalle .table.table-bordered tbody td {
  background-color: #F5F5F5;
  border: 0;
}
.fe-tabla-detalle .table.table-bordered tbody td.nowrap {
  white-space: nowrap;
}
.fe-tabla-detalle .table.table-bordered tbody td.number {
  text-align: right;
}
.fe-datos-emp small p {
    line-height: 10px;
}
.row .fe-centro {
    font-size: 10px;
}
.tablaFactura{
    font-size: 10px;
}

.fe-patente {
    top: -30px;
    position: absolute;
    margin-left: 325px;
    text-align: left;
    width: 170px;
    height: 45px;
    line-height: 5px;
    border: solid black 1px;
    font-size: 10px;
    padding: 5px;
    margin-top: -24px;
}

.fe-patente-info {
    font-size: 9px;
}

@media print {
  .fe-tabla-detalle {
    height: 645px;
  }
  .fe-tabla-detalle .table.table-bordered thead th {
    background-color: #9D9C9C!important;
    color: white!important;
    border: 0;
    -webkit-print-color-adjust: exact!important;
  }
  .fe-tabla-detalle .table.table-bordered tbody td {
    background-color: #F5F5F5;
    border: 0;
    -webkit-print-color-adjust: exact!important;
  }
  .fe-tabla-detalle .table.table-bordered tbody td.nowrap {
    white-space: nowrap;
  }
  .fe-tabla-detalle .table.table-bordered tbody td.number {
    text-align: right;
  }

}
@media print and (-webkit-min-device-pixel-ratio: 0) {
  .fe-tabla-detalle {
    padding-top: 4px;
    height: 645px;
  }
  .fe-tabla-detalle .table.table-bordered thead th {
    background-color: #9D9C9C;
    color: white!important;
    border: 0;
    -webkit-print-color-adjust: exact!important;
  }
  .fe-tabla-detalle .table.table-bordered tbody td {
    background-color: #F5F5F5!important;
    border: 0;
    -webkit-print-color-adjust: exact!important;
  }
}
.fe-los-totales {
  padding: 10px;
  width: 200px;
  text-align: left;
  position: absolute;
  top: -75px;
  left: 591px;
}

.fe-los-totales-compra {
    padding: 10px;
    width: 200px;
    text-align: left;
    position: absolute;
    left: 546px;
    bottom: -10px;
}

.fe-los-totales table td, .fe-los-totales-compra  table td {
  width: 1%;
  text-align: left;
  font-size: 12.32px; /*0.88em;*/
  height: 20px;
}
.fe-los-totales table td.fe-cifra-resultado, .fe-los-totales-compra table td.fe-cifra-resultado {
  text-align: right!important;
}
.fe-acuse-recibo {
  clear: both;
  border: 1px solid black;
  padding: 5px;
  font-size: 8px;
  position: absolute;
  top: 20px;
  left: 325px;
  margin-top: -24px;
}
.fe-acuse-recibo small {
  clear: both;
  display: block;
}
.fe-sii {
  width: 200px;
  text-align: center;
  position: absolute;
  top: 125px;
  left: 575px;
}
.fe-sii h5 {
  font-size: 12px;
}
.fe-sii p {
  margin-top: -10px;
  font-size: 11px;
}
.fe-datos-emp p {
  font-size: 10px;
}
.fe-datos-emp p strong {
  font-size: 14px;
}
.fe-datos-emp small {
  font-size: 10px;
  line-height: 0px;
}
.fe-footer {
  margin-top: 25px;
  height: 110px;
  position: absolute;
  top: 900px;
}
.fe-cedible {
  position: absolute;
    bottom: -10px;
  left: 724px;
}
/*google chrome page shit*/
@page {
  margin: 0;
}
/*recurso*/
td.nowrap {
  white-space: nowrap;
}
.col-izquierda {
  width: 250px;
}
.col-izquierda p {
  line-height: 4px;
}
.col-derecha p {
  line-height: 4px;
}
@media print {
  .fe-tabla-detalle {
    height: 570px;
  }
  .fondo-factura-electronica {
    height: 700px;
  }
  .fe-cedible {
    position: absolute;
    bottom: -12px;
    right: -89px;
  }
    a {
      color: #337ab7;
  }
  a[href]:after {
    content: none !important;
  }

}
@media print and (-webkit-min-device-pixel-ratio: 0) {
  .fe-tabla-detalle {
    padding-top: 4px;
    height: 570px;
  }
  .fondo-factura-electronica {
    height: 700px;
  }
  a {
      color: #337ab7;
}
    a[href]:after {
    content: none !important;
  }
}
/*clase para achicar letra*/
.fe-centro .fe-tabla-detalle.fe-detalle-small table tbody td {
  font-size: 0.8em!important;
  line-height: 89%!important;
}
.fe-timbre small {
  font-size: 10px;
  line-height: 2px;
  position: relative;
  display: block;
}
.current {
  background: #177C6D!important;
}
.popover {
  max-width: 1024px;
}
.logo-sii {
  margin-bottom: 8px;
}
.logo-sii img {
  max-height: 35px;
}
.form-group.required .control-label:after { 
   content: " *";
   color: crimson;
}
.textarea-no-resize {
    -moz-resize: none;
    -ms-resize: none;
    -o-resize: none;
    resize: none;
}
.img-one {
  max-width: 65px;
  margin: 20px;
}
/*fecha asociada*/
.input-fecha {
  padding-right: 0;
}
.fe-datos tbody td {
  padding: 0!important;
  border: none!important;
}
.fe-datos tfoot td {
  padding: 10px 0 0 0!important;
  border: none!important;
}
.fe-datos tfoot {
  border-top: 1px solid #e3e3e3;
  padding-top: 10px;
}
.fe-datos table {
  margin-bottom: 0!important;
}
.texto-rotation {
  position: absolute;
  left: -42px;
  bottom: 200px;
  -ms-transform: rotate(-90deg);
  /* IE 9 */
  -webkit-transform: rotate(-90deg);
  /* Chrome, Safari, Opera */
  transform: rotate(-90deg);
}
.text-xs {
    font-size: 9px!important;
}
.text-sm {
    font-size: 11px!important;
}
.text-md {
    font-size: 14px!important;
}
.text-lg {
    font-size: 16px!important;
}
.one-ventas .btn-verde-one {
  background-color: #00AC81;
  color: #FFFFFF;
  border-color: #00AC81;
}
.one-ventas .btn-verde-one:hover {
  background-color: #04CA98;
  border-color: #00AC81;
}
.one-ventas .separador {
  margin-top: 20px;
}
.one-ventas h4.subtitulos {
  color: #2E3243;
  font-size: 16px;
  text-transform: uppercase;
}
.one-ventas h6 {
  color: #999999;
  margin: 0;
}
.one-ventas button.btn-circulo-one {
  background-color: transparent;
  border: none;
  margin: 0;
  padding: 0;
}
.one-ventas button.btn-circulo-one .fa-circle {
  color: #00AC81;
}
.one-ventas button.btn-circulo-one:hover .fa-circle {
  color: #006837;
}
.one-ventas ul.pagination li.paginate_button.active a {
  background-color: #00AC81;
  border-color: #02A37B;
  cursor: auto;
}
.one-ventas ul.pagination li.paginate_button.active a:hover {
  background: #04CA98;
  border-color: #00AC81;
}
.one-ventas ul.pagination li.paginate_button.next a {
  background-color: transparent;
  cursor: auto;
}
.one-ventas ul.pagination li.paginate_button.next a:hover {
  background: #04CA98;
  border-color: #00AC81;
  color: #FFFFFF;
}
.one-ventas table {
  text-align: center;
}
.one-ventas table tr th {
  text-align: center;
}
.one-ventas table tr td .dropdown a.btn {
  color: #00AC81;
}
.one-ventas table tr td .dropdown a.btn:hover {
  background-color: #04CA98;
  color: #FFFFFF;
}
.trial {
  padding-top: 40px;
}
.trial .barra-top {
  top: 40px;
}
.trial .botonera-lateral {
  top: 90px;
}
.trial .btn-info:hover {
  background-color: #2291C2;
  color: white;
}
.navbar-trial {
  text-align: center;
  padding-top: 10px;
  padding-bottom: 5px;
  background-color: cornsilk;
}

.barra-trial .margin-top {
    margin-top: 5px;
}
.navbar-porexpirar {
  text-align: center;
  padding-top: 6px;
  background-color: #fcf8e3;
}
.navbar-porexpirar p {
  font-size: 16px;
}
.video-container {
	position: relative;
	padding-bottom: 40%;
	height: 0;
	overflow: hidden;
}
.video-container iframe,  
.video-container object,  
.video-container embed {
	position: absolute;
	top: 0;
	left: 0;
    width: 100%;
	height: 100%;
}
.wrap-admin {
  background-color: #F9F9F9;
  border-radius: 3px;
  box-shadow: 0px 0px 6px #C2C2C2;
  padding: 20px;
  margin-top: 0;
}
/*labels*/
.label-corto {
  width: 5%;
}
.select-medio {
  width: 329px;
}
.label-medio {
  width: 13%;
}

.linea-inferior-azul {
    border-bottom: 2px solid #3699d0;
    margin-bottom: 20px;
}

.linea-inferior-roja {
    border-bottom: 2px solid #dc143c;
    margin-bottom: 20px;
}

.linea-inferior-verde {
    border-bottom: 2px solid #2f9d7f;
    margin-bottom: 20px;
}
.opaco-2 {
    opacity: 0.2;
}
.opaco-6 {
    opacity: 0.6;
}
.opaco-8 {
    opacity: 0.8;
}

.grafico-wrapper {
    min-height: 200px;
}

.tabla-factura-glosa {
    max-width: 745px;
    word-wrap: break-word;
}

.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
.table-losproductos thead th:last-child {
  width: 0%;
}
.table-losproductos tbody tr td:first-child {
  width: 18%;
}
.table-losproductos tbody tr td:last-child {
  width: 1%;
}
.titulo-pagina {
  font-size: 14px;
  color: #999;
  text-shadow: 1px 1px 1px #fff;
  padding-top: 12px;
}
.table-losproductos thead {
  background-color: #666;
  color: white;
}
.table-losproductos thead tr th {
  width: 7%;
}
.table-losproductos thead tr th:first-child {
  width: 10%;
}
.table-losproductos thead tr th:nth-child(2) {
  width: 20%;
}
.table-losproductos tbody tr td {
  padding: 0;
  padding-left: 5px;
  vertical-align: middle;
}
.botones-inferiores {
  padding-top: 40px;
  margin-top: 96px;
  padding-bottom: 40px;
}
.btn-guardar-borrador {
  background-color: #0071bc;
  width: 100%;
  color: white;
}
.btn-guardar-borrador:hover {
  background-color: #333644;
  color: white;
}
.btn-guardar {
  background-color: #58b957;
  width: 100%;
  color: white;
}
.btn-guardar:hover {
  background-color: #3EB544;
  color: white;
}
.modal-footer .btn-guardar {
  background-color: #58b957;
  width: auto;
  color: white;
}
.form-control.txt-descripcion {
  height: 37px;
  width: 98%;
  resize: none;
  margin-top: 10px;
  margin-bottom: 7px;
}
.contenedor-link {
  padding: 13px 6px 6px 0;
  text-align: left;
  margin-top: 13px;
  border-top: 1px solid #999;
}
.contenedor-link i {
  color: #58b957;
  font-size: 18px;
}
.contenedor-link a {
  color: #555;
  background: white;
  border-radius: 4px;
  border: 1px solid #e3e3e3;
  padding: 10px;
  font-size: 12px;
}
.contenedor-link a:hover {
  text-decoration: none!important;
  color: #58abe4;
}
.contenedor-link a[disabled]{
  opacity:0.5;
  cursor:default;
}

.contenedor-link a[disabled]:hover{
  color:#555;
}
.btn-borrar {
  color: #F7DCB7;
}

.resolucion {    
    margin-top: 21px!important;
    padding-bottom: 5px;
    padding-top: 5px;

}
.fila-exenta {
  font-size: 18px;
  padding: 20px;
  background-color: #e3e3e3;
  border-radius: 10px;
  margin-top: 50px;
  margin-bottom: 20px;
}
.fila-total {
  font-size: 32px;
}
/*spinner*/
.table-losproductos .spinner {
  width: 100px;
}
.table-losproductos .spinner input {
  text-align: right;
}
.table-losproductos .input-group-btn-vertical {
  position: relative;
  white-space: nowrap;
  width: 1%;
  vertical-align: middle;
  display: table-cell;
}
.table-losproductos .input-group-btn-vertical > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
  padding: 8px;
  margin-left: -1px;
  position: relative;
  border-radius: 0;
}
.table-losproductos .input-group-btn-vertical > .btn:first-child {
  border-top-right-radius: 4px;
}
.table-losproductos .input-group-btn-vertical > .btn:last-child {
  margin-top: -2px;
  border-bottom-right-radius: 4px;
}
.table-losproductos .input-group-btn-vertical i {
  position: absolute;
  top: 0;
  left: 4px;
}
	</style>

</head>

<body>
		<div class="fondo-factura-electronica">
		<div class="la-factura">
				<div class="clearfix"></div>
			</div>
		<div class="row fe-head">
				<div class="fe-logo">
					<img src="data:image/png;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAC1AX0DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9U6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAoooo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HJDKoZHUjBBB6ip6KAPJf+GW/h1/aH2r+x5du7d9n+1y+V+W7OPbNeo6fp9rpNjBZWVvFaWkChIoIUCoijoAB0qzRQB5l49/Z/8ADXj7XTrMs2oaRqjrsmuNLmWIzLjHzgqQTjjIx2zmun8A/DvRPhrov9maHbGGJm3yyyNukmbGNzN3/kOwrpqKACiiigBkkKTKFkRXUMGAYZGQQQfqCAfwp9FFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBj634Zh12WKSW91K1MYKgWN9Lbg/UIwyazf+FeWn/QX1//AMHFx/8AF11VFAHK/wDCvLT/AKC+v/8Ag4uP/i6P+FeWn/QX1/8A8HFx/wDF11VFAHK/8K8tP+gvr/8A4OLj/wCLo/4V5af9BfX/APwcXH/xddVRQByv/CvLT/oL6/8A+Di4/wDi6P8AhXlp/wBBfX//AAcXH/xddVRQByv/AAry0/6C+v8A/g4uP/i6P+FeWn/QX1//AMHFx/8AF11VFAHK/wDCvLT/AKC+v/8Ag4uP/i6P+FeWn/QX1/8A8HFx/wDF11VFAHK/8K8tP+gvr/8A4OLj/wCLo/4V5af9BfX/APwcXH/xddVRQByv/CvLT/oL6/8A+Di4/wDi6P8AhXlp/wBBfX//AAcXH/xddVRQByv/AAry0/6C+v8A/g4uP/i6P+FeWn/QX1//AMHFx/8AF11VFAHK/wDCvLT/AKC+v/8Ag4uP/i6P+FeWn/QX1/8A8HFx/wDF11VFAHK/8K8tP+gvr/8A4OLj/wCLo/4V5af9BfX/APwcXH/xddVRQByv/CvLT/oL6/8A+Di4/wDi6P8AhXlp/wBBfX//AAcXH/xddVRQByv/AAry0/6C+v8A/g4uP/i6P+FeWn/QX1//AMHFx/8AF11VFAHK/wDCvLT/AKC+v/8Ag4uP/i6P+FeWn/QX1/8A8HFx/wDF11VFAHK/8K8tP+gvr/8A4OLj/wCLo/4V5af9BfX/APwcXH/xddVRQByv/CvLT/oL6/8A+Di4/wDi6P8AhXlp/wBBfX//AAcXH/xddVRQBmaJoUWhxSxxXV9dCRtxa+u5JyPoXJwK06KKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/Z" alt="">
					
				</div>
		
				<div class="fe-datos-emp">
					<p>
						<strong id="empresaNombre">AUSTRAL-1</strong>
					</p>
					<p>TRANSPORTES</p>
					<small>
						<p>CALLE 7, Collipulli, COLLIPULLI </p>
							<p>Tel: 8889966 </p>
						<p>
		mauriciohz2002@gmail.com                                    </p>
					</small>
				</div>
		
				<div class="fe-rut">
					<p><strong>R.U.T.: 61.958.300-0</strong></p>
					<p id="NombreDocumento"><strong>FACTURA</strong></p>
							<p><strong>Nº 4</strong></p>
		
		
				</div>
				<div class="fe-sii">
					<h5><strong>S.I.I - CONCEPCIÓN</strong></h5>
					<p><strong>miércoles, 24 de mayo de 2017</strong></p>
				</div>
			</div>
		</div>
</body>

</html>