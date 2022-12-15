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

// const nav = document.querySelector(".nav-link");
// const active = document.querySelector(".active");
// nav.addEventListener("click", function() {
//     active.classList.remove(".active");
// });

// $(".nav-link").on("click", function() {
//     $(".nav-link").addClass("active");
//     // $(this).addClass("active");
// });
// active.addEventListener(".active");

// nav.addEventListener("click", (event) => {
//     event.preventDefault();
//     // ketika tombol submit di klik
//     active.classList.remove("active");
//     btnKirim.classList.toggle("none");
// fetch(scriptURL, {
//         method: 'POST',
//         body: new FormData(form)
//     })
// .then(response => {
//     btnLoading.classList.toggle('none');
//     btnKirim.classList.toggle('none');
//     myAlert.classList.toggle('none');
//     form.reset();
//     console.log('Success!', response);
// })
// .catch(error => console.error('Error!', error.message))
// });