$(document).ready(function(){
    $(document).on('click', '#additem', function(e){
        e.preventDefault();
        $( "#test" ).first.append( "<p>Test</p>" );
        var form = $(this).closest(".form-submit");
        var id = form.find(".pid").val();

        $.ajax({
            url: "action.php",
            method: "post",
            data: {pid:id},
            success: function(response){
                $(".alert-message").html(responce);
                window.scrollTo(0,0);
            }
        })
    })
})