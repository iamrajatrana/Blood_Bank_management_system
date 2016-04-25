
function call_time()
{
  setTimeout(function(){
                        var stat = document.getElementById("status");
                        var status1 = document.getElementById("status1");
                      stat.innerHTML = "";
                      status1.innerHTML = "";
             },2000);
}

function checkrollno()
      { 
         var u =document.getElementById("roll").value; 
         if(u != "")
         { 
                 var stat = document.getElementById("status");
                 var del = document.getElementById("del");
                 var roll = document.getElementById("roll");
                 stat.innerHTML = 'checking ...'; 

                 ajaxRequest = new XMLHttpRequest();
                 ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   if(ajaxRequest.responseText == "ok")
                                                   {
                                                       stat.innerHTML = "<strong style='color:red;'>Student Data not Available. Can't Delete</strong>";
                                                       del.style.opacity ="0.4";
                                                       del.disabled = true;
                                                        roll.disabled = false;
                                                        
                                                        
                                                   } 
                                                   else if(ajaxRequest.responseText == "use")
                                                   {
                                                       stat.innerHTML = "<strong style='color:green; margin-left:60px;'>Student Data Exists. Can Delete</strong>";
                                                       del.disabled = false;
                                                       del.style.opacity ="1";
                                                       roll.disabled = true;
                                                       

                                                   }
                                                   else
                                                   {
                                                    
                                                       stat.innerHTML = "<strong style='color:red;'>Roll Number is Invalid</strong>";
                                                       del.disabled = true;
                                                        roll.disabled = false;
                                                       del.style.opacity ="0.4";
                                                       
                                                   }

              
                                               }
                                             }

                    queryStr = "?u=" + u;
                    ajaxRequest.open("GET","checkuser.php" + queryStr,true);  
                    ajaxRequest.send(null); 
          }
      } 


function resett()
{
     var roll = document.getElementById("roll");
     var status = document.getElementById("status");
     var del = document.getElementById("del");
     del.disabled = true;
     del.style.opacity = "0.4";
     status.innerHTML  = "";
     roll.disabled = false;
}


 function deleteRecords()
 {
        
        var yes = document.getElementById("yes");
        var no = document.getElementById("no");
        var scroll = document.getElementById("scroll");
        var stat = document.getElementById("status0");
       

        ajaxRequest = new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function()
        {
           if(ajaxRequest.readyState == 4)
           {
              stat.innerHTML = "Successfully Deleted All Records of Final and Superfinal Year";
                setTimeout(function(){
                      
                stat.innerHTML = "";
              
                },2000);
               
              
           }

        }
        ajaxRequest.open("GET","delete_year.php",true);        
        ajaxRequest.send(null);
      
      
        
 }


 function delete_single_record()
 {
       var roll = document.getElementById("roll");
       var status = document.getElementById("status");
       var status1 = document.getElementById("status1");
       var del = document.getElementById("del");
       ajaxRequest = new XMLHttpRequest();
       ajaxRequest.onreadystatechange = function()
                                        {
                                             if(ajaxRequest.readyState == 4)
                                             {
                                                 if( ajaxRequest.responseText == "del")
                                                  {
                                                    status1.innerHTML = "<strong style = 'color:#009900;'>Data Deleted Successfully</strong>";
                                                    roll.disabled = false;
                                                    del.disabled = true;
                                                    del.style.opacity = "0.4";

                                                    call_time();


                                                  }
                                                  else if( ajaxRequest.responseText == "nodel")
                                                  {
                                                    status1.innerHTML = "<strong style = 'color:red;'>Can\'t Delete.</strong>";
                                                  }
                                                  else if( ajaxRequest.responseText == "enum")
                                                  {
                                                    status1.innerHTML = "<strong style = 'color:red;'>Enter valid Roll No</strong>";
                                                  }
                                                  else
                                                  {
                                                    status1.innerHTML = "<strong style = 'color:red;'>Something went wrong. Try Later</strong>";
                                                  }
                                             }
                                        }

        var queryString = "?roll=" + roll.value;
        ajaxRequest.open("GET","delete_single.php" + queryString,true);        
        ajaxRequest.send(null);
 }


function show()
{
    var scroll = document.getElementById("scroll");
    scroll.style.display = "block"; 
    var yes = document.getElementById("yes");
    var no = document.getElementById("no");
    yes.checked = true;  
    no.checked = false;   
}

function dontshow()
{
    var scroll = document.getElementById("scroll");
    scroll.style.display = "none"; 
    var yes = document.getElementById("yes");
    var no = document.getElementById("no");
    yes.checked = false;  
    no.checked = true;     
}

