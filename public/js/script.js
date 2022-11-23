// console.log("ok");
$(function() {
    $(".viewCreateData").on("click", function() {
        $("#formModalLabel").html("Create Data");
        $(".modal-footer button[type=submit]").html("Save Create");
        $("#name").val("");
        $("#address").val("");
        $("#email").val("");
        $("#id").val("");
    });
    $(".viewModalEdit").on("click", function() {
        // console.log("ok");
        $("#formModalLabel").html("Edit Data");
        $(".modal-footer button[type=submit]").html("Save Changes");
        $(".modal-body form").attr("action", "http://localhost/mvc/public/orang/edit");

        const id = $(this).data("id");
        // console.log(id);

        $.ajax({
            url: "http://localhost/mvc/public/orang/getEdit",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function(data) {
                // console.log(data);
                $("#name").val(data.name);
                $("#address").val(data.address);
                $("#email").val(data.email);
                $("#id").val(data.id);
            },
        });
    });
});