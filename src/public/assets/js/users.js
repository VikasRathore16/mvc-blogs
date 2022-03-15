$(".table-responsive").on("click", "#delete", function (e) {
    e.preventDefault();
    user_id = $(this).data("user_id");

    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/deleteUser",
        data: { 'user_id': user_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
         window.location.reload();
    });
});

$(".table-responsive").on("click", "#approve", function (e) {
    e.preventDefault();
    user_id = $(this).data("user_id");

    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/approveUser",
        data: { 'user_id': user_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
         window.location.reload();
    });
});

$(".table-responsive").on("click", "#restrict", function (e) {
    e.preventDefault();
    user_id = $(this).data("user_id");

    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/restrictUser",
        data: { 'user_id': user_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
         window.location.reload();
    });
});