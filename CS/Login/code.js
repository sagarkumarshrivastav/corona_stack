    var x=document.getElementById("login");
    var y=document.getElementById("register");
    let cpassInput=document.getElementById("cpassword-input");
    let passInput=document.getElementById("password-input");
    let pMsg=document.getElementById("password-msg");
    
    cpassInput.addEventListener('keyup', function (){
       
        console.log("clicked");
        if(passInput.value===cpassInput.value)
        {
            pMsg.innerText =`Matched`;
            pMsg.style.color="Green";
        }
        else
        {
            pMsg.innerText =`Not matched`;
            pMsg.style.color="red";
        }


    });
    function validateForm(){
        if(passInput.value===cpassInput.value)
        {
           return true;
        }
        else
        {
            
            return false;
        }


    }
    function login(){
        x.style.left="50px";
        y.style.left="450px";


    }

    function register(){
        x.style.left="400px";
        y.style.left="50px";

    }
  

