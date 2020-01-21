$(function () {
    let systemOut = $("#system-out");
    let userEmail = systemOut.find(".user-email");
    let userInput = systemOut.find(".user-input");
    let formNotes = systemOut.find("#form-notes");
    let formNotesText = formNotes.find("#message");

    const emailTest = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

let allInputs = $(".input");
const emailVal = userEmail.val();
const passVal = userInput.val();


    systemOut.submit(function (e) {
       

        $.each(allInputs, function () {
            var self = $(this);

            
           
         
        
                   

        });



      
    });
});
var is_visible = false ;

function see()
{
    var input = document.getElementById("password");
    var see = document.getElementById("see");
    
    if(is_visible)
    {
        input.type = 'password';
        is_visible = false; 
        see.classList.replace("fa-eye", "fa-eye-slash");
    }
    else
    {
        input.type = 'text';
        is_visible = true; 
        see.classList.replace("fa-eye-slash", "fa-eye");
    }
    
}

function check()
{
    var input = document.getElementById("password").value;
    var minLenght = document.getElementById("check0");
    var maxLenght = document.getElementById("check1");
    var numbersCheck = document.getElementById("check2"); 
    var symbol = document.getElementById("check3");
    var space = document.getElementById("check4");
    var registerButton = document.getElementById("register-button");
    
    input=input.trim();
    document.getElementById("password").value=input;
    document.getElementById("count").innerText="Length : " + input.length;
    if(input.length>=8)
    {
       minLenght.style.color="green";
    }
    else
    {
       minLenght.style.color="tomato"; 
    }
    
    if(input.length<=30)
    {
       maxLenght.style.color="green";
    }
    else
    {
       maxLenght.style.color="tomato"; 
    }
    
    if(input.match(/[0-9]/i))
    {
       numbersCheck.style.color="green";
    }
    else
    {
      numbersCheck.style.color="tomato"; 
    }
    
    if(input.match(/[^A-Za-z0-9-' ']/i))
    {
       symbol.style.color="green";
    }
    else
    {
       symbol.style.color="tomato"; 
    }
    
    if(input.match(' '))
    {
        space.style.color="tomato";
    }
    else
    {
      space.style.color="green"; 
    }
    if(minLenght.style.color == "green" &&  maxLenght.style.color == "green" && numbersCheck.style.color == "green" &&  symbol.style.color == "green" && space.style.color == "green" ){
        registerButton.classList.remove("disabled");
    }
    else{
        registerButton.classList.add("disabled");
    }
    
}