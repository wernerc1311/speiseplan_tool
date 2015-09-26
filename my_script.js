$("#sub").click( function() {
 $.post( $("#speise_form").attr("action"),
         $("#speise_form :input").serializeArray(),
         function(info){ $("#result").html(info);
   });
showSuccess();
clearInput();
});
 
$("#speise_form").submit( function() {
  return false;
});

function showSuccess() {
	$("#success").show();
	$("#success").delay(5000).fadeOut();
}

function clearInput() {
    $("#speise_form :input").each( function() {
       $(this).val('');
    });
}