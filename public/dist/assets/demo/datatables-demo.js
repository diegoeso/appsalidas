// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable({
    "language": {
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "search": "Buscar",
      "zeroRecords": "No se encontraron registros",
      "info": "Mostrando Página  _PAGE_ of _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "loadingRecords": "Cargando registros...",
      "infoFiltered": "(filtered from _MAX_ total records)",
      paginate: {
        first: "Primero",
        previous: "Anterior",
        next: "Siguiente",
        last: "Último"
      },

    },
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
  });
});
