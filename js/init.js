$(document).ready(function(){
    $('select').formSelect();
    $('.datepicker').datepicker();
    $('.timepicker').timepicker();
    $('.select-wrapper').siblings("label").addClass("active");
    $('.collapsible').collapsible();
    $('.fixed-action-btn').floatingActionButton();
    $('.sidenav').sidenav();

    $('#example').DataTable({
        "scrollX":true,
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "search": "Buscar:",
            "zeroRecords": "No hay registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
        }
    });
});