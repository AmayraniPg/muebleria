<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muebleria</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome/css/all.css') ?>">
  <script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
  <script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('js/muebles.js') ?>"></script>
  <script src="<?php echo base_url('js/sweetalert.min.js') ?>"></script>
  <script>
    var base_url = '<?php echo base_url() ?>';
  </script>
</head>
<body background="<?php echo base_url('img/fondo.jpg') ?>">
  <div class="container">
    <br>
    <br>
    <div class="container">
      <h1 style="color: white">Muebleria</h1>
      <div class="row">
        <div class="col-sm-4">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMueble">
            <span class="fas fa-couch"></span> Agregar
          </button>
        </div>
      </div>
      <hr>
      <div class="row">
        <hr>
        <div class="col-sm-12" style="background: white">
          <br>
          <div id="tablaCargadaMuebles"></div>
          <br>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="modalAgregarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Mueble</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="frmAgregaMueble">
                <label>Nombre del Mueble</label>
                <input type="text" id="mueble" name="mueble" class="form-control">
                <label>Tipo de madera</label>
                <input type="text" id="tipo" name="tipo" class="form-control">
                <label>Precio de Venta</label>
                <input type="text" id="preciov" name="preciov" class="form-control">
                <label>Precioto de Compra</label>
                <input type="text" id="precioc" name="precioc" class="form-control">
                <label>Fecha de Agregado</label>
                <input type="text" id="fecha" name="fecha" class="form-control">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                <span class="fas fa-times-circle"></span> Cerrar
              </button>
              <button type="button" class="btn btn-primary" id="btnAgregarMueble">
                <span class="fas fa-plus-circle"></span> Guardar
              </button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="modalActualizarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Mueble</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="frmAgregaMuebleu">
                <input type="text" id="idMueble" name="idMueble" hidden="">
                <label>Nombre del Mueble</label>
                <input type="text" id="muebleu" name="muebleu" class="form-control">
                <label>Tipo de madera</label>
                <input type="text" id="tipou" name="tipou" class="form-control">
                <label>Precio de Venta</label>
                <input type="text" id="preciovu" name="preciovu" class="form-control">
                <label>Precio de Compra</label>
                <input type="text" id="preciocu" name="preciocu" class="form-control">
                <label>Fecha</label>
                <input type="text" id="fechau" name="fechau" class="form-control">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                <span class="fas fa-times-circle"></span> Cerrar
              </button>
              <button type="button" class="btn btn-warning" onclick="actualizarMueble()">
                <span class="far fa-clipboard"></span> Actualizar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>