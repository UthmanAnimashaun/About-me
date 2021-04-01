
    function validateForm() {
        var password =document.forms['form']['password'].value;
        
        if(password.length > 1 && password.length < 6) {
            alert("Password can't be less than 6 characters");
            return false;  
     }
    }