
		function show_records()
		{
			var bg = document.getElementById("bg").value;
			var gen = document.getElementById("gen").value;
			var branch = document.getElementById("branch").value;
      var p= document.getElementById('p');
			if(bg == "")
			{
                    document.getElementById("bgsel").innerHTML = "Please select Blood Group";
                    p.innerHTML = "";
			}
			else
			{
				ajaxRequest = new XMLHttpRequest();
            
            ajaxRequest.onreadystatechange = function()
                                             {
                                               if(ajaxRequest.readyState == 4)
                                               {
                                                   p.innerHTML = ajaxRequest.responseText;
              
                                               }
                                             }

              queryString = "?bg=" + bg + "&gen=" + gen + "&branch=" + branch;
             ajaxRequest.open("GET","records.php" + queryString,true);        
           ajaxRequest.send(null);
			}

			
		}
