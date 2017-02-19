var navMain = $("#navbar");
navMain.on("click", "a", null, function () { navMain.collapse('hide'); });

$("form").change(function(){
    if($("#name").val() && $("#email").val() && $("#text").val()) {
        $("#add").prop("disabled", false);
    }
});

$("#show_preview").click(function(){
    $("#preview_name").text($("#name").val());
    $("#preview_email").text($("#email").val());
    $("#preview_text").text($("#text").val());
});

$(".form").change(function(){
    console.log($(this).serialize());

    $.ajax({
        type: "POST",
        data: $(this).serialize(),
        url: "/admin/update",
        success: function(data) {
            alert(data);
        }
    });
});