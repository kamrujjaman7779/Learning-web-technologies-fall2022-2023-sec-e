function validateForm() {
    var fname = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var uname = document.getElementById("username").value;
    var age = document.getElementById("age").value;
    var phn = document.getElementById("phn").value;
    var pass = document.getElementById("password").value;
    var add = document.getElementById("address").value;
    
    if (fname == "" ) {
     document.getElementById("errfname").innerHTML="*Please fill out full name";
      return false;
    }

    if(!res)
    {
        document.getElementById("erremail").innerHTML="*Email format is not correct";
        return false; 
    }

    if (uname == "" ) 
    {
        document.getElementById("erruname").innerHTML="*Please fill out username";
        return false;
    }

    if ( age == "")
    {
        document.getElementById("errage").innerHTML="*Please fill out age";
        return false;
    }

    if (document.getElementById("gender1").checked == false &&  document.getElementById("gender2").checked == false)
    {
      document.getElementById("errgender").innerHTML="*Please select gender";
      return false;
    }

    if ( phn.length < 11) {
        document.getElementById("errphn").innerHTML="*Please enter valid phone no";
        return false;
      }
   
    if (add == "" ) {
        document.getElementById("erradd").innerHTML="*Please fill out address";
         return false;
       }
    if ( pass.length < 5) {
        document.getElementById("errpass").innerHTML="*Please enter valid password";
        return false;
      }
   
  }