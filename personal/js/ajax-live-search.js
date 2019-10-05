$(document).ready(function() { //document=index.php. Quand doc est prêt exécution de la function

    load_data();

    function load_data(query) {
        $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{
                query:query
            },
            success:function(data){
                $('#result').html(data);
            }
        });
    }
   
    $('#search-box').keyup(function(){
        var search = $(this).val();
        
        if(search != '') {
            load_data(search);
        }
        else {
         load_data();
        }
    });
});
