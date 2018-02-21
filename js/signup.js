(function($) {
    "use strict"; // Start of use strict
 
 
    var email = $('#email').val();
   var  password = $('#password').val();
   var confirm_password = $('#password_two').val();
    var phoneNo = $('#phoneNo_id').val();
    var usertype = $('input[name=usertype]:checked').val(); 



    $("#email").keyup(function(){
        var str = $("#email").val().trim();
        
        var regex = '^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$';
        
             var value = str.match(regex);
            console.log(value);

        });
    

        $("#password_two").keyup(function(e){
            var str = $("#password").val().trim();
            //var patt = new RegExp("e");
            var teststring = $("#"+e.target.id).val();
              //   var value = teststring.test(str);
                console.log(teststring);
    
            });
        
    

            function testpassword(){
                
            }

$("#Signup_dbtn").on("click", function(){

    $("#registrationform").preventDefault();
        


    
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
