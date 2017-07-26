function activar(data){
    switch (data){
        case 0:
            limpiar();
            $('#escuela').addClass('active treeview');
            $('#docente').addClass('active');
            $('#i_docente').addClass('text-red');
            docente();
            break;
        case 1:
            limpiar();
            $('#escuela').addClass('active treeview');
            $('#materia').addClass('active');
            $('#i_materia').addClass('text-red');
            break;
        case 2:
            limpiar();
            $('#escuela').addClass('active treeview');
            $('#curso').addClass('active');
            $('#i_curso').addClass('text-red');
            break;
    }
}

function docente(){
    $.ajax({
        type: 'GET',
        url: "docentes",
        success: function (data) {
            $('#Mainbody').html(data);
        }
    });
}

function limpiar(){
    $('#escuela').addClass('treeview');

    $('#docente').removeClass('active');
    $('#i_docente').removeClass('text-red');

    $('#materia').removeClass('active');
    $('#i_materia').removeClass('text-red');

    $('#curso').removeClass('active');
    $('#i_curso').removeClass('text-red');
}
