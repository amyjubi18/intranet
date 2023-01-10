table = $("#tabla").DataTable({

});

/**/ 
$("#numero").keyup(function(){
    table.column($(this).data('index')).search(this.value).draw();
})