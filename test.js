// Helper function to serialize all the form fields into a JSON string
function formToJSON() {
    return JSON.stringify({
        "produktname": $('#produktname').val(),
        "zusatzstoff1": $('#zusatzstoff1').val()
        });
}

//
$("sub").click(function addProduct() {
    console.log('addProduct');
    $.ajax({
        type: 'POST',
        contentType: 'application/json',
        url: functions.php,
        dataType: "json",
        data: formToJSON(),
        success: function(data, textStatus, jqXHR){
            alert('Product created successfully');
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('addProduct error: ' + textStatus);
        }
    })
});