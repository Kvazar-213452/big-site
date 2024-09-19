function go_out_accaunt() {
    const url = 'db/lisen_cacaunt'; 
    const data = {
        type: 1
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function(response) {
            console.log(response);
        }
    });
}