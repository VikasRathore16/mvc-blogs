$(".table-responsive").on("click", "#published", function (e) {
    e.preventDefault();
    console.log($(this).data("user_id"));
    blog_id = $(this).data("blog_id");
    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/publish",
        data: { blog_id: blog_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
        window.location.reload();
    });
});

$(".table-responsive").on("click", "#pending", function (e) {
    e.preventDefault();
    console.log($(this).data("user_id"));
    blog_id = $(this).data("blog_id");
    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/pending",
        data: { blog_id: blog_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
        window.location.reload();
    });
});

$(".table-responsive").on("click", "#delete", function (e) {
    e.preventDefault();
    console.log($(this).data("user_id"));
    blog_id = $(this).data("blog_id");
    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/deletePost",
        data: { blog_id: blog_id },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
        // console.log(data);
        window.location.reload();
    });
});

$(".table-responsive").on("click", "#trending", function (e) {
    e.preventDefault();
    val = $(this).val();
    blog_id = $(this).data("blog_id");
    $.ajax({
        method: "POST",
        url: "http://localhost:8080/public/pages/trendingPost",
        data: { 'blog_id': blog_id , 'val' : val },
        // dataType: "JSON",
    }).done(function (data) {
        console.log("success");
         console.log(data);
        //  window.location.reload();

    });

});

// $(".table-responsive").on("click", "#view", function (e) {
//     e.preventDefault();
   
//     blog_id = $(this).data("blog_id");
//     $.ajax({
//         method: "POST",
//         url: "http://localhost:8080/public/pages/viewPost",
//         data: { 'blog_id': blog_id},
//         // dataType: "JSON",
//     }).done(function (data) {
//         console.log("success");
//          console.log(data);
//          for(var k in data){
//              console.log(k);
//          }
//         //  console.log(data.forEach());
//         //  console.log('article',data.article);
//         //  window.location.reload();

//     });
    
// });

