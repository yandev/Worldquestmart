(function($) {
    "use strict"; // Start of use strict
 



$(".suscriptions").on("click", function(e){

       var value = document.getElementById(e.target.id).innerHTML.trim();
   
       if(value ===  "Subscribe"){
        
        
        document.getElementById(e.target.id).innerHTML = "Subscribed";

        
       }
        


})




})(jQuery); // End of use strict
