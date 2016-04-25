  function addRecords()
        {
            roll_no = document.getElementById("roll").value; 
              name = document.getElementById("username").value; 
              blood_grp = document.getElementById("bg").value; 
              gender = document.getElementById("gender").value; 
              mobile = document.getElementById("mob").value; 
              cur_year = document.getElementById("year").value; 
              branch = document.getElementById("branch").value; 

            stat= document.getElementById("status");

            if(roll_no == "" || name == "" || blood_grp == "" || gender == "" || mobile == "" || cur_year == "" || branch == "")
            {
                 stat.innerHTML = "Please Fill All the fields";
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
              
                                               }
                                             }
              roll_no = document.getElementById("roll").value; 
              name = document.getElementById("username").value; 
              blood_grp = document.getElementById("bg").value; 
              gender = document.getElementById("gender").value; 
              mobile = document.getElementById("mob").value; 
              cur_year = document.getElementById("year").value; 
              branch = document.getElementById("branch").value; 
        
           queryString = "?roll_no=" + roll_no + "&name=" + name + "&blood_grp=" + blood_grp + "&gender=" + gender + "&mobile=" + mobile + "&cur_year=" + cur_year + "&branch=" + branch;

           ajaxRequest.open("GET","add_entry_real.php" + queryString,true);        
           ajaxRequest.send(null);
           setTimeout(function(){
               document.getElementById("ajaxform").reset();
               stat.innerHTML="";
               document.getElementById("rollstatus").innerHTML = "";
               blood_grp.value="";
               gender.value = "";
               cur_year.value = "";
               branch.value = "";
           },2000);

            }
            
           
      }


      function checkrollno()
      { 
         var u =document.getElementById("roll").value; 
         if(u != "")
         { 
                 var rollstat = document.getElementById("rollstatus");
                 var submit = document.getElementById("sub");
                 rollstat.innerHTML = 'checking ...'; 
                 ajaxRequest = new XMLHttpRequest();
                 ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   if(ajaxRequest.responseText == "ok")
                                                   {
                                                       rollstat.innerHTML = "Roll no is OK";
                                                       submit.style.opacity ="1";
                                                       submit.disabled = false;
                                                   } 
                                                   else if(ajaxRequest.responseText == "use")
                                                   {
                                                       rollstat.innerHTML = "Roll no already Exists. Either delete or update";
                                                       submit.disabled = true;
                                                       submit.style.opacity ="0.4";
                                                   }
                                                   else
                                                   {
                                                    
                                                       rollstat.innerHTML = "Roll no is Invalid";
                                                       submit.disabled = true;
                                                       submit.style.opacity ="0.4";
                                                   }

              
                                               }
                                             }

                    queryStr = "?u=" + u;
                    ajaxRequest.open("GET","checkuser.php" + queryStr,true);  
                    ajaxRequest.send(null); 
          }
      } 

