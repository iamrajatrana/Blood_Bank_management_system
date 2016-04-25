 function updateRecords()
       {
             roll_no = document.getElementById("roll").value;
              name = document.getElementById("username").value; 
              blood_grp = document.getElementById("bg").value; 
              gender = document.getElementById("gender").value; 
              mobile = document.getElementById("mob").value; 
              cur_year = document.getElementById("year").value; 
              branch = document.getElementById("branch").value; 
              stat= document.getElementById("status");
              if(roll_no == "" || name == "" || blood_grp== "" || gender == "" || mobile == "" || cur_year == "" || branch == "")
              {
                stat.innerHTML = "Fill all fields";
              }
              else
              {
                
            ajaxRequest = new XMLHttpRequest();
            stat.innerHTML = "Sending Data ...";
            ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   stat.innerHTML = ajaxRequest.responseText;
                                                   setTimeout(function(){
                                                           document.getElementById("roll").disabled = false;
                                                           stat.innerHTML="";
                                                           document.getElementById("rollstatus").innerHTML = "";
                                                           blood_grp.value="";
                                                           gender.value = "";
                                                           cur_year.value = "";
                                                           branch.value = "";
                                                           document.getElementById("orig").style.display = "none";
                                                           document.getElementById("fs").style.display = "block";
                                                    },2000);
              
                                               }
                                             }
             
        
                       queryString = "?roll_no=" + roll_no + "&name=" + name + "&blood_grp=" + blood_grp + "&gender=" + gender + "&mobile=" + mobile + "&cur_year=" + cur_year + "&branch=" + branch;

                       ajaxRequest.open("GET","update_record_real.php" + queryString,true);        
                       ajaxRequest.send(null);
              }
            
          
       } 

      function checkrollno()
      { 
         var u =document.getElementById("roll").value; 
         var rollstat = document.getElementById("rollstatus");
         if(u != "")
         { 
                 var rollstat = document.getElementById("rollstatus");
                 rollstat.innerHTML = 'checking ...'; 
                 ajaxRequest = new XMLHttpRequest();
                 ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   
                                                     
                                                    if(ajaxRequest.responseText == "use")
                                                    {
                                                      rollstat.innerHTML = "User exists. you can update";
                                                      document.getElementById("fs").style.display = "none";
                                                      document.getElementById("orig").style.display = "block";
                                                      document.getElementById("roll").disabled = "disabled";

                                                    }
                                                          
                                                    else if(ajaxRequest.responseText == "ok")
                                                    {
                                                          rollstat.innerHTML = "User doesn't exist.You can't update";
                                                          
                                                    }
                                                    else if(ajaxRequest.responseText == "Invalid")
                                                    {
                                                      rollstat.innerHTML = "Invalid entry.You can't update";
                                                    }

                                               }
                                             }

                    queryStr = "?u=" + u;
                    ajaxRequest.open("GET","checkuser.php" + queryStr,true);  
                    ajaxRequest.send(null); 
          }
          else
            rollstat.innerHTML = "Enter field";
      } 

