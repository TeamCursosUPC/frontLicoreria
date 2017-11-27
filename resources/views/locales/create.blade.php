@extends('layout.layout-admin')
@section('title', 'Locales')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Locales y/o Sedes</h3>
    </div>
    <form role="form">
        <div class="box-body">
            <div class="col-md-6">
                <div class="box-body">
                    <div class="form-group">
                        <label>Nombre del Local</label>
                        <input type="text" class="form-control" id="namelocal" placeholder="Nombre del Local">
                    </div>
                    <div class="form-group">
                        <label>Persona de Contacto</label>
                        <input type="text" class="form-control" id="nameContacto" placeholder="Supervisor General ">
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" id="address" placeholder="Av Aviacion 3115 - Referencia estacion San Borja Sur">
                    </div>
                </div>
            </div>
            <div class="col-md-6">    
                <div class="box-body">
                    <div class="form-group">
                        <label>Seleccionar Distrito</label>
                        <select class="form-control" id="idDistrito">
                            <option selected="selected">-</option>
                            <option>San Borja</option>
                            <option>Surquillo</option>
                            <option>Miraflores</option>
                            <option>San Isidro</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Telefono Contacto</label>
                        <input type="text" class="form-control" id="numerPhone" placeholder="Supervisor General ">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="col-md-3 col-md-offset-4 col-xs-4 col-xs-offset-3">
                <a href="{{ route('showLocal') }}" class="btn btn-warning btnForm"><i class="fa fa-close"></i> Cancelar</a>
                <a class="btn btn-primary btnForm"><i class='fa fa-plus'></i> Crear Local</a>
                <a class="btn btn-info btnLoad"  style="display: none"><i class="fa fa-spin fa-spinner"></i> Cargando</a>
                
            </div>
        </div>
    </form>
</div>
@endsection
