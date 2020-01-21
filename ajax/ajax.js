$(function () {

    let main = $("#main");
    let button = main.find("#btn");
    let more = main.find("#more");


    button.on("click", function (e) {

        let self = $(this);
        let dataBtn = self.data("object-1");

        $.ajax({
            "url": "../ajax/objects.json",
            "method": "get",
            "data": "",
            "complete": function (response) {
                let data = response.responseJSON[dataBtn];
                more.html("<img src='  " + data.picture + " ' class = 'img-fluid' /> <h1>" + data.text + data.date + "</h1>" + data.button)
                $("#closeBtn").click(function () {
                    event.preventDefault();
                    more.slideUp();
                    console.log(more);
                });
                button.click(function () {
                    more.slideDown();
                });
            }
        });


    });



});