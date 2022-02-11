
$('.select2').select2();
$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "lengthMenu": "Ver los _MENU_ Primeros Registros",
            "info": "_END_ de _TOTAL_ registros",
            "infoEmpty": "No se encontraron registros",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "sSearch": "BUSCAR:",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",

            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "fnInfoCallback": null
        },
        dom: 'Bfrtip',
        buttons: [{
                extend: 'excelHtml5',
                title: 'Sistema Comuna',
                className: '',
                text: '<i class="far fa-file-excel"></i> EXCEL',
                exportOptions: { columns: ":not(.no-export)" }
            },
            {
                extend: 'pdfHtml5',
                title: 'Sistema Comuna',
                className: '',
                text: '<i class="far fa-file-pdf"></i> PDF',
                exportOptions: { columns: ":not(.no-export)" }
            },
        ]
    });

    /*Dropzone*/
$(".dropzone").change(function() {
    readFile(this);
}); 

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var htmlPreview =
            '<img src="' + e.target.result + '" class="img-dropzone" />';
            var wrapperZone = $(input).parent();
            var previewZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen);
            var boxZone = $(input).parent().parent().find('.preview-zone-'+input.dataset.imagen).find('.box').find('.box-body');
            $(".dropzone-wrapper-"+input.dataset.imagen).css({"display":"none"});
            wrapperZone.removeClass('dragover');
            previewZone.removeClass('hidden');
            boxZone.empty();
            boxZone.append(htmlPreview);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
}


$('.dropzone-wrapper').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
    var boxZone = $(this).parents('.preview-zone-'+this.dataset.imagen).find('.box-body');
    var previewZone = $(this).parents('.preview-zone-'+this.dataset.imagen);
    var dropzone = $(this).parents('.form-group').find('.dropzone-'+this.dataset.imagen);
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
    $(".dropzone-wrapper-"+this.dataset.imagen).css({"display":"block"});
});
/*Fin Dropzone*/
});

$('.decimal').keypress(function (event) {
    return isNumber(event, this)
});
$.validate({
    modules: 'location, date, security, file',
    lang: 'es'
});

function isNumber(evt, element) {

    var charCode = (evt.which) ? evt.which : event.keyCode

    if (
        (charCode != 46 || $(element).val().indexOf('.') != -1) &&
        (charCode < 48 || charCode > 57))
        return false;

    return true;
}
/*Sweet Alert*/
function deleteRegister($id){
    Swal.fire({
      
      title: 'Esta seguro de eliminar este registro?',
      text: "",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Confirmar',
      cancelButtonText: 'Cancelar'
  }).then((result) => {
      if (result.value) {
        $("#registros"+$id).submit();
    }
})
}
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
  }
  return false;        
}