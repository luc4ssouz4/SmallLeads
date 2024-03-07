$(document).ready(function() {


$("#loginForm").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(){
            location.reload();
        }
    }).fail(function (data, textStatus) {
        
        $("#messageError").text(data.responseJSON.message);

    });
    
});


$("#loginRegister").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(){
            location.reload();
        }
    }).fail(function (data, textStatus) {
        
        $("#messageError").text(data.responseJSON.message);

    });
    
});

});