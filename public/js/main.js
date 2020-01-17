$("#addtocart").on("click",function(event){
    event.preventDefault();
    var card = $(this).attr("path");
    var rid = $(this).attr("room");
    var check_in= document.getElementById("check_in").value;
    var check_out= document.getElementById("check_out").value;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : card,
        method : "POST",
        data : {
            id:rid,
            c_in : check_in,
            c_out : check_out
        }
        ,
        success : function(data){
            $('#message').html(data);
        }
    })
})