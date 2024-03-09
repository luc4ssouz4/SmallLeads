$(document).ready(function() {

$("#loginForm").submit(function(e) {
    $("#loginForm .btn").attr("disabled", "disabled");
    e.preventDefault();    
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(){
            location.reload();
        }
    }).fail(function (data) {        
        $("#messageError").text(data.responseJSON.message);
        $("#loginForm .btn").removeAttr("disabled");
    });    
});

$("#loginRegister").submit(function(e) {
    $("#loginRegister .btn").attr("disabled", "disabled");
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(){
            location.reload();
        }
    }).fail(function (data) {        
        $("#messageError").text(data.responseJSON.message);
        $("#loginRegister .btn").removeAttr("disabled");
    });    
});

});