    $(function () {
        let systemAut = $("#system-aut");
        let userEmail = systemAut.find(".user-email");
        let userInput = systemAut.find(".user-input");
        let formNotes = systemAut.find("#form-notes");
        let formNotesText = formNotes.find("#message");

        const emailTest = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 
let allInputs = $("input");



        systemAut.submit(function (e) {
            e.preventDefault();

            $.each(allInputs, function () {
                var self = $(this);

                if (self.val() === "") {
                    formNotes.addClass("show");
                    formNotesText.html("The " + self.data("name") + " field can not be empty");
                    userEmail.css({"border": "1px solid red"});
                    return false;
                }
                else {

                    formNotes.removeClass("show");
                    userEmail.css({"border": "1px solid green"})
                }

            });

            const emailVal = userEmail.val();

            // if (emailVal === "") {
            //     formNotes.addClass("show");
            //     formNotesText.html("The <strong>email</strong> field can not be empty");
            //     userEmail.css({"border": "1px solid red"});

            // } else {

            //     if (!emailTest.test(emailVal)) {
            //         formNotesText.html("The <strong>email</strong> you entered is not valid");

                    
            //     } else {


            //     formNotes.removeClass("show");
            //     userEmail.css({"border": "1px solid green"})
            //     };                
            // }
        });
    });