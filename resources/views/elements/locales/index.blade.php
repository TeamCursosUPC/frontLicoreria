<div class="box box-primary" id="app">
    <div class="box-header">
        <h3 class="box-title">Locales y/o Sedes</h3>
        <div class="box-tools">
            <div class="btn-group pull-right">
                <a href="{{ route('createLocal') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Crear</a>
                <a v-on:click="loadLocales()" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                <a v-on:click="loadLocales()" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
            </div>
        </div>
    </div>
    <div class="box-body">
        <table id="table-list-locales" class="table table-bordered display nowrap table-responsive" cellspacing="0" width="100%" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Local</th>
                    <th>Distrito</th>
                    <th>Persona de Contacto</th>
                    <th>Telefono de Contacto</th>
                    <th>Estado</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        window.dataLocal = {
            // url: 'http://licoreria.localhost.pe:8088/api/pruebas',
            url: 'api/pruebas',
            type: 'GET'
        }

        window.columnsLocal = [
			{ 'data' : 'id'},
			{ 'data' : 'nombre' },
			{ 'data' : 'distrito' },
			{ 'data' : 'nombre_contacto' },
            { 'data' : 'telefono_contacto' },
            { 'data' : 'estado' }
        ]

        window.tableLocal = $('#table-list-locales').DataTable({
            'deferRender': true,
            'processing': true,
            'ajax': dataLocal,
            'paging': true,
            'pageLength': 100,
            'lengthMenu': [100, 200, 300, 400, 500],
            'scrollY': '300px',
            'scrollX': true,
            'scrollCollapse': true,
            'select': true,
            'language': dataTables_lang_spanish(),
            'columns': columnsLocal
        })

        $('#table-list-locales tbody').on( 'dblclick', 'tr', function () {
            var dataRow = tableLocal.row(this).data()
            alert( 'Clicked row id ' + dataRow.id );
        } );
    });
</script>


    



