jQuery(document).ready(function($) {

    // general modules
    $( document ).on( 'input', '#et_pb_title', function() {
        var title = $(this).val();
        $('#admin_label').val(title)
    });

    // image module
    $( document ).on( 'input', '#et_pb_title_text', function() {
        var title = $(this).val();
        $('#admin_label').val(title)
    });

    // button module
    $( document ).on( 'input', '#et_pb_button_text', function() {
        var title = $(this).val();
        $('#admin_label').val(title)
    });

    // person module
    $( document ).on( 'input', '#et_pb_name', function() {
        var title = $(this).val();
        $('#admin_label').val(title)
    });

    // testimonial module
    $( document ).on( 'input', '#et_pb_author', function() {
        var title = $(this).val();
        $('#admin_label').val(title)
    });

});