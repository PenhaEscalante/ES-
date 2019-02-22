$(document).ready(function(){
    $('select').formSelect();
    $('.datepicker').datepicker();
    $('.timepicker').timepicker();
    $('.select-wrapper').siblings("label").addClass("active");
    $('.collapsible').collapsible();
    $('.fixed-action-btn').floatingActionButton();
    $('.sidenav').sidenav();

    $('#example').DataTable({
        "scrollX":true
    });
});