(function($) {
    "use strict"; // Start of use strict
 



$("#Signup_btn").on("click", function(){


        


    
    var email = $('#email').val();
   var  password = $('#password').val();
   var confirm_password = $('#password_two').val();
    var phoneNo = $('#phoneNo_id').val();
    var usertype = $('input[name=usertype]:checked').val(); 
    if((email) && (password) && (phoneNo) && (usertype)){

    if (confirm_password == password){
                if((email == "admin@questmart.com") && (password == "admin")){

                    alert("admin logged in successfully");
                    document.cookie = "username=admin";
                    window.location.href = "home.html";

                } else 
                if((email == "user@questmart.com") && (password == "user")){

                    alert("user logged in successfully");
                    document.cookie = "username=user";
                    window.location.href = "home.html";

                }
                else{
                    alert("User name or password incorrect");
                }

            }
            else{
                alert("Password must match verification password ");
            }
        }else{
            alert("All fields are required ");
        }
/*

    if((email) && (password) && (phoneNo) && (usertype)){
        if (confirm_password == password){
            if($('#password').val().length < 8){


        
                $.ajax({
                    type: "POST",
                    url: "php/registration.php",
                    data:{"email":email,"password":password,"phoneNo":phoneNo_id,"usertype":usertype},
                    dataType: "json",
                    success:function(data){

                        console.log(data);

                        window.location.href = "home.html";
                        
                        
                    },
                    error:function(e){
                            console.log(e.responseText);
                    }
            
                    
                    
                 });
               
        
                }else{
                    alert("Password must be atleast 8 characters ");
                }
          
        }else{
            alert("Password must match verification password ");
        }
     


    }else{
        alert("All fields are required ");
    }

    */

})




})(jQuery); // End of use strict
