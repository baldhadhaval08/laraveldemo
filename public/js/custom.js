$(document).ready(function () {

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        bLengthChange: false,
        columnDefs: [{
            orderable: false,
            width: 100
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
        }
    });


    $('#page-wrapper').on('click','.modal-popup-updatestatus',function () {
       var updatestatus_url = $(this).data('url');
        $('.modal-status-confirm').attr('data-url',updatestatus_url);
        if($(this).attr('data-type') == 'unapprove'){
            $('.modal-message').text('Are you sure you want to approve this user?');
            $('.modal-status-confirm').attr('data-type','unapprove').text('Approve').removeClass('btn-danger').addClass('btn-success');
        }else{
            $('.modal-message').text('Are you sure you want to unapprove this user?');
            $('.modal-status-confirm').attr('data-type','unapprove').text('UnApprove').removeClass('btn-success').addClass('btn-danger');
        }
        $('#modal_updatestatus_warning').modal();
    });

    $('body').on('click','.modal-status-confirm',function () {
        var updatestatus_url = $(this).attr('data-url');
        
        $.ajax({
            url: updatestatus_url,
            type: 'GET',
            success: function(result) {
                
                if (result == '1'){
                    $('#modal_updatestatus_warning').modal("hide");
                    window.dataGridTable.ajax.reload();
                }else {
                    $('#modal_updatestatus_warning').modal("hide");
                    alert(result);
                }
            },error: function (result) {
                console.log(result);
            }
        });
    });
    
});