

 function show(){
    

        var x=document.getElementById('psw');
       
        if (x.type==="password"){
            x.type="text";
          
        
                 document.getElementById('fa-eye').style.display="block";
             document.getElementById('fa-eye-slash').style.display="none";
        }else{
              x.type="password";
           
            document.getElementById('fa-eye-slash').style.display="block";
             document.getElementById('fa-eye').style.display="none";
        }
        
    }

  function slogpass(){
    

        var x=document.getElementById('psw');
       
        if (x.type==="password"){
            x.type="text";
          
        
                 document.getElementById('fa-eye').style.display="block";
             document.getElementById('fa-eye-slash').style.display="none";
        }else{
              x.type="password";
           
            document.getElementById('fa-eye-slash').style.display="block";
             document.getElementById('fa-eye').style.display="none";
        }
        
    }
