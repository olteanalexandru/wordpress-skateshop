


   


   
function myFunction() {
    var element = document.body;
    
    element.classList.toggle("dark-mode" );
    var cv = document.getElementById("wrapper");
    cv.classList.toggle("dark-mode2");
    var cv2 = document.getElementById("menudark");
       
    
    
    
    
    
    
     cv2.classList.toggle("dark-mode");
     cv2.classList.replace('Dark','Light'); 

     var x = document.getElementById("buttondark");
     if (x.innerHTML === "Light Mode") {
       x.innerHTML = "Dark Mode";
     } else {
       x.innerHTML = "Light Mode";
     }
  }


