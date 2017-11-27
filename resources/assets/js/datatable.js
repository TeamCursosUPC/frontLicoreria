/**
 * [dataTables Funcion para cargar datos en la tablas de los reportes]
 * @param  {String} nombreDIV [Nombre del div donde esta la tabla para agregar los datos]
 * @param  {String} data      [Nombre del tipo de porte a cargar]
 * @param  {String} route     [Ruta a la cual va a consultar los datos a cargar]
 */
window.dataTables = (nombreDIV, data, columns) => {
  // Eliminación del DataTable en caso de que exista
  // $('#' + nombreDIV).dataTable().fnDestroy()
  // Creacion del DataTable
  $('#' + nombreDIV).DataTable({
    'deferRender': true,
    'processing': true,
    'serverSide': true,
    'ajax': data,
    'paging': true,
    'pageLength': 10,
    'lengthMenu': [10, 20, 30, 40, 50],
    'scrollY': '300px',
    'scrollX': true,
    'scrollCollapse': true,
    'select': true,
    'language': dataTables_lang_spanish(),
    'columns': columns
  })
}

/**
 * [dataTables_lang_spanish Función que permite colocar el Datable en español]
 */
window.dataTables_lang_spanish = () => {
  let lang = {
    'sProcessing': 'Procesando...',
    'sLengthMenu': 'Mostrar _MENU_ registros',
    'sZeroRecords': 'No se encontraron resultados',
    'sEmptyTable': 'Ningún dato disponible en esta tabla',
    'sInfo': 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
    'sInfoEmpty': 'Mostrando registros del 0 al 0 de un total de 0 registros',
    'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
    'sInfoPostFix': '',
    'sSearch': 'Buscar:',
    'sUrl': '',
    'sInfoThousands': ',',
    'sLoadingRecords': 'Cargando...',
    'oPaginate': {
      'sFirst': 'Primero',
      'sLast': 'Último',
      'sNext': 'Siguiente',
      'sPrevious': 'Anterior'
    },
    'oAria': {
      'sSortAscending': ': Activar para ordenar la columna de manera ascendente',
      'sSortDescending': ': Activar para ordenar la columna de manera descendente'
    }
  }

  return lang
}
