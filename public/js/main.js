$(document).ready(function() {
    $( "#main_form" ).submit(function(e) {

        // prevent default form post
        e.preventDefault();

        // store form data for ajax
        var formData = $( "#main_form" ).serializeArray();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formData,
            dataType: 'json',
            beforeSend: function(){
                // clear fields on submit
                $( "#msgbox" ).empty();
                $( "#number_display" ).empty();
                $( "#border" ).removeClass( "visible" ).addClass( "invisible" );
            },
            success: function(result){
                $( "#msgbox" ).html(result.msg);
                $( "#position" ).val('');
                if (result.status=='sucess') {
                    $( "#border" ).removeClass( "invisible" ).addClass( "visible" );
                    $( "#number_display" ).html(result.num);
                }
            },
            error: function(data){
                $( "#msgbox" ).html('Ajax error');
                // clear position on error
                $( "#position" ).val(''); 
            },
            statusCode: {
                500: function() {
                    $( "#msgbox" ).html('Unknown Error');
                     // clear position on error
                    $( "#position" ).val(''); 
                }
            },
        });
    
    });
});