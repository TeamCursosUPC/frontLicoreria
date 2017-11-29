<div class="box box-primary" id="app">
    <div class="box-header">
        <h3 class="box-title">Listar Clientes</h3>
        <div class="box-tools">
            <div class="btn-group pull-right">
                <a href="{{ route('createCliente') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Crear</a>
                <a v-on:click="loadLocales()" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                <a v-on:click="loadLocales()" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <table id="table-list-clientes" class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apelido Materno</th>
                    <th>Tipo Documento</th>
                    <th>Fecha Nacimiento</th>
                    <th>Direccion</th>
                    <th>Distrito</th>
                    <th>Numero Movil</th>
                    <th>Email</th>
                    <th>Estado</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        window.nombreDIV = 'table-list-clientes'

        window.dataLocal = {
            // url: 'http://licoreria.localhost.pe:8088/api/pruebas',
            url: 'api/clientes',
            type: 'GET'
        }

        window.columnsLocal = [
			{ 'data' : 'id' },
            { 'data' : 'primer_nombre' },
            { 'data' : 'segundo_nombre' },
            { 'data' : 'apellido_paterno' },
            { 'data' : 'apelido_materno' },
            { 'data' : 'tipo_documento' },
            { 'data' : 'fecha_nacimiento' },
            { 'data' : 'direccion' },
            { 'data' : 'distrito' },
            { 'data' : 'numero_movil' },
            { 'data' : 'email' },
            { 'data' : 'estado' }
        ]
                   
                    
        window.tableLocal = $(`#${nombreDIV}`).DataTable({
            'deferRender': true,
            'processing': true,
            'ajax': dataLocal,
            'paging': true,
            'pageLength': 10,
            'lengthMenu': [10, 20, 30, 40, 50],
            'scrollY': '300px',
            'scrollX': true,
            'scrollCollapse': true,
            'select': true,
            'language': dataTables_lang_spanish(),
            'columns': columnsLocal
        })

        $(`#${nombreDIV} tbody`).on( 'dblclick', 'tr', function () {
            var dataRow = tableLocal.row(this).data()
            alert( 'Clicked row id ' + dataRow.id );
        } );
    });
</script>


    



