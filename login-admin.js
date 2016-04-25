  function start_sess()
     {
          var user = document.getElementById("userid").value;
          var p = document.getElementById("passid").value;
          var  stat = document.getElementById("stat");
          var vu = document.getElementById("valid_user");
          var vp =document.getElementById("valid_pass");
          var log = document.getElementById("log");
          var status = document.getElementById("status3");
          var forgot_form = document.getElementById("forgot_form");
          var blood = document.getElementById("blood");
          var h = document.getElementById("header");
          if(user == "" && p == "")
          {
              stat.innerHTML = "Fill both fields";
          }
          else if(user == "")
          {
          	vu.innerHTML = "Missing Username";
          	stat.innerHTML = "";
          }
          else if( p == "")
          {
          	vp.innerHTML = "Missing Password";
          	stat.innerHTML = "";
          }
          else
          {
          	     ajaxRequest = new XMLHttpRequest();
                 ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   if(!(ajaxRequest.responseText == "Invalid username or password"))
                                                   	{
                                                   		status.innerHTML = ajaxRequest.responseText;
                                                        vu.innerHTML  = "";
                                                        vp.innerHTML = "";
                                                        log.style.display = "none";
                                                        blood.style.display = "none";
                                                        h.style.display ="none";
                                                        forgot_form.style.display ="none";
                                                    }
                                                    else
                                                    {
                                                    	log.style.display = "block";
                                                      h.style.display = "block";
                                                      blood.style.display = "block";
                                                    	stat.innerHTML = "Invalid Username or Password";
                                                    }
                                               }
                                             }

                    queryStr = "?u=" + user + "&p=" + p;
                    ajaxRequest.open("GET","login.php" + queryStr,true);  
                    ajaxRequest.send(null);
          }
     }

     function check_my_username()
     {
          var valid_user1 = document.getElementById("valid_user1");
          var u = document.getElementById("userid1").value;
          var answer = document.getElementById("answer");
          var click = document.getElementById("click");
          var check = document.getElementById("check");
           if(u != "")

         { 
                 
                 valid_user1.innerHTML = 'checking ...'; 
                 ajaxRequest = new XMLHttpRequest();
                 ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                  if(ajaxRequest.responseText =="Not Admin")
                                                  {
                                                      click.style.opacity = "0";
                                                      valid_user1.innerHTML = "You are not an Admin";
                                                  }
                                                  else
                                                  {
                                                    click.innerHTML = ajaxRequest.responseText;
                                                   valid_user1.innerHTML = "Ok, you are an Admin";
                                                   click.style.opacity = "1";
                                                  }
                                                   
                                             }}

                    queryStr = "?u=" + u;
                    ajaxRequest.open("GET","check_my_username.php" + queryStr,true);  
                    ajaxRequest.send(null); 
          }
          else
          {
                  valid_user1.innerHTML = "Fill this Field";
          }

     }

     function forgot_password()
     {
          var forgot_form = document.getElementById("forgot_form");
          forgot_form.style.display  = "block";
     }

     function reset_password()
     {
              var answ1 = document.getElementById("answ1").value;
              var answ2 = document.getElementById("answ2").value;
              var u = document.getElementById("userid1").value;
              var pass_new = document.getElementById("pass_new").value;
              var upstat = document.getElementById("upstat");
            
              if(answ1 == "" && answ2 == "" && pass_new == "")
              {
                    upstat.innerHTML = "Fill All the Fields";
              }
              else
              {
                    ajaxRequest = new XMLHttpRequest();
                    ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                        if(ajaxRequest.responseText == "s")
                                                        {
                                                          upstat.innerHTML = "Congrats,You Have changed your Password";
                                                        } 
                                                        else if( ajaxRequest.responseText == "f" || ajaxRequest.responseText == "fail")
                                                        {
                                                          upstat.innerHTML =  "Something Went Wrong. Try Later";
                                                        }
                                                        else if(ajaxRequest.responseText == "donotmatch")
                                                        {
                                                          upstat.innerHTML = "Incorrect Answers. Try Again";
                                                        }

                                               }
                                             }
                     queryStr = "?u=" + u + "&answ1=" + answ1 + "&answ2=" + answ2 + "&pass_new=" + pass_new;
                     ajaxRequest.open("GET","reset_password.php" + queryStr,true);
                     ajaxRequest.send(null);

              }


     }


  function saveQuestions()
          {

               var ques1 = document.getElementById("ques1").value;
               var ans1 = document.getElementById("ans1").value;
               var ques2 = document.getElementById("ques2").value;
               var ans2 = document.getElementById("ans2").value;
               var ans1_stat = document.getElementById("ans1_stat");
               var ans2_stat = document.getElementById("ans2_stat");
               var statusq1 = document.getElementById("statusq1");
               var statusq2 = document.getElementById("statusq2");
               var totstat = document.getElementById("totstat");
              var pass = document.getElementById("pass").value;
              var pass1 = document.getElementById("pass1");
              var usrname = document.getElementById("usrname").innerHTML;
              
              if(ques1 == "" && ques2 == "" && ans2 == "" && ans1 == "")
              {
                totstat.innerHTML = "Fill All Fields";
              }
              else if( ques1 == "" && ques2 == "")
              {
                    totstat.innerHTML = "Please select both Question";
                    ans1_stat.innerHTML = "";
                    ans2_stat.innerHTML = "";
                    statusq1.innerHTML = "";
                    statusq2.innerHTML = "";
              }
               else if( ques1 == "")
               {
                     statusq1.innerHTML = "Please select this Question";
                     ans1_stat.innerHTML = "";
                     ans2_stat.innerHTML = "";
                     totstat.innerHTML = "";
                     statusq2.innerHTML = "";
               }
               else if( ques2 == "")
               {
                    statusq2.innerHTML = "Please select this Question";
                    ans1_stat.innerHTML = "";
                    ans2_stat.innerHTML = "";
                    totstat.innerHTML = "";
                    statusq1.innerHTML = "";
               }
               else if (ans1 == "" && ans2 == "")
               {
                   totstat.innerHTML = "Answer Both Questions";
                   ans1_stat.innerHTML = "";
                    ans2_stat.innerHTML = "";
                    statusq1.innerHTML = "";
                    statusq2.innerHTML = "";
               }
               else if(ans1 == "")
               {
                   ans1_stat.innerHTML = "Please Write your Answer"
                   statusq1.innerHTML = "";
                   statusq2.innerHTML = "";
                   totstat.innerHTML = "";
                   ans2_stat.innerHTML = "";

               }
               else if(ans2 == "")
               {
                  ans2_stat.innerHTML = "Please Write your Answer";
                  statusq1.innerHTML = "";
                   statusq2.innerHTML = "";
                   totstat.innerHTML = "";
                   ans1_stat.innerHTML = "";
               }
               else if(pass == "")
               {
                  pass1.innerHTML = "Type Password";
               }
               else
               {

                       ajaxRequest = new XMLHttpRequest();
                       totstat.innerHTML = "Processing....";
                       ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   totstat.innerHTML = ajaxRequest.responseText;
              
                                               }
                                             }
                      queryString = "?ques1=" + ques1 + "&ques2=" + ques2 + "&ans1=" + ans1 + "&ans2=" + ans2 + "&usrname=" + usrname + "&pass=" + pass;

                      ajaxRequest.open("GET","addQues.php" + queryString,true);        
                      ajaxRequest.send(null);
               }
                  

          }
