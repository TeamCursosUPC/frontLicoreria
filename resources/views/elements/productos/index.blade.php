<div class="box box-primary" id="app">
    <div class="box-header">
        <h3 class="box-title">Listar Productos</h3>
        <div class="box-tools">
            <div class="btn-group pull-right">
                <a href="{{ route('createProducto') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Crear</a>
                <a v-on:click="loadLocales()" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                <a v-on:click="loadLocales()" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <table id="table-list-productos" class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Producto</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Tipo de Producto</th>
                    <th>Estado</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        window.nombreDIV = 'table-list-productos'

        window.dataLocal = {
            // url: 'http://licoreria.localhost.pe:8088/api/pruebas',
            url: 'api/productos',
            type: 'GET'
        }

        window.columnsLocal = [
			{ 'data' : 'id' },
            { 'data' : 'nombre' },
            { 'data' : 'precio_unitario' },
            { 'data' : 'cantidad' },
            { 'data' : 'tipo_producto' },
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


    



