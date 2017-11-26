<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<form>
	<div class="panel-heading"><h4>Licores - Mantenimiento</h4></div>
  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="licorreg.blade.php#">Registrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="licormod.blade.php#">Modificar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="licordel.blade.php#">Eliminar</a>
      </li>
    </ul>
  </div>
  <div class="card-body text-left">
    <div class="form-group row">
    <label for="lab_tipo_licor" class="col-sm-2 col-form-label">Tipo de Licor:</label>
    <div class="col-sm-3">
      <select id="sele_licor">
				<option value="1">Pisco</option>
				<option value="2">Vino</option>
				<option value="3">Whisky</option>
			</select>
    </div>	
  </div>
  <div class="form-group row">
    <label for="lab_marca_licor" class="col-sm-2 col-form-label">Marca:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="" name="txt_marca_licor">
    </div>
  </div>
  <div class="form-group row">
    <label for="lab_anio_licor" class="col-sm-2 col-form-label">Año:</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" placeholder="" name="txt_anio_licor">
    </div>
  </div>
  <div class="form-group row">
    <label for="lab_desc_licor" class="col-sm-2 col-form-label">Descripción:</label>
    <div class="col-sm-6">
	  <textarea class="form-control" id="txt_desc_licor" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="lab_costo_licor" class="col-sm-2 col-form-label">Costo Unitario:</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" placeholder="" name="txt_costo_licor">
    </div>
  </div>
  <div class="form-group row">
	<div class="col-sm-2"></div>
    <div class="col-sm-2">
      
    </div>
	<div class="col-sm-2">
	<button type="submit" class="btn btn-primary">GRABAR</button>
	</div>
	<div class="col-sm-2">
      <button type="reset" class="btn btn-primary">CANCELAR</button>
    </div>
  </div>   
  </div>
</div>
</form>
</body>
</html>
