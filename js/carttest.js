$(document).ready(function(){
    $(document).on('click', '#additem', function(e){
        e.preventDefault();
    
        var form = $(this).closest(".form-submit");
        var id = form.find(".pid").val();

        $.ajax({
            url: "action.php",
            method: "post",
            data: {pid:id},
        
          
        })
    })
})