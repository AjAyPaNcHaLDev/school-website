

    function checkdata(){
        
   
        var p1=document.getElementById('psw').value;
        var p2=document.getElementById('repsw').value;


    }


    function show(){
        var x=document.getElementById('psw');
        var y=document.getElementById('repsw');
        if (x.type==="password"){
            x.type="text";
            y.type="text";
        
                 document.getElementById('fa-eye').style.display="block";
             document.getElementById('fa-eye-slash').style.display="none";
        }else{
              x.type="password";
            y.type="password";
            document.getElementById('fa-eye-slash').style.display="block";
             document.getElementById('fa-eye').style.display="none";
        }
        
    }


    function matchpass(){
   var p1=document.getElementById('psw').value;
        var p2=document.getElementById('repsw').value;
       if (p1.length=null) {
   document.getElementById('pass').innerHTML="empty";
          document.getElementById('pass').style.color="red";
}
      if(p1!=p2){

 
 document.getElementById('pass').innerHTML="password miss match";
          document.getElementById('pass').style.color="red";        
          
      }else{
          
           document.getElementById('pass').innerHTML=" same password";
             document.getElementById('pass').style.color="green"; 
    }

    }


                       function matchanswer(){
   var p1=document.getElementById('answer').value;
        var p2=document.getElementById('answer1').value;
if (p1.length=null) {
   document.getElementById('ans').innerHTML="empty";
          document.getElementById('ans').style.color="red";
}
      if(p1!=p2){
 document.getElementById('ans').innerHTML="answer miss match";
          document.getElementById('ans').style.color="red";        
          
      }else{
          
           document.getElementById('ans').innerHTML="answer same";
             document.getElementById('ans').style.color="green"; 
    }

    }


                       function mq(){
   var p1=document.getElementById('q1').value;
        var p2=document.getElementById('q2').value;
if (p1.length=null) {
   document.getElementById('ques').innerHTML="empty";
          document.getElementById('ques').style.color="red";
}
      if(p1!=p2){
 document.getElementById('ques').innerHTML="Question  miss match";
          document.getElementById('ques').style.color="red";        
          
      }else{
          
           document.getElementById('ques').innerHTML="Question same";
             document.getElementById('ques').style.color="green"; 
    }

    }

     function sregpass(){
   var p1=document.getElementById('q1').value;
        var p2=document.getElementById('q2').value;
if (p1.length=null) {
   document.getElementById('ques').innerHTML="empty";
          document.getElementById('ques').style.color="red";
}
      if(p1!=p2){
 document.getElementById('ques').innerHTML="Question  miss match";
          document.getElementById('ques').style.color="red";        
          
      }else{
          
           document.getElementById('ques').innerHTML="Question same";
             document.getElementById('ques').style.color="green"; 
    }

    }


